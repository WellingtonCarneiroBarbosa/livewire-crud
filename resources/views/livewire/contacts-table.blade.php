<div>
    @if($contacts->isEmpty())
        <p>Sua lista de contatos está vazia. Clique em "cadastrar contato" para adicionar um novo contato.</p>
    @else
        <ul>
            @foreach($contacts as $contact)
                <li>Nome:   {{ $contact->name }}</li>
                <li>E-mail: {{ $contact->email }}</li>
            @endforeach
        </ul>
    @endif
</div>
