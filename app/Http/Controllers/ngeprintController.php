<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ngeprint;
use Auth;
use File;
use Illuminate\Support\Facades\Storage;
class ngeprintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
      $this ->validate($request,[
          'jumlah' => 'required|integer',
          'file' => 'required'
      ]);

      $image = $request->file('file');
      $input['namafile'] = time().'-'.$image->getClientOriginalName();
      $tempat = public_path('dokumen');
      $image->move($tempat,$input['namafile']);

      ngeprint::create([
          'user_id'       =>Auth::user()->id,
          'jumlah'       =>$request->jumlah,
          'file'       =>$input['namafile'] 
      ]);

      return redirect('/welcome');
    }

    public function daftarcetak(){
     if(Auth::user()->level == 'admin'){
        $datas=ngeprint::all();
     }else{
        $datas=ngeprint::where('user_id',Auth::user()->id)->get();
     }
        return view('daftarcetak',compact('datas'));
    }

    public function proses($id){
    $cetak=ngeprint::where('id',$id)->first();

    $cetak->update([
        'status'=>'diproses'
    ]);
    return redirect('/daftar-cetak');
    }

    public function ditolak($id){
    $cetak=ngeprint::where('id',$id)->first();

    $cetak->update([
        'status'=>'ditolak'
    ]);
    return redirect('/daftar-cetak');
    }

    public function selesai($id){
        $cetak=ngeprint::where('id',$id)->first();
    
        $cetak->update([
            'status'=>'selesai'
        ]);
        return redirect('/daftar-cetak');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
