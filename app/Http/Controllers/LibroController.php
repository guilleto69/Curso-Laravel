<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Libro;
//use Illuminate\Support\Facades\Cache;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Cache::put('prueba', 'Esto es un dato en Cache');
        //dd(Cache::get('prueba'));
        //Cache::tags(['permiso'])->put('permiso.1', ['listar-libros','crear-libros']);
        //dd(Cache::tags('permiso')->get('permiso.1'));
        //Cache::tags(['permiso'])->flush();
        
        //dd(session()->all());
        can('listar-libros');
        
        $datas = Libro::orderBy('id')->get();
        return view('libro.index', compact('datas'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        can('crear-libros');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ver($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        //
    }
}