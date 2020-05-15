 @extends('layoutmain.main')
@section('title', 'List Data File')
@section('container')


<div id="id01" class="model">
   <form class="modal-content1 animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <a onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</a>

            <div class="container1">
                <div class="row">
                    <div class="col-7">
                            <h1 class="text-center"> List File Document </h1> 
                                <hr class="mt-3">
                             <a href="/dataemail" class="btn1 btn-primary">Back Home</a>
                                <br><br>
                               
                                @if(session('status'))
                                <div class="alert alert-success" role="alert">
                                {{session('status')}}
                                </div>
                                @endif
                            
                                <ul class="list-group">
                                @foreach($datafile as $mhs)
                                <li class="list-group-item d-flex justify-content-between align-items-center" >
                                {{$mhs->nama_file}}
                                <a href="/datafile/{{ $mhs->id}} " class="btn1 btn-info" class="bagde bagde-info" bcmul onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Show File</a>
                            </li>
                                @endforeach
                                </ul>         
                            </div>
                        </div>
                    </div>




<!-- <div class="jumbotron1">
       <div class="container">
            <h1 class="text-center">File Document</h1>
        </div>
    </div>
   
    <div class="col-lg-12-top-2" align ="right">
         <a href="/dataemail" class="btn1 btn-danger">Back Home</a>
    </div>
    <br>

            <table class="table table-bordered">
            <thead>
            @csrf
                <tr>
                <th scope="col">No</th>
                <th scope="col">Name File</th>
                <th scope="col">File</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($datafile as $datafile)
                <tr>
                <th scope="row">{{$datafile->id }}</th>
                <td>{{$datafile->nama_file }}</td>
                <td>{{$datafile->file }}</td>
                <td>{{$datafile->ket }}</td>
                
         <td style="width: 100px;">          
         <a href="/datafile/{{ $datafile->id}} " class="btn1 btn-info" class="bagde bagde-info" bcmul onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Show Profile</a>
      </td>
                </tr>
              @endforeach
              </tbody>
        </table>
@endsection 