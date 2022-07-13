<?php

namespace App\Http\Controllers;

use App\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $partner=Partner::all();
        return view('admin.partner.list',compact('partner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partner.create');
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
        //$partner=$request->all();
        if($request->Image){
            $file = $request->file('Image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('partners/',$fileName);
        }else{
            $fileName= " ";
        }
        $partner=[
            'Nom'=> $request->Nom,
            'Adresse'=>$request->Adresse,
            'Type'=>$request->Type,
            'Matricule'=>$request->Matricule,
            'Email'=>$request->Email,
            'Telephone'=>$request->Telephone,
            'Image'=>$fileName,
            'Marge'=>$request->Marge, 
        ];
        Partner::create($partner);
        return back();
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
        $partner=Partner::find($id);
        return view('admin.partner.details', compact('partner'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partner=Partner::find($id);
        return view('admin.partner.edit',compact('partner')) ;       //
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
        $partner = Partner::find($id);
        $data=$request->all();
        $partner->update($data);
        return back();


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
        $partner = Partner::find($id);
        
        $partner->delete();

             return back();


        //
    }
}
