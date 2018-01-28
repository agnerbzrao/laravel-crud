<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;

class MyResetPasswordNotification extends ResetPassword
{
    public function toMail($notifiable)
    {
        return (new MailMessage())
			->subject('Recuperação de senha.')
            ->line('Você está recebendo esta mensagem porque foi solicitada uma nova requisição de senha.')
            ->action('Redefinir senha', url(config('app.url').route('password.reset', $this->token, false)))
            ->line('Se você não esqueceu a senha, desconsidere este e-mail.');
    }

}
