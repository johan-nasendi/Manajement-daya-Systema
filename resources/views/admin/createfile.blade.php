 @extends('layoutmain.main')
@section('title', 'Create Data File')
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
                     <form  action="/datafile" method="POST" enctype="multipart/form-data">
                     {{ csrf_field() }}
                    
                     <h1 class="ml1">
                    <span class="text-wrapper">
                    <span class="line line1"></span>
                    <span class="letters">REGISTER FILE</span>
                    <span class="line line2"></span>
                  </span>
              </h1>
                       <div class="container">
                       <div class="form-row">

                       <div class="form-group col-md-6">
                         <label for="nama_file">File Name </label>
                         <input type="text" class="form-control" name="nama_file" id="nama_file" placeholder="Your Name File" value="{{ old('nama_file') }}">
                       </div>
                     
                     <div class="form-group col-md-4">
                       <label for="file">Upload File</label>
                       <input type="file" class="form-control" id="file" name="file" value="{{ old('file') }}">
                     </div>
                     </div>

                     <div class="form-group col-md-6">
                         <label for="ket">Information</label>
                         <textarea type="text" class="form-control" name="ket" id="ket" value="{{ old('ket') }}" ></textarea>
                       </div>
                     </div>
                     
                         <p>By Kasuari Production<a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                         <hr>
 
                         <div class="clearfix">
                           <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn"><a href="/dataemail" style="color: #ffff;"> Cancel</button>
                           <button type="submit" class="signupbtn">Sign Up</button>
                         </div>
                       </div>
                     </form>
                     
                   </div>
                   </div>

@endsection 