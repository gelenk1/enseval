<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cabang;
use App\Divisi;
use App\Jabatan;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
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
        $data = User::paginate(10);
        return view('user.index', compact('data'));
    }

    public function create()
    {
        $level = User::level();
        $cabang = Cabang::get()->pluck('namaCabang', 'id')->all();
        $divisi = Divisi::get()->pluck('namaDivisi', 'id')->all();
        $jabatan = Jabatan::get()->pluck('namaJabatan', 'id')->all();
        return view('user.create', compact('cabang', 'jabatan', 'divisi', 'level'));
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'phone' => 'required|unique:users',
            'name' => 'required',
            'email' => 'required',
            'nik' => 'required|unique:users',
            'password' => 'required|same:confirmed',
            'level' => 'required',
            'cabang' => 'required',
            'divisi' => 'required',
            'jabatan' => 'required'
        ]);
        $data = array(
            'name'=>$request->name,
            'email'=>$request->email,
            'nik'=>$request->nik,
            'phone'=>$request->phone,
            'password'=>Hash::make($request->password),
            'level'=>$request->level
        );
        $dataInfo = [
            'idDivisi'=>$request->divisi,
            'idCabang'=>$request->cabang,
            'idJabatan'=>$request->jabatan

        ];
        $user = User::create($data);
        $user->info()->create($dataInfo);
        return redirect('user');
    }

    public function edit($id)
    {
        $level = User::level();
        $cabang = Cabang::get()->pluck('namaCabang', 'id')->all();
        $divisi = Divisi::get()->pluck('namaDivisi', 'id')->all();
        $jabatan = Jabatan::get()->pluck('namaJabatan', 'id')->all();
        $data = User::detailUser($id);
        return view('user.edit', compact('data', 'divisi', 'jabatan', 'cabang', 'level'));
    }

    public function update($id, Request $request)
    {
        $validate = $request->validate([
            'phone' => 'required|unique:users,phone,'.$id,
            'name' => 'required',
            'email' => 'required',
            'nik' => 'required|unique:users,nik,'.$id,
            'password' => 'nullable|same:confirmed',
            'level' => 'required',
            'cabang' => 'required',
            'divisi' => 'required',
            'jabatan' => 'required'
        ]);
        $data = array(
            'name'=>$request->name,
            'email'=>$request->email,
            'nik'=>$request->nik,
            'phone'=>$request->phone,
            'level'=>$request->level
        );
        if(!empty($request->password)){
            $data['password'] = Hash::make($request->password);
        }
        $dataInfo = [
            'idDivisi'=>$request->divisi,
            'idCabang'=>$request->cabang,
            'idJabatan'=>$request->jabatan

        ];

        $user = User::find($id);
        $user->updated($data);
        $user->info()->create($dataInfo);
        return redirect('user');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('user');
    }
}
