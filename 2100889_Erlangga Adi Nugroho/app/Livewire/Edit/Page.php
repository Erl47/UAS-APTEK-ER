<?php

namespace App\Livewire\Edit;

use Livewire\Component;
use App\Models\news;

class Page extends Component
{
    public $judul;
    public $sorotan;
    public $isi;
    public $newsId;
    public function render()
    {
        return view('livewire.edit.page');
    }

    public function mount($newsId){

        $news = news::find($newsId);
        $this->judul = $news->judul;
        $this->sorotan = $news->sorotan;
        $this->isi = $news->isi;
    }

    public function update(){
        news::find($this->newsId)->update([
            'judul' => $this->judul,
            'sorotan' => $this->sorotan,
            'isi' => $this->isi,
        ]);
        $this->judul = null;
        $this->sorotan = null;
        $this->isi = null;
    }
}
