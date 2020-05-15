@extends('layoutmain.main')

@section('title', 'Kasuari Production')

@section('container')
<!-- particles -->
  <span class="js-count-particles"></span> 
<!-- particles.js container -->

<header id="showcase">
       <div class="jumbotron1 jumbotron-fluid">
            <div class="container">
            <div id="particles-js">
                <div class="row">
                    <div class="col-sm-12">
                        <br>
                        <h1 class="ml1" >Kasuari Production </h1>
                        <hr class="my-2">
                            </div>
                         </div>   
                         </div>
                    </div>
              </div>
         </header>
      
   <!-- Portfoloi -->
  
   <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <br><br><br><br>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    
               <a href="/create" onclick="document.getElementById('id01').style.display='block'" class="btn btn-success"><h4 class="fas fa-users"></h4><h4> Register</h4>
               <span onclick="document.getElementById('id01').style.display='run-in'"></span>
                   </a>
                </div>
         
               
                <div class="col-sm-4">
                <a href="/dataemail" class="btn btn-success"><h4 class="fas fa-book-open"></h4>
                    <h4>Setting Email</h4>
                  </a>

                </div>
                <div class="col-sm-4">
                <a href="/list"  class="btn btn-success"><h4 class="fas fa-list-ul"></h4>
                    <h4> Employee List</h4>
                       
                    </a>

                </div>
                <div class="col-sm-4">
                <br> <br>
                <a href="/keluahan"  class="btn btn-success" ><h4 class="fas fa-users-cog">
                     <h4>Employee Complaints</h4>
                    </a>
                </div>

                <div class="col-sm-4">
                <br><br>
                <a href="/photosuser"  class="btn btn-success"><h4 class="fas fa-images"></h4>
                    <h4>Gallery Users </h4>
                    </a>
                 </div>
               
                <div class="col-sm-4">
                <br><br>
                <a href="/login"  class="btn btn-success"><h5 class="fas fa-power-off" style="font-size:36px"></h5>
                <p>Log Out</p>
                </a>
             </a>
        </div>
      </div>
        </div>

  </section>

@endsection