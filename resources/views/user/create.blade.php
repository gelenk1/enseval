@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    <form action="{{route('user.store')}}"method="post">
                        @csrf
                        <div class="form-group">
                            <label for="inputUser">User</label>
                            <input type="text" placeholder="Masukan Nama User"
                            name="name" class="form-control" id="inputuser"
                            aria-describedby="userhelp" required>
                            <small id="userHelp" class="form-text text-muted">Nama User Harus Diisi</small>
                        </div>
                        <div class="form-group">
                            <label for="inputUser">Email</label>
                            <input type="email" placeholder="Masukan Nama Email"
                            name="email" class="form-control" id="inputuser"
                            aria-describedby="userhelp" required>
                            <small id="userHelp" class="form-text text-muted">Nama Email Harus Diisi</small>
                        </div>
                        <div class="form-group">
                            <label for="inputUser">Nik</label>
                            <input type="text" placeholder="Masukan NIK"
                            name="nik" class="form-control" id="inputuser"
                            aria-describedby="userhelp" required>
                            <small id="userHelp" class="form-text text-muted">Nomor NIK Harus Diisi</small>
                        </div>
                        <div class="form-group">
                            <label for="inputUser">Phone</label>
                            <input type="text" placeholder="Masukan No Telpon"
                            name="phone" class="form-control" id="inputuser"
                            aria-describedby="userhelp">
                            <small id="userHelp" class="form-text text-muted">Nomor Telpon Harus Diisi</small>
                        </div>
                        <div class="form-group">
                            <label for="inputUser">Cabang</label>
                            <select name="cabang" class="form-control">
                                <option disabled selected> Pilih cabang</option>
                                @foreach ($cabang as $key=> $itemCabang)
                                <option value="{{$key}}">{{$itemCabang}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputUser">Divisi</label>
                            <select name="divisi" class="form-control">
                                <option disabled selected> Pilih divisi</option>
                                @foreach ($divisi as $key=> $itemDivisi)
                                <option value="{{$key}}">{{$itemDivisi}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputUser">Jabatan</label>
                            <select name="jabatan" class="form-control">

                                <option disabled selected> Pilih jabatan</option>
                                @foreach ($jabatan as $key=> $itemJabatan)
                                <option value="{{$key}}">{{$itemJabatan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputUser">Password</label>
                            <input type="text" placeholder="Masukan Password"
                            name="password" class="form-control" id="inputuser"
                            aria-describedby="userhelp" required>
                            <small id="userHelp" class="form-text text-muted">Password Harus Diisi</small>
                        </div>
                        <div class="form-group">
                            <label for="inputUser">Confirm Password</label>
                            <input type="text" placeholder="Masukan Password"
                            name="confirmed" class="form-control" id="inputuser"
                            aria-describedby="userhelp" required>
                            <small id="userHelp" class="form-text text-muted">Konfirmasi password</small>
                        </div>
                        <div class="form-group">
                            <label for="inputUser">Level</label>
                            <select name="level" class="form-control">
                                <option disabled selected> Pilih level</option>
                                @foreach ($level as $key=> $itemLevel)
                                <option value="{{$key}}">{{$itemLevel}}</option>
                               @endforeach
                          </select>
                               <small id="userHelp" class="form-text text-muted">level Harus Diisi</small>
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
