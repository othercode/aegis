<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

/**
 * @package App\Http\Controllers
 */
class AuthorizationController extends Controller
{
    public function check(Request $request)
    {
        Log::info('Checking authorization with headers: ' . json_encode($request->headers->all()));
    }
}
