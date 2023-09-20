<?php

namespace App\Http\Livewire;

use App\Mail\ContactUsWebsite;
use App\Models\Contactus as ModelsContactus;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactUs extends Component
{
    public $nama,$subjek,$email,$pesan;
    protected $listeners =[
        'success'=>'$refresh',
        
    ];
    public function render()
    {
        return view('livewire.contact-us')->extends('layouts.app');
    }
    public function kirim_email(){
        $this->validate([
            'nama'=>'required',
           
            'email'=>'required|email',
            
            'subjek'=>'required',
            'pesan'=>'required'
            
            
        ]); 
       
     
       
        $contactus= ModelsContactus::create([
            'nama'=>$this->nama,
            'email'=>$this->email,
            'subjek'=>$this->subjek,
            'pesan'=>$this->pesan,
          
        ]);
        Mail::to('email@test.com')->send(new ContactUsWebsite($this->nama,$this->email,$this->subjek,$this->pesan,));
        $this->resetinput();
        $this->emitSelf('success');
        
    
    }
    private function resetinput(){
        $this->nama=null;
       $this->email=null;
       $this->subjek=null;
       $this->pesan=null;
}
}
