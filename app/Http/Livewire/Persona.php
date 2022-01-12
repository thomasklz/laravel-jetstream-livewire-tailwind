<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DatosPersona;

class Persona extends Component
{
    public $edit=true;
    public $nombre, $apellido, $cedula, $direccion, $telefono, $idPersona;
    protected $rules = [
        'nombre' => 'required',
        'apellido' => 'required',
        'cedula' => 'required|numeric|min:10',
        'direccion' => 'required',
        'telefono' => 'required|numeric|min:10',
    ];
    protected $messages = [
        'nombre.required' => 'El campo nombre no puede estar vacío',
        'apellido.required' => 'El campo apellido no puede estar vacío',
        'cedula.required' => 'El campo cédula no puede estar vacío',
        'cedula.numeric' => 'Solo se admiten números',
        'cedula.min' => 'Minímo 10 números',
        'direccion.required' => 'El campo dirección no puede estar vacío',
        'telefono.required' => 'El campo teléfono no puede estar vacío',
        'telefono.numeric' => 'Solo se admiten números',
        'telefono.min' => 'Minímo 10 números',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function guardar(){
       $this->validate();
       $persona= new DatosPersona();
       if($this->edit==true){
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
        $this->edit=true;
       }else{

        $persona=DatosPersona::find($this->idPersona);
         $persona->nombre= $this->nombre;
         $persona->apellido= $this->apellido;
        $persona->cedula=$this->cedula;
        $persona->direccion=$this->direccion; 
        $persona->telefono=$this->telefono;
        $persona->save();
        $this->limpiar();
        //$persona->id=$this->idPersona;
        session()->flash('Update', 'Persona actualizada correctamente');
        $this->edit=true;

       }
     
   }
    public function render()
    {
        $personas= DatosPersona::all();
        return view('livewire.persona',['personas'=>$personas]);
    }

   public function limpiar(){
    $this->nombre="";
    $this->apellido="";
    $this->cedula="";
    $this->direccion=""; 
    $this->telefono="";
   }
    public function edit($id){
       
        $persona=DatosPersona::find($id);
        $this->nombre= $persona->nombre;
        $this->apellido=$persona->apellido;
        $this->cedula=$persona->cedula;
        $this->direccion=$persona->direccion; 
        $this->telefono=$persona->telefono;
        $this->idPersona=$persona->id;
        $this->edit=false;
        
    }
  
    
}
