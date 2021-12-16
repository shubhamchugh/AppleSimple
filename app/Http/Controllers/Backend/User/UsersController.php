<?php

namespace App\Http\Controllers\Backend\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Backend\BackendController;

class UsersController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "/", 'name' => "Page"], ['name' => "Test Page"],
        ];

        $users      = User::orderBy('name')->paginate($this->limit);
        $usersCount = User::count();

        return view("backend.content.user.index", [
            'breadcrumbs' => $breadcrumbs,
            'users'       => $users,
            'usersCount'  => $usersCount,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        return view("backend.content.users.create", compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data             = $request->all();
        $data['password'] = Hash::make($data['password']);
        User::create($data);

        return redirect("user")->with("message", "New user was created successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view("backend.user.edit", compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\User\UserUpdateRequest $request, $id)
    {
        User::findOrFail($id)->update($request->all());

        // return redirect("/backend/users")->with("message", "User was updated successfully!");
        return redirect()->route('user.edit', $id)->with('message', 'User was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $deleteOption = $request->delete_option;
        $selectedUser = $request->selected_user;

        if ("delete" == $deleteOption) {
            // delete user posts
            $user->posts()->withTrashed()->forceDelete();
        } elseif ("attribute" == $deleteOption) {
            $user->posts()->update(['author_id' => $selectedUser]);
        }

        $user->delete();

        return redirect("users")->with("message", "User was deleted successfully!");
    }

    public function confirm(Requests\User\UserDestroyRequest $request, $id)
    {
        $user  = User::findOrFail($id);
        $users = User::where('id', '!=', $user->id)->pluck('name', 'id');

        return view("backend.user.confirm", compact('user', 'users'));
    }
}
