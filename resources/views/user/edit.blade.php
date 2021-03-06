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
                    <form action="{{route('pengguna.update', ['id'=>$data->id])}}" method="POST">
                        @csrf
                        {{ method_field('PATCH') }}
                        <div class="form-group">
                            <label for="inputUser">User</label>
                            <input type="text" placeholder="Masukan Nama User"
                            name="name" class="form-control" id="inputuser"
                            aria-describedby="userhelp" required value="{{$data->name}}">
                            <small id="userHelp" class="form-text text-muted">Nama User Harus Diisi</small>
                        </div>
                        <div class="form-group">
                            <label for="inputUser">Email</label>
                            <input type="email" placeholder="Masukan Nama Email"
                            name="email" class="form-control" id="inputuser"
                            aria-describedby="userhelp" required value="{{$data->email}}">
                            <small id="userHelp" class="form-text text-muted">Nama Email Harus Diisi</small>
                        </div>
                        <div class="form-group">
                            <label for="inputUser">Nik</label>
                            <input type="text" placeholder="Masukan NIK"
                            name="nik" class="form-control" id="inputuser"
                            aria-describedby="userhelp" required value="{{$data->nik}}">
                            <small id="userHelp" class="form-text text-muted">Nomor NIK Harus Diisi</small>
                        </div>
                        <div class="form-group">
                            <label for="inputUser">Phone</label>
                            <input type="text" placeholder="Masukan No Telpon"
                            name="phone" class="form-control" id="inputuser"
                            aria-describedby="userhelp" required value="{{$data->phone}}">
                            <small id="userHelp" class="form-text text-muted">Nomor Telpon Harus Diisi</small>
                        </div>
                        <div class="form-group">
                            <label for="inputUser">Cabang</label>
                            <select name="cabang" class="form-control">
                                <option disabled> Pilih cabang</option>
                                @foreach ($cabang as $keyCabang=> $itemCabang)
                                    @if(!empty($data->info))
                                        @if($data->info->idCabang==$itemCabang->id)
                                            <option value="{{$itemCabang->id}}" selected>{{$itemCabang->namaCabang}}</option>
                                            @else
                                            <option value="{{$itemCabang->id}}">{{$itemCabang->namaCabang}}</option>
                                        @endif
                                    @else
                                        <option value="{{$itemCabang->id}}">{{$itemCabang->namaCabang}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputUser">Divisi</label>
                            <select name="divisi" class="form-control">
                                <option disabled> Pilih divisi</option>
                                @foreach ($divisi as $keyDivisi=> $itemDivisi)
                                    @if(!empty($data->info))
                                        @if($data->info->idDivisi==$itemDivisi->id)
                                            <option value="{{$itemDivisi->id}}" selected>{{$itemDivisi->namaDivisi}}</option>
                                            @else
                                            <option value="{{$itemDivisi->id}}">{{$itemDivisi->namaDivisi}}</option>
                                        @endif
                                    @else
                                        <option value="{{$itemDivisi->id}}">{{$itemDivisi->namaDivisi}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputUser">Jabatan</label>
                            <select name="jabatan" class="form-control">
                                <option disabled> Pilih jabatan</option>
                                @foreach ($jabatan as $keyJabatan=> $itemJabatan)
                                    @if(!empty($data->info))
                                        @if($data->info->idJabatan==$itemJabatan->id)
                                            <option value="{{$itemJabatan->id}}" selected>{{$itemJabatan->namaJabatan}}</option>
                                            @else
                                            <option value="{{$itemJabatan->id}}">{{$itemJabatan->namaJabatan}}</option>
                                        @endif
                                    @else
                                        <option value="{{$itemJabatan->id}}">{{$itemJabatan->namaJabatan}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputUser">Password</label>
                            <input type="text" placeholder="Masukan Password"
                            name="password" class="form-control" id="inputuser"
                            aria-describedby="userhelp">
                            <small id="userHelp" class="form-text text-muted">Password Harus Diisi</small>
                        </div>
                        <div class="form-group">
                            <label for="inputUser">Confirm Password</label>
                            <input type="text" placeholder="Masukan Password"
                            name="confirmed" class="form-control" id="inputuser"
                            aria-describedby="userhelp">
                            <small id="userHelp" class="form-text text-muted">Konfirmasi password</small>
                        </div>
                        <div class="form-group">
                            <label for="inputUser">Level</label>
                            <select name="level" class="form-control">
                                <option disabled selected> Pilih level</option>
                                @foreach ($level as $keyLevel=> $itemLevel)
                                <option value="{{$keyLevel}}" {{$keyLevel==$data->level ? 'selected' : ''}}>{{$itemLevel}}</option>
                               @endforeach
                          </select>
                               <small id="userHelp" class="form-text text-muted">level Harus Diisi</small>
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
