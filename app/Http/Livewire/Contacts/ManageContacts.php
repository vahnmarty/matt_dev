<?php

namespace App\Http\Livewire\Contacts;

use Livewire\Component;
use App\Models\Contact;
use Livewire\WithPagination;

class ManageContacts extends Component
{

    use WithPagination;

    protected $listeners = ['resetComponent'];
    
    public function render()
    {
        $contacts = Contact::latest()->paginate(5);
        return view('livewire.contacts.manage-contacts', compact('contacts'));
    }

    public function resetComponent()
    {
        $this->resetPage();
    }

}
