<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class ContactsTable extends Component
{
    use WithPagination;

    protected $listeners = ['$refresh'];

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.contacts-table', [
            'contacts' => $this->getContacts(),
        ]);
    }

    protected function getContacts()
    {
        sleep(5);

        return Contact::orderBy('created_at', 'DESC')
                        ->paginate(10);
    }
}
