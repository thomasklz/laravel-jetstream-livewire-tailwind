<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DatosPersona;

class Persona extends Component
{

    public $nombre, $apellido, $cedula, $direccion, $telefono;
    protected $rules = [
        'nombre' => 'required',
        'apellido' => 'required',
        'cedula' => 'required|min:10',
        'direccion' => 'required',
        'telefono' => 'required|min:10',
    ];
    protected $messages = [
        'nombre.required' => 'El campo nombre no puede estar vacío',
        'apellido.required' => 'El campo apellido no puede estar vacío',
        'cedula.required' => 'El campo cédula no puede estar vacío',
        'cedula.min' => 'Minímo 10 números',
        'direccion.required' => 'El campo dirección no puede estar vacío',
        'telefono.required' => 'El campo teléfono no puede estar vacío',
        'telefono.min' => 'Minímo 10 números',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function guardar(){
       $this->validate();
       $persona= new DatosPersona();
       $persona->nombre=$this->nombre;
       $persona->apellido=$this->apellido;
       $persona->cedula=$this->cedula;
       $persona->direccion=$this->direccion;
       $persona->telefono=$this->telefono;
       $persona->id_tipo_personas=1;
       $persona->id_horario_atencion=1;
       $persona->save();
       $this->limpiar();
       session()->flash('success', 'Persona ingresada correctamente');
   }
    public function render()
    {
        return view('livewire.persona');
    }

   public function limpiar(){
    $this->nombre="";
    $this->apellido="";
    $this->cedula="";
    $this->direccion=""; 
    $this->telefono="";
   }
    
}
