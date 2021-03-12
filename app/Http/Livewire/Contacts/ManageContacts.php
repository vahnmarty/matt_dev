<?php

namespace App\Http\Livewire\Contacts;

use Livewire\Component;
use App\Models\Contact;
use Livewire\WithPagination;

class ManageContacts extends Component
{

    use WithPagination;

    protected $listeners = ['resetComponent'];
    
    public $edit_id;

    public function render()
    {
        $contacts = Contact::latest()->paginate(5);
        return view('livewire.contacts.manage-contacts', compact('contacts'));
    }

    public function resetComponent()
    {
        $this->resetPage();
    }

    public function editContact($id)
    {
        $this->edit_id = $id;

        //$this->dispatchBrowserEvent('editmodal');
    }

    public function deleteContact($id)
    {
        Contact::destroy($id);

        $this->emit('alert', [
            'title' => 'Contact deleted!',
            'message' => 'Contact has been deleted successfully',
            'type' => 'success'
        ]);
    }

}
