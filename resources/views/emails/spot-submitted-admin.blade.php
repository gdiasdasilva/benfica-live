@component('mail::message')
# Submissão de spot

Foi submetido um novo spot na plataforma às {{ $spotSubmitted->created_at }}.

Ficará pendente até ser aprovado por um administrador.

@component('mail::table')
| Nome do spot               | País                                   | Cidade                     |
| :------------------------- | :------------------------------------- | -------------------------: |
| {{ $spotSubmitted->name }} | {{ $spotSubmitted->country->name_pt }} | {{ $spotSubmitted->city }} |
@endcomponent

Obrigado,
@endcomponent