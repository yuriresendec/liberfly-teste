<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Config;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class AuthenticationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $token = $request->bearerToken();

        $key = config('jwt.key');

        try {
            JWT::decode($token, new Key($key, 'HS256'));
            return $next($request);
        } catch (\Throwable $th) {
            return response()->json(['error' => true, 'msg' => 'Token expirado ou inválido.'], 403);
        }

    }
}