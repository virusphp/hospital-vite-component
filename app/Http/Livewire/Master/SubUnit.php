<?php

namespace App\Http\Livewire\Master;

use App\Models\Subunit as AppSubunit;
use Livewire\Component;
use Livewire\WithPagination;

class SubUnit extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';
    public $limit = 10;
    public $search;

    public function render()
    {
        // dd($this->search);
        $dataSubunit = AppSubunit::pencarian($this->search)->paginate($this->limit);
        return view('livewire.master.sub-unit', compact('dataSubunit'));
    }
   
}
