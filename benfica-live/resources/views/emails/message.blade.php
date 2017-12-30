<h1>Contacto - benfica.live</h1>
<p>
    <strong>{{ $contactMessage->created_at }}</strong>
</p>
<p>
    <strong>Remetente:</strong><br>
    {{ $contactMessage->name }} ({{ $contactMessage->email }})
</p>
<p>
    <strong>Mensagem:</strong><br>
    {{ $contactMessage->message }}
</p>
