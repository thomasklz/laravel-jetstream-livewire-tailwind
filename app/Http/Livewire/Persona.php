<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DatosPersona;

class Persona extends Component
{

  
    public $nombre, $apellido, $cedula, $direccion, $telefono;
     

protected $rules=[
    'nombre'=>'required',
    'apellido'=> 'required',
    'cedula'=>'required|numeric|min:10',
    'direccion'=> 'required',
    'telefono'=>'required ',
];
public function updated($propertyName)
{
    $this->validateOnly($propertyName);
}
protected $messages = [
    'nombre.required' => 'El campo nombre es obligatorio',
    'cedula.required' => 'El campo cédula es obligatorio',
    'cedula.numeric' => 'Solo números',
    'cedula.min' => 'En el campo cédula minímo son 10 carñacteres',
];

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
       session()->flash('message', 'Persona registrada correctamente');
       $this->limpiar();
   }
    public function render()
    {
        $personas=DatosPersona::all();
        return view('livewire.persona',['personas'=>$personas]);
    }
 public function limpiar(){
    $this->nombre="";
    $this->apellido="";
    $this->cedula="";
    $this->direccion="";
    $this->telefono="";
 }

    
}
