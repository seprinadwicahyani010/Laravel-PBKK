<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){
        // Menampilkan daftar member
        $member = Member::all();
        return view('member.index', compact(['member']));
    }

    public function add(){
        // Menampilkan tampilan tambah data member
        return view('member.add');
    }

    public function store(Request $request){
        // Menyimpan data baru ke database
        // dd($request->except(['_token', 'submit'])); // Debugging line (optional)
        Member::create($request->except(['_token', 'submit']));
        return redirect('/member');
    }

    public function update($id){
        // Menampilkan tampilan edit data member
        $member = Member::find($id);
        return view('member.update', compact(['member']));
    }

    public function edit($id, Request $request){
        // Mengupdate data member yang ada di database
        $member = Member::find($id);
        $member->update($request->except(['_token', 'submit']));
        return redirect('/member');
    }

    public function delete($id){
        // Menghapus data dari database
        $member = Member::find($id);
        $member->delete();
        return redirect('/member');
    }
}
