<div>
    @if($contacts->isEmpty())
        <p>Sua lista de contatos está vazia. Use o formulário para adicionar um novo contato.</p>
    @else
        <p wire:loading>Carregando...</p>

        <ul wire:loading.remove>
            @foreach($contacts as $contact)
                <li>Nome:   {{ $contact->name }}</li>
                <li>E-mail: {{ $contact->email }}</li>

                @if(! $loop->last)
                    <hr>
                @endif
            @endforeach
        </ul>
    @endif
</div>
