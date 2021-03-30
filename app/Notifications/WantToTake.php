<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WantToTake extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
     public function routeNotificationForMail($notification)
    {
        // Return email address only...

        // Return email address and name...
//        return [$this->email_address => $this->name];
    }
    public function toMail($notifiable)
    {
      $name = $this->request->name;
      $email = $this->request->email;
      $phone = $this->request->phone;
      $notes = $this->request->notes;
      $animal_id = $this->request->animal_id;
        return (new MailMessage)

                    ->line("У Вас нове повідомлення від $name.")
                    ->line("$phone")
                    ->line("$email")
                    ->line("$notes")
                    ->line("127.0.0.1:8000/animals/$animal_id");

    }


    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
     public function toDatabase($notifiable)
     {
       // return dd(request());
         return [

             'name' => $this->request->name,
             'email' => $this->request->email,
             'phone' => $this->request->phone,
             'notes' => $this->request->notes,
             'animal_id' => $this->request->animal_id,
         ];
     }
    public function toArray($notifiable)
    {
        return [
          //
        ];
    }
}
