@component('mail::message')
# Olá!

Por favor clique no botão abaixo para verificar seu endereço de e-mail
### [Se você não criou nenhuma conta, ignore este e-mail]

@component('mail::button', ['url' => ''])
Verifique seu e-mail
@endcomponent

Obrigada,<br>
{{ config('app.name') }}
@endcomponent
