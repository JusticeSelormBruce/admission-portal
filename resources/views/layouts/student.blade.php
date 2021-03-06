<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76"
          href="{{asset('images/logo-round.png')}}">
    <link rel="icon" type="image/png" href="{{asset('images/logo-round.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>{{$title ??''}}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200"
          rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"
          rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet"/>
    <link href="{{asset('paper-dashboard/css/paper-dashboard.min.css')}}"
          rel="stylesheet"/>
    <link href="{{ asset('boostrap/css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <style>
        img {
            width: 25px;
            height: 25px;
        }

        body {
            font-family: -apple-system;
        }

        .s {
            width: 200px !important;
        }

        li {
            list-style: none !important;

        }

        .img1 {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body class="bg-light">
<div class="wrapper bg-light">
    <div class="sidebar s " data-color="dark" data-active-color="danger">

        <div class="logo py-1">
            <a href="#" class="simple-text">
                <img src="{{asset('images/logo-round.png') ?? 'logo'}}" alt="logo" class="img1">
            </a>

        </div>

        <div class="sidebar-wrapper s">
            <ul class="nav">
                <li class="active pt-2   py-1">
                    <a href="/Applicant-Dashboard">
                         <span class="row">
                            <img src="{{asset('icons/dashboard.svg')}}" alt="">
                            <span class="mx-2"><p>Dashboard</p></span>
                        </span>

                    </a>
                </li>

                <li class="py-1">
                    <a href="/Family-Gaurdian">
                          <span class="row">
                            <img src="{{asset('icons/team.svg')}}" alt="">
                            <span class="mx-2"><p>Guardian</p></span>
                        </span>

                    </a>
                </li>
                <li class="py-1">
                    <a href="/education">
                         <span class="row">
                            <img src="{{asset('icons/mortarboard.svg')}}" alt="">
                            <span class="mx-2"><p>Education</p></span>
                        </span>

                    </a>
                </li>
                <li class="py-1">
                    <a href="/programmes">
                        <span class="row">
                            <img src="{{asset('icons/learning.svg')}}" alt="">
                            <span class="mx-2"><p>Programmes</p></span>
                        </span>

                    </a>
                </li>
                <li class="py-1">
                    <a href="/other-results">
                           <span class="row">
                            <img src="{{asset('icons/diploma.svg')}}" alt="">
                            <span class="mx-2"><p>Other Results</p></span>
                        </span>

                    </a>
                </li>
                <li class="py-1">
                    <a href="/attachments">
                        <span class="row">
                            <img src="{{asset('icons/clip.svg')}}" alt="">
                            <span class="mx-2">    <p>Attachments</p></span>
                        </span>

                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent shadow-lg ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <div class="row">
                        {{$title ?? ''}} <span class="mx-5"> Admission Portal ( Dashbaord) </span>
                    </div>

                </div>
                <ul>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle  text-success" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>


            </div>
        </nav>
        <main class=" pt-2 mt-5">
            @yield('render')
        </main>
    </div>
</div>


<script src="{{asset('paper-dashboard/js/jquery.min.js')}}"></script>
<script src="{{asset('paper-dashboard/js/popper.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('boostrap/js/bootstrap.js')}}"></script>
<script src="{{asset('boostrap/js/jquery.js')}}"></script>
<script src="{{asset('paper-dashboard/js/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('paper-dashboard/js/chartjs.min.js')}}"></script>
<script src="{{asset('paper-dashboard/js/bootstrap-notify.js')}}"></script>
<script src="{{asset('paper-dashboard/js/paper-dashboard.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
        demo.initChartsPages();
    });
</script>
<script>
    $(document).ready(function () {
        $('#table_id').DataTable();
    });
</script>
</body>
</html>
