<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Perjalanan;
use App\Models\User;

class perjalananController extends Controller
{
    // Public function __construct(){
    //     $this->middleware('authcek');
    // }

    Public function index(){
        if (Auth::check())
        $data = DB::table('perjalanans')
        ->join('users', 'users.id', '=', 'perjalanans.id_user')
        ->select('users.email', 'perjalanans.tanggal', 'perjalanans.jam', 'perjalanans.lokasi', 'perjalanans.suhu')
        ->where('users.id', '=', auth()->user()->id)
        ->get();

        return view('pages.table', ['data'=>$data]);
    }

    Public function perjalanan(){
        return view('pages.forms');
    }

    Public function simpanPerjalanan(Request $request){
        $data=[
            'id_user'=>auth()->user()->id,
            'tanggal'=>$request->tanggal,
            'jam'=>$request->jam,
            'lokasi'=>$request->lokasi,
            'suhu'=>$request->suhu
        ];

        // dd($data);
        Perjalanan::create($data);
        return redirect('/');
    }

    Public function cariPerjalanan(Request $request){

        if (!empty($request->input('lokasi')) && empty($request->input('suhu')) && empty($request->input('tanggal')) && empty($request->input('jam'))) {
            $search = $request->lokasi;

            $data = User::join('perjalanans', 'perjalanans.id_user', '=', 'users.id')
                ->Where(function ($query) use($search) {
                    $query->where('users.id', auth()->user()->id)
                            ->where('perjalanans.lokasi', 'LIKE', '%'.$search.'%');
                })->get(['users.name', 'perjalanans.*']);
            
                if ($data){
                    return view('pages.table', ['data'=>$data])->with('alert', 'data ditemukan');
                }else{
                    abort(404);
                }

        }elseif (empty($request->input('lokasi')) && !empty($request->input('suhu')) && empty($request->input('tanggal')) && empty($request->input('jam'))) {
            $search = $request->suhu;

            $data = User::join('perjalanans', 'perjalanans.id_user', '=', 'users.id')
                ->Where(function ($query) use($search) {
                    $query->where('users.id', auth()->user()->id)
                            ->where('perjalanans.suhu', 'LIKE', '%'.$search.'%');
                })->get(['users.name', 'perjalanans.*']);
            
                if ($data){
                    return view('pages.table', ['data'=>$data])->with('alert', 'data ditemukan');
                }else{
                    abort(404);
                }

        }elseif (empty($request->input('lokasi')) && empty($request->input('suhu')) && !empty($request->input('tanggal')) && empty($request->input('jam'))) {
            $search = $request->tanggal;

            $data = User::join('perjalanans', 'perjalanans.id_user', '=', 'users.id')
                ->Where(function ($query) use($search) {
                    $query->where('users.id', auth()->user()->id)
                            ->where('perjalanans.tanggal', 'LIKE', '%'.$search.'%');
                })->get(['users.name', 'perjalanans.*']);
            
                if ($data){
                    return view('pages.table', ['data'=>$data])->with('alert', 'data ditemukan');
                }else{
                    abort(404);
                }

        }elseif (empty($request->input('lokasi')) && empty($request->input('suhu')) && empty($request->input('tanggal')) && !empty($request->input('jam'))) {
            $search = $request->jam;

            $data = User::join('perjalanans', 'perjalanans.id_user', '=', 'users.id')
                ->Where(function ($query) use($search) {
                    $query->where('users.id', auth()->user()->id)
                            ->where('perjalanans.jam', 'LIKE', '%'.$search.'%');
                })->get(['users.name', 'perjalanans.*']);
            
                if ($data){
                    return view('pages.table', ['data'=>$data])->with('alert', 'data ditemukan');
                }else{
                    abort(404);
                }

        }else {
            $data = DB::table('perjalanans')
                ->join('users', 'users.id', '=', 'perjalanans.id_user')
                ->select('users.email', 'perjalanans.tanggal', 'perjalanans.jam', 'perjalanans.lokasi', 'perjalanans.suhu')
                ->where('users.id', '=', auth()->user()->id)
                ->get();

        return view('pages.table', ['data'=>$data]);
        }

    }

   public function urutkan(request $request){
       {
        $data = perjalanan::all()->where('id_user', '=', auth()->user()->id);

        if($request->input('suhuDesc')){
            $urut = $request->suhu;
            $sorted = $data->SortByDesc('suhu');
            return view('pages.table',['data'=> $sorted->values()->all()]);
        }else if($request->input('suhuAsc')){
            $urut = $request->suhu;
            $sorted = $data->Sortby('suhu');
            return view('pages.table', ['data'=>$sorted->values()->all()]);
        }
        $data = perjalanan::all()->where('id_user', '=', auth()->user()->id);
        if($request->input('tanggalDesc')){
            $urut = $request->tanggal;
            $sorted = $data->SortByDesc('tanggal');
            return view('pages.table',['data' =>$sorted->values()->all()]);
        }else if($request->input('tanggalAsc')){
            $urut = $request->tanggal;
            $sorted = $data->SortBy('tanggal');
            return view('pages.table',['data' =>$sorted->values()->all()]);
        }
        $data = perjalanan::all()->where('id_user', '=', auth()->user()->id);
        if($request->input('jamDesc')){
            $urut = $request->jam;
            $sorted = $data->SortByDesc('jam');
            return view('pages.table',['data' =>$sorted->values()->all()]);
        }else if($request->input('jamAsc')){
            $urut = $request->jam;
            $sorted = $data->SortBy('jam');
            return view('pages.table',['data' =>$sorted->values()->all()]);
        }

        }
       }
   
    }

