<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        VerifyEmail::toMailUsing(function ($notifiable, $url){
            $mail = new MailMessage;
            // $imgurl = asset('assets/logo-bananachat.svg');
            $mail->subject('Verificação de email');
            $mail->greeting('Fala, fiote!');
            $mail->line('Por favor clique no botão abaixo para verificar seu endereço de e-mail');
            $mail->line('[Se você não criou nenhuma conta, ignore este e-mail]');
            // $mail->line(asset('assets/logo-bananachat.svg'));
            // $mail->line(gettype(asset('assets/logo-bananachat.svg')));
            $mail->action('Verifique seu e-mail', $url);
            $mail->markdown('emails.user-registered', ['url' => $url]);
            return $mail;
        });
    }
}
