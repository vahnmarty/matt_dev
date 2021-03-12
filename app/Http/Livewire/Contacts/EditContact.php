<?php

namespace App\Http\Livewire\Contacts;

use Livewire\Component;
use App\Models\Contact;
use Livewire\WithFileUploads;

class EditContact extends Component
{
    use WithFileUploads;

    public $contact;

    public $name, $email, $address, $profile_image;

    public $image_url;

    protected $rules = [
        'name' => 'required|min:2|max:191',
        'email' => 'required|email',
        'address' => 'required',
        'profile_image' => 'nullable|max:1024'
    ];

    public function render()
    {
        return view('livewire.contacts.edit-contact');
    }

    public function mount($id = null)
    {
        $this->contact = Contact::find($id);
        
        if($this->contact)
        {
            $this->getValues();
        }
    }

    public function getValues()
    {
        $this->name = $this->contact->name;
        $this->email = $this->contact->email;
        $this->address = $this->contact->address;
        $this->image_url = $this->contact->profile_image;
    }

    public function updatedProfileImage()
    {
        $imageUrl = $this->profile_image->store('photos', 'public');
        $this->image_url = $imageUrl;
    }

    public function update()
    {
        $validatedData = $this->validate();

        $contact = $this->contact;
        $contact->fill($validatedData);
        $contact->save();

        if($this->profile_image)
        {
            $contact->profile_image = $this->image_url;
            $contact->save();
        }
        

        $this->emit('alert', [
            'title' => 'Updated successfully',
            'message' => 'Contact has been updated successfully',
            'type' => 'success'
        ]);

        $this->reset();

        $this->emitUp('resetComponent');
        
        $this->dispatchBrowserEvent('closemodal');
    }
}
