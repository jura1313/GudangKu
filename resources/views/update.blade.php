@extends('template.template2')


@section('content')

@foreach($data as $item)
    <form method="POST" action="{{ url("/update/$item->id") }}">
        @csrf
        <div class="container col-5">
            <a href="{{ url("/show") }}" class="btn btn-danger btn-sm form-label">Back</a> 

            <div class="mb-3 mt-5">



                <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" name="namabarang" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $item->namabarang }}" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Jumlah Barang</label>
                <input type="text" class="form-control" name="jumlahbarang" id="exampleInputPassword1" value="{{ $item->jumlahbarang }}" required>
            </div>
            <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Harga Barang</label>
                    <input type="text" class="form-control" name="hargabarang" id="exampleInputPassword1" value="{{ $item->hargabarang }}" required>
            </div>
            <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Satuan</label>
                    <select class="form-select" id="inputGroupSelect01" name="satuanbarang" value="{{ $item->satuanbarang }}">
                      <option value="{{ $item->satuanbarang }}">Choose...</option>
                      <option value="Kilogram">Kilogram</option>
                      <option value="Piece">Piece</option>
                      <option value="Liter">Liter</option>
                      <option value="Lembar">Lembar</option>
                      <option value="Karton">Karton</option>
                      <option value="Krat">Krat</option>
                    </select>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>


        
        </div>

    </form>
    @endforeach

@endsection
