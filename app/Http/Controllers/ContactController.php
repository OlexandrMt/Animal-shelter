<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Mail;
use App\Notifications\ContactAnimalNotification;
use App\Models\User;
use App\Models\Shelter;
use App\Mail\ContactDevelopersMail;

class ContactController extends Controller
{

	 public function contactAnimal(Request $request){

		 $request->validate([
				'message' => 'string'
        ]);

		 $data = [
		 	"sender_id" => Auth::user()->id,
			"animal_id" => $request->animalId,
			"message" => $request->message,
		 ];

		 $user = User::find(Shelter::where("id", $request->shelterId)->pluck("user_id"));

		 Notification::send($user, new ContactAnimalNotification($data));

		 return back()->with("showNotification", "true");
	 }

	 public function contactDevelopers(Request $request){
		 $request->validate([
			"message"=>"string:1000",
			"email"=>"email",
			"username"=>"string|min:3|max:255"
		 ]);

		 $data = $request->all();

		 Mail::to(env('MAIL_USERNAME'))->send(new ContactDevelopersMail($data));

		 return redirect("/");
	 }

	 public function show(){
		 return view("components.contact.contactDevelopers");
	 }
}
