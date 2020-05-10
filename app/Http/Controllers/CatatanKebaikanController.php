<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CatatanKebaikan;
use Auth;
use App\User;

class CatatanKebaikanController extends Controller
{
    
    public function viewPageCatatanKebaikanSiswa($id)
    {
        if(Auth::user()->role=='pembina'){
            $user = User::find($id);
            
            $catatanKebaikan = CatatanKebaikan::where([
                ['user_id', $user],
                ['jenis', '=', 'Baik']
            ])->get();

            $catatanKeburukan = CatatanKebaikan::where([
                ['user_id', $user],
                ['jenis', '=', 'Buruk']
            ])->get();
            
            // dd($catatanKeburukan);
        }
        
        elseif(Auth::id() == $id){
            $userId = Auth::user()->id;
    
            $user = Auth::user();
    
            $catatanKebaikan = CatatanKebaikan::where([
                ['user_id',$userId],
                ['jenis', '=', 'Baik']
            ])->get();
            
            $catatanKeburukan = CatatanKebaikan::where([
                ['user_id',$userId],
                ['jenis', '=', 'Buruk']
            ])->get();
            
            // dd($catatanKebaikan);
        }
        else{
           //back 
            return redirect()->back();
        }

        return view('catatanKebaikan.catatanKebaikanSiswa', compact(['catatanKebaikan', 'catatanKeburukan', 'user']));
    }

    public function viewPageTambahCatatanKebaikanSiswa($userId)
    {
        $user = User::find($userId);
        return view('catatanKebaikan.tambahCatatanKebaikanSiswa');
    }

    public function postCatatanKebaikanSiswa($id, Request $request)
    {
        
        $this->validate($request, [
            'jenis' => 'max:25',
            'kegiatan' => 'max:40',
            'keterangan' => 'max:100',
        ]);
        $catatan = new CatatanKebaikan();
        $catatan->user_id = Auth::user()->id;
        $catatan->jenis = $request->input('jenis');
        $catatan->kegiatan = $request->input('kegiatan');
        $catatan->keterangan = $request->input('keterangan');
        $catatan->save();
        $user = User::find($id);

        return redirect()->route('viewCatatanKebaikanSiswa', [Auth::user()->id])->with('sukses', 'Catatan Kebaikan Berhasil ditambahkan!');
    }

    public function viewUpdateCatatan($userId, $id)
    {
       $user = User::find($userId);
       $catatan = CatatanKebaikan::find($id);
       return view('catatanKebaikan.editCatatanKebaikanSiswa', compact('catatan'));
    }

    public function updateCatatan(Request $request, $userId, $id)
    {
        $user = User::find($userId);
        $catatan = CatatanKebaikan::find($id);
        $catatan->update([
            'jenis'      => request('jenis'),
            'kegiatan'     => request('kegiatan'),
            'keterangan'     => request('keterangan'),
        ]);
        
        return redirect()->route('viewCatatanKebaikanSiswa', [Auth::user()->id])->with('sukses', 'Catatan Kebaikan Berhasil diupdate!');
    }

    public function hapusCatatan($userId, $id)
    {
        $user = User::find($userId);
        $catatan = CatatanKebaikan::find($id);
        $catatan->delete();
        return redirect()->route('viewCatatanKebaikanSiswa', [Auth::user()->id])->with('sukses', 'Data Berhasil Dihapus!');
    }
}
