<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactsForm extends Component
{
    public $name;
    public $email;

    protected $rules = [
        'name' => ['required'],
        'email' => ['required', 'email', 'unique:contacts,email'],
    ];

    public function render()
    {
        return view('livewire.contacts-form');
    }

    public function submit()
    {
        $data = $this->validate();

        Contact::create($data);

        $this->emitSelf('saved', 'Salvo.');
        $this->emitTo('contacts-table', '$refresh');
        $this->reset();
    }
}
