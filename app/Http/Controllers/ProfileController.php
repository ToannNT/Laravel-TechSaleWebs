<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use App\Models\User; // Import User model

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */

    public function index()
    {
        $user = Auth::user();
        if ($user) {
            return view("clients.profile", compact("user"));
        } else {
            return back()->with("error", "Vui lòng đăng nhập");
        }
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            'birthdate' => 'nullable|date',
            'gender' => 'nullable|string|max:10',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('profile_picture')) {
            // Xóa ảnh cũ nếu có
            if ($user->profile_picture && File::exists(public_path('images/user/' . $user->profile_picture))) {
                File::delete(public_path('images/user/' . $user->profile_picture));
            }

            $file = $request->file('profile_picture');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/user'), $filename);
            $user->profile_picture = $filename;
        }

        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->birthdate = $request->input('birthdate');
        $user->gender = $request->input('gender');
        $user->email = $request->input('email');
        // Kiểm tra lại object $user
        if ($user instanceof User) {
            $user->save();
        } else {
            return back()->with('error', 'User instance is invalid.');
        }

        return back()->with('success', 'Profile updated successfully.');
    }
}
