<?php

namespace App\Livewire\Create;

use Livewire\Component;
use App\Models\news;

class Page extends Component
{
    public $judul;
    public $sorotan;
    public $isi;
    public function render()
    {
        return view('livewire.create.page');
    }

    public function save(){
        news::create([
            'judul' => $this->judul,
            'sorotan' => $this->sorotan,
            'isi' => $this->isi,
        ]);
        $this->judul = null;
        $this->sorotan = null;
        $this->isi = null;
    }
}
