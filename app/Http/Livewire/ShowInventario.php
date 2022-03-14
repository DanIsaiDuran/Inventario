<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use Livewire\Component;

class ShowInventario extends Component
{
    public $productos;

    public function render()
    {
        $this->productos = Producto::all();
        return view('livewire.show-inventario');
    }
}
