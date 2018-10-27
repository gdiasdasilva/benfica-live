@component('mail::message')
# Excepção

Ocorreu um erro!

Detalhes da excepção:

***

{{ $exception->getMessage() }}
@endcomponent