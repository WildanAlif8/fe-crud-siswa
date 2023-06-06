<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\BaseApi;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = (new BaseApi)->index('/api/siswa');
        $siswas = $data->json();
        
        return view('index')->with(['siswas' => $siswas['data']]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'nis' => $request->nis,
            'nama' => $request->nama,
            'rombel' => $request->rombel,
            
        ];
        $proses = (new BaseApi)->store('/api/siswa/create', $data);
        if ($proses->failed()) {
            $errors = $proses->json('data');
            return redirect()->back()->with(['errors' => $errors]);
        } else {
            return redirect('/')->with('success', 'Berhasil menambahkan data baru ke student API');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'id' => $id
        ];
        $response = (new BaseApi)->show('/api/siswa/show/'.$id, $data);


        return view('edit')->with('siswa', $response['data']);

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
        // data yang akan dikirim ($request ke REST APInya)
        $payload = [
            'nis' => $request->nis,
            'nama' => $request->nama,
            'rombel' => $request->rombel,
        ];
        // panggil method update dari BaseApi, kirim endpoint (route update dari REST APInya) dan data ($payload diatas)
        $proses = (new BaseApi)->update('/api/siswa/update/'.$id, $payload);
        if ($proses->failed()) {
            // kalau gagal, balikin lagi sama pesan errors dari json nya
            $errors = $proses->json('data');
            return redirect()->back()->with(['errors' => $errors]);
        }else {
            // berhasil, balikin ke halaman paling awal dengan pesan
            return redirect('/')->with('success', 'Berhasil mengubah data siswa dari API');
        }
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proses = (new BaseApi)->delete('/api/siswa/delete/'.$id);
        if ($proses->failed()) {
            $errors = $proses->json('data');
             return redirect()->back()->with(['errors' => $errors]);
         } else {
            return redirect('/')->with('success', 'Berhasil menghapus data siswa dari API');
        }
    }
}