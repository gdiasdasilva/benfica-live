@component('mail::message')
# Ocorreu um erro!

Detalhes da excepção:

*{{ $exception->getMessage() }}*

Verifique o ficheiro de log para mais detalhes.
@endcomponent
