@extends('layoutmain.main')

@section('title', 'Setting Email Outlook')

@section('container')


<header>
       <div class="jumbotron2 jumbotron-fluid">
            <div class="container">
            <div id="particles-js">
                <div class="row">
                    <div class="col-sm-12">
                        <br>
                        <h1 class="text-center" class="fas fa-user"> Email Settings Guide</h1>
                        <hr class="my-2">
                            </div>
                         </div>   
                         </div>
                    </div>
              </div>
         </header>

         <section class="portfolio1" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <br><br><br><br>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    
               <a href="/listfile" onclick="document.getElementById('id01').style.display='block'" class="btn btn-success"><h4 class="fas fa-list-ul"></h4><h4>List Data</h4>
               <span onclick="document.getElementById('id01').style.display='run-in'"></span>
                   </a>
                </div>
               
            
                
               
                 <div class="col-sm-4">
                <a href="/createfile" onclick="document.getElementById('id01').style.display='block'" class="btn btn-success" class="btn btn-success"><h4 class="fas fa-plus-circle"></h4>
                <span onclick="document.getElementById('id01').style.display='run-in'"></span>
                    <h4>Create File</h4>
                  </a>
                </div> 



                <div class="col-sm-4">
                <a href="/struktur"  class="btn btn-success"><h4 class="fas fa-wave-square"></h4>
                    <h4>organizational structure</h4>
                       
                    </a>

                </div>
                <!-- <div class="col-sm-4">
                <br> <br>
                <a href="#"  class="btn btn-success" ><h4 class="fas fa-list-ul">
                     <h4>List Data</h4>
                    </a>
                </div> -->

                <!-- <div class="col-sm-4">
                <br><br>
                <a href="/showprofile"  class="btn btn-success"><h4 class="fas fa-address-card"></h4>
                    <h4>Profile</h4>
                    </a>
                 </div> -->
               
                <div class="col-sm-4">
                <br><br>
                <a href="/"  class="btn btn-success"><h5 class="fas fa-times-circle" style="font-size:40px"></h5>
                 <p>Back Home</p> 
                </a>
             </a>
        </div>
      </div>
        </div>

  </section>
@endsection