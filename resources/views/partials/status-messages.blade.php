@if (session('success') || $errors->any())
    <section class="status-messages">
        <div class="container">
            <div class="columns">
                <div class="column is-10 is-offset-1">
                    @if (session('success'))
                        <article class="message is-success">
                            <div class="message-body content">
                                {!! session('success') !!}
                            </div>
                        </article>
                    @endif
                    @if ($errors->any())
                        <article class="message is-danger">
                            <div class="message-header">
                                <p>Erros na submissão</p>
                            </div>
                            <div class="message-body">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </article>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endif