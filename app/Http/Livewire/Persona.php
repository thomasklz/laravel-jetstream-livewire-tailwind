<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DatosPersona;

class Persona extends Component
{

  
    public $nombre, $apellido, $cedula, $direccion, $telefono;
     
    public function guardar(){
       
 
       $persona= new DatosPersona();
       $persona->nombre=$this->nombre;
       $persona->apellido=$this->apellido;
       $persona->cedula=$this->cedula;
       $persona->direccion=$this->direccion;
       $persona->telefono=$this->telefono;
       $persona->id_tipo_personas=1;
       $persona->id_horario_atencion=1;
       $persona->save();
   }
    public function render()
    {
        return view('livewire.persona');
    }


    
}
