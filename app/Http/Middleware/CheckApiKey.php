<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckApiKey
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $apiKey = $request->header('X-API-KEY');

        if ($apiKey !== "ZNS3NGASLXQ") {
            return response()->json([
                'massage' => 'Akses ditolak! API Key tidak sesuai atau tidak ada.'
            ]. 401);
        }
        
        return response()->json($request);
    }
}
