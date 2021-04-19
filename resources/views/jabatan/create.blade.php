@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="{{route('jabatan.store')}}"method="post">
                        @csrf
                        <div class="form-group">
                            <label for="inputJabatan">Jabatan</label>
                            <input type="text" placeholder="Masukan Nama Jabatan"
                            name="namaJabatan" class="form-control" id="inputjabatan"
                            aria-describedby="jabatanhelp" required>
                            <small id="jabatanHelp" class="form-text text-muted">Nama Jabatan Harus Diisi</small>
                          </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a haref="submit" class="btn btn-success">Simpan</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
