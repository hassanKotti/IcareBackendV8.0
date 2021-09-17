<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/detect-mode.js') }}" defer></script>
    <script src="{{ asset('js/charts-lines.js') }}" defer></script>
    <script src="{{ asset('js/charts-pie.js') }}" defer></script>
    <script src="{{ asset('js/charts-bars.js') }}" defer></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"
        integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>

    <style type="text/css">
        /* Chart.js */
        @-webkit-keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        @keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            -webkit-animation: chartjs-render-animation 0.001s;
            animation: chartjs-render-animation 0.001s;
        }

    </style>

    <style>
        .bg-black-alt {
            background: #191919;
        }

        .text-black-alt {
            color: #191919;
        }

        .border-black-alt {
            border-color: #191919;
        }

    </style>

    <style type="text/css">
        button.btn[data-v-5f0b9ba1] {
            display: inline-block;
            font-weight: 300;
            line-height: 1.25;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            user-select: none;
            border: 1px solid transparent;
            cursor: pointer;
            letter-spacing: 1px;
            transition: all .15s ease
        }

        button.btn.btn-sm[data-v-5f0b9ba1] {
            padding: .4rem .8rem;
            font-size: .8rem;
            border-radius: .2rem
        }

        button.btn.btn-primary[data-v-5f0b9ba1] {
            color: #fff;
            background-color: #45C8F1;
            border-color: #45C8F1
        }

        button.btn.btn-outline-primary[data-v-5f0b9ba1] {
            color: #45C8F1;
            background-color: transparent;
            border-color: #45C8F1
        }

        button.btn.btn-danger[data-v-5f0b9ba1] {
            color: #fff;
            background-color: #FF4949;
            border-color: #FF4949
        }

        .text-muted[data-v-5f0b9ba1] {
            color: #8492A6
        }

        .text-center[data-v-5f0b9ba1] {
            text-align: center
        }

        .drop-down-enter[data-v-5f0b9ba1],
        .drop-down-leave-to[data-v-5f0b9ba1] {
            transform: translateX(0) translateY(-20px);
            transition-timing-function: cubic-bezier(0.74, 0.04, 0.26, 1.05);
            opacity: 0
        }

        .drop-down-enter-active[data-v-5f0b9ba1],
        .drop-down-leave-active[data-v-5f0b9ba1] {
            transition: all .15s
        }

        .move-left-enter[data-v-5f0b9ba1],
        .move-left-leave-to[data-v-5f0b9ba1] {
            transform: translateY(0) translateX(-80px);
            transition-timing-function: cubic-bezier(0.74, 0.04, 0.26, 1.05);
            opacity: 0
        }

        .move-left-enter-active[data-v-5f0b9ba1],
        .move-left-leave-active[data-v-5f0b9ba1] {
            transition: all .15s
        }

        .no-tr[data-v-5f0b9ba1] {
            transition: none !important
        }

        .no-tr *[data-v-5f0b9ba1] {
            transition: none !important
        }

        .overlay[data-v-5f0b9ba1] {
            position: fixed;
            background: rgba(220, 220, 220, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            transition: all 0.2s ease;
            opacity: 0;
            visibility: hidden
        }

        .overlay .modal[data-v-5f0b9ba1] {
            transition: all 0.2s ease;
            opacity: 0;
            transform: scale(0.6);
            overflow: hidden
        }

        .overlay.show[data-v-5f0b9ba1] {
            opacity: 1;
            visibility: visible
        }

        .overlay.show .modal[data-v-5f0b9ba1] {
            opacity: 1;
            transform: scale(1)
        }

        .panel[data-v-5f0b9ba1] {
            padding: 6px 10px;
            display: flex;
            width: 100%;
            box-sizing: border-box;
            align-items: center;
            border-radius: 4px;
            position: relative;
            border: 1px solid #eaf7ff;
            background: #f7fcff;
            outline: none;
            transition: all 0.07s ease-in-out
        }

        .btn[data-v-5f0b9ba1] {
            cursor: pointer;
            box-sizing: border-box
        }

        .light-btn[data-v-5f0b9ba1] {
            padding: 6px 10px;
            display: flex;
            width: 100%;
            box-sizing: border-box;
            align-items: center;
            border-radius: 4px;
            position: relative;
            border: 1px solid #eaf7ff;
            background: #f7fcff;
            outline: none;
            cursor: pointer;
            transition: all 0.07s ease-in-out
        }

        .light-btn[data-v-5f0b9ba1]:hover {
            background: #e0f4ff;
            border-color: #8acfff
        }

        .shake[data-v-5f0b9ba1] {
            animation: shake-data-v-5f0b9ba1 0.82s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
            transform: translate3d(0, 0, 0)
        }

        @keyframes shake-data-v-5f0b9ba1 {

            10%,
            90% {
                transform: translate3d(-1px, 0, 0)
            }

            20%,
            80% {
                transform: translate3d(2px, 0, 0)
            }

            30%,
            50%,
            70% {
                transform: translate3d(-4px, 0, 0)
            }

            40%,
            60% {
                transform: translate3d(4px, 0, 0)
            }
        }

        .pulse[data-v-5f0b9ba1] {
            animation: pulse-data-v-5f0b9ba1 2s ease infinite
        }

        @keyframes pulse-data-v-5f0b9ba1 {
            0% {
                opacity: .7
            }

            50% {
                opacity: .4
            }

            100% {
                opacity: .7
            }
        }

        .flash-once[data-v-5f0b9ba1] {
            animation: flash-once 3.5s ease 1
        }

        @keyframes fade-up-data-v-5f0b9ba1 {
            0% {
                transform: translate3d(0, 10px, 0);
                opacity: 0
            }

            100% {
                transform: translate3d(0, 0, 0);
                opacity: 1
            }
        }

        .fade-in[data-v-5f0b9ba1] {
            animation: fade-in-data-v-5f0b9ba1 .3s ease-in-out
        }

        @keyframes fade-in-data-v-5f0b9ba1 {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        .spin[data-v-5f0b9ba1] {
            animation-name: spin-data-v-5f0b9ba1;
            animation-duration: 2000ms;
            animation-iteration-count: infinite;
            animation-timing-function: linear
        }

        @keyframes spin-data-v-5f0b9ba1 {
            from {
                transform: rotate(0deg)
            }

            to {
                transform: rotate(360deg)
            }
        }

        .bounceIn[data-v-5f0b9ba1] {
            animation-name: bounceIn-data-v-5f0b9ba1;
            transform-origin: center bottom;
            animation-duration: 1s;
            animation-fill-mode: both;
            animation-iteration-count: 1
        }

        @keyframes bounceIn-data-v-5f0b9ba1 {

            0%,
            20%,
            40%,
            60%,
            80%,
            100% {
                -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
            }

            0% {
                opacity: 1;
                -webkit-transform: scale3d(0.8, 0.8, 0.8);
                transform: scale3d(0.8, 0.8, 0.8)
            }

            20% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1);
                transform: scale3d(1.1, 1.1, 1.1)
            }

            40% {
                -webkit-transform: scale3d(0.9, 0.9, 0.9);
                transform: scale3d(0.9, 0.9, 0.9)
            }

            60% {
                opacity: 1;
                -webkit-transform: scale3d(1.03, 1.03, 1.03);
                transform: scale3d(1.03, 1.03, 1.03)
            }

            80% {
                -webkit-transform: scale3d(0.97, 0.97, 0.97);
                transform: scale3d(0.97, 0.97, 0.97)
            }

            100% {
                opacity: 1;
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }
        }

        @keyframes dots-data-v-5f0b9ba1 {

            0%,
            20% {
                color: rgba(0, 0, 0, 0);
                text-shadow: 0.25em 0 0 rgba(0, 0, 0, 0), 0.5em 0 0 rgba(0, 0, 0, 0)
            }

            40% {
                color: #8492A6;
                text-shadow: 0.25em 0 0 rgba(0, 0, 0, 0), 0.5em 0 0 rgba(0, 0, 0, 0)
            }

            60% {
                text-shadow: 0.25em 0 0 #8492A6, 0.5em 0 0 rgba(0, 0, 0, 0)
            }

            80%,
            100% {
                text-shadow: .25em 0 0 #8492A6, .5em 0 0 #8492A6
            }
        }

        @keyframes recording-data-v-5f0b9ba1 {
            0% {
                box-shadow: 0px 0px 5px 0px rgba(173, 0, 0, 0.3)
            }

            65% {
                box-shadow: 0px 0px 5px 5px rgba(173, 0, 0, 0.3)
            }

            90% {
                box-shadow: 0px 0px 5px 5px rgba(173, 0, 0, 0)
            }
        }

        body[data-v-5f0b9ba1] {
            margin: 0;
            font-size: 100%;
            color: #3C4858
        }

        a[data-v-5f0b9ba1] {
            text-decoration: none;
            color: #45C8F1
        }

        h1[data-v-5f0b9ba1],
        h2[data-v-5f0b9ba1],
        h3[data-v-5f0b9ba1],
        h4[data-v-5f0b9ba1] {
            margin-top: 0
        }

        svg[data-v-5f0b9ba1] {
            outline: none
        }

        .container_selected_area[data-v-5f0b9ba1] {
            display: none;
            visibility: hidden;
            padding: 0;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 2147483647
        }

        .container_selected_area.active[data-v-5f0b9ba1] {
            visibility: visible;
            display: block
        }

        .container_selected_area .label[data-v-5f0b9ba1] {
            font-family: "Didact Gothic Regular", sans-serif;
            font-size: 22px;
            text-align: center;
            padding-top: 15px
        }

        .container_selected_area .area[data-v-5f0b9ba1] {
            display: none;
            position: fixed;
            z-index: 2147483647;
            border: 1px solid #1e83ff;
            background: rgba(30, 131, 255, 0.1);
            box-sizing: border-box
        }

        .container_selected_area .area.active[data-v-5f0b9ba1] {
            display: block;
            top: 0;
            left: 0
        }

        .hide[data-v-5f0b9ba1] {
            display: none
        }

    </style>
</head>

<body class="antialiased bg-gray-900 font-sans leading-normal tracking-normal">

    <nav id="header" class="bg-gray-900 border-b border-gray-800 fixed shadow top-0 w-full z-10">


        <div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0">

            <div class="w-1/2 pl-2 md:pl-0">
                <a class="text-gray-100 text-base xl:text-xl no-underline hover:no-underline font-bold" href="#">
                    <i class="fas fa-moon text-blue-400 pr-3"></i> Admin Dark Mode
                </a>
            </div>
            <div class="w-1/2 pr-0">
                <div class="flex relative inline-block float-right">
                    <div class="div">
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ url('/dashboard') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                    <div class="relative text-sm text-gray-100">
                        <button id="userButton" class="flex items-center focus:outline-none mr-3">
                            <img class="w-8 h-8 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of User">
                            <span class="hidden md:inline-block text-gray-100">Hi,
                                User</span>
                            <svg class="pl-2 h-2 fill-current text-gray-100" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129"
                                xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129">
                                <g>
                                    <path
                                        d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z">
                                    </path>
                                </g>
                            </svg>
                        </button>
                        <div id="userMenu"
                            class="bg-gray-900 rounded shadow-md mt-2 absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30 invisible">
                            <ul class="list-reset">
                                <li><a href="#"
                                        class="px-4 py-2 block text-gray-100 hover:bg-gray-800 no-underline hover:no-underline">My
                                        account</a></li>
                                <li><a href="#"
                                        class="px-4 py-2 block text-gray-100 hover:bg-gray-800 no-underline hover:no-underline">Notifications</a>
                                </li>
                                <li>
                                    <hr class="border-t mx-2 border-gray-400">
                                </li>
                                <li><a href="#"
                                        class="px-4 py-2 block text-gray-100 hover:bg-gray-800 no-underline hover:no-underline">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="block lg:hidden pr-4">
                        <button id="nav-toggle"
                            class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-100 hover:border-teal-500 appearance-none focus:outline-none">
                            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Menu</title>
                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                            </svg>
                        </button>
                    </div>
                </div>

            </div>


            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-4 bg-gray-900 z-20"
                id="nav-content">
                <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
                    <li class="mr-6 my-2 md:my-0">
                        <a href="#"
                            class="block py-1 md:py-3 pl-1 align-middle text-blue-400 no-underline hover:text-gray-100 border-b-2 border-blue-400 hover:border-blue-400">
                            <i class="fas fa-home fa-fw mr-3 text-blue-400"></i><span
                                class="pb-1 md:pb-0 text-sm">Home</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="#"
                            class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900  hover:border-pink-400">
                            <i class="fas fa-tasks fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Tasks</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="#"
                            class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900  hover:border-purple-400">
                            <i class="fa fa-envelope fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Messages</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="#"
                            class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900  hover:border-green-400">
                            <i class="fas fa-chart-area fa-fw mr-3"></i><span
                                class="pb-1 md:pb-0 text-sm">Analytics</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="#"
                            class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900  hover:border-red-400">
                            <i class="fa fa-wallet fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Payments</span>
                        </a>
                    </li>
                </ul>

                <div class="relative pull-right pl-4 pr-4 md:pr-0">
                    <input type="search" placeholder="Search"
                        class="w-full bg-gray-900 text-sm text-gray-400 transition border border-gray-800 focus:outline-none focus:border-gray-600 rounded py-1 px-2 pl-10 appearance-none leading-normal">
                    <div class="absolute search-icon" style="top: 0.375rem;left: 1.75rem;">
                        <svg class="fill-current pointer-events-none text-gray-500 w-4 h-4"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                            </path>
                        </svg>
                    </div>
                </div>

            </div>

        </div>
    </nav>

    <!--Container-->
    <div class="container w-full mx-auto pt-20">

        <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">

            <!--Console Content-->

            <div class="flex flex-wrap">
                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-gray-900 border border-gray-800 rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-green-600"><i
                                        class="fa fa-wallet fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-400">Total Revenue</h5>
                                <h3 class="font-bold text-3xl text-gray-600">$3249 <span class="text-green-500"><i
                                            class="fas fa-caret-up"></i></span></h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-gray-900 border border-gray-800 rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-pink-600"><i class="fas fa-users fa-2x fa-fw fa-inverse"></i>
                                </div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-400">Total Users</h5>
                                <h3 class="font-bold text-3xl text-gray-600">249 <span class="text-pink-500"><i
                                            class="fas fa-exchange-alt"></i></span></h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-gray-900 border border-gray-800 rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-yellow-600"><i
                                        class="fas fa-user-plus fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-400">New Users</h5>
                                <h3 class="font-bold text-3xl text-gray-600">2 <span class="text-yellow-600"><i
                                            class="fas fa-caret-up"></i></span></h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-gray-900 border border-gray-800 rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-blue-600"><i
                                        class="fas fa-server fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-400">Server Uptime</h5>
                                <h3 class="font-bold text-3xl text-gray-600">152 days</h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-gray-900 border border-gray-800 rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-indigo-600"><i
                                        class="fas fa-tasks fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-400">To Do List</h5>
                                <h3 class="font-bold text-3xl text-gray-600">7 tasks</h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-gray-900 border border-gray-800 rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-red-600"><i
                                        class="fas fa-inbox fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-400">Issues</h5>
                                <h3 class="font-bold text-3xl text-gray-600">3 <span class="text-red-500"><i
                                            class="fas fa-caret-up"></i></span></h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
            </div>

            <!--Divider-->
            <hr class="border-b-2 border-gray-600 my-8 mx-4">

            <div class="flex flex-row flex-wrap flex-grow mt-2">

                <div class="w-full md:w-1/2 p-3">
                    <!--Graph Card-->
                    <div class="bg-gray-900 border border-gray-800 rounded shadow">
                        <div class="border-b border-gray-800 p-3">
                            <h5 class="font-bold uppercase text-gray-600">Graph</h5>
                        </div>
                        <div class="p-5">
                            <div class="chartjs-size-monitor"
                                style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                <div class="chartjs-size-monitor-expand"
                                    style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                    </div>
                                </div>
                                <div class="chartjs-size-monitor-shrink"
                                    style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                </div>
                            </div>
                            <canvas id="chartjs-7" class="chartjs chartjs-render-monitor" width="1148" height="574"
                                style="display: block; height: 287px; width: 574px;"></canvas>
                            <script>
                                new Chart(document.getElementById("chartjs-7"), {
                                    "type": "bar",
                                    "data": {
                                        "labels": ["January", "February", "March", "April"],
                                        "datasets": [{
                                            "label": "Page Impressions",
                                            "data": [10, 20, 30, 40],
                                            "borderColor": "rgb(255, 99, 132)",
                                            "backgroundColor": "rgba(255, 99, 132, 0.2)"
                                        }, {
                                            "label": "Adsense Clicks",
                                            "data": [5, 15, 10, 30],
                                            "type": "line",
                                            "fill": false,
                                            "borderColor": "rgb(54, 162, 235)"
                                        }]
                                    },
                                    "options": {
                                        "scales": {
                                            "yAxes": [{
                                                "ticks": {
                                                    "beginAtZero": true
                                                }
                                            }]
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    <!--/Graph Card-->
                </div>

                <div class="w-full md:w-1/2 p-3">
                    <!--Graph Card-->
                    <div class="bg-gray-900 border border-gray-800 rounded shadow">
                        <div class="border-b border-gray-800 p-3">
                            <h5 class="font-bold uppercase text-gray-600">Graph</h5>
                        </div>
                        <div class="p-5">
                            <div class="chartjs-size-monitor"
                                style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                <div class="chartjs-size-monitor-expand"
                                    style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                    </div>
                                </div>
                                <div class="chartjs-size-monitor-shrink"
                                    style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                </div>
                            </div>
                            <canvas id="chartjs-0" class="chartjs chartjs-render-monitor" width="1148" height="574"
                                style="display: block; height: 287px; width: 574px;"></canvas>
                            <script>
                                new Chart(document.getElementById("chartjs-0"), {
                                    "type": "line",
                                    "data": {
                                        "labels": ["January", "February", "March", "April", "May", "June", "July"],
                                        "datasets": [{
                                            "label": "Views",
                                            "data": [65, 59, 80, 81, 56, 55, 40],
                                            "fill": false,
                                            "borderColor": "rgb(75, 192, 192)",
                                            "lineTension": 0.1
                                        }]
                                    },
                                    "options": {}
                                });
                            </script>
                        </div>
                    </div>
                    <!--/Graph Card-->
                </div>

                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Graph Card-->
                    <div class="bg-gray-900 border border-gray-800 rounded shadow">
                        <div class="border-b border-gray-800 p-3">
                            <h5 class="font-bold uppercase text-gray-600">Graph</h5>
                        </div>
                        <div class="p-5">
                            <div class="chartjs-size-monitor"
                                style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                <div class="chartjs-size-monitor-expand"
                                    style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                    </div>
                                </div>
                                <div class="chartjs-size-monitor-shrink"
                                    style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                </div>
                            </div>
                            <canvas id="chartjs-1" class="chartjs chartjs-render-monitor" width="722" height="360"
                                style="display: block; height: 180px; width: 361px;"></canvas>
                            <script>
                                new Chart(document.getElementById("chartjs-1"), {
                                    "type": "bar",
                                    "data": {
                                        "labels": ["January", "February", "March", "April", "May", "June", "July"],
                                        "datasets": [{
                                            "label": "Likes",
                                            "data": [65, 59, 80, 81, 56, 55, 40],
                                            "fill": false,
                                            "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)",
                                                "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(54, 162, 235, 0.2)",
                                                "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"
                                            ],
                                            "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)",
                                                "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)",
                                                "rgb(201, 203, 207)"
                                            ],
                                            "borderWidth": 1
                                        }]
                                    },
                                    "options": {
                                        "scales": {
                                            "yAxes": [{
                                                "ticks": {
                                                    "beginAtZero": true
                                                }
                                            }]
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    <!--/Graph Card-->
                </div>

                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Graph Card-->
                    <div class="bg-gray-900 border border-gray-800 rounded shadow">
                        <div class="border-b border-gray-800 p-3">
                            <h5 class="font-bold uppercase text-gray-600">Graph</h5>
                        </div>
                        <div class="p-5">
                            <div class="chartjs-size-monitor"
                                style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                <div class="chartjs-size-monitor-expand"
                                    style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                    </div>
                                </div>
                                <div class="chartjs-size-monitor-shrink"
                                    style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                </div>
                            </div><canvas id="chartjs-4" class="chartjs chartjs-render-monitor" width="722"
                                height="360" style="display: block; height: 180px; width: 361px;"></canvas>
                            <script>
                                new Chart(document.getElementById("chartjs-4"), {
                                    "type": "doughnut",
                                    "data": {
                                        "labels": ["P1", "P2", "P3"],
                                        "datasets": [{
                                            "label": "Issues",
                                            "data": [300, 50, 100],
                                            "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"]
                                        }]
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    <!--/Graph Card-->
                </div>

                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Template Card-->
                    <div class="bg-gray-900 border border-gray-800 rounded shadow">
                        <div class="border-b border-gray-800 p-3">
                            <h5 class="font-bold uppercase text-gray-600">Template</h5>
                        </div>
                        <div class="p-5">

                        </div>
                    </div>
                    <!--/Template Card-->
                </div>

                <div class="w-full p-3">
                    <!--Table Card-->
                    <div class="bg-gray-900 border border-gray-800 rounded shadow">
                        <div class="border-b border-gray-800 p-3">
                            <h5 class="font-bold uppercase text-gray-600">Table</h5>
                        </div>
                        <div class="p-5">
                            <table class="w-full p-5 text-gray-700">
                                <thead>
                                    <tr>
                                        <th class="text-left text-gray-600">Name</th>
                                        <th class="text-left text-gray-600">Side</th>
                                        <th class="text-left text-gray-600">Role</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Obi Wan Kenobi</td>
                                        <td>Light</td>
                                        <td>Jedi</td>
                                    </tr>
                                    <tr>
                                        <td>Greedo</td>
                                        <td>South</td>
                                        <td>Scumbag</td>
                                    </tr>
                                    <tr>
                                        <td>Darth Vader</td>
                                        <td>Dark</td>
                                        <td>Sith</td>
                                    </tr>
                                </tbody>
                            </table>

                            <p class="py-2"><a href="#" class="text-white">See More issues...</a>
                            </p>

                        </div>
                    </div>
                    <!--/table Card-->
                </div>


            </div>

            <!--/ Console Content-->

        </div>


    </div>
    <div id="scrnli_recorder_root"></div>
    <!--/container-->

    <footer class="bg-gray-900 border-t border-gray-400 shadow">
        <div class="container max-w-md mx-auto flex py-8">

            <div class="w-full mx-auto flex flex-wrap">
                <div class="flex w-full md:w-1/2 ">
                    <div class="px-8">
                        <h3 class="font-bold font-bold text-gray-100">About</h3>
                        <p class="py-4 text-gray-600 text-sm">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel mi ut felis tempus
                            commodo nec id erat. Suspendisse consectetur dapibus velit ut lacinia.
                        </p>
                    </div>
                </div>

                <div class="flex w-full md:w-1/2">
                    <div class="px-8">
                        <h3 class="font-bold font-bold text-gray-100">Social</h3>
                        <ul class="list-reset items-center text-sm pt-3">
                            <li>
                                <a class="inline-block text-gray-600 no-underline hover:text-gray-100 hover:text-underline py-1"
                                    href="#">Add social link</a>
                            </li>
                            <li>
                                <a class="inline-block text-gray-600 no-underline hover:text-gray-100 hover:text-underline py-1"
                                    href="#">Add social link</a>
                            </li>
                            <li>
                                <a class="inline-block text-gray-600 no-underline hover:text-gray-100 hover:text-underline py-1"
                                    href="#">Add social link</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>



        </div>
    </footer>

    <script>
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var userMenuDiv = document.getElementById("userMenu");
        var userMenu = document.getElementById("userButton");

        var navMenuDiv = document.getElementById("nav-content");
        var navMenu = document.getElementById("nav-toggle");

        document.onclick = check;

        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //User Menu
            if (!checkParent(target, userMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, userMenu)) {
                    // click on the link
                    if (userMenuDiv.classList.contains("invisible")) {
                        userMenuDiv.classList.remove("invisible");
                    } else {
                        userMenuDiv.classList.add("invisible");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    userMenuDiv.classList.add("invisible");
                }
            }

            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, navMenu)) {
                    // click on the link
                    if (navMenuDiv.classList.contains("hidden")) {
                        navMenuDiv.classList.remove("hidden");
                    } else {
                        navMenuDiv.classList.add("hidden");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    navMenuDiv.classList.add("hidden");
                }
            }

        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) {
                    return true;
                }
                t = t.parentNode;
            }
            return false;
        }
    </script>




</body>

</html>
