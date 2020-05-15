@extends('layoutmain.main')
@section('title','Show Message')

@section('container')



<div id="id01" class="model">
   <form class="modal-content1 animate" action="#" method="post">
    <div class="imgcontainer">
      <a onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</a>

    
         
         <br>
            <?php for($i=0; $i < 1; $i++){ ?>
              <div class="card col-md-6">
                <div class="card-body1">
               <b> {{$status->nama}}</b> 
                </div>
            </div>
            <?php } ?>

         <br>
            <?php for($i=0; $i < 1; $i++){ ?>
                  <div class="card col-md-6">
                <div class="card-body1">
               <b> {{$status->status}}</b> 
             </div>
         </div>
    <?php } ?>

         
            
           <div class="form-row">
               <div class="container1">
                   <div class="col-sm-12">
                             <button type="submit" class="btn1 btn-danger" bcmul onclick="return confirm('Are you sure you want to delete it?')">delete</button>
                          @method('delete')
                      @csrf
                    </form>
                    <a href="/listcomplaint"><button class="btn1 btn-danger">back</button></a> 
             </div> 
      
           </div>
      </div>
    


@endsection