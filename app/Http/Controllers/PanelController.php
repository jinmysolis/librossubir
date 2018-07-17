<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Img;
use App\Img2;
use Cache;



class PanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
    
    public function __construct(){
        $this->middleware('auth');
    }








    public function index()
    {
       
       $cover = Img::all();
    
       
      
       
       
        return view('panel.index')
                       
                        ->with('cover',$cover)
                        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $cover = Img::paginate(36); 
      $cover2 = Img2::paginate(1);
      $variable = Img::find($id);
     
      
      
    if(Cache::has($id)==false){
        Cache::add($id,'contador',0.30);
        $variable->total_visitas++;
        $variable->save();
    }
   
    
     return view('Img.show')
                       
                        ->with('variable',$variable)
                         ->with('cover',$cover)
                        ->with('cover2',$cover2)
                       ; 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $Preguntauno = PreguntaUno::find($id);
       return view('panel.edit',["Preguntauno"=> $Preguntauno]);
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
       $Preguntauno = PreguntaUno::find($id);
        $Preguntauno->PreguntaUno = $request->PreguntaUno;
       
        if($Preguntauno->save()){
           
       $Preguntauno = PreguntaUno::paginate(1);
       $Respuestauno = RespuestaUno::paginate(4);
         
        return view('preguntaUno.index')
                        ->with('Preguntauno',$Preguntauno)
                        ->with('Respuestauno',$Respuestauno);  
             
        }else{
            return view("preguntaUno.edit");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
