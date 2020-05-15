<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Gallery User</title>

    <link rel="stylesheet" href="/assest/css/swiper.min.css">
    <link rel="stylesheet" href="/assest/css/slider.css">
    <link rel="stylesheet" href="{{url('/assest/css/efek.css')}}">
    <link rel="stylesheet" href="{{url('/assest/css/animation.css')}}">



    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>


<div class="jumbotron1 jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                     <h1 class="ml1">
                     <span class="text-wrapper">
                    <span class="line line1"></span>
                    <span class="letters">GALLERY USER</span>
                    <span class="line line2"></span>
                </span>
              </h1>
             </div>
          </div>
          
            
    <!-- Swiper -->
   
  <div class="swiper-container">
    <div class="swiper-wrapper">
     <div class="swiper-slide" >
      <div class="imgbx">
      <img  src="/img/1.jpg">
    </div>
    <div class="details">
      <h3> Black Blue <br><span>Photoshop</span></h3>
    </div>
   </div>
     <div class="swiper-slide" >
      <div class="imgbx">
      <img  src="/img/2.jpg">
    </div>
    <div class="details">
      <h3> Black White<br><span>Photoshop</span></h3>
    </div>
   </div>
     <div class="swiper-slide" >
      <div class="imgbx">
      <img  src="/img/3.jpg">
    </div>
    <div class="details">
      <h3> Yellow Studio <br><span>Photoshop</span></h3>
    </div>
   </div>
     <div class="swiper-slide" >
      <div class="imgbx">
      <img  src="/img/4.jpg">
    </div>
    <div class="details">
      <h3> Dark Grenn <br><span>Photoshop</span></h3>
    </div>
   </div>
     <div class="swiper-slide" >
      <div class="imgbx">
      <img  src="/img/5.jpg">
    </div>
    <div class="details">
      <h3> Dark Chyan <br><span>Photoshop</span></h3>
    </div>
   </div>
     <div class="swiper-slide" >
      <div class="imgbx">
      <img  src="/img/6.jpg">
    </div>
    <div class="details">
      <h3>  Abstrak  <br><span>Photoshop</span></h3>
    </div>
   </div>
     <div class="swiper-slide" >
      <div class="imgbx">
      <img  src="/img/7.jpg">
    </div>
    <div class="details">
      <h3> Drak <br><span>Photoshop</span></h3>
    </div>
   </div>
     <div class="swiper-slide" >
      <div class="imgbx">
      <img  src="/img/8.jpg">
    </div>
    <div class="details">
      <h3> Room Studio <br><span>Photoshop</span></h3>
    </div>
   </div>
     <div class="swiper-slide" >
      <div class="imgbx">
      <img  src="/img/9.jpg">
    </div>
    <div class="details">
      <h3> Cyan Blue <br><span>Photoshop</span></h3>
    </div>
   </div>

   </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    </div>
  <div class="col-lg-8">
      <a class="btn1 fas fa-times-circle" style="text-align: center;" href ="/"></a>
  </div>





   <!-- swiper -->
   <script src="/assest/js/swiper.min.js"></script>
    <script src="{{url('/assest/js/main.js')}}" charset="utf-8"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

   <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>

</body>
</html>