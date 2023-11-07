<?php

namespace App\Livewire;

use App\Models\Electroniques;
use Livewire\Component;

class LiveSeach extends Component
{
    public string $qufery = '';
    
    public $searchElements = [];

    public function updatedQuefry(){
        
        $word = '%' . $this->query . '%';
        $this->searchElements = ['e'];        
        if (strlen($this->query) > 0) {
            $this->searchElements = Electroniques::where('name', 'like', $word)->get();
        }

        dd($this->searchElements);
    }
    public function render()
    {
        return view('livewire.live-seach');
    }
}
