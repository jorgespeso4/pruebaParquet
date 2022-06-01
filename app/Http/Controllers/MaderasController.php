<?php

namespace App\Http\Controllers;

use App\Models\maderas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MaderasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if($request->has('categoria')){
            $datos['maderas'] = maderas::where('categoria','=',$request['categoria'])->get();
        }else{
            $datos['maderas'] = maderas::all(); 
        }
        
        return view('catalogo.index',$datos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('catalogo.crear');
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
        $datosMaderas = request()->except('_token');
        

        if($request->has('stock')){
            $datosMaderas['stock']=1;
        }else{
            $datosMaderas['stock']=0;
        }

        if($request->hasFile('foto')){
            $datosMaderas['foto'] = $request->file('foto')->store('uploads','public');
        }
        maderas::insert($datosMaderas);

        return redirect('maderas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\maderas  $maderas
     * @return \Illuminate\Http\Response
     */
    public function show(maderas $maderas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\maderas  $maderas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $maderas = maderas::findOrFail($id);
        return view('catalogo.edit ', compact('maderas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\maderas  $maderas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosMaderas = request()->except(['_token','_method']);

        
        if($request->hasFile('foto')){
            $maderas = maderas::findOrFail($id);
            Storage::delete('public/'.$maderas->foto);
            $datosMaderas['foto'] = $request->file('foto')->store('uploads','public');
        }

        if($request->has('stock')){
            $datosMaderas['stock']=1;
        }else{
            $datosMaderas['stock']=0;
        }



        maderas::where('id','=',$id)->update($datosMaderas);  
        $maderas = maderas::findOrFail($id);   
        // return view('catalogo.edit',compact('maderas'));

        return redirect('maderas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\maderas  $maderas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        maderas::destroy($id);
        return redirect('maderas');
    }
}
