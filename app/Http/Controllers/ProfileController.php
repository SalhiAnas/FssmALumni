<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cursus;

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
    public function index($id = null)
    {   
        if(empty($id)){
            $id = Auth()->user()->id;
        }

        $user=User::find($id);
        
        $cursus_aca = User::find($id)->cursuses->where('type_cursus', 'académique');
        $cursus_pro = User::find($id)->cursuses->where('type_cursus', 'professionnel');
        return view('profile',compact('user','cursus_aca','cursus_pro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
        
    }

    public function update_user()
    {
        $data = \request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'cin' => 'required',
        ]);
        $user = Auth()->user();
        $user->first_name=$data['first_name'];
        $user->last_name =$data['last_name'];
        $user->phone=$data['phone'];
        $user->cin=$data['cin'];
        $user->save();
        return redirect()->route('home');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add_cursus($type_cursus)
    {
        $data = \request()->validate([
            'titre_cursus' => 'required',
            'année' => ['required', 'int'],
            'description' => ['required'],
            
        ]);
        
        $id=(int)Auth()->user()->id;
        cursus::create([
            'user_id'=> $id, 
            'titre_cursus' => $data['titre_cursus'],
            'année' => $data['année'],
            'description' => $data['description'],
            'type_cursus'=> $type_cursus,
                       
        ]);
        return redirect()->route('profileAuth');
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
