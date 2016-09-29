<?php

namespace App\Http\Middleware;

use Closure;

class UserCheck
{
	/**
	* Handle an incoming request.
	*
	* @param  \Illuminate\Http\Request  $request
	* @param  \Closure  $next
	* @return mixed
	*/
	public function handle($request, Closure $next){
		$user = $request->user();

		if( $user && $user->type == 'user'){
			return $next($request);
		}

		return 'Yes, you are a user';
	}
}
