<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    protected function sendResetResponse(Request $request, $respponse)
    {
        return response()->json([['status' => trans($respponse)], 200);
    }

    protected function sendResetLinkResponse(Request $request, $response)
    {
        return response()->json(['email' => trans($respponse)], 422);
    }
}
