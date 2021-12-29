<?php

namespace App\Http\Controllers;
use App\User;
use App\Cargos;
use App\Funciones;
use App\Requisitos;
use App\Paises;
use App\Vacantes;
use App\DescripcionCargo;
use App\DescripcionConfirmado;
use App\CargosFuncionesConfirmados;
use App\CargosRequisitosConfirmados;
use App\Http\Requests\VacantesRequest;

use Carbon\Carbon;
use DB;

use Illuminate\Http\Request;

class VacantesController extends Controller
{
    public function index(){

        $users = User::get();
        $cargos = Cargos::with('funciones')->get();
        
        
       
        $paises = Paises::where('estado', 'A')->orderBy('id','ASC')->get();
        
        /* dd($cargos); */
        return view('vacante.vacanteIndex', [
            'users' => $users,
            'cargos' => $cargos,
            'paises' => $paises,
        ]);

    }

    public function store(Request $request){
        $fecha = Carbon::now();
        $fec = $fecha->toDateString();
        

        $req_confirmados = Cargos::with('funciones')
                                ->with('requisitos')
                                ->findOrfail($request->input('id_cargo'));
                                 
                                
        /* dd($request->all()); */
        

        
        

        
        
        $cargos_vacantes_mod = Cargos::with('descripcion_cargo')->findOrfail($request->input('id_cargo'));
        
        
        /* dd($cargos_vacantes_mod->nombre, $cargos_vacantes_mod->descripcion ,$request->input('cargo'),$request->input('descripcion')); */
        if(strcmp ($cargos_vacantes_mod->nombre , $request->input('cargo')) == 0){
            if(strcmp ($cargos_vacantes_mod->descripcion ,$request->input('descripcion')) == 0){
                /* dd('hola entro'); */
                
                $vacantes = new Vacantes();
                $vacantes->fill([
                    'estado'=> 'A',
                    'creado'=> $fec,
                    'users_id'=> $request->input('users'),
                    'cargo_id'=> $request->input('id_cargo'),
                    'paises_id'=> $request->input('pais'),
                    /* 'nombre_cargo_modificado'=> NULL,
                    'descripcion_cargo_modificado'=> NULL, */
                    
                ]);
                $vacantes->save();
                

            }else{
                $vacantes = new Vacantes();
                $vacantes->fill([
                    'estado'=> 'A',
                    'creado'=> $fec,
                    'users_id'=> $request->input('users'),
                    'cargo_id'=> $request->input('id_cargo'),
                    'paises_id'=> $request->input('pais'),
                    /* 'nombre_cargo_modificado'=> NULL, */
                    'descripcion_cargo_modificado'=> $request->input('descripcion'),
                ]);
                $vacantes->save();

            }


        }
        else{
                if(strcmp ($cargos_vacantes_mod->descripcion , $request->input('descripcion')) ==0 ){
                    $vacantes = new Vacantes();
                    $vacantes->fill([
                        'estado'=> 'A',
                        'creado'=> $fec,
                        'users_id'=> $request->input('users'),
                        'cargo_id'=> $request->input('id_cargo'),
                        'paises_id'=> $request->input('pais'),
                        'nombre_cargo_modificado'=> $request->input('cargo'),
                        'descripcion_cargo_modificado'=> NULL,
                        
                    ]);
                    $vacantes->save();
                   
                }
                else{
                    $vacantes = new Vacantes();
                    $vacantes->fill([
                        'estado'=> 'A',
                        'creado'=> $fec,
                        'users_id'=> $request->input('users'),
                        'cargo_id'=> $request->input('id_cargo'),
                        'paises_id'=> $request->input('pais'),
                        'nombre_cargo_modificado'=> $request->input('cargo'),
                        'descripcion_cargo_modificado'=> $request->input('descripcion'),
                        
                    ]);
                    $vacantes->save();

                    }
        }




        //me fijo si vienen vacias los imputs de funciones o requisitos 
        foreach($req_confirmados->funciones as $f){
            $a[] = $f->id;
            $a[] = $f->nombre;
        }

        foreach($req_confirmados->requisitos as $r){
            $b[] = $r->id;
            $b[] = $r->nombre;
        }


        //si hay fx a modificar
        if($request->input('funciones')){
            foreach($request->input('funciones') as $fx){
                $func[] = $fx;
            }


            //*ADD funciones*/
            if(strcmp ($func[0],$a[1]) == 0){
                
                //NO SE HACE NADA DE INSERCION
            }
            else{
                $funciones_agregadas = $func[0];
                $id_funciones = $a[0];
                /* dd($funciones_agregadas,$id_funciones); */
        
                $nombre_funciones_add = new CargosFuncionesConfirmados();
                
                $nombre_funciones_add->fill([

                    'nombre'=> $funciones_agregadas,
                    'editado'=> '1',
                    'creado'=> $fec,
                    'cargos_id'=> $request->input('id_cargo'),
                    'funciones_id'=> $id_funciones,
                
                    
                ]);
                $nombre_funciones_add->save();
        
            }
        }
            



        //si hay requisitos a modificar
        if($request->input('requisitos')){
            foreach($request->input('requisitos') as $rx){
                $requi[] = $rx;
            }

            
            //*ADD requisitos*/
            if(strcmp ($requi[0],$b[1]) == 0){
                //NO SE HACE NADA DE INSERCION
                
            }
            else{
                $requisitos_agregadas = $requi[0];
                $id_requisitos = $b[0];
                /* dd($funciones_agregadas,$id_funciones); */
        
                $nombre_requisitos_add = new CargosRequisitosConfirmados();
                
                $nombre_requisitos_add->fill([

                    'nombre'=> $requisitos_agregadas,
                    'editado'=> '1',
                    'creado'=> $fec,
                    'cargos_id'=> $request->input('id_cargo'),
                    'requisitos_id'=> $id_requisitos,
                
                    
                ]);
                $nombre_requisitos_add->save();
        
            }
        }
        




        //addmorefunction para el agregado de las funciones en cargos_funciones_confirmados si no existen en la tabla fx
       if($request->input('addmorefunction')){ //si existen fx nuevas por agregar que vengan del formulario
            
        foreach ($request->addmorefunction as $key => $value) {

           
            /* $funcionesexiste = Cargos::with('funciones')->findOrfail($request->input('id_cargo')); */
            $funcionexiste = Funciones::where('nombre', $value['name'])->get();
            
            $cantidad = count($funcionexiste);
            dd($funcionexiste,$cantidad,$key);
            if ($cantidad==0) {
            
                foreach($funcionexiste as $function){
                    $f_id[] = $function->id;
                }
                
                
                $nombre_funciones_add = new CargosFuncionesConfirmados();
                $nombre_funciones_add->fill([

                    'nombre'=> $value,
                    'editado'=> '1',
                    'creado'=> $fec,
                    'cargos_id'=> $request->input('id_cargo'),
                    'funciones_id'=> $f_id[0],
                
                    
                ]);
                $nombre_funciones_add->save();
          }else {
            return back()->withErrors('La funcion ya existe');
 
          }
        }
    }
    else{
        /* dd('no tiene nuevas fx para agregar'); */
    }



    //addmorerequirements para el agregado de los requisitos en cargos_requisitos_confirmados si no existen en la tabla fx
    if($request->input('addmorerequirements')){ //si existen requisitos nuevos por agregar que vengan del formulario
            
        foreach ($request->addmorerequirements as $key => $value) {


            /*  */
            $requisitoexiste = Requisitos::where('nombre', $value)->get();
            $cantidad = count($requisitoexiste);
            if ($cantidad==0) {
            
                foreach($requisitoexiste as $requi){
                    $r_id[] = $requi->id;
                }
            
                $nombre_req_add = new CargosRequisitosConfirmados();
                $nombre_req_add->fill([

                    'nombre'=> $value,
                    'editado'=> '1',
                    'creado'=> $fec,
                    'cargos_id'=> $request->input('id_cargo'),
                    'requisitos_id'=> $r_id[0],
                
                    
                ]);
                $nombre_req_add->save();
          }else {
            return back()->withErrors('El Requisito ya existe');
 
          }
        }
    }
    else{
        /* dd('No tiene nuevos requisitos para agregar'); */
    }




        

        return redirect('/dashboard');
       
    }

    public function buscar_funciones_requisitos($id_select){
        

        $cargos_funciones = Cargos::with('funciones')->with('requisitos')->findOrfail($id_select);
        /* $cargos_requisitos = Cargos::with('requisitos')->findOrfail($id_select); */

        //dd($cargos_funciones);
        return $cargos_funciones;

    }

    public function buscar_usuario($id){

        $users = User::findOrfail($id);

        return $users;
    }

    public function buscar_cargo_descripcion($id){

        $cargos = Cargos::with('descripcion_cargo')->findOrfail($id);

        /* $cargos = Cargos::all();
        $cargos->last(); */
    
        /* Cargos::with('descripcion_cargo')->findOrfail($id) */
        /* $vac = Cargos::with('descripcion_cargo')->findOrfail($id);
        dd($vac);
        $ultima_vacante = $vac->last(); */

        /* dd($cargos->last()); */

        /* $materials = Material::with('costs')
                         ->where('nombre','LIKE','%'.$request->val.'%')    
                         ->take(5)->get()->toJson(); */
        //El extra que necesitas:

         /* $last_cost = Cargos::whereHas('descripcion_cargo')->get()->last(); */
         $last_cost = DB::table('vacantes')->latest('id')->where('cargo_id', '=', $id)->first();

        
        /* dd($last_cost); */

        return $cargos;
    }
}
