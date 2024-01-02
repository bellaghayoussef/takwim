<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Evaluation;
use App\Models\Evaluator;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;

class EvaluationsController extends Controller
{

    /**
     * Display a listing of the evaluations.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if(auth()->user()->hasRole('admin')){
            $evaluations = Evaluation::with('user','evaluator')->paginate(25);
        }elseif(auth()->user()->hasRole('administration') || auth()->user()->hasRole('responsible')|| auth()->user()->hasRole('Higher Management')){
            $evaluations = Evaluation::where('evaluator_id',auth()->user()->id)->with('user','evaluator')->paginate(25);
        }elseif(auth()->user()->hasRole('user')){
            $evaluations = Evaluation::where('user',auth()->user()->id)->with('user','evaluator')->paginate(25);
        }elseif(auth()->user()->hasRole('Department of Legal Affairs')){
            $evaluations = Evaluation::where('etat','1')->with('user','evaluator')->paginate(25);
        }


        return view('evaluations.index', compact('evaluations'));
    }

    /**
     * Show the form for creating a new evaluation.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {

        $users = User::pluck('firstnamear','id')->all();

        return view('evaluations.create', compact('users'));
    }

    /**
     * Store a new evaluation in the storage.
     *
     *
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {

            $data = $this->getData($request);

            Evaluation::create($data);

            return redirect()->route('evaluations.evaluation.index')
                ->with('success_message', trans('evaluations.model_was_added'));
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => trans('evaluations.unexpected_error')]);
        }
    }

    /**
     * Display the specified evaluation.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $evaluation = Evaluation::with('user')->findOrFail($id);

        return view('evaluations.show', compact('evaluation'));
    }

    /**
     * Show the form for editing the specified evaluation.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $evaluation = Evaluation::findOrFail($id);
        $users = User::pluck('firstnamear','id')->all();

        return view('evaluations.edit', compact('evaluation','users'));
    }


    public function update($id, Request $request)
    {
        try {

            $data = $this->getData($request);

            $evaluation = Evaluation::findOrFail($id);
            $evaluation->update($data);

            return redirect()->route('evaluations.evaluation.index')
                ->with('success_message', trans('evaluations.model_was_updated'));
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => trans('evaluations.unexpected_error')]);
        }
    }


    public function destroy($id)
    {
        try {
            $evaluation = Evaluation::findOrFail($id);
            $evaluation->delete();

            return redirect()->route('evaluations.evaluation.index')
                ->with('success_message', trans('evaluations.model_was_deleted'));
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => trans('evaluations.unexpected_error')]);
        }
    }



    protected function getData(Request $request)
    {
        $rules = [
                'title' => 'string|min:1|max:255|nullable',
            'post' => 'string|min:1|nullable',
            'notes' => 'string|min:1|max:1000|nullable',
            'etat' => 'string|min:1|nullable',
            'rating' => 'string|min:1|nullable',
            'user_id' => 'nullable',
        ];

        $data = $request->validate($rules);
$data['evaluator_id']= auth()->user()->id;

        return $data;
    }

}
