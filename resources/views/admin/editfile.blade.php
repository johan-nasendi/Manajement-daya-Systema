@extends('layoutmain.main')
@section('title', 'Edit Data File')
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
                     <div class="modal-content1">
                     <form  action="/datafile/{{ $datafile->id}}" method="POST" >
                     @method('patch')
                        @csrf
                    
                    
                         <h3 class="text-center"  style='font-size:38px;color:#44ada8'> Edit File Document </h3>
                           <hr>
                       <div class="container">
                       <div class="form-row">

                       <div class="form-group col-md-6">
                         <label for="nama_file">File Name </label>
                         <input type="text" class="form-control" name="nama_file" id="nama_file"  value="{{ $datafile->nama_file }}">
                       </div>
                     
                     <div class="form-group col-md-4">
                       <label for="file">Edit File</label>
                       <input type="file" class="form-control" id="file" name="file" value="{{$datafile->file}}">
                     </div>
                     </div>

                     <div class="form-group col-md-6">
                         <label for="ket">Information</label>
                         <textarea type="text" class="form-control" name="ket" id="ket" >{{ $datafile->ket }}</textarea>
                       </div>
                     </div>
                     
                         <p>By Kasuari Production<a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                         <hr>
 
                         <div class="clearfix">
                           <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn"><a href="/dataemail" style="color: #ffff;"> Cancel</button>
                           <button type="submit" class="signupbtn">Update</button>
                         </div>
                       </div>
                     </form>
                     
                   </div>
                   </div>

@endsection 