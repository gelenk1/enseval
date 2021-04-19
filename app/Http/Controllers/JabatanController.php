<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jabatan;
class JabatanController extends Controller
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
        $data = Jabatan::paginate(10);
        return view('jabatan.index', compact('data'));
    }

    public function create()
    {
        return view('jabatan.create');
    }
    public function store(Request $request)
    {
        $data = array(
            'namaJabatan'=>$request->namaJabatan
        );
        Jabatan::create($data);
        return redirect('jabatan');
    }

    public function edit($id)
    {

        $data = Jabatan::where('id', $id)->first();
        return view('jabatan.edit', compact('data'));
    }

    public function update($id, Request $request)
    {
        $jabatan = Jabatan::find($id);
        $jabatan->namaJabatan = $request->namaJabatan;
        $jabatan->save();
        return redirect('jabatan');
    }

    public function delete($id)
    {
        $jabatan = Jabatan::find($id);
        $jabatan->delete();
        return redirect('jabatan');
    }
}
