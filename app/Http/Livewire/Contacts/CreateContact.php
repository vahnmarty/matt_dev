<?php

namespace App\Http\Livewire\Contacts;

use Livewire\Component;
use App\Models\Contact;

class CreateContact extends Component
{
    public $name, $email, $address, $profile_image;

    protected $rules = [
        'name' => 'required|min:2|max:191',
        'email' => 'required|email',
        'address' => 'required',
        'profile_image' => 'nullable'
    ];

    public function render()
    {
        return view('livewire.contacts.create-contact');
    }

    public function save()
    {
        $validatedData = $this->validate();

        $contact = new Contact;
        $contact->fill($validatedData);
        $contact->save();

        $this->emit('alert', [
            'title' => 'Added successfully',
            'message' => $this->name . ' was added in your contacts.',
            'type' => 'success'
        ]);

        $this->reset();

        $this->emitUp('resetComponent');
        
        $this->dispatchBrowserEvent('closemodal');
    }
}
