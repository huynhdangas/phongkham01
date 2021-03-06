<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="{{asset('/assets/css/maicons.css')}}">

  <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.css')}}">

  <link rel="stylesheet" href="{{asset('/assets/vendor/owl-carousel/css/owl.carousel.css')}}">

  <link rel="stylesheet" href="{{asset('/assets/vendor/animate/animate.css')}}">

  <link rel="stylesheet" href="{{asset('/assets/css/theme.css')}}">


  

</head>
                    @if(session()->has('message'))      
                        <div class="alert alert-success">
                        <strong>Success!</strong> {{session()->get('message')}}
                        </div>                        
                    @endif
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="tel:+84388945301"><span class="mai-call text-primary"></span> 0388945301</a>
              <span class="divider">|</span>
              <a href="mailto:huynhnguyendang12@gmail.com"><span class="mai-mail text-primary"></span> huynhnguyendang12@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}"><span class="text-primary">????ng Sang</span>-Clinic</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Nh???p t??? kho??..." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Trang ch???</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">B??c s??</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">Tin t???c</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">Li??n h???</a>
            </li>

            @if(Route::has('login'))

            @auth

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{url('myappointment')}}">My appointment</a>
            </li>

            <x-app-layout>
            </x-app-layout>

            @else

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">????ng nh???p</a>
            </li>

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">????ng k??</a>
            </li>

            @endauth

            @endif

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

    <div class="container" style="margin-top:40px; margin-bottom: 100px;">
        <table class="table" style="margin: auto; width: 80%">
        <thead class="thead-dark">
            <tr>
            
                <th scope="col">T??n b??c s??</th>
                <th scope="col">Ng??y kh??m</th>
                <th scope="col">Tri???u ch???ng</th>
                <th scope="col">Tr???ng th??i</th>
                <th scope="col">Hu??? l???ch kh??m</th>
            </tr>
        </thead>
        <tbody>

            @foreach($appoint as $appoints)
            
            <tr>
                
                <td>{{$appoints->doctor}}</td>
                <td>{{$appoints->date}}</td>
                <td>{{$appoints->message}}</td>
                <td>{{$appoints->status}}</td>
                <td><a href="{{url('cancel_appoint', $appoints->id)}}" onclick="return confirm('B???n mu???n hu??? th???t ch????')" class="badge badge-danger" style="width:50px;">Hu???</a></td>
            </tr>
            
            
            @endforeach
        </tbody>
        </table>
    </div>


  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Editorial Team</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Join as Doctors</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">One-Fitness</a></li>
            <li><a href="#">One-Drugs</a></li>
            <li><a href="#">One-Live</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
          <a href="#" class="footer-link">701-573-7582</a>
          <a href="#" class="footer-link">healthcare@temporary.net</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2022 <a href="https://www.facebook.com/huynhdang.1999/" target="_blank">Hu???nh Nguy??n ????ng</a>. All right reserved</p>
    </div>
  </footer>

<script src="{{asset('/assets/js/jquery-3.5.1.min.js')}}"></script>

<script src="{{asset('/assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('/assets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('/assets/vendor/wow/wow.min.js')}}"></script>

<script src="{{asset('/assets/js/theme.js')}}"></script>
  
</body>
</html>