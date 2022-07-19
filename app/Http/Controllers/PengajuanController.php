<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPengajuan;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Pengajuan.data-pengajuan',[
            'datas' => DataPengajuan::paginate(2)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pengajuan.form-pengajuan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nm = $request->bukti_surat;
        $namafile =time().rand(100,999).".".$nm->getClientOriginalName();

            $datawisata = new DataPengajuan;
            $datawisata->nama_ketua = $request->nama_ketua;
            $datawisata->jumlah_rombongan = $request->jumlah_rombongan;
            $datawisata->telp = $request->telp;
            $datawisata->email = $request->email;
            $datawisata->tujuan = $request->tujuan;
            $datawisata->maksud_tujuan = $request->maksud_tujuan;
            $datawisata->bukti_surat = $namafile;

            $nm->move(public_path().'/img', $namafile);
            $datawisata->save();
        return redirect('/data-pengajuan');
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
        $data = DataPengajuan::findorfail($id);
       return view('pengajuan.edit-pengajuan', compact('data'));
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
        $ubah = DataPengajuan::findorfail($id);
        $awal = $ubah->bukti_surat;

        $data = [
            'nama_ketua'=> $request['nama_ketua'],
            'jumlah_rombongan'=> $request['jumlah_rombongan'],
            'telp'=> $request['telp'],
            'email'=> $request['email'],
            'tujuan'=> $request['tujuan'],
            'maksud_tujuan'=> $request['maksud_tujuan'],
            'bukti_surat'=> $awal,
        ];

        $request->bukti_surat->move(public_path().'/img', $awal);
        $ubah->update($data);

        return redirect('/dataPengajuan')->with('toast_success', 'Data Berhasil Diubah!');
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
