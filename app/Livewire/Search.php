<?php

namespace App\Livewire;

use App\Models\Chaussures;
use App\Models\Electroniques;
use App\Models\Montres;
use App\Models\Vetements;
use Livewire\Component;

class Search extends Component
{
    public $query = '';
    public $searchElements = [];

    public function updatedQuery(){

        $word = '%' . $this->query . '%';     
        if (strlen($this->query) > 0) {
            $electo = Electroniques::where('name', 'like', $word)->get()->toArray();
            $vetemt = Vetements::where('name', 'like', $word)->get()->toArray();
            $chauss = Chaussures::where('name', 'like', $word)->get()->toArray();
            $montre = Montres::where('name', 'like', $word)->get()->toArray();

            $this->searchElements = array_merge($electo, $vetemt, $chauss, $montre);

        }
        if($this->query == ''){
            $this->searchElements = [];
        }

    }
    public function render()
    {
        return view('livewire.search');
    }
}
