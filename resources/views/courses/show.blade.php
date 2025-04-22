<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>:: e-Learn:: Video Class</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <!-- plugin css file  -->
    <link rel="stylesheet" href="/assets/css/carousel.min.css" />
    <!-- project css file  -->
    <link rel="stylesheet" href="/assets/css/e-learn.style.min.css">
</head>
<body>

<div id="elearn-layout" class="theme-purple">
    <!-- main body area -->
    <div class="main px-lg-4 px-md-4 bg-dark-defualt">

        <!-- Body: Header -->
        <div class="header">
            <nav class="navbar py-4">
                <div class="container-fluid">

                    <!-- header rightbar icon -->
                    <div class="h-right align-items-center mr-5 mr-lg-0 order-3 d-none d-md-flex">
                        <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover">
                            <div class="u-info me-2">
                                <p class="mb-0 text-end line-height-sm text-white"><span class="font-weight-bold">{{ auth()->user()->fullName() }}</span></p>
                                <small-xs class="text-white">Student Profile</small-xs>
                            </div>
                            <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                                <img class="avatar lg rounded-circle img-thumbnail" src="/assets/img/profile.png" alt="profile">
                            </a>
                            <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                                <div class="card border-0 w280">
                                    <div class="card-body pb-0">
                                        <div class="d-flex py-1">
                                            <img class="avatar rounded-circle" src="./assets/images/profile_av.png" alt="profile">
                                            <div class="flex-fill ms-3">
                                                <p class="mb-0"><span class="font-weight-bold">Molly Cornish</span></p>
                                                <small class="">molly.cornish@gamil.com</small>
                                            </div>
                                        </div>
                                        <div><hr class="dropdown-divider border-dark"></div>
                                    </div>
                                    <div class="list-group m-2 ">
                                        <a href="students.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-graduate-alt fs-6 me-3"></i>Student Profile</a>
                                        <a href="video-class.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-black-board fs-6 me-3"></i>Video Class</a>
                                        <a href="/dist/ui-elements/auth-signin.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-logout fs-6 me-3"></i>Signout</a>
                                        <div><hr class="dropdown-divider border-dark"></div>
                                        <a href="/dist/ui-elements/auth-signup.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-contact-add fs-5 me-3"></i>Add personal account</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- main menu Search-->
                    <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">
                        <div class="input-group flex-nowrap input-group-lg">
                            @php
                            $authToken = request()->query('auth_token', '');
                            @endphp

                            <a href="https://profile.nanolympiad.org/courses/registered_courses?auth_token={{ $authToken }}" class="btn btn-primary">
                                <i class="icofont-arrow-left"></i>
                            </a>
                            &nbsp;&nbsp;
                            <h3 style="color:white">{{ $course->title }}</h3>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Body: Body -->
        <div class="body d-flex py-lg-3 py-md-2">
            <div class="container-fluid">
<!--                <div class="row clearfix">-->
<!--                    <div class="col-md-12">-->
<!--                        <div class="team_members video-list">-->
<!--                            <div class="owl-carousel owl-theme owl-carouselthree">-->
<!--                                <div class="item text-center">-->
<!--                                    <img src="/assets/images/video-img/video7.jpg" alt="" class="rounded-3 mb-3 img-thumbnail shadow-sm">-->
<!--                                    <div class="video-live">-->
<!--                                        <span class="person-status px-1 py-1"><i class="icofont-user-alt-4 color-light-success"></i></span>-->
<!--                                    </div>-->
<!--                                    <div class="video-setting-icon">-->
<!--                                        <div class="btn-group" role="group" aria-label="Basic outlined example">-->
<!--                                            <button type="button" class="btn btn-primary"><i class="icofont-mic color-light-success"></i></button>-->
<!--                                            <button type="button" class="btn btn-primary border-left border-bottom-0 border-end-0 border-top-0"><i class="icofont-video-cam color-light-success"></i></button>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
                <div class="row clearfix">
                    <div class="col-xxl-2 col-xl-2 col-lg-12 col-md-12 order-2 order-sm-2 order-md-2 order-lg-1">
                        <div class="sidebar mx-0 video-menu px-4 py-4  order-1">
                            <div class="d-flex flex-xl-column flex-xxl-column h-100">
                                <a href="#" class="mb-0 brand-icon">
                                    <span class="logo-icon">
                                        <svg  width="35" height="35" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                                        </svg>
                                    </span>
                                    <span class="logo-text">Episodes</span>
                                </a>
                                <!-- Menu: main ul -->
                                <ul class="menu-list flex-grow-1 mt-3 px-2">
                                    @forelse($episodes as $episode)
                                    <li>
                                        <a class="m-link flex-column" href="#">
                                            <img class="img-thumbnail img-fluid" src="/assets/img/epi.png" alt="teching">
                                            <span class="small-xs text-start w-100 mt-2 color-400">{{ $episode->title }}</span>
<!--                                            <span class="small-xs text-start w-100 color-600">9 Lessons 3.66MB</span>-->
                                        </a>
                                    </li>
                                    @empty
                                    <li>No episodes available.</li>
                                    @endforelse
                                </ul>
                                <!-- Menu: menu collepce btn -->
                                <button type="button" class="btn btn-link sidebar-mini-btn text-light">
                                    <span class="ms-2"><i class="icofont-bubble-right"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    @if($episode)
                    <div class="col-xxl-7 col-xl-7 col-lg-8 col-md-12 order-3 order-sm-3 order-md-3 order-lg-2">
                        <div class="video-tool py-4">
                            <video controls width="100%">
                                <source src="{{ env('URL_ADMIN') }}/{{ $episode->video_path }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    @else
                    <div class="col-xxl-7 col-xl-7 col-lg-8 col-md-12 order-3 order-sm-3 order-md-3 order-lg-2">
                        <div class="video-tool py-4">
                            <p style="color:white">
                            No episode has been added yet to this course
                            </p>
                        </div>
                    </div>
                    @endif
                    <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-12 order-1 order-sm-1 order-md-1 order-lg-3">
                        <div class="card border-0 my-4 bg-dark ">
                            <div id="rightchatbox" class="rightchatbox p-3">
                                <div id="friendslist">

                                    <div id="friends">
                                        @if($episode)
                                        <div>
                                            {!! $episode->body !!}
                                        </div>
                                        @endif

                                        @foreach($registeredList as $registered)
                                        @php
                                        $user = \App\Models\User::find($registered->user_id);
                                        @endphp
                                        <div class="friend">
                                            <img src="/assets/img/profile.png" alt="avtar"/>
                                            <p>
                                                <strong>{{ $user->fullName() }}</strong>
                                            </p>
                                            <div class="status available"></div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Jquery Core Js -->
<script src="/assets/bundles/libscripts.bundle.js"></script>

<!-- Plugin Js-->
<script src="/assets/bundles/carousel.bundle.js"></script>

<!-- Jquery Page Js -->
<script src="/assets/js/template.js"></script>
<script src="/assets/js/page/video.js"></script>
</body>
</html>