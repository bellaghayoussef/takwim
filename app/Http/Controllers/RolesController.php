<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\roles;
use Illuminate\Http\Request;
use Exception;

class RolesController extends Controller
{

    /**
     * Display a listing of the roles.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $rolesObjects = roles::with('team')->paginate(25);

        return view('roles.index', compact('rolesObjects'));
    }

    /**
     * Show the form for creating a new roles.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {


        return view('roles.create');
    }

    /**
     * Store a new roles in the storage.
     *
     *
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {

            $data = $this->getData($request);

            roles::create($data);

            return redirect()->route('roles.roles.index')
                ->with('success_message', trans('roles.model_was_added'));
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => trans('roles.unexpected_error')]);
        }
    }

    /**
     * Display the specified roles.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $roles = roles::with('team')->findOrFail($id);

        return view('roles.show', compact('roles'));
    }

    /**
     * Show the form for editing the specified roles.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $roles = roles::findOrFail($id);

        return view('roles.edit', compact('roles'));
    }

    /**
     * Update the specified roles in the storage.
     *
     * @param int $id
     *
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {

            $data = $this->getData($request);

            $roles = roles::findOrFail($id);
            $roles->update($data);

            return redirect()->route('roles.roles.index')
                ->with('success_message', trans('roles.model_was_updated'));
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => trans('roles.unexpected_error')]);
        }
    }

    /**
     * Remove the specified roles from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $roles = roles::findOrFail($id);
            $roles->delete();

            return redirect()->route('roles.roles.index')
                ->with('success_message', trans('roles.model_was_deleted'));
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => trans('roles.unexpected_error')]);
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
                'team_id' => 'nullable',
            'name' => 'required|string|min:1|max:255',
            'guard_name' => 'required|string|min:1|max:255',
        ];

        $data = $request->validate($rules);


        return $data;
    }

}
