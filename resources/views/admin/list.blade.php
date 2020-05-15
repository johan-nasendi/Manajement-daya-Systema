@extends('layoutmain.main')
@section('title', 'List Karyawan')
@section('container')


 <div id="id01" class="model">
   <form class="modal-content1 animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <a onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</a>

            <div class="container1">
                <div class="row">
                    <div class="col-7">
                            <h1 class="text-center"> List User</h1> 
                                <hr class="mt-3">
                             <a href="/" class="btn1 btn-primary">Back Home</a>
                         <br><br>
                         
                     
                        <hr class="mt-3">
                             <a href="/listcomplaint" class="btn1 btn-primary">List Complaint</a>
                         
                             <br><br>
                               
                                @if(session('status'))
                                <div class="alert alert-success" role="alert">
                                {{session('status')}}
                                </div>
                                @endif
                            
                                <ul class="list-group">
                                @foreach($proses as $mhs)
                                <li class="list-group-item d-flex justify-content-between align-items-center" >
                                {{$mhs->nama}}
                                <a href="/proses/{{ $mhs->id}} " class="btn1 btn-info" class="bagde bagde-info" bcmul onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Show Profile</a>
                            </li>
                                @endforeach
                                </ul>         
                            </div>
                        </div>
                    </div>


@endsection