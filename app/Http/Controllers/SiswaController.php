<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
   public function index(){
    $siswa = Siswa::with('classroom')->get();
    return view("siswa",['siswalist' => $siswa]);
   }
   public function create(){
     return view('siswa.add');
   }
   public function store(Request $request)
    {
        $request->validate([
            'nis' => ['required', 'unique:siswas,nis', 'numeric'],
            'kode_id' => 'required',
            'name' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
           
           
            
        ]);
        Siswa::create([
            'nis' => $request->nis,
            'kode_id' => $request->kode_id,
            'name' => $request->name,
            'alamat' => $request->alamat,
            'jk' => $request->jk,
            
        ]);

        return redirect('siswa');
    }


    public function Edit($id){
        $siswa = Siswa::findOrFail($id);
        $classrooms = ClassRoom::all();
        return view ('siswa.edit' ,["siswa" => $siswa, "classrooms" => $classrooms]);
    }
    public function Update(Request $request, $id){
        $siswa = Siswa::findOrFail($id);
        $request->validate([
            'nis' => 'required|unique:siswas,nis,'.$siswa->id.'|numeric',
            'kode_id' => 'required',
            'name' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
        ]);
        $siswa->update($request->all());
        return redirect('/siswa');
    }

    public function Delete($id){
        $siswa = Siswa::findOrFail($id);
        $classrooms = ClassRoom::all(); 
        return view ('siswa.delete',['siswa'=> $siswa,'class' => $classrooms]);
    
    }
    public function Destroy($id){
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect('siswa');   
    }

    public function deleteSiswa(){
        $student = Siswa::onlyTrashed()->get();
        return view('restore', ['siswalist'=> $student]);
        

    }
    public function restore($id){
        $student = Siswa::onlyTrashed()->where('id', $id)->restore();
        return redirect('siswa');
    }

    public function forceDeleteStudent($id){   
        $student = Siswa::onlyTrashed()->findOrFail($id);
        $student->forceDelete();
        return redirect('siswa');
    }

}
