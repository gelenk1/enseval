<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Divisi;
class DivisiController extends Controller
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
        $data = Divisi::get();
        return view('divisi.index', compact('data'));
    }

    public function create()
    {
        return view('divisi.create');
    }
    public function store(Request $request)
    {
        $data = array(
            'namaDivisi'=>$request->namaDivisi
        );
        Divisi::create($data);
        return redirect('divisi');
    }

    public function edit($id)
    {

        $data = Divisi::where('id', $id)->first();
        return view('divisi.edit', compact('data'));
    }

    public function update($id, Request $request)
    {
        $divisi = Divisi::find($id);
        $divisi->namaDivisi = $request->namaDivisi;
        $divisi->save();
        return redirect('divisi');
    }

    public function delete($id)
    {
        $divisi = Divisi::find($id);
        $divisi->delete();
        return redirect('divisi');
    }
}
