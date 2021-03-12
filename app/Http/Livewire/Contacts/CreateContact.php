<?php

namespace App\Http\Livewire\Contacts;

use Livewire\Component;
use App\Models\Contact;
use Livewire\WithFileUploads;
use App\Mail\ContactCreated;
use Mail;

class CreateContact extends Component
{
    use WithFileUploads;

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
        return view('livewire.contacts.create-contact');
    }

    public function updatedProfileImage()
    {
        $imageUrl = $this->profile_image->store('photos', 'public');
        $this->image_url = $imageUrl;
    }

    public function save()
    {
        $validatedData = $this->validate();

        $contact = new Contact;
        $contact->fill($validatedData);
        $contact->save();

        if($this->profile_image)
        {
            $contact->profile_image = $this->image_url;
            $contact->save();
        }

        Mail::to($contact->email)->send(new ContactCreated($contact));
        

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
