<?php

namespace App\Http\Controllers;

use App\Models\AvActress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AvActressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	protected $arrAllowExtension = ['jpg' , 'png' , 'jpeg' , 'gif' , 'bmp'];	 
	 
    public function index()
    {
        return view('av.actress_index' , ['avActresses' => AvActress::paginate(20)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('av.actress_create_edit' , ['avActress' => new AvActress]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {	
		$avatar = $request->file('avatar');
		$fileName = $request->name.'.'.$avatar->extension();
		
		if($avatar)
		{
		$path = $avatar->storeAs('Upload', $fileName );
		Storage::move('Upload/'.$fileName , 'public/AVavatars/'.$fileName);
		}
		
        $actress = AvActress::create([
			'name'		=> $request->name,
			'otherName'		=> $request->otherName,
			//'avatar'		=> $request->avatar;
		]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AvActress  $avActress
     * @return \Illuminate\Http\Response
     */
    public function show(AvActress $avActress)
    {
        return view('av.actress_show',['actress' => $avActress]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AvActress  $avActress
     * @return \Illuminate\Http\Response
     */
    public function edit(AvActress $avActress)
    {
        return view('avActress/create_edit' , ['avActress' => $avActress]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AvActress  $avActress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AvActress $avActress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AvActress  $avActress
     * @return \Illuminate\Http\Response
     */
    public function destroy(AvActress $avActress)
    {
        //
    }
}
