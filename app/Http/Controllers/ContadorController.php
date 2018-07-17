<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contador;
use Cache;
class ContadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contador = Contador::paginate(10);
      
    
        return view('contador.index')
                        ->with('contador',$contador)
                       ; 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contador = new Contador;
       return view('contador.create',["contador"=> $contador]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contador = new Contador;
        $contador->contador = $request->contador;
       
        if($contador->save()){
           
       $contador = Contador::paginate(10);
     
         
        return view('contador.index')
                        ->with('contador',$contador)
                       ;  
             
        }else{
            return view("contador.create");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $variable = Contador::find($id);
      $contador = Contador::paginate(10);
      
      
    if(Cache::has($id)==false){
        Cache::add($id,'contador',0.30);
        $variable->total_visitas++;
        $variable->save();
    }
   
    
     return view('contador.show')
                        ->with('contador',$contador)
                        ->with('variable',$variable)
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
        //
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
        //
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
