@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="{{route('divisi.store')}}"method="post">
                        @csrf
                        <div class="form-group">
                            <label for="inputDivisi">Devisi</label>
                            <input type="text" placeholder="Masukan Nama Divisi"
                            name="namaDivisi" class="form-control" id="inputdivisi"
                            aria-describedby="divisihelp" required>
                            <small id="divisiHelp" class="form-text text-muted">Nama Devisi Harus Diisi</small>
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
