@extends('layoutmain.main')
@section('title','Register User')
@section('container')

<body>
 
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <h1>Edit data Valley</h1>
            @if(session('status'))
            <div class="alert alert-success" role="alert">
                {{session('status')}}
            </div>
            @endif


                  <div class="model" >
                    <div class="modal-content">
                    <form  action="/proses" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <h1 class="ml1">
                    <span class="text-wrapper">
                    <span class="line line1"></span>
                    <span class="letters">REGISTER USERS</span>
                    <span class="line line2"></span>
                  </span>
              </h1>
                          <hr>
                      <div class="container">
                      <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Your Name" value="{{ old('nama') }}">
                      </div>
                    
                      <div class="form-group col-md-6">
                        <label for="ttl">Tempat Tanggal Lahir</label>
                        <input type="date" class="form-control" name="ttl" id="ttl" value="{{ old('ttl') }}" >
                      </div>
                    </div>
                  
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" value="{{ old('jenis_kelamin') }}">
                          <option selected>Choose Your Gender</option>
                          <option>Laki-laki</option>
                          <option >Perempuan</option>
                      </select>
                    </div>
                  
                    <div class="form-group col-md-6">
                        <label for="agama">Agama</label>
                        <input type="text" class="form-control" id="agama" name="agama" placeholder="Your Religion" value="{{ old('agama') }}">
                      </div>
                      </div>

                      <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Your Address" value="{{ old('alamat') }}">
                      </div>
                  
                    <div class="form-group col-md-6">
                    <label for="asal">Asal</label>
                        <select id="asal" name="asal" class="form-control" value="{{ old('asal') }}">
                          <option selected>Choose Your origin</option>
                          <option>Nanggroe Aceh Darussalami</option>
                          <option >Sumatera utara</option>
                          <option >Sumatera barat</option>
                          <option >Sumatera Selatan</option>
                          <option >Kepulauan Riua</option>
                          <option >Jambi</option>
                          <option >Bengkulu</option>
                          <option >Riau<option>
                          <option >Kepulauan Bangka Belitung</option>
                          <option >Lampung</option>
                          <option >DKI Jakarta</option>
                          <option >Jawa Barat</option>
                          <option >Jawa Tengan</option>
                          <option >Jawa  Timur</option>
                          <option >DI Yogyakarta</option>
                          <option >Bali</option>
                          <option >Nusa Tenggara Barta</option>
                          <option >Nusa Tenggara Timur</option>
                          <option >Kalimantan Barat</option>
                          <option >Kalimantan Selatan</option>
                          <option >Kalimantan Tengah</option>
                          <option >Kalimantan Timur</option>
                          <option >Kalimantan Utara</option>
                          <option >Gorontalo</option>
                          <option >Sulawesi Barat</option>
                          <option >Sulawesi Tenggara</option>
                          <option >Sulawesi Tengah</option>
                          <option >Sulawesi Utara</option>
                          <option >Maluku</option>
                          <option >Maluku Utara</option>
                          <option >Papua</option>
                          <option >Papua Barat</option>
                          
                      </select>
                    </div>
                      </div>

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="jabatan">jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Your position" value="{{ old('jabatan') }}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="phone">Nomor Telfon</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Your Phone Number"value="{{ old('number') }}">
                      </div>
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="status">Status</label>
                      <input type="text" class="form-control" id="status" name="status" placeholder="Your Status" value="{{ old('status') }}">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="bio">Bio</label>
                      <input type="text" class="form-control" id="bio" name="bio" placeholder="Your Bio" value="{{ old('bio') }}">
                    </div>

                  
                    <div class="form-group col-md-4">
                      <label for="photo">Photo</label>
                      <input type="file" class="form-control" id="photo" name="photo" value="{{ old('photo') }}">
                    </div>
                    </div>
                
                    
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email"value="{{ old('email') }}" >
                      </div>
                      <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                      </div>
                    </div>

                    <br><br>
                    
                        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                        <hr>

                        <div class="clearfix">
                          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"><a href="/" style="color: #ffff;"> Cancel</button>
                          <button type="submit" class="signupbtn">Sign Up</button>
                        </div>
                      </div>
                    </form>
                    
                  </div>
                  </div>


@endsection