<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AdminUser;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filters = $request->only(['role', 'search']);
        $listAllUsers = AdminUser::FilterUsersAdmin($filters)->paginate(12)->appends($filters);
        return view("admin.users.userlist", compact("listAllUsers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = Adminuser::findOrFail($id);

        return view("admin.users.edit", compact("user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = AdminUser::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'nullable|numeric',
            'address' => 'nullable|string|max:255',
            'birthdate' => 'nullable|date',
            'gender' => 'nullable|string',
            'role' => 'required|in:0,1,2',
        ]);
        $user->update($request->all());

        return redirect()->route('users.edit', $user->id)->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = AdminUser::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('successDeleteUser', 'Tài khoản đã được xóa!');
    }
}
