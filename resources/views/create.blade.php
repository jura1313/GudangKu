@extends('template.template')


@section('content')
    <form method="POST" action="{{ url("/create") }}">
        @csrf
        <div class="container col-5">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" name="namabarang" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Jumlah Barang</label>
                <input type="text" class="form-control" name="jumlahbarang" id="exampleInputPassword1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Harga Barang</label>
                    <input type="text" class="form-control" name="hargabarang" id="exampleInputPassword1" required>
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Satuan</label>
                    <select class="form-select" id="inputGroupSelect01" name="satuanbarang">
                      <option selected>Choose...</option>
                      <option value="Kilogram">Kilogram</option>
                      <option value="Piece">Piece</option>
                      <option value="Liter">Liter</option>
                      <option value="Lembar">Lembar</option>
                      <option value="Karton">Karton</option>
                      <option value="Krat">Krat</option>
                    </select>
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        
        </div>

    </form>

@endsection
