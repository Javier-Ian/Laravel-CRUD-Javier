<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PasswordResetController extends Controller
{
    public function update(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        try {
            // Find the user
            $user = User::where('email', $request->email)->first();

            if (!$user) {
                return back()->withErrors([
                    'email' => 'We cannot find a user with that email address.'
                ]);
            }

            // Update the password
            DB::beginTransaction();
            
            $user->update([
                'password' => Hash::make($request->password)
            ]);

            DB::commit();

            // Log out any existing sessions
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('login')
                ->with('status', 'Password has been successfully reset! Please login with your new password.');

        } catch (\Exception $e) {
            DB::rollBack();
            \Log::error('Password reset error: ' . $e->getMessage());
            return back()->withErrors([
                'email' => 'There was an error resetting your password. Please try again.'
            ]);
        }
    }
} 