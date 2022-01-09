<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;

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
            $mail->subject('Verificação de email');
            $mail->greeting('Fala, fiote!');
            $mail->line('Por favor clique no botão abaixo para verificar seu endereço de e-mail.');
            $mail->line('[Se você não criou nenhuma conta, ignore este e-mail]');
            $mail->action('Verifique seu e-mail', $url);
            $mail->markdown('emails.user-registered', ['url' => $url]);
            return $mail;
        });

        ResetPassword::toMailUsing(function ($notifiable, $url){
            $mail = new MailMessage;
            $mail->subject(Lang::get('Redefinição de Senha'));
            $mail->greeting(Lang::get('Fala, fiote!'));
            $mail->line(Lang::get('Por favor clique no botão abaixo para redefinir sua senha.'));
            $mail->line(Lang::get('[Se você não solicitou uma redefinição, ignore este e-mail]'));
            $mail->action(Lang::get('Redefinir senha'), url(config('app.url').route('password.reset', [$url, $notifiable->email], false)));
            $mail->line(Lang::get('Esse link irá expirar em :count minutos.', ['count' => config('auth.passwords.'.config('auth.defaults.passwords').'.expire')]));
            $mail->markdown('emails.user-resetpassword', ['url' =>  url(config('app.url').route('password.reset', [$url, $notifiable->email], false))]);
            return $mail;
        });
    }
}
