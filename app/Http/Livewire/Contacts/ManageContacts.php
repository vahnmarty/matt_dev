<?php

namespace App\Http\Livewire\Contacts;

use Livewire\Component;
use App\Models\Contact;

class ManageContacts extends Component
{
    public function render()
    {
        $contacts = Contact::paginate(5);
        return view('livewire.contacts.manage-contacts', compact('contacts'));
    }
}
