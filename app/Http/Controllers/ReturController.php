<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Retur;
use Illuminate\Support\Facades\Auth;
class ReturController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $info = Auth::user()->info;
        $data = Retur::orderBy('id', 'DESC')->paginate(10);
        return view('retur.index', compact('data', 'info'));
    }

    public function create()
    {
        return view('retur.create');
    }
    public function store(Request $request)
    {
        $data = [];
        $validate = $request->validate([
            'noDraft' => 'required|unique:history',
        ]);
        for ($i=0; $i < count($request->nrb) ; $i++) {
            if(!empty($request->nrb[$i])){
                $data [] = array(
                    'noDraft'=>$request->noDraft,
                    'admin_nik'=>Auth::user()->nik,
                    'admin_create'=>date('Y-m-d H:i:s'),
                    'nrb'=>$request->nrb[$i]
                );
            }
        }

        Retur::insert($data);
        return redirect('retur');
    }

    public function ekspedisiProcess(Request $request)
    {
        $data = Retur::find($request->id);
        $data->ekspedisi_process_nik = Auth::user()->nik;
        $data->ekspedisi_process_create = date('Y-m-d H:i:s');
        $data->save();
        return redirect('retur');
    }

    public function ekspedisiToRetur(Request $request)
    {
        $data = Retur::find($request->id);
        $data->ekspedisi_to_retur_nik = Auth::user()->nik;
        $data->ekspedisi_to_retur_create = date('Y-m-d H:i:s');
        $data->save();
        return redirect('retur');
    }

    public function returToCheck(Request $request)
    {
        $data = Retur::find($request->id);
        $data->retur_check_nik = Auth::user()->nik;
        $data->retur_check_create = date('Y-m-d H:i:s');
        $data->save();
        return redirect('retur');
    }

    public function adminGudangToCheck(Request $request)
    {
        $data = Retur::find($request->id);
        $data->admin_gudang_check_nik = Auth::user()->nik;
        $data->admin_gudang_check_create = date('Y-m-d H:i:s');
        $data->save();
        return redirect('retur');
    }

    public function adminToOracle(Request $request)
    {
        $data = Retur::find($request->id);
        $data->admin_cross_check_nik = Auth::user()->nik;
        $data->admin_cross_check_create = date('Y-m-d H:i:s');
        $data->admin_cross_check_status = 1;
        $data->save();
        return redirect('retur');
    }

    public function edit($id)
    {

        $data = Retur::where('id', $id)->first();
        return view('retur.edit', compact('data'));
    }

    public function update($id, Request $request)
    {
        $cabang = Retur::find($id);
        $cabang->namaCabang = $request->namaCabang;
        $cabang->save();
        return redirect('cabang');
    }

    public function delete($id)
    {
        $cabang = Retur::find($id);
        $cabang->delete();
        return redirect('cabang');
    }
}
