<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\store;

class StoreController extends Controller
{
    public function show() {
        $barang = store::all();
        return view("show", ["store"=>$barang, "title"=>"Storage"]);
    }

    public function create(Request $request) {

            $request->validate([
                "namabarang"=>"required",
                "jumlahbarang"=>"required",
                "hargabarang"=>"required",
                "satuanbarang"=>"required"
    
            ]); 
    
            store::create([
                "namabarang"=> $request->namabarang,
                "jumlahbarang"=> $request->jumlahbarang,
                "hargabarang"=> $request->hargabarang,
                "satuanbarang"=> $request->satuanbarang,
            ]);
            
            return redirect('show')->with('status_create', 'Data Berhasil Ditambahkan!');

        // if(empty($request->namabarang)){
        //     return redirect('insert')->with('status_delete', 'Nama Barang Tidak Boleh Kosong!');
        // }if(empty($request->jumlahbarang)){
        //     return redirect('insert')->with('status_delete', 'Jumlah Barang Tidak Boleh Kosong!');
        // }if(empty($request->hargabarang)){
        //     return redirect('insert')->with('status_delete', 'Harga Barang Tidak Boleh Kosong!');
        // }if($request->satuanbarang=="Choose..." || empty($request->satuanbarang)){
        //     return redirect('insert')->with('status_delete', 'Satuan Barang Tidak Boleh Kosong!');
        // }else{
        //     $request->validate([
        //         "namabarang"=>"required",
        //         "jumlahbarang"=>"required",
        //         "hargabarang"=>"required",
        //         "satuanbarang"=>"required"
    
        //     ]); 
    
        //     store::create([
        //         "namabarang"=> $request->namabarang,
        //         "jumlahbarang"=> $request->jumlahbarang,
        //         "hargabarang"=> $request->hargabarang,
        //         "satuanbarang"=> $request->satuanbarang,
        //     ]);
            
        //     return redirect('show')->with('status_create', 'Data Berhasil Ditambahkan!');
    
        // }

    }

    public function delete($id) {
        store::destroy($id);
        return redirect('show')->with('status_delete', 'Data Berhasil Dihapus!');
    }

    public function edit($id) {
        $store = store::where('id', $id)->get();

        return view('update', ["data"=>$store]);
        
    }

    public function update(Request $request, $id)
    {
        $item = $request->all();

    $store = store::findorfail($id)->update($item);

    return redirect("show")->with('status_update', 'Data Berhasil Diperbaharui!');
    }


    public function search(Request $request) {

        // AJAX QUERY

        $output = "";

        $item = store::Where('namabarang','LIKE','%'.$request->search."%")->orWhere('hargabarang','LIKE','%'.$request->search."%")->orWhere('jumlahbarang','LIKE','%'.$request->search."%")->get();

        if(count($item)>0) {
        $nomor=1;
        foreach ($item as $item) {
            $output.=

            '<tr>

            <th scope="row">'.$nomor.'</th>
            <td> '.$item->namabarang.' </td>
            <td> '.$item->jumlahbarang.' </td>
            <td> '.$item->satuanbarang.' </td>
            <td> '.$item->hargabarang.' </td>
            <td>'.'
                <a href="edit/'.$item->id.'"><button type="button" class="badge btn btn-success">'.'Update</button></a>    
            '.'</td>
            <td>'.'
                <a href="delete/'.$item->id.'"><button type="button" class="badge btn btn-danger">'.'Hapus</button></a>    
            '.'</td>

            </tr>';
            $nomor++;
        }
    } else {
        $output.=
        '<tr>


        <td class="text-center" colspan="7"> Tidak Ada Hasil Yang Sesuai! </td>


        </tr>';

    }

        return Response($output);

    }




    public function getubah($id) {
        
        return Response()->json(store::where('id',$id)->get());
    }
}
