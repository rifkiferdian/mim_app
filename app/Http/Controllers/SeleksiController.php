<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Seleksi;

use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SeleksiController extends Controller
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
    public function index()
    {
        
            $nama = Auth::user()->name;
            $data = Seleksi::all();
            return view('pages/seleksi/list_seleksi', [   
                'name' => $nama,
                'data' => $data
            ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_seleksi()
    {
            $nama = Auth::user()->name;
            return view('pages/seleksi/form_add_seleksi', [   
                'name' => $nama,
            ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $input = new Seleksi;
        $input->uid = $request->uid;
        $input->fullname = $request->uid;
        $input->fokus = $request->fokus;
        $input->asal_kota = $request->asal_kota;
        $input->asal_sekolah = $request->asal_sekolah;
        $input->ttl = $request->ttl;
        $input->cita_cita = $request->cita_cita;
        $input->motto = $request->motto;
        $input->hobi = $request->hobi;
        $input->email = $request->email;
        $input->hp = $request->number;
        $input->status = 'seleksi';
        $input->save();

        return redirect('/seleksi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profile($id)
    {
        $data = Seleksi::find($id);
        $nama = Auth::user()->name;
            return view('pages/seleksi/profile_seleksi', [   
                'name' => $nama,
                'data' => $data
            ]);
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
        $flight = Seleksi::find($id);
        $flight->delete();
        return redirect('/seleksi');
    }
}
