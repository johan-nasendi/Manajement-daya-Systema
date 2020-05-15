<?php

namespace App\Http\Controllers;

use App\Proses;
use App\Datafile;
use App\Status;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class prosescontrolle extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $proses = DB::table('list')->get();
        $proses = Proses::all();
        return view('admin.list',compact('proses'));
    }

  
    public function listfile()
    {
         $datafile = Datafile::all();
        return view('admin.listfile',compact('datafile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }
// Create Data file
    public function createfile()
    {
        return view('admin.createfile');
    }
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'phone'=>'required|size:12',
             'photo' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
            
			
        ]);
             
        $proses = new Proses;
         $proses->nama = $request->nama;
         $proses->ttl = $request->ttl;
         $proses->jenis_kelamin = $request->jenis_kelamin;
         $proses->agama = $request->agama;
         $proses->alamat= $request->alamat;
         $proses->asal= $request->asal;
         $proses->jabatan = $request->jabatan;
         $proses->phone = $request->phone;
         $proses->status= $request->status;
         $proses->bio = $request->bio;
        
         if($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            $file->move('assest/img/',$filename);
            $proses->photo = $filename;
        }
            else {
                return ' failed';
               $proses->photo ='';
            }

         $proses->email = $request->email;
         $proses->password = $request->password;
         $proses->save();
         return view('admin.home')->with('status','Data Successfully Added');
    }

    // Store Pluss data file

    Public function tambah( Request $request) {
            
        $this->validate($request, [
                'file'=> 'required',
            ]);

            $datafile = new Datafile;
            $datafile->nama_file = $request->nama_file;
           
            if($request->hasFile('file')) {
                $file = $request->file('file');
                $extension = $file->getClientOriginalExtension();
                $filename = time(). '.' . $extension;
                $file->move('assest/datafile/',$filename);
                $datafile->file = $filename;
            }
                else {
                    return ' Gagal Upload File';
                   $datafile->file ='';
                }
                $datafile->ket = $request->ket;
                $datafile->save();
                return view('admin.home')->with('status','Data File Successfully Added');
    }
    
   

    /**
     * Display the specified resource.
     *
     * @param  \App\Proses  $proses
     * @return \Illuminate\Http\Response
     */
    public function show(Proses $proses)
    {
        return view('admin.showprofile', compact('proses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proses  $proses
     * @return \Illuminate\Http\Response
     */
    public function edit(Proses $proses)
    {
        return view('admin.edit', compact('proses'));
    }

    public function display(Datafile $datafile)
    {
        return view('admin.showfile', compact('datafile'));
    }
    
    

    public function tampil(Datafile $datafile)
    {
        return view('admin.editfile', compact('datafile'));
    }


// ubah datafile

public function ganti(Request $request, $id)
    {
        $datafile = Datafile::find($id);
        $datafile->update( $request->all());
        return redirect('/listfile')->with('status','Data Successfully update');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proses  $proses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $proses = Proses::find($id);
        $proses->update( $request->all());
        return redirect('/list')->with('status','Data Successfully update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proses  $proses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proses $proses)
    {
        Proses::destroy($proses->id);
        return redirect('/list')->with('status', 'Data Successfully delete');
    }

    // hapus datafile
    public function hapus(Datafile $datafile)
    {
        Datafile::destroy($datafile->id);
        return redirect('/listfile')->with('status', 'Data Successfully delete');
    }


}
