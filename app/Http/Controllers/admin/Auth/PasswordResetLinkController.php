<?php

namespace App\Http\Controllers\admin\Auth;

use App\Http\Controllers\Controller;
use App\Jobs\Sendmailjob;
use App\Models\Admin;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Notifications\ResetPassword;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): View
    {
        return view('admin.auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // Auth::shouldUse('admin');
        // dd(auth());
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        // Check email. email exist or not.

        $status=Admin::where('email','=',$request->email)->exists();
        // dd($status);
        if($status)
        {   
            Sendmailjob::dispatch($request->email);
        }
        else{
            return back()->with(['status'=>"We can't find a admin with that email address."]);
        }
    }
}
