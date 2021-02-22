<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{	 
	public function doRegister(Request $request){

		  $request->validate([
            'username' => 'bail|required|string|min:3|max:255|unique:users',
            'password' => 'bail|required|string|min:3|max:255',
            'email' => 'bail|required|string|email|min:3|max:255|unique:users',
				'confirmPassword' => 'same:password'
        ]);
		  $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
			
		  $user->save();
        Auth::login($user);
		  return response()->json([
			"errors" => []
		  ]);
	 }
	 
	 public function showLogin(){
		 if(!Auth::user()){
			return(view("authPage")); 
		 }
		 return redirect("/");
	 }
	 
	 public function doLogin(Request $request){
		  $request->validate([
            'username' => 'bail|required|string|min:3|max:255',
            'password' => 'bail|required|string|min:3|max:255',
        ]);

        if(!Auth::attempt($request->only("username", "password"))){
				throw ValidationException::withMessages([			  
				"general" => "User not found"
				]);

		  };
		  
		 /* If you want a user to be redirected to a specific page after he logs in,
		  * you should set intended url in your controller's method as shown below:
		  * $request->session()->put("url.intended", url("yourIntendedPage"))
		  * where "yourIntendedPage" is a url of a page you want a user to be redirected to
		  * after logging in.
		  *
		  * If intended url is not set, a user will be redirected to the root ("/") of the site
		  */
		  
		  $intendedUrl = $request->session()->get("url.intended");
		  $request->session()->regenerate();
		  
		  return response()->json([
				"intendedUrl" => $intendedUrl,
				"errors" => []
		  ]);
	 }
	 
	 public function doLogout(Request $request){
		 Auth::guard("web")->logout();
		 $request->session()->invalidate();
		 $request->session()->regenerateToken();
		 return redirect("/");
	 }
}
