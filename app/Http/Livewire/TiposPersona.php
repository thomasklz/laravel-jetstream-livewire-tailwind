<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TipoPersona;
class TiposPersona extends Component
{
    public $search, $valor=5,$idTipo,$detalle ;

    public function render()
    {
        $tipospersona=TipoPersona::where('tipo','like', '%'.$this->search.'%')
                                 ->orderBy('id','desc')->paginate($this->valor);
        return view('livewire.tipos-persona',['tipospersona'=>$tipospersona]);
    }
    public function delete($id){
        $tp=TipoPersona::find($id);
        $tp->delete();
        session()->flash('error', 'El registro '.$tp->tipo.' fue eliminado');
     }
     public function asignarId($id, $detalle){
         $this->idTipo=$id;
         $this->detalle=$detalle;
     }
}
