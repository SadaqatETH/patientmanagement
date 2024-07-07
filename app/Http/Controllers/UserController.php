<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //

    public function profile()
    {

        return view('users.profile');
    }


    public function updatePassword(Request $request)
    {
        // Validate the request data
        // Validate the request data
        $request->validate([
            'current_password' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'], // 'confirmed' ensures password_confirmation field matches
        ]);

        // Get the authenticated user
        $user = auth()->user();

        // Verify if the current password matches the one in the database
        if (!Hash::check($request->current_password, $user->password)) {
            return response()->json(['error' => 'The current password is incorrect.'], 422);
        }

        // Hash the new password
        $user->password = Hash::make($request->password);

        // Save the updated password
        $user->save();

        // Return success response
        return response()->json(['message' => 'Password updated successfully'], 200);
    }

}
