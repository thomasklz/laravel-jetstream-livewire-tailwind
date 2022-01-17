<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DatosPersona;
use App\Models\tipospersona;
use Livewire\WithPagination;

class Persona extends Component
{
    use WithPagination;
    public $nombre, $apellido, $cedula, $direccion, $telefono, $idPersona;
    public $InsertUpdate=true, $search, $buscar;
    public $nombre1="", $apellido1="", $tamano=5, $tipopersona;

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
      
       if($this->InsertUpdate){
        $persona= new DatosPersona();
        $persona->nombre=$this->nombre;
        $persona->apellido=$this->apellido;
        $persona->cedula=$this->cedula;
        $persona->direccion=$this->direccion;
        $persona->telefono=$this->telefono;
        $persona->id_tipo_personas=$this->tipopersona;
        $persona->id_horario_atencion=1;
        $persona->save();
        $this->limpiar();
        session()->flash('success', 'Persona ingresada correctamente');
       }else{
        $p=DatosPersona::find($this->idPersona);
        $p->nombre=$this->nombre;
        $p->apellido=$this->apellido;
        $p->cedula=$this->cedula;
        $p->direccion=$this->direccion;
        $p->telefono=$this->telefono;
        $p->save();
        $this->limpiar();
        session()->flash('success', 'Registro actualizado');
        $this->InsertUpdate=true;
       }
      
   }
    public function render()
    {
        $tiposPersona=tipospersona::all();
      
        $personas=DatosPersona::where('nombre','like','%'.$this->search.'%')
                                ->orwhere('apellido','like','%'.$this->search.'%')
                                ->orwhere('cedula','like','%'.$this->search.'%')
                                ->orderBy('nombre','desc')
                                ->paginate($this->tamano);
       // $personas= DatosPersona::orderBy('id','desc')->paginate(5);
        return view('livewire.persona',['personas'=>$personas, 'tipos'=> $tiposPersona]);
    }

   public function limpiar(){
    $this->nombre="";
    $this->apellido="";
    $this->cedula="";
    $this->direccion=""; 
    $this->telefono="";
   }

  public function editar($id){
   $persona=DatosPersona::find($id);
   $this->nombre=$persona->nombre;
   $this->apellido=$persona->apellido;
   $this->cedula=$persona->cedula;
   $this->direccion=$persona->direccion; 
   $this->telefono=$persona->telefono;
   $this->idPersona=$persona->id;
   $this->InsertUpdate=false;
  }

 public function delete($id){
    $p=DatosPersona::find($id);
    $p->delete();
    session()->flash('error', 'Dato eliminado');
 }
  public function buscar(){

    $p=DatosPersona::where('cedula',$this->buscar)
                    ->get();
    $this->nombre1=$p[0]->nombre;
    $this->apellido1=$p[0]->apellido;
             
    


  }
 
}
