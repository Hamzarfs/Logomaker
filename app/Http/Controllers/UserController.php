<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $roles = Role::all();
        view()->share('roles', $roles);
    }

    public function index()
    {
        $data = User::orderBy('id', 'DESC')->get();
        return view('admin.user.index', compact('data'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        // Add phone number validation
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|max:255|min:6',
            'phonenumber' => 'required|string|max:15',  // Phone number validation
            'role' => 'required'
        ]);

        // Add phone number to create method
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phonenumber' => $request->phonenumber,  // Store phone number
        ]);

        $user->assignRole($request->role);
        return redirect()->route('admin.user.index')->with('success', 'User created successfully.');
    }

    public function edit($id)
    {
        $user = User::where('id', decrypt($id))->first();
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        // Add phone number validation
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'phonenumber' => ['required', 'string', 'max:15'],  // Phone number validation
            'role' => ['required', 'string'],
        ]);

        // Find the user and update their details
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phonenumber = $request->phonenumber;  // Update phone number
        $user->save();

        $user->syncRoles($request->role);  // Sync roles
        return redirect()->route('admin.user.index')->with('success', 'User updated successfully.');
    }

    public function destroy($id)
    {
        User::where('id', decrypt($id))->delete();
        return redirect()->back()->with('success', 'User deleted successfully.');
    }
}
