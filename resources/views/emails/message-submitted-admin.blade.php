@component('mail::message')
# Novo contacto

Foi submetido um novo contacto na plataforma às {{ $contactMessage->created_at }}.

Contacto enviado por **{{ $contactMessage->name }}** ({{ $contactMessage->email }}).

***

{{ $contactMessage->message }}
@endcomponent