@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="{{route('divisi.update', ['id'=>$data->id])}}" method="POST">
                        @csrf
                        {{ method_field('PATCH') }}
                        <div class="form-group">
                            <label for="inputDivisi">Divisi</label>
                            <input type="text" placeholder="Masukan Nama Divisi"
                            name="namaDivisi" class="form-control" id="inputdivisi"
                            aria-describedby="divisihelp" value="{{$data->namaDivisi}}"  required>
                            <small id="divisiHelp" class="form-text text-muted">Nama Divisi Harus Diisi</small>
                          </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
