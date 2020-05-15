@extends('layoutmain.main')
@section('title','List Complain')

@section('container')

<div id="id01" class="model">
   <form class="modal-content1 animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <a onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</a>

  <h1 class="ml1">
  <span class="text-wrapper">
    <span class="letters">Complaint Message</span>
  </span>
</h1>

<div class="container1">
                <div class="row">
                    <div class="col-7">
                            
                                <hr class="mt-3">
                             <a href="/list" class="btn1 btn-primary">Back Home</a>
                         <br><br>
                               
                                @if(session('status'))
                                <div class="alert alert-success" role="alert">
                                {{session('status')}}
                                </div>
                                @endif
                            
                                <ul class="list-group">
                                @foreach($status as $mhs)
                                <li class="list-group-item d-flex justify-content-between align-items-center" >
                                {{$mhs->nama}}
                                <a href="/status/{{ $mhs->id}} " class="btn1 btn-info" class="bagde bagde-info" bcmul onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Show Message</a>
                            </li>
                                @endforeach
                                </ul>         
                            </div>
                        </div>
                    </div>

@endsection