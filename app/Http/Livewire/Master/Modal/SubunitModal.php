<?php

namespace App\Http\Livewire\Master\Modal;

use Livewire\Component;

class SubunitModal extends Component
{
    public $listeners = ['showModal' => 'showModal'];
    public $show;

    public function mount()
    {
        $this->show = false;
    }


    public function render()
    {
        return view('livewire.master.modal.subunit-modal');
    }

    public function showModal()
    {
        $this->show = true;
    }

    public function closeModal()
    {
        $this->show = false;
    }
}
