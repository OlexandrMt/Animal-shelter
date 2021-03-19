<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Animal;
use App\Models\Shelter;
use App\Notifications\WantToTake;
use Illuminate\Support\Facades\Notification;
use Illuminate\Database\Eloquent\Collection;


class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if(Auth::check()){
        $user = User::find(Auth::user()->id);
      }
      else{
        return redirect()->back()->withErrors(['Потрібно авторизуватися, щоб мати можливість перегляду повідомлень']);
      }

      $notifications = $user->notifications;

      return view('notifications/index', ['notifications' => $notifications]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notifications/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeNotification(Request $request)
    {
      $user = Animal::find($request->animal_id);
      $user = Shelter::find($user->shelter_id);
      $user = User::find($user->user_id);

//спросить за поиск по коллекциям и белонгс ту

      Notification::send($user, new WantToTake($request));

      return redirect()->route('notifications.index');
    }

    public function deleteNotification(Request $request)
    {
      auth()->user()
          ->notifications()
          ->when($request->input('id'), function ($query) use ($request) {
              return $query->where('id', $request->input('id'));
          })
          ->delete();

      return response()->noContent();
    }
    public function markNotification(Request $request)
    {
       // dd($request);
       // console.log('error');
        auth()->user()
            ->unreadNotifications
            ->when($request->input('id'), function ($query) use ($request) {
                return $query->where('id', $request->input('id'));
            })
            ->markAsRead();

        return response()->noContent();
    }
}
