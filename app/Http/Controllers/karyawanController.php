<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\karyawan;
//import package Crypt
// use Illuminate\Support\Facades\Crypt;

class karyawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('karyawan.index');
    }

    public function data()
    {
        $karyawan = karyawan::orderBy('idKaryawan', 'desc')->get();

        return datatables()
            ->of($karyawan)
            ->addIndexColumn()
            // ->addColumn('idKaryawan', function ($karyawan) {
            //     return ($karyawan->idKaryawan);
            // })
            ->addColumn('namaDepan', function ($karyawan) {
                    return ($karyawan->namaDepan);
            })
            ->addColumn('namaBelakang', function ($karyawan) {
                return ($karyawan->namaBelakang);
    })
    ->addColumn('tempatLahir', function ($karyawan) {
        return ($karyawan->tempatLahir);
})
->addColumn('tanggalLahir', function ($karyawan) {
    return ($karyawan->tanggalLahir);
})
->addColumn('jenkel', function ($karyawan) {
    return ($karyawan->jenkel);
})
->addColumn('alamat', function ($karyawan) {
    return ($karyawan->alamat);
})
->addColumn('ktp', function ($karyawan) {
    return ($karyawan->ktp);
})
            ->addColumn('aksi', function ($karyawan) {
                return '
                <div class="btn-group">
                    <button onclick="editForm(`'. route('karyawans.update', $karyawan->idKaryawan) .'`)" class="btn btn-info btn-xs btn-flat"><i class="fas fa-edit"></i></i></button>
                    <button onclick="deleteData(`'. route('karyawans.destroy', $karyawan->idKaryawan) .'`)" class="btn btn-danger btn-xs btn-flat"><i class="fa fa-trash"></i></button>
                </div>
                ';
            })
            ->rawColumns(['aksi'])
            ->make(true);
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
        $karyawan=karyawan::latest()->first();
        $request['kodeKaryawan']='K'.tambah_nol_didepan((int)$karyawan->idKaryawan+1,6);
        // $karyawan = new karyawan();
        // $karyawan->idkaryawan=$request->idkaryawan;
        // $karyawan->namaDepan = $request->namaDepan;
        // $karyawan->namaBelakang = $request->namaBelakang;
        // $karyawan->namaPanggilan = $request->namaPanggilan;
        // $karyawan->tempatLahir = $request->tempatLahir;
        // $karyawan->tanggalLahir = $request->tanggalLahir;
        // $karyawan->jenkel = $request->jenkel;
        // $karyawan->status = $request->status;
        // $karyawan->agama = $request->agama;
        // $karyawan->pendidikan = $request->pendidikan;
        // $karyawan->alamat = $request->alamat;
        // $karyawan->domisili = $request->domisili;
        // $karyawan->ktp = $request->ktp;
        // $karyawan->npwp = $request->npwp;
        // $karyawan->jamsostek = $request->jamsostek;
        // $karyawan->nomorHandphone = $request->nomorHandphone;
        // $karyawan->nomorDarurat = $request->nomorDarurat;
        // $karyawan->email = $request->email;
        // $karyawan->save();
        $karyawan=karyawan::create($request->all());
        // Crypt::encryptString('karyawan');
        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $karyawan = karyawan::find($id);

        return response()->json($karyawan);
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
        $karyawan = karyawan::find($id);
        $karyawan->namaDepan = $request->namaDepan;
        $karyawan->namaBelakang = $request->namaBelakang;
        $karyawan->namaPanggilan = $request->namaPanggilan;
        $karyawan->tempatLahir = $request->tempatLahir;
        $karyawan->tanggalLahir = $request->tanggalLahir;
        $karyawan->jenkel = $request->jenkel;
        $karyawan->status = $request->status;
        $karyawan->agama = $request->agama;
        $karyawan->pendidikan = $request->pendidikan;
        $karyawan->alamat = $request->alamat;
        $karyawan->domisili = $request->domisili;
        $karyawan->ktp = $request->ktp;
        $karyawan->npwp = $request->npwp;
        $karyawan->jamsostek = $request->jamsostek;
        $karyawan->nomorHandphone = $request->nomorHandphone;
        $karyawan->nomorDarurat = $request->nomorDarurat;
        $karyawan->email = $request->email;
        $karyawan->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karyawan = karyawan::find($id);
        $karyawan->delete();

        return response(null, 204);
    }



}
