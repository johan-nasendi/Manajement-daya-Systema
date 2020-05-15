@extends('layoutmain.main')
@section('title','Show File')

@section('container')




<div id="id01" class="model1">
 <form class="modal-content2 animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
     <a onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</a>

    
    
    

        <div class="col-md-8">

            <form action="/datafile" method="post">
                <div class="form-group">
                    <textarea class="form-control" placeholder="Apa yang kamu pikirkan?"></textarea>
                </div>
            </form>

           
         
         <br>
            <?php for($i=0; $i < 1; $i++){ ?>
              <div class="card col-md-6">
                <div class="card-body1">
               <b> {{$datafile->nama_file}}</b> 
                </div>
            </div>
            <?php } ?>

         <br>
            <?php for($i=0; $i < 1; $i++){ ?>
                  <div class="card col-md-6">
                <div class="card-body1">

                <a href="{{ url ('assest/datafile/'. $datafile->file ) }}" target="/id">
                    Oper File / Download File 
                </a>

               
               <!-- <embed src = "folder/majalah.pdf" type = "application / pdf" width = "100%" height = "600px" /> -->
             </div>
         </div>
    <?php } ?>

         <br>
            <?php for($i=0; $i < 1; $i++){ ?>
                  <div class="card col-md-6">
                <div class="card-body1">
               <b> {{$datafile->ket}}</b> 
             </div>
         </div>
    <?php } ?>
    </div>
</div>
            
           <div class="form-row">
               <div class="container1">
                   <div class="col-sm-12">
                       <a href="{{ $datafile->id}}/editfile" class="btn1 btn-primary">Edit</a>
                           <form action="{{ $datafile->id }}" method="post" class="d-inline">
                             <button type="submit" class="btn1 btn-danger" bcmul onclick="return confirm('Are you sure you want to delete it?')">delete</button>
                          @method('delete')
                      @csrf
                    
                  </form>
                  <a href="/listfile"><button class="btn1 btn-danger">back Show File</button></a>
             </div>  
           </div>
      </div>
    





@endsection