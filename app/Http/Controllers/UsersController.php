<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Exception;

class UsersController extends Controller
{

    /**
     * Display a listing of the users.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {

        if(auth()->user()->hasRole('admin')){
            $users = User::with('supvaser')->paginate(25);
        }elseif(auth()->user()->hasRole('administration') || auth()->user()->hasRole('responsible')|| auth()->user()->hasRole('Higher Management')){
            $users = User::where('supvaser_id',auth()->user()->id)->with('supvaser')->paginate(25);
        }elseif(auth()->user()->hasRole('user')){
            $users = User::where('id',auth()->user()->id)->with('supvaser')->paginate(25);
        }elseif(auth()->user()->hasRole('Department of Legal Affairs')){
            $users = User::with('supvaser')->paginate(25);
        }

        return view('users.index', compact('users'));
    }


    public function create()
    {
        $supvasers = User::all();

        return view('users.create', compact('supvasers'));
    }


    public function store(Request $request)
    {
        try {

            $data = $this->getData($request);

            User::create($data);

            return redirect()->route('users.user.index')
                ->with('success_message', trans('users.model_was_added'));
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => $exception->getMessage()]);
        }
    }

    /**
     * Display the specified user.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $user = User::with('supvaser')->findOrFail($id);

        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified user.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $supvasers = User::all();

        return view('users.edit', compact('user','supvasers'));
    }


    public function update($id, Request $request)
    {
        try {

            $data = $this->getData($request);

            $user = User::findOrFail($id);
            $user->update($data);

            return redirect()->route('users.user.index')
                ->with('success_message', trans('users.model_was_updated'));
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => trans('users.unexpected_error')]);
        }
    }

    /**
     * Remove the specified user from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();

            return redirect()->route('users.user.index')
                ->with('success_message', trans('users.model_was_deleted'));
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => trans('users.unexpected_error')]);
        }
    }


    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
                'firstnamear' => 'required|string',
            'lastnamear' => 'required|string',
            'firstnameen' => 'required|string',
            'lastnameen' => 'required|string',
            'phone' => 'required|string',
            'uid' => 'required|string',
            'singater' => 'nullable|string',
            'supvaser_id' => 'nullable',
            'email' => 'required|string',

            'password' => 'required|string',

        ];

        $data = $request->validate($rules);
        $base64Image = $data['singater'];
        $image = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $base64Image));

        // Generate a unique filename
        $filename = uniqid('image_') . '.' . 'png'; // You may choose another extension

        // Save the image to the public directory
        file_put_contents(public_path('uploads/' . $filename), $image);
$data['singater']= $filename;
        return $data;
    }

}
