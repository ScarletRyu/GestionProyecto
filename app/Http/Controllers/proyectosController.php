<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Proyectos;
class proyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyectos::all();
        return view('Proyectos/index', array('proyectos'=>$proyectos));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleados = Empleados::all();
        return view('Proyectos/createProyecto', array('empleados'=>$empleados));
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proyecto = new Proyectos();

        $proyecto->nombre = $request->input('nombre');
        $proyecto->titulo = $request->input('titulo');
        $proyecto->fechainicio = $request->input('fechaI');
        $proyecto->fechafin = $request->input('fechaF');
        $proyecto->horasestimadas = $request->input('horasE');
        $proyecto->responsable = $request->get('res');

        $proyecto->save();//Guardamos en la BD

        $proyectos = Proyectos::all();
        return view('proyectos/index', array('proyectos'=>$proyectos));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto = Proyectos::where('id',$id)->first();
        return view('Proyectos/proyecto', ['proyecto'=>$proyecto]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto = Proyectos::where('id', $id)->first();
        $empleados = Empleados::all();
        return view('Proyectos/editProyecto', array('proyecto'=>$proyecto), array('empleados'=>$empleados));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo'=>'string|min:2|max:50|required',
            'fechaI'=>'date|required',
            'fechaF'=>'date|required|after_or_equal_:fechaI',
            'horasE'=>'numeric|required'
        ]);
        $proyecto = Proyectos::where('id',$id)->first();
        $proyecto->titulo = $request->input('titulo');
        $proyecto->fechainicio = $request->input('fechaI');
        $proyecto->fechafin = $request->input('fechaF');
        $proyecto->horasestimadas = $request->input('horasE');
        $proyecto->responsable = $request->get('res');
        $proyecto->save();
        $proyectos = Proyectos::all();
        return view('proyectos/index', array('proyectos'=>$proyectos));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proyectoDelete = Proyectos::where('id',$id)->first();
        $proyectoDelete->delete();
        $proyectos = Proyectos::all();
        return redirect(route('proyecto.index', array('proyectos'=>$proyectos)));
    }
}