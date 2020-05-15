@extends('layoutmain.main')
@section('title','Pengaduan Karyawan');

@section('container')
<div class="model" >
<div class="modal-content">
<div class="jumbotron1 jumbotron-fluid">
            <div class="container">
            <div id="particles-js">
                <div class="row">
                    <div class="col-sm-12">
                    <h1 class="ml1">
                        <span class="text-wrapper">
                        <span class="letters">Employee Complaints</span>
                    </span>
                </h1>
                    </div>
                </div>
            </div>


                @if(Session::has('status'))
                <div class="alert alert-success">{{ Session::get('status') }}</div>
                @endif
               
                <form action="/status" method="post"  enctype="multipart/form-data">

                    {{ csrf_field() }}

                    <label for="nama">Name</label>
                    <input class="form-control" type="text" name="nama" placeholder="you name" />
            
                    
                    <label for="status">Message</label>
                    <textarea class="form-control" name="status" id="" placeholder="your message" cols="30" rows="10"></textarea>

                

                    <button type="submit" class="btn2 btn-success btn-block">Send</button>
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn"><a href="/" style="color: #ffff;"> Cancel</button>
            </div>
        </div>
    </div>
</div>


@endsection