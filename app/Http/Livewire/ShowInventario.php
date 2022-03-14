<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use Livewire\Component;
use Livewire\WithFileUploads;

class ShowInventario extends Component
{
    use WithFileUploads;

    public $productos;
    public $nombre, $descripcion, $stock, $precio, $imagen;
    protected $rules = [
        'nombre' => 'required',
        'descripcion' => 'required|min:5',
        'imagen' => 'required|image',
        'stock' => 'required',
        'precio' => 'required'
    ];

    public function render()
    {
        $this->productos = Producto::all();
        return view('livewire.show-inventario');
    }

    public function save()
    {
        $this->validate();
        $imagen = $this->imagen->store('productos');

        $producto = new Producto();
        $producto->nombre = $this->nombre;
        $producto->descripcion = $this->descripcion;
        $producto->stock = $this->stock;
        $producto->precio = $this->precio;
        $producto->imagen = $imagen;

        $producto->save();

        dd($producto);
    }

}
