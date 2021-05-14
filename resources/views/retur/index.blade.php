@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex">
                        <div class="mr-auto">Retur</div>
                        <div class="ml-auto"><a class="btn btn-success" href="{{route('retur.create')}}">Tambah</a></div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                      <tr>
                          <th>ID</th>
                          <th>NIK</th>
                          <th>Tanggal</th>
                          <th>No Draft</th>
                          <th>Nrb</th>
                          <th>Pick Up</th>
                          <th>Deliver To retur</th>
                          <th>Retur Check</th>
                          <th>Admin Gudang Check</th>
                          <th>Cross Check To Oracle</th>
                          <th>CN</th>
                          <th>Keterangan</th>
                          <th>Action</th>
                      </tr>
                      @foreach($data as $item)
                      <tr>
                          <td>{{$item->id}}</td>
                          <td>{{$item->admin_nik}}</td>
                          <td>{{$item->admin_create}}</td>
                          <td>{{$item->noDraft}}</td>
                          <td>{{$item->nrb}}</td>
                          <td>{{$item->ekspedisi_process_create}}</td>
                          <td>{{$item->ekspedisi_to_retur_create}}</td>
                          <td>{{$item->retur_check_create}}</td>
                          <td>{{$item->admin_gudang_check_create}}</td>
                          <td>{{$item->admin_cross_check_create}}</td>
                          <td>{{$item->admin_fa_cn_create}}</td>
                          <td>{{$item->keterangan}}</td>
                          <td style="    white-space: nowrap;
                          display: flex;">
                            @if($info->idDivisi==3)
                            <a class="btn btn-sm btn-primary mr-3" href="{{route('cabang.edit', ['id'=>$item->id])}}">EDIT</a>
                            <form action="{{ route('cabang.delete', ['id' => $item->id]) }}" method="post">
                                <input class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?');" type="submit" value="Delete" />
                                <input type="hidden" name="_method" value="delete" />
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                            @endif
                            @if($info->idDivisi==6 && $info->idJabatan==1 && empty($item->ekspedisi_process_create))
                            <form action="{{ route('retur.ekspedisiProcess', ['id' => $item->id]) }}" method="post">
                                <input class="btn btn-sm btn-primary" onclick="return confirm('Are you sure you want to process pickup this item?');" type="submit" value="Pickup" />
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                            @endif
                            @if($info->idDivisi==6 && $info->idJabatan==1 && !empty($item->ekspedisi_process_create) && empty($item->ekspedisi_to_retur_create))
                            <form action="{{ route('retur.ekspedisiToRetur', ['id' => $item->id]) }}" method="post">
                                <input class="btn btn-sm btn-success" onclick="return confirm('Are you sure you want to process send to warehouse this item?');" type="submit" value="Send to Warehouse" />
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                            @endif
                            @if($info->idDivisi==2 && $info->idJabatan==4 && !empty($item->ekspedisi_to_retur_create) && empty($item->retur_check_create))
                            <form action="{{ route('retur.returToCheck', ['id' => $item->id]) }}" method="post">
                                <input class="btn btn-sm btn-primary" onclick="return confirm('Are you sure you want to process check this item?');" type="submit" value="Check Item" />
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                            @endif
                            @if($info->idDivisi==2 && $info->idJabatan==5 && !empty($item->retur_check_create) && empty($item->admin_gudang_check_create))
                            <form action="{{ route('retur.adminGudangToCheck', ['id' => $item->id]) }}" method="post">
                                <input class="btn btn-sm btn-success" onclick="return confirm('Are you sure you want to process check this item?');" type="submit" value="Check Item" />
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                            @endif
                            @if($info->idDivisi==3 && !empty($item->retur_check_create) && !empty($item->admin_gudang_check_create) && empty($item->admin_cross_check_create))
                            <form action="{{ route('retur.adminToOracle', ['id' => $item->id]) }}" method="post">
                                <input class="btn btn-sm btn-success ml-3" onclick="return confirm('Are you sure you want to process check this item?');" type="submit" value="Check Item" />
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                            @endif
                        </td>
                      @endforeach

                     </table>
                  </div>
                  {{$data->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
