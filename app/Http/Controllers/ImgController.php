<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Img;
use App\Img2;
use Cache;

class ImgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        
       $cover = Img::all();   
      
       
     
         
        return view('Img.index')
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
       $cover = new Img;
       $CodLibro = new Img;
       $nombre = new Img;
       $autor = new Img;
       $ano = new Img;
    


       return view('Img.create')
                        ->with('cover',$cover)
                        ->with('CodLibro',$CodLibro)
                        ->with('nombre',$nombre)
                        ->with('autor',$autor)
                        ->with('ano',$ano);
       
       
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    
   
    
    
    public function store(Request $request)
    {
        $this->validate($request,[
            'CodLibro' => 'required',
            'nombre' => 'required',
            'autor' => 'required',
            'cover' => 'required',
            'ano' => 'required',
        ]);
        
        
        
        
        
        $hasFile =$request->hasFile('cover') && $request->cover->isValid();
        $cover = new Img;
        $cover->cover = $request->cover;
        $cover->CodLibro = $request->CodLibro;
        $cover->nombre = $request->nombre;
        $cover->autor = $request->autor;
        $cover->ano = $request->ano;
      
        
        
        
        
         if($hasFile){
           $extension = $request->cover->extension();
           $cover->extension =  $extension;
       }
       
        if($cover->save()){
            
             if($hasFile){
                $request->cover->storeAs('images',"$cover->id.$extension");
            }
            
            
           
       $cover = Img::all();   
      
       
     
         
        return view('panel.index')
                        ->with('cover',$cover)
                       
                        ;
             
        }else{
            return view("Img.create");
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
        
    }
    
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        

        $cover = Img::find($id);
        $CodLibro = Img::find($id);
        $nombre = Img::find($id);
        $autor = Img::find($id);
        $ano = Img::find($id);

       
       return view('Img.edit')
                ->with('cover',$cover)
                ->with('CodLibro',$CodLibro)
                ->with('nombre',$nombre)
                ->with('autor',$autor)
                ->with('ano',$ano);
        
        
       
        
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
       $this->validate($request,[
                'CodLibro' => 'required',
                'nombre' => 'required',
                'autor' => 'required',
                'cover' => 'required',
                'ano' => 'required',
        ]);
        
        
        $hasFile =$request->hasFile('cover') && $request->cover->isValid();
         $cover = Img::find($id);
         $cover->cover = $request->cover;
         $cover->CodLibro = $request->CodLibro;
         $cover->nombre = $request->nombre;
         $cover->autor = $request->autor;
         $cover->ano = $request->ano;
        
        
        
        
         if($hasFile){
           $extension = $request->cover->extension();
           $cover->extension =  $extension;
       }
       
        if($cover->save()){
            
             if($hasFile){
                $request->cover->storeAs('images',"$cover->id.$extension");
            }
            
            
           
       
       $cover = Img::all();
    
       
      
       
       
        return view('panel.index')
                        
                        ->with('cover',$cover)
                         ;
                       
        }else{
            return view("Img.edit");
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
        Img::destroy($id);

        return redirect('/panel');
    }
}
