@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="card">
                <div class="card-header">Tambah Retur <br>
                    <div class="d-flex">
                    <form action="{{route('retur.store')}}"method="post">
                        <button type="submit" class="btn btn-success mr-auto">Simpan</button>
                        <a href="{{route('retur')}}" class="btn btn-success ml-auto">Kembali</a>
                    </div>
                </div>
                <div class="card-body">
                        @csrf
                        <div class="form-group">
                            <label for="inputDraft">No Draft</label>
                            <input type="text" placeholder="Masukan No Draft"
                            name="noDraft" class="form-control" id="inputDraft"
                            aria-describedby="inputDraft" required>
                            <small id="inputDraft" class="form-text text-muted">No draft harus diisi</small>
                        </div>
                        <div class="form-group">
                            <label for="inputNrb">NRB</label>
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <input type="text" placeholder=""
                            name="nrb[]" class="form-control mb-2" id="inputcabang"
                            aria-describedby="inputDraft">
                            <small id="inputDraft" class="form-text text-muted">Nrb harus diisi</small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
