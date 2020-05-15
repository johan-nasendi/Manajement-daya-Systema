@extends('layoutmain/main')

@section('title', 'Profile')

@section('container')
<div id="id01" class="model1">
 <form class="modal-content2 animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
     <a onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</a>

    
    
    
    
     <div class="container mt-5">
    <div class="row">
        <div class="col-md-4">

            <div class="card">
                <div class="card-body text-center">

                    <img class="img img-responsive rounded-circle mb-3" width="190" src="{{ url ('assest/img/'. $proses->photo ) }}"  >
                   	
                    
                    <u><h5 class="card-title">{{ $proses->nama }}</h5></u>
                    <i><h6 class="card-text">{{$proses->bio}}</h6></i>

                    <h5><a href="/list">Back</a></h5>
                </div>
            </div>

            
        </div>


        <div class="col-md-8">
           
            <form action="" method="post">
                <div class="form-group">
                    <textarea class="form-control" placeholder="Apa yang kamu pikirkan?"></textarea>
                </div>
            </form>
           

            <?php for($i=0; $i < 1; $i++){ ?>
            <div class="card">
                <div class="card-body1">
               <b> {{$proses-> nama}}</b> 
                </div>
            </div>
          <?php } ?>

          <br>
            <?php for($i=0; $i < 1; $i++){ ?>
            <div class="card">
                <div class="card-body1">
               <b> {{$proses-> ttl}}</b> 
                </div>
            </div>
            <?php } ?>
            

            <br>
            <?php for($i=0; $i < 1; $i++){ ?>
            <div class="card">
                <div class="card-body1">
               <b> {{$proses-> jenis_kelamin}}</b> 
                </div>
            </div>
            <?php } ?>

            <br>
            <?php for($i=0; $i < 1; $i++){ ?>
                <div class="form-row">
                <div class="card col-md-6">
                <div class="card-body1">
               <b> {{$proses-> agama}}</b> 
                </div>
             </div>
            <?php } ?>

            <br>
            <?php for($i=0; $i < 1; $i++){ ?>
            <div class="card col-md-6">
                <div class="card-body1">
               <b> {{$proses-> alamat}}</b> 
                </div>
            </div>
            <?php } ?>

            <br>
            <?php for($i=0; $i < 1; $i++){ ?>
                <div class="card col-md-6">
                <div class="card-body1">
                <b> {{$proses-> asal}}</b> 
                </div>
            </div>
            <?php } ?>
         
         
         <br>
            <?php for($i=0; $i < 1; $i++){ ?>
              <div class="card col-md-6">
                <div class="card-body1">
               <b> {{$proses-> jabatan}}</b> 
                </div>
            </div>
            <?php } ?>

         <br>
            <?php for($i=0; $i < 1; $i++){ ?>
                  <div class="card col-md-6">
                <div class="card-body1">
               <b> {{$proses->status}}</b> 
             </div>
         </div>
    <?php } ?>

         <br>
            <?php for($i=0; $i < 1; $i++){ ?>
                  <div class="card col-md-6">
                <div class="card-body1">
               <b> {{$proses->phone}}</b> 
             </div>
         </div>
    <?php } ?>
    </div>
</div>
            
           <div class="form-row">
               <div class="container1">
                   <div class="col-sm-12">
                       <a href="{{ $proses->id}}/edit" class="btn1 btn-primary">Edit</a>
                           <form action="{{ $proses->id }}" method="post" class="d-inline">
                             <button type="submit" class="btn1 btn-danger" bcmul onclick="return confirm('Are you sure you want to delete it?')">delete</button>
                          @method('delete')
                      @csrf
                  </form>
             </div>  
           </div>
      </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
     <!-- <div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h1 class="mt-3">Detail Profile User</h1>
            
            <div class="card">
            <div class="card-body">
            <u><h5 class="card-title">{{ $proses->nama }}</h5></u>
            <h6 class="card-text">{{$proses->ttl}}</h6>
            <h6 class="card-text">{{$proses->jenis_kelamin}}</h6>
            <h6 class="card-text">{{$proses->agama}}</h6>
            <h6 class="card-text">{{$proses->alamat}}</h6>
            <h6 class="card-text">{{$proses->asal}}</h6>
            <h6 class="card-text">{{$proses->phone}}</h6>
           
            
            
           
           <a href="{{ $proses->id}}/edit" class="btn1 btn-primary">Edit</a>
           
           <form action="{{ $proses->id }}" method="post" class="d-inline">
            <button type="submit" class="btn3 btn-danger" bcmul onclick="return confirm('Are you sure you want to delete it?')">delete</button>
             @method('delete')
             @csrf
            </form>
           
            <a href="/list" class="card-link">Back</a>
            </div>
        </div>
            </div>
        </div>
    </div> -->
</div>

@endsection
