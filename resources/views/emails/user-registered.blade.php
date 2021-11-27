@component('mail::message')

{{-- Intro Lines --}}
@foreach ($introLines as $line)
{{ $line }}

@endforeach

@component('mail::button', ['url' => $actionUrl])
{{ $actionText }}
@endcomponent

Obrigada,<br>
{{ config('app.name') }}

{{-- Outro Lines --}}
@foreach ($outroLines as $line)
{{ $line }}

@endforeach

{{-- Subcopy --}}
@isset($actionText)
@slot('subcopy')
@lang(
    "Se o botão \":actionText\" não estiver funcionando, copie e cole esse link\n".
    'no seu navegador:',
    [
        'actionText' => $actionText,
    ]
) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
@endslot
@endisset

@endcomponent
