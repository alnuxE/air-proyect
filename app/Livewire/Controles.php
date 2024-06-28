<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Controles extends Component
{
    public $response;

    public function mount()
    {
        $response = Http::get('http://192.168.0.150/getjson', [
            'json' => '{"numero":5}'
        ]);
        $this->response = $response->json(); // Extrae los datos JSON de la respuesta
    }

    public function ledROn()
    {
        $response = Http::get('http://192.168.0.150/getjson', [
            'json' => '{"numero":1}'
        ]);
    }

    public function ledROff()
    {
        $response = Http::get('http://192.168.0.150/getjson', [
            'json' => '{"numero":2}'
        ]);
    }


    public function ledVOn()
    {
        $response = Http::get('http://192.168.0.150/getjson', [
            'json' => '{"numero":3}'
        ]);
    }

    public function ledVOff()
    {
        $response = Http::get('http://192.168.0.150/getjson', [
            'json' => '{"numero":4}'
        ]);
    }

    public function ledAOn()
    {
        $response = Http::get('http://192.168.0.150/getjson', [
            'json' => '{"numero":5}'
        ]);
    }

    public function ledAOff()
    {
        $response = Http::get('http://192.168.0.150/getjson', [
            'json' => '{"numero":6}'
        ]);
    }

    public function render()
    {
        return view('livewire.controles');
    }
}
