<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\BaseApi;

class ApotekController extends Controller
{
    public function index()
    {
        $data = (new BaseApi)->index('/api/apoteks');
        $apoteks = $data->json();

        foreach ($apoteks['data'] as &$data) {
            if (is_array($data['obat'])) {
                $data['obat'] = implode(', ', $data['obat']);
            }

            if (is_array($data['harga_satuan'])) {
                $data['harga_satuan'] = implode(', ', $data['harga_satuan']);
            }
        }
        return view('apoteks.index')->with('apoteks', $apoteks['data']);

    }

    public function create()    
    {
        return view('apoteks.create');
    }

    public function store(Request $request)
    {
        $upload = [
            'nama' => $request->nama,
            'rujukan' => $request->rujukan,
            'rumah_sakit' => $request->rumah_sakit,
            'obat' => $request->obat,
            'harga_satuan' => $request->harga_satuan,
            'apoteker' => $request->apoteker,
            
          ];
          
          $baseApi = new BaseApi;
          $response = $baseApi->create('/api/apoteks/store', $upload);
          return redirect('/apoteks')->with('success', 'Berhasil Menambahkan Data!');
    }

    public function show($id)
    {
        $data = (new BaseApi)->detail('/api/apoteks', $id);
        $detail = $data->json();

        return view('apoteks.show')->with('apoteks', $detail['data']);
    }

    public function edit($id)
    {
        $data = (new BaseApi)->detail('/api/apoteks', $id);
        $detail = $data->json();

        return view('apoteks.update')->with('apoteks', $detail['data']);
    }

    public function update(Request $request, $id)    
    {
        $payload = [
            'nama' => $request->nama,
            'rujukan' => $request->rujukan,
            'rumah_sakit' => $request->rumah_sakit,
            'obat' => $request->obat,
            'harga_satuan' => $request->harga_satuan,
            'apoteker' => $request->apoteker,
        ];
        
        $response = (new BaseApi)->update('/api/apoteks/update',$id, $payload);
        if ($response->failed()) {
            $errors = $response->json('data');
    
            return redirect()->back()->with(['errors' => $errors]);
        }
    
        return redirect('apoteks')->with('success', 'Berhasil Mengedit Data!');
    }

    public function destroy($id)
    {
        $data = (new BaseApi)->delete('/api/apoteks/delete', $id);
        $detail = $data->json();

        return redirect()->back()->with('success', 'Berhasil Menghapus Data!');
    }

    public function apotekBanned()
    {

        $data = (new BaseApi)->onlyTrashed('/api/apoteks/trash/all');
        $detail = $data->json();

        foreach ($detail['data'] as &$data) {
            if (is_array($data['obat'])) {
                $data['obat'] = implode(', ', $data['obat']);
            }

            if (is_array($data['harga_satuan'])) {
                $data['harga_satuan'] = implode(', ', $data['harga_satuan']);
            }
        }

        return view('apoteks.apoteksBanned')->with('apoteks', $detail['data']);
    }

    public function restore($id)
    {
        $data = (new BaseApi)->restore('/api/apoteks/trash/restore', $id);
        $detail = $data->json();

        return redirect()->back()->with('success', 'Data dikembalikan!');

    }

    public function permanentDelete($id)
    {
        $data = (new BaseApi)->forceDelete('/api/apoteks/trash/permanent', $id);
        $detail = $data->json();

        return redirect()->back()->with('success', 'Data Terhapus Permanent!');

    }

}
