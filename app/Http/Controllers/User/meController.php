<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;

class meController extends Controller
{
    public function getme()
    {
        if (auth()->check()) {
            $user = auth()->user();
            return new UserResource($user);
        }
        return response()->json(null, 401);
    }
}
