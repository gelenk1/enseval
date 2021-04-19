<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cabang;
class CabangController extends Controller
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
        $data = Cabang::get();
        return view('cabang.index', compact('data'));
    }

    public function create()
    {
        return view('cabang.create');
    }
    public function store(Request $request)
    {
        $data = array(
            'namaCabang'=>$request->namaCabang,
            'idCabang'=>$request->idCabang
        );

        Cabang::create($data);
        return redirect('cabang');
    }


    public function edit($id)
    {

        $data = Cabang::where('id', $id)->first();
        return view('cabang.edit', compact('data'));
    }

    public function update($id, Request $request)
    {
        $cabang = Cabang::find($id);
        $cabang->namaCabang = $request->namaCabang;
        $cabang->save();
        return redirect('cabang');
    }

    public function delete($id)
    {
        $cabang = Cabang::find($id);
        $cabang->delete();
        return redirect('cabang');
    }
}
