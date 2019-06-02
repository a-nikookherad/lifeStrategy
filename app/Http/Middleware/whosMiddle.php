<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class whosMiddle
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \Closure $next
	 * @return mixed
	 */
	public function handle($request , Closure $next)
	{
		return $next($request);
		if (Auth::user()->role == "admin") {
		} else {
			return redirect()->route("login");
		}

	}
}
