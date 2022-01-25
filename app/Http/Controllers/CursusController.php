<?php

namespace App\Http\Controllers;

use App\Models\Cursus;
use Illuminate\Http\Request;

class CursusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursus');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data = \request()->validate([
            'titre_cursus' => 'required',
            'année' => ['required', 'int'],
            'description' => ['required'],
            ''
        ]);
        
            $id=(int)Auth()->user()->id;
        cursus::create([
            'user_id'=> $id, 
            'titre_cursus' => $data['titre_cursus'],
            'année' => $data['année'],
            'description' => $data['description'],
            'type_cursus'=> "académique",
                       
        ]);
        return redirect()->route('profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cursus  $cursus
     * @return \Illuminate\Http\Response
     */
    public function show(Cursus $cursus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cursus  $cursus
     * @return \Illuminate\Http\Response
     */
    public function edit(Cursus $cursus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cursus  $cursus
     * @return \Illuminate\Http\Response
     */
    public function update(Cursus $cursus)
    {
        $data = \request()->validate([
            'titre_cursus' => 'required',
            'année' => ['required', 'int'],
            'description' => ['required'],
        ]);
        $cursus->update(array(
            'titre_cursus' => $data['titre_cursus'],
            'année' => $data['année'],
            'description' => $data['description'],
        ));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cursus  $cursus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cursus $cursus)
    {
        //
    }
}
