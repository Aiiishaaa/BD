<?php

namespace App\Http\Controllers;
use App\Coment;//Appel la class Coment
use App\user;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class ComentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coment= Coment::create($request->all());
    
        return redirect('ComChange')->with('status', 'Votre commentaire a été bien ajouté!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function show(Coment $coment)
    {
        return view('coments.show',compact('coment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function edit(Coment $coment)
    {
        return view ('coments.edit', compact('coment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coment $coment)
    {
            $coment->update($request->all());
            return redirect('ComChange')->with('status_update', 'Votre commentaire a été bien modifié!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coment $coment)
    {
        $coment->delete();
        return back()->with('status_delete', 'Votre commentaire a été bien supprimé!');

    }
}

