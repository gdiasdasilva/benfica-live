<div class="container">
    @if (session('success'))
        <div class="alert alert-success" role="alert">
          {!! session('success') !!}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <h5>Erros na submissão:</h5>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif    
</div>
