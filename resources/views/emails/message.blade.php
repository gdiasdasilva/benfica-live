<h3>Contacto - benfica.live</h3>
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
