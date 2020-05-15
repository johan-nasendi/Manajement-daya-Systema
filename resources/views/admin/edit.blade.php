@extends('layoutmain.main')
@section('title', 'Edit User')


@section('container')

<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <h1>Edit data Valley</h1>
            @if(session('status'))
            <div class="alert alert-success" role="alert">
                {{session('status')}}
            </div>
            @endif

            <form action="/proses/{{ $proses->id}}" method="POST">
            @method('patch')
          @csrf
            <div class="model" >
            <div class="modal-content">
           
                  <h2 class="text-center"  style='font-size:48px;color:#44ada8'> Edit User </h2>
                        <hr>
                        <div class="container">
                           <div class="form-row">
                              <div class="form-group col-md-6">
                            <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Your Name" value="{{ $proses->nama }}">
                             </div>
                    
                    <div class="form-group col-md-6">
                        <label for="ttl">Tempat Tanggal Lahir</label>
                             <input type="date" class="form-control" name="ttl" id="ttl" value="{{ $proses->ttl }}" >
                        </div>
                    </div>
                    
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="Your Address" value="{{ $proses->jenis_kelamin }}">
                       </div>
                    
                    <div class="form-group col-md-6">
                        <label for="agama">Agama</label>
                        <input type="text" class="form-control" id="agama" name="agama" placeholder="Your Religion" value="{{ $proses->agama }}">
                      </div>
                 </div>

                        <div class="form-row">
                        <div class="form-group col-md-6">
                         <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Your Address" value="{{ $proses->alamat }}">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="asal">Asal</label>
                        <input type="text" class="form-control" id="asal" name="asal" placeholder="Your Address" value="{{ $proses->asal }}">
                               
                        </div>
                            </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="jabatan">jabatan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Your position" value="{{ $proses->jabatan }}">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="phone">Nomor Telfon</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Your Phone Number"value="{{ $proses->phone}}">
                            </div>
                        </div>

                        <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="status">Status</label>
                            <input type="text" class="form-control" id="status" name="status" placeholder="Your Status" value="{{ $proses->status }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="bio">Bio</label>
                            <input type="text" class="form-control" id="bio" name="bio" placeholder="Your Bio" value="{{ $proses->bio }}">
                        </div>
                        </div>
                        <br><br>
                      
                            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                            <hr>

                            <div class="clearfix">
                                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"><a href="/list" style="color: #ffff;"> Cancel</button>
                                <button type="submit" class="signupbtn"> Update </button>
                            </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </form>

@endsection