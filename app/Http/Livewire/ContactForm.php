<?php

namespace App\Http\Livewire;

use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $name = "";
    public $phone = "";
    public $message = "";
    protected $rules = [
      'name' => 'required',
      'phone' => 'required',
      'message' => 'required'
    ];
    public function saveMessage()
    {
        $this->validate();
        \App\Models\Message::create([
           'name' => $this->name,
            'phone' => $this->phone,
            'message' => $this->message
        ]);
        Mail::to('john.doe@example.org')->send(new \App\Mail\ContactForm($this->name,$this->phone,$this->message));
        $this->name = "";
        $this->phone = "";
        $this->message = "";
    }
    public function render()
    {
        return view('livewire.contact-form');
    }
}
