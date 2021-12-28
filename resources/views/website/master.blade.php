

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>fitness</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{url('frontend/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{url('frontend/images/fevicon.png" type="image/gif')}}" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{url('frontend/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{url('frontend/images/loading.gif')}}" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                             
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                     @if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if(session()->has('error'))
    <p class="alert alert-danger">{{session()->get('error')}}</p>
@endif
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link" href="index.html">Contact Us</a>
                              </li>
                              
                    @if(auth()->user())
                    <!-- Button trigger modal -->

                        <a href="{{route('user.logout')}}" class="nav-link">{{auth()->user()->name}} | Logout</a>

                        @else
                        <li class="nav-item">
                                 <a class="nav-link"data-toggle="modal"  href="#login">Login </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" data-toggle="modal" href="#registration">Register</a>
                              </li>

                            
   
                        @endif
                           
                           </ul>
                           
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="text-bg">
                     <div class="padding_lert">
                        <h1> FITNESS CLUB MANAGEMENT</h1>
                        <span>Workout Today,Be Proud Tomorrow</span>
                        
                        
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="text-img">
                     <figure><img src="{{url('frontend/images/woman-exercise.jpg')}}" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- features -->
      <div class="Features">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Services</h2>
            
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="Our_box">
                     <i><img src="{{url('frontend/icon/icon1.png')}}" alt="#"/></i>
                     <h4>Trainer Shift </h4>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="Our_box">
                     <i><img src="{{url('frontend/icon/icon2.png')}}" alt="#"/></i>
                     <h4>Packages  </h4>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="Our_box">
                     <i><img src="{{url('frontend/icon/icon3.png')}}" alt="#"/></i>
                     <h4>Diet</h4>
                  </div>
               </div>
               <div class="col-md-12">
                
               </div>
            </div>
         </div>
      </div>
      <!-- end Features -->
      <!-- discount -->
      <div class="discount">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>FITNESS CLASSES THIS WINTER. PAY NOW AND GET 25% DISCOUNT</h2>
                     
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end discount -->
      <!-- request -->
      <div class="request">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Rqueste a call back</h2>
                    
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Name" type="type" name="Name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder=" Phone" type="type" name="Phone"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder=" Email" type="type" name="Email">                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message </textarea>
                        </div>
                        <div class="col-sm-12">
                           <button class="send_btn">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-6">
                  <div class="back_img">
                     <figure><img src="{{url('frontend/images/equipment.jpg')}}" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end request -->
      <!-- people -->
      
<!-- Modal -->
<div class="modal fade" id="registration" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('user.registration')}}" method="post">
            @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registration Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Enter User Name:</label>
                    <input name="user_name" type="text" class="form-control" placeholder="Enter user name">
                </div>
                <div class="form-group">
                    <label for="">Enter User Email:</label>
                    <input name="user_email" type="email" class="form-control" placeholder="Enter user email">
                </div>
                <div class="form-group">
                    <label for="">Enter User Password:</label>
                    <input name="user_password" type="password" class="form-control" placeholder="Enter user password">
                </div>
                <div class="form-group">
                    <label for="">Enter User Mobile:</label>
                    <input name="user_mobile" type="text" class="form-control" placeholder="Enter user mobile">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Registration</button>
            </div>
        </div>
        </form>
    </div>
</div>




<!-- Login Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('user.login')}}" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">User Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="">Enter User Email:</label>
                        <input name="email" type="email" class="form-control" placeholder="Enter user email">
                    </div>
                    <div class="form-group">
                        <label for="">Enter User Password:</label>
                        <input name="password" type="password" class="form-control" placeholder="Enter user password">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
        </form>
    </div>
</div>
      <!-- end people -->
      
      <!-- Javascript files-->
      <script src="{{url('frontend/js/jquery.min.js')}}"></script>
      <script src="{{url('frontend/js/popper.min.js')}}"></script>
      <script src="{{url('frontend/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{url('frontend/js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{url('frontend/js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{url('frontend/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{url('frontend/js/custom.js')}}"></script>
      <script src="{{url('frontend/https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js')}}"></script>
   </body>
</html>

