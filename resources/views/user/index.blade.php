@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex">
                        <div class="mr-auto">User</div>
                        <div class="ml-auto"><a class="btn btn-success" href="{{route('user.create')}}">Tambah</a></div>
                </div>

                <div class="table-responsive">
                    <table class="table">
                      <tr>
                          <th>ID</th>
                          <th>NIK</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Email Verifikasi</th>
                          <th>Phone</th>
                          <th>Dibuat</th>
                          <th>Diubah</th>
                          <th>Level</th>
                          <th>Action</th>
                      </tr>
                      @foreach($data as $item)
                      <tr>
                          <td>{{$item->id}}</td>
                          <td>{{$item->nik}}</td>
                          <td>{{$item->name}}</td>
                          <td>{{$item->email}}</td>
                          <td>{{$item->phone}}</td>
                          <td>{{$item->created_at}}</td>
                          <td>{{$item->updated_at}}</td>
                          <td>{{$item->level}}</td>
                          <td style="    white-space: nowrap;
                          display: flex;">
                            <a class="btn btn-sm btn-primary mr-3" href="{{route('user.edit', ['id'=>$item->id])}}">EDIT</a>
                            <form action="{{ route('user.delete', ['id' => $item->id]) }}" method="post">
                                <input class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?');" type="submit" value="Delete" />
                                <input type="hidden" name="_method" value="delete" />
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </td>
                      @endforeach

                    </table>

                  </div>

                </div>
                {{$data->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
