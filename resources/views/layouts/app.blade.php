<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>{{ config('app.name') }}</title>

            <!-- Fonts -->
            <link rel="preconnect" href="https://fonts.bunny.net">
            <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

            <!-- Scripts -->

            @include('components.header')
        </head>
        <style>
            .blink_me {
                animation: blinker 1s linear infinite;
            }

            @keyframes blinker {
                50% {
                    opacity: 0;
                }
            }

            .notify {
                /* defaults */
                --notify-error: #eb5757;
                --notify-success: #2C3D87;
                --notify-warning: #f2c94c;
                --notify-gray: #333333;
                --notify-gray-2: #4d4d4d;
                --notify-gray-3: #828282;
                --notify-white: #fff;
                --notify-white-2: rgba(255, 255, 255, 0.8);
                --notify-padding: 0.75rem;
                --notify-icon-size: 32px;
                --notify-close-icon-size: 16px;
                width: 100%;
            }
            #survey{
                background: #fff;
                z-index: 999999999;
                font-size: 16px;
                color: #333;
                padding: 16px 40px;
                font-weight: 400;
                display: flex;
                justify-content: space-between;
                align-items: center;
                position: fixed;
                top: 40px;
                width: 80%;
                border-radius: 8px;
                left: 0;
                right: 0;
                margin-left: auto;
                margin-right: auto;
                box-shadow: 0 13px 27px -5px rgba(50,50,93,0.25), 0 8px 16px -8px rgba(0,0,0,0.3), 0 -6px 16px -6px rgba(0,0,0,0.025);
            }
            #survey-content {
                display: inline;
                padding: 0 15px;
            }
            #survey-right {
                display: flex;
                align-items: center;
            }

            #close-bar {
                font-size: 17px;
                opacity: 0.5;
                cursor: pointer;
                color: #808080;
                font-weight: bold;
            }
            #btn-survey{
                color: #2D3A89;
            }
            #btn-survey:hover{
                color: #E11E1E;
            }
        </style>
        <body data-theme="light" class="font-nunito">
        <div id="wrapper" class="theme-green">
            <!-- Page Loader -->
            <div id="loader-content" style="display: none">
                <div id="loader-wrapper">
                    <div id="loader"></div>
                </div>
            </div>


            <div class="page-loader-wrapper">
                <div class="loader">
                    <div class="m-t-30"><img src="{{asset('assets/logo/logo.png')}}" style="border-radius: 10px" width="55" height="55" alt="Nbc"></div>
                    <p>Please wait...</p>
                </div>
            </div>
            <nav class="navbar navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-brand">
                        <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-bars"></i></button>
                        <button type="button" class="btn-toggle-fullwidth"><i class="fa fa-bars"></i></button>
                        <a>FINTEC</a>
                    </div>
                    <div class="navbar-brand">
                       {{-- <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-bars"></i></button>--}} 
                       <button type="button" class="btn-toggle-fullwidth"><i class="fa fa-bars"></i></button>
                       <a>Fsd details</a>
                        {{-- {{-- <a href="{{ route('details') }}" class="btn btn-success " title="fsp">
                            Fsp Details
                        </a> --}}

                    </div>

                    <div class="navbar-right">
                        <div id="navbar-menu">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a
                                       onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="icon-menu"><i class="fa fa-power-off"></i></a>
                                    <form id="logout-form"  method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>

            </nav>

            @include('components.sidebar')
            <main class="py-4">
                 <div id="main-content">
                 <div class="container-fluid">
                    @yield('content')
                </div>
                </div>
            </main>
        </div>

        @include('components.footer')
        @yield('scripts')
        <script>
            $(document).ready(function() {
                @if(Session::has('success'))
                toastr.success("{{ session('success') }}")
                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "2000",
                    "hideDuration": "1500",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                @endif
                @if(Session::has('error'))
                toastr.error("{{ session('error') }}")
                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "2000",
                    "hideDuration": "1500",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }

                @endif
                @if(Session::has('info'))
                toastr.info("{{ session('info') }}")
                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "2000",
                    "hideDuration": "1500",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }

                @endif
                @if(Session::has('warning'))
                toastr.warning("{{ session('warning') }}")
                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "2000",
                    "hideDuration": "1500",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }

                @endif

            });
        </script>

        </body>
</html>
