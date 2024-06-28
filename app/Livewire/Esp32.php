<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Livewire\Attributes\On;



class Esp32 extends Component
{
    public $response;

    public function mount()
    {
        $response = Http::get('http://192.168.0.150/getjson', [
            'json' => '{"numero":00}'
        ]);
        $this->response = $response->json(); // Extrae los datos JSON de la respuesta
    }

    function hola(){
        $response = Http::get('http://192.168.0.150/getjson', [
            'json' => '{"numero":1}'
        ]);
        $this->response = $response->json(); // Extrae los datos JSON de la respuesta
    }

    public function render()
    {
        return view('livewire.esp32');
    }
}
