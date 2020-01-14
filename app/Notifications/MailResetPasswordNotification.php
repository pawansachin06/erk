<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Mail;

class MailResetPasswordNotification extends Notification {

    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
     
    
     
     
    public function __construct($token) {
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable) {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable) {
        
        // "/erkclouds/password/reset/$this->token"
        $link = url();
        print_r($link);
        exit;
        
        $admin_email = 'info@zwalletpay.com';
        return (new MailMessage)->from($admin_email)
                        ->subject('Reset your password')
                       ->view('email.reset-password', ['link' => $link, 'email' => $_POST["email"]]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable) {
        return [
                //
        ];
    }

}
