@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="{{route('cabang.store')}}"method="post">
                        @csrf
                        <div class="form-group">
                            <label for="inputCabang">Cabang</label>
                            <input type="text" placeholder="Masukan Nama Cabang"
                            name="namaCabang" class="form-control" id="inputcabang"
                            aria-describedby="cabanghelp" required>
                            <small id="cabangHelp" class="form-text text-muted">Nama Cabang Harus Diisi</small>
                        </div>
                        <div class="form-group">
                            <label for="inputIdCabang">ID Cabang</label>
                            <input type="text" placeholder="Masukan ID Cabang"
                            name="idCabang" class="form-control" id="inputcabang"
                            aria-describedby="cabanghelp" required>
                            <small id="cabangHelp" class="form-text text-muted">ID Cabang Harus Diisi</small>
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
