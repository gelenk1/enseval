@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="{{route('cabang.update', ['id'=>$data->id])}}" method="POST">
                        @csrf
                        {{ method_field('PATCH') }}
                        <div class="form-group">
                            <label for="inputCabang">Cabang</label>
                            <input type="text" placeholder="Masukan Nama Divisi"
                            name="namaCabang" class="form-control" id="inputcabang"
                            aria-describedby="cabanghelp" value="{{$data->namaCabang}}"  required>
                            <small id="cabangHelp" class="form-text text-muted">Nama Cabang Harus Diisi</small>
                          </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
