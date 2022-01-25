<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\users;
=======
use App\Models\User;
use App\Models\Cursus;
>>>>>>> 7b3ed63036821fb2ddd1fb50a88013e316772c4d

class ProfileController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    /*public function index(){
    $profile = users::latest()->get();
    return view('profile', ['profile' => $profile]);
    }*/
=======
    public function index($id = null)
    {   
        if(empty($id)){
            $id = Auth()->user()->id;
        }

        $cursus_aca = User::find($id)->cursuses->where('type_cursus', 'académique');
        $cursus_pro = User::find($id)->cursuses->where('type_cursus', 'professionnel');
        $user=User::find($id);
        
        return view('profile',compact('user','cursus_pro','cursus_aca'));
    }
>>>>>>> 7b3ed63036821fb2ddd1fb50a88013e316772c4d

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
        $profile = users::findOrFail($id);
        return view('profile', ['profile' => $profile]);
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
