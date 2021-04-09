<?php

namespace App\Http\Livewire\Contributors;

use Livewire\Component;
use App\Models\Contributor;
use Livewire\WithPagination;

class Index extends Component
{
	use WithPagination;

	public $search;
	public $paginate=5;
	public $groupSelect = 'Noms_Prenoms';

	public function updatingSearch()
	{
		$this->resetPage();
	}

    public function render()
    {
        return view('livewire.contributors.index',[
        	'contributors' => Contributor::where('Noms_Prenoms', 'like' , '%'.$this->search.'%')->orderBy($this->groupSelect)->Paginate($this->paginate)
        ]);
    }
}
