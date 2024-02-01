<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('asset/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('asset/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">

</head>

<body>
<!-- Header Start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 bg-secondary d-none d-lg-block">
            <a href="" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                <h1 class="m-0 display-3 text-primary">Klean</h1>
            </a>
        </div>
        <div class="col-lg-9">
            <div class="row bg-dark d-none d-lg-flex">
                <div class="col-lg-7 text-left text-white">
                    <div class="h-100 d-inline-flex align-items-center border-right border-primary py-2 px-3">
                        <i class="fa fa-envelope text-primary mr-2"></i>
                        <small>info@example.com</small>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                        <i class="fa fa-phone-alt text-primary mr-2"></i>
                        <small>+012 345 6789</small>
                    </div>
                </div>
                <div class="col-lg-5 text-right">
                    <div class="d-inline-flex align-items-center pr-2">
                        <a class="text-primary p-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary p-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-primary p-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-primary p-2" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-primary p-2" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                <a href="" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary">Klean</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">

                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{route('index')}}" class="nav-item nav-link   {{ request()->routeIs('index') ? 'active':'' }}"></a>
                        <a href="{{route('about')}}" class="nav-item nav-link  {{ request()->routeIs('about') ? 'active':'' }}"  >Biz haqimizda</a>

                        <a href="{{route('post.index')}}" class="tem nav-link  {{ request()->routeIs('project') ? 'active':'' }}">blog</a>
                        <a href="{{route('service')}}" class="nav-item nav-link  {{ request()->routeIs('service') ? 'active':'' }}">Xizmatlar</a>
                        <a href="{{route('project')}}" class="nav-item nav-item nav-link  {{ request()->routeIs('post.index') ? 'active':'' }}">Loyihalar</a>
{{--                        <a href="{{route('post.index')}}" class="nav-item nav-link  {{ request()->routeIs('post.index') ? 'active':'' }}">blog</a>--}}


{{--                        <div class="nav-item dropdown">--}}
{{--                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Sahifalar</a>--}}
{{--                            <div class="dropdown-menu rounded-0 m-0">--}}
{{--                                <a href="{{route('post.index')}}" class="dropdown-item">Eng so'nggi blog</a>--}}
{{--                                <a href="{{route('single')}}" class="dropdown-item">Blog tafsilotlari</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <a href="{{route('contact')}}" class="nav-item nav-link">Aloqa</a>
                    </div>
{{--                    @dd($all_locales);--}}
                @foreach($all_locales as $locale)

                        <a href="{{route('locale.change',$locale)}}" class="btn btn-primary mr-3 d-none d-lg-block">
                            {{$locale}}
                        </a>
                @endforeach
                        @auth
                   <div>
                     @if(auth()->user()->notifications->count())
                           <a href="{{route('notification.index')}}"  class="btn btn-primary mr-4">
                               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                                   <path strokeLinecap="round" strokeLinejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                               </svg>

                               <span class="badge badge-light">{{auth()->user()->unreadNotifications()->count()}}</span>
                           </a>
                         @endif
{{--                       <a href="{{route('notification.index')}}" class="btn btn-primary mr-3 d-none d-lg-block">Bildirishnomalar</a>--}}
                   </div>

{{--                            <div>--}}
{{--                                {{auth()->user()->name}}--}}
{{--                            </div>--}}
                        <a href="{{route('post.create')}}" class="btn btn-primary mr-3 d-none d-lg-block">Post qosh</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-danger sm">chiqish</button>

                        </form>
                    @else
                        <a href="{{route('login')}}" class="btn btn-primary mr-3 d-none d-lg-block">Kirish</a>
                    @endauth
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Header End -->


@yield('content')

<!-- Footer Start -->
<div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
    <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
            <a href="index.html" class="navbar-brand">
                <h1 class="m-0 mt-n3 display-4 text-primary">Klean</h1>
            </a>
            <p>Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd et</p>
            <h5 class="font-weight-semi-bold text-white mb-2">Opening Hours:</h5>
            <p class="mb-1">Mon – Sat, 8AM – 5PM</p>
            <p class="mb-0">Sunday: Closed</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="font-weight-semi-bold text-primary mb-4">Get In Touch</h4>
            <p><i class="fa fa-map-marker-alt text-primary mr-2"></i>123 Street, New York, USA</p>
            <p><i class="fa fa-phone-alt text-primary mr-2"></i>+012 345 67890</p>
            <p><i class="fa fa-envelope text-primary mr-2"></i>info@example.com</p>
            <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="font-weight-semi-bold text-primary mb-4">Quick Links</h4>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href={{route('index')}}><i class="fa fa-angle-right mr-2"></i>Bosh sahifa</a>
                <a class="text-white mb-2" href="{{route('about')}}"><i class="fa fa-angle-right mr-2"></i>Biz haqimizda</a>
                <a class="text-white mb-2" href="{{route('service')}}"><i class="fa fa-angle-right mr-2"></i>Xizmatlar</a>
                <a class="text-white mb-2" href="{{route('project')}}"><i class="fa fa-angle-right mr-2"></i>Loyihalar</a>
                <a class="text-white" href="{{route('contact')}}"><i class="fa fa-angle-right mr-2"></i>Aloqa</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="font-weight-semi-bold text-primary mb-4">Newsletter</h4>
            <p>Rebum labore lorem dolores kasd est, et ipsum amet et at kasd, ipsum sea tempor magna tempor. Accu kasd sed ea duo ipsum.</p>
            <div class="w-100">
                <div class="input-group">
                    <input type="text" class="form-control border-0" style="padding: 25px;" placeholder="Your Email">
                    <div class="input-group-append">
                        <button class="btn btn-primary px-4">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3E3E4E !important;">
    <div class="row">
        <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
            <p class="m-0 text-white">&copy; <a href="#">Your Site Name</a>. All Rights Reserved. Designed by <a href="https://htmlcodex.com">HTML Codex</a>
            </p>
        </div>
        <div class="col-lg-6 text-center text-md-right">
            <ul class="nav d-inline-flex">
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">Privacy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">Terms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">FAQs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">Help</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Footer End -->

<script>

</script>
<!-- Back to Top -->
<a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

<script src="{{asset('asset/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('asset/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('asset/lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('asset/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('asset/lib/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('asset/lib/lightbox/js/lightbox.min.js')}}"></script>

<!-- Contact Javascript File -->
<script src="{{asset('asset/mail/jqBootstrapValidation.min.js')}}"></script>
<script src="{{asset('asset/mail/contact.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('asset/js/main.js')}}"></script>

    <script>
        @if(session('success'))
        Swal.fire(
            {
                icon: 'success',
                title:"<h1>Muvaffaqiyatli</h1>",
                text:'{{session('success')}}',
                showConfirmButton:true,
                timer:3000
            }
        )
        @endif

function delete_button(){
    Swal.fire({
        title:"Rosdanham ochirishni hohlaysizmi",
        text:"Ochgan narsa qaytib tiklanmaydi",
        icon:"warning",
        showConfirmButton:true,
        confirmButtonColor:"#3065d6",
        cancelButtonColor:"#d13",
        confirmButtonText:"O'shirish",
        cancelButtonText:'Bekor qilish'

    }).then((result)=>{
        if(result.isConfirmed){
            document.getElementById('form_d').submit();
        }
    })
}
    </script>
</body>

</html>