<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    protected function sendResetResponse(Request $request, $respponse)
    {
        return response()->json(['status' => trans($respponse)], 200);
    }

    protected function sendResetFailedResponse(Request $request, $respponse)
    {
        return response()->json(['email' => trans($respponse)], 422);
    }
}
