<div class="body d-flex py-lg-3 py-md-2">
    <div class="container-xxl">
        <div class="row clearfix g-3">
            <div class="col-lg-8 col-md-12 flex-column">
                <div class="row row-deck g-3">
                    <div class="col-12 col-xl-6 col-lg-12">
                        <div class="card mb-3 color-bg-200">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-5 order-lg-2">
                                        <div class="text-center p-4">
                                            <img src="assets/images/study.svg" alt="..." class="img-fluid set-md-img">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-7 order-lg-1">
                                        <h3 class=" mb-3">Welcome back, <span class="fw-bold">{{ auth()->user()->fname }}</span></h3>
{{--                                        <p class="line-height-custom mb-0">Your Study Completed <span class="secondary-color">72%</span> of the tasks.</p>--}}
{{--                                        <p class="line-height-custom">Progress is  <span class="secondary-color">Very good!</span></p>--}}
{{--                                        <a class="btn bg-secondary text-light btn-lg lift" href="http://pixelwibes.com/" target="_blank">Free Inquire</a>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
{{--                    <div class="col-12 col-xl-6 col-lg-12">--}}
{{--                        <div class="card mb-3 bg-secondary">--}}
{{--                            <div class="card-body text-white d-flex flex-column">--}}
{{--                                <div class="d-flex align-items-center mb-auto mt-3">--}}
{{--                                    <div><i class="icofont-license fs-1"></i></div>--}}
{{--                                    <div class="flex-fill ms-3 text-truncate">--}}
{{--                                        <h5 class="mb-0">Advanced Learner</h5>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex align-items-center justify-content-between mb-3">--}}
{{--                                    <h4>Level 3</h4>--}}
{{--                                    <span class="small"> 2 Course, 25 Point to reach Level 4</span>--}}
{{--                                </div>--}}
{{--                                <div class="progress" style="height: 10px;">--}}
{{--                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                    <div class="progress-bar bg-warning ms-1" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                    <div class="progress-bar bg-warning ms-1" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
{{--                <div class="card mb-3 color-bg-200">--}}
{{--                    <div class="card-header py-3">--}}
{{--                        <h6 class="mb-0 fw-bold ">Time Spending on Learning</h6>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <div id="apex-basic-column"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="mb-3">--}}
{{--                    <div class="card-header py-3 px-0 no-bg border-0 bg-transparent">--}}
{{--                        <h6 class="mb-0 fw-bold ">Other Courses </h6>--}}
{{--                        <span class="text-muted">some other courses to join now </span>--}}
{{--                    </div>--}}
{{--                    <div class="row row-deck">--}}
{{--                        <div class="col-md-12">--}}
{{--                            <div class="owl-carousel owl-theme owl-carouseltwo">--}}
{{--                                <div class="item">--}}
{{--                                    <div class="card">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="d-flex align-items-center justify-content-between">--}}
{{--                                                <div class="lesson_name">--}}
{{--                                                    <h6 class="mb-0 fw-bold  fs-6  mb-2">Environmental Engineering</h6>--}}
{{--                                                </div>--}}
{{--                                                <div class="btn-group dropup">--}}
{{--                                                    <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>--}}
{{--                                                    <ul class="dropdown-menu border-0 shadow dropdown-menu-end">--}}
{{--                                                        <li><a class="dropdown-item" href="#">Edit</a></li>--}}
{{--                                                        <li><a class="dropdown-item" href="#">Share</a></li>--}}
{{--                                                        <li><a class="dropdown-item" href="#">Delete</a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="d-flex align-items-center">--}}
{{--                                                <div class="avatar"><img class="avatar rounded-circle" src="assets/images/xs/avatar12.jpg" alt=""></div>--}}
{{--                                                <div class="flex-fill ms-2 text-truncate">--}}
{{--                                                    <div class="">Diane Fisher</div>--}}
{{--                                                </div>--}}
{{--                                                <a href="courses.html" class="btn btn-primary btn-sm" alt="join">Join Now</a>--}}
{{--                                            </div>--}}
{{--                                            <div class="dividers-block"></div>--}}
{{--                                            <div class="row g-2">--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <div class="d-flex align-items-center">--}}
{{--                                                        <i class="icofont-files-stack "></i>--}}
{{--                                                        <span class="ms-2">15 Lessons</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <div class="d-flex align-items-center">--}}
{{--                                                        <i class="icofont-ui-timer "></i>--}}
{{--                                                        <span class="ms-2">3 Month</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <div class="d-flex align-items-center">--}}
{{--                                                        <i class="icofont-group-students "></i>--}}
{{--                                                        <span class="ms-2">320 Students</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <div class="d-flex align-items-center">--}}
{{--                                                        <i class="icofont-ui-rating "></i>--}}
{{--                                                        <span class="ms-2">4.5</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="dividers-block"></div>--}}
{{--                                            <div class="d-flex align-items-center justify-content-between mb-2">--}}
{{--                                                <h4 class="small fw-bold mb-0">Students Join</h4>--}}
{{--                                                <span class="small">Student Bench 400</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="progress" style="height: 8px;">--}}
{{--                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                                <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 25%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                                <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 28%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="item">--}}
{{--                                    <div class="card">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="d-flex align-items-center justify-content-between">--}}
{{--                                                <div class="lesson_name">--}}
{{--                                                    <h6 class="mb-0 fw-bold  fs-6  mb-2">Farm Management</h6>--}}
{{--                                                </div>--}}
{{--                                                <div class="btn-group dropup">--}}
{{--                                                    <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>--}}
{{--                                                    <ul class="dropdown-menu border-0 shadow dropdown-menu-end">--}}
{{--                                                        <li><a class="dropdown-item" href="#">Edit</a></li>--}}
{{--                                                        <li><a class="dropdown-item" href="#">Share</a></li>--}}
{{--                                                        <li><a class="dropdown-item" href="#">Delete</a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="d-flex align-items-center">--}}
{{--                                                <div class="avatar"><img class="avatar rounded-circle" src="assets/images/xs/avatar10.jpg" alt=""></div>--}}
{{--                                                <div class="flex-fill ms-2 text-truncate">--}}
{{--                                                    <div class="">Andrea Gill</div>--}}
{{--                                                </div>--}}
{{--                                                <a href="courses.html" class="btn btn-primary btn-sm" alt="join">Join Now</a>--}}
{{--                                            </div>--}}
{{--                                            <div class="dividers-block"></div>--}}
{{--                                            <div class="row g-2">--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <div class="d-flex align-items-center">--}}
{{--                                                        <i class="icofont-files-stack "></i>--}}
{{--                                                        <span class="ms-2">52 Lessons</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <div class="d-flex align-items-center">--}}
{{--                                                        <i class="icofont-ui-timer "></i>--}}
{{--                                                        <span class="ms-2">4 Month</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <div class="d-flex align-items-center">--}}
{{--                                                        <i class="icofont-group-students "></i>--}}
{{--                                                        <span class="ms-2">120 Students</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <div class="d-flex align-items-center">--}}
{{--                                                        <i class="icofont-ui-rating "></i>--}}
{{--                                                        <span class="ms-2">4</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="dividers-block"></div>--}}
{{--                                            <div class="d-flex align-items-center justify-content-between mb-2">--}}
{{--                                                <h4 class="small fw-bold mb-0">Students Join</h4>--}}
{{--                                                <span class="small">Student Bench 150</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="progress" style="height: 8px;">--}}
{{--                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                                <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 25%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                                <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 28%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="item">--}}
{{--                                    <div class="card">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="d-flex align-items-center justify-content-between">--}}
{{--                                                <div class="lesson_name">--}}
{{--                                                    <h6 class="mb-0 fw-bold  fs-6  mb-2">Oil & Gas Operations</h6>--}}
{{--                                                </div>--}}
{{--                                                <div class="btn-group dropup">--}}
{{--                                                    <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>--}}
{{--                                                    <ul class="dropdown-menu border-0 shadow dropdown-menu-end">--}}
{{--                                                        <li><a class="dropdown-item" href="#">Edit</a></li>--}}
{{--                                                        <li><a class="dropdown-item" href="#">Share</a></li>--}}
{{--                                                        <li><a class="dropdown-item" href="#">Delete</a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="d-flex align-items-center">--}}
{{--                                                <div class="avatar"><img class="avatar rounded-circle" src="assets/images/xs/avatar5.jpg" alt=""></div>--}}
{{--                                                <div class="flex-fill ms-2 text-truncate">--}}
{{--                                                    <div class="">Andrea Gill</div>--}}
{{--                                                </div>--}}
{{--                                                <a href="courses.html" class="btn btn-primary btn-sm" alt="join">Join Now</a>--}}
{{--                                            </div>--}}
{{--                                            <div class="dividers-block"></div>--}}
{{--                                            <div class="row g-2">--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <div class="d-flex align-items-center">--}}
{{--                                                        <i class="icofont-files-stack "></i>--}}
{{--                                                        <span class="ms-2">52 Lessons</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <div class="d-flex align-items-center">--}}
{{--                                                        <i class="icofont-ui-timer "></i>--}}
{{--                                                        <span class="ms-2">2 Month</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <div class="d-flex align-items-center">--}}
{{--                                                        <i class="icofont-group-students "></i>--}}
{{--                                                        <span class="ms-2">220 Students</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <div class="d-flex align-items-center">--}}
{{--                                                        <i class="icofont-ui-rating "></i>--}}
{{--                                                        <span class="ms-2">4.5</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="dividers-block"></div>--}}
{{--                                            <div class="d-flex align-items-center justify-content-between mb-2">--}}
{{--                                                <h4 class="small fw-bold mb-0">Students Join</h4>--}}
{{--                                                <span class="small">Student Bench 350</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="progress" style="height: 8px;">--}}
{{--                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                                <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 25%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                                <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 28%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="item">--}}
{{--                                    <div class="card">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="d-flex align-items-center justify-content-between">--}}
{{--                                                <div class="lesson_name">--}}
{{--                                                    <h6 class="mb-0 fw-bold  fs-6  mb-2">Telecommunications</h6>--}}
{{--                                                </div>--}}
{{--                                                <div class="btn-group dropup">--}}
{{--                                                    <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>--}}
{{--                                                    <ul class="dropdown-menu border-0 shadow dropdown-menu-end">--}}
{{--                                                        <li><a class="dropdown-item" href="#">Edit</a></li>--}}
{{--                                                        <li><a class="dropdown-item" href="#">Share</a></li>--}}
{{--                                                        <li><a class="dropdown-item" href="#">Delete</a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="d-flex align-items-center">--}}
{{--                                                <div class="avatar"><img class="avatar rounded-circle" src="assets/images/xs/avatar3.jpg" alt=""></div>--}}
{{--                                                <div class="flex-fill ms-2 text-truncate">--}}
{{--                                                    <div class="">Karen Clark</div>--}}
{{--                                                </div>--}}
{{--                                                <a href="courses.html" class="btn btn-primary btn-sm" alt="join">Join Now</a>--}}
{{--                                            </div>--}}
{{--                                            <div class="dividers-block"></div>--}}
{{--                                            <div class="row g-2">--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <div class="d-flex align-items-center">--}}
{{--                                                        <i class="icofont-files-stack "></i>--}}
{{--                                                        <span class="ms-2">12 Lessons</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <div class="d-flex align-items-center">--}}
{{--                                                        <i class="icofont-ui-timer "></i>--}}
{{--                                                        <span class="ms-2">28 Days</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <div class="d-flex align-items-center">--}}
{{--                                                        <i class="icofont-group-students "></i>--}}
{{--                                                        <span class="ms-2">78 Students</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <div class="d-flex align-items-center">--}}
{{--                                                        <i class="icofont-ui-rating "></i>--}}
{{--                                                        <span class="ms-2">4.5</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="dividers-block"></div>--}}
{{--                                            <div class="d-flex align-items-center justify-content-between mb-2">--}}
{{--                                                <h4 class="small fw-bold mb-0">Students Join</h4>--}}
{{--                                                <span class="small">Student Bench 100</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="progress" style="height: 8px;">--}}
{{--                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                                <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 25%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                                <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 28%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="item">--}}
{{--                                    <div class="card">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="d-flex align-items-center justify-content-between">--}}
{{--                                                <div class="lesson_name">--}}
{{--                                                    <h6 class="mb-0 fw-bold  fs-6  mb-2">Power and Energy Engineering</h6>--}}
{{--                                                </div>--}}
{{--                                                <div class="btn-group dropup">--}}
{{--                                                    <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>--}}
{{--                                                    <ul class="dropdown-menu border-0 shadow dropdown-menu-end">--}}
{{--                                                        <li><a class="dropdown-item" href="#">Edit</a></li>--}}
{{--                                                        <li><a class="dropdown-item" href="#">Share</a></li>--}}
{{--                                                        <li><a class="dropdown-item" href="#">Delete</a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="d-flex align-items-center">--}}
{{--                                                <div class="avatar"><img class="avatar rounded-circle" src="assets/images/xs/avatar3.jpg" alt=""></div>--}}
{{--                                                <div class="flex-fill ms-2 text-truncate">--}}
{{--                                                    <div class="">Karen Clark</div>--}}
{{--                                                </div>--}}
{{--                                                <a href="courses.html" class="btn btn-primary btn-sm" alt="join">Join Now</a>--}}
{{--                                            </div>--}}
{{--                                            <div class="dividers-block"></div>--}}
{{--                                            <div class="row g-2">--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <div class="d-flex align-items-center">--}}
{{--                                                        <i class="icofont-files-stack "></i>--}}
{{--                                                        <span class="ms-2">52 Lessons</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <div class="d-flex align-items-center">--}}
{{--                                                        <i class="icofont-ui-timer "></i>--}}
{{--                                                        <span class="ms-2">2 Month</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <div class="d-flex align-items-center">--}}
{{--                                                        <i class="icofont-group-students "></i>--}}
{{--                                                        <span class="ms-2">88 Students</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <div class="d-flex align-items-center">--}}
{{--                                                        <i class="icofont-ui-rating "></i>--}}
{{--                                                        <span class="ms-2">4</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="dividers-block"></div>--}}
{{--                                            <div class="d-flex align-items-center justify-content-between mb-2">--}}
{{--                                                <h4 class="small fw-bold mb-0">Students Join</h4>--}}
{{--                                                <span class="small">Student Bench 100</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="progress" style="height: 8px;">--}}
{{--                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                                <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 25%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                                <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 32%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-12">--}}
{{--                <div class="card mb-3 color-bg-200">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="daily_practice">--}}
{{--                            <h6 class="mb-3 fw-bold ">Daily Practice</h6>--}}
{{--                            <div class="row g-2">--}}
{{--                                <div class="col-12 col-sm-6 col-md-6 col-lg-12 col-xl-6">--}}
{{--                                    <div class="card bg-lightblue ">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <h6 class="fw-bold mb-0 color-defult color-defult">Online Talking</h6>--}}
{{--                                            <small class="color-defult">#Listening</small>--}}
{{--                                            <div class="duration d-flex align-items-center justify-content-between pt-5">--}}
{{--                                                <span class="fw-bold color-defult">20Min</span>--}}
{{--                                                <span class="fw-bold color-careys-pink"><i class="icofont-listening fs-2"></i></span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-12 col-sm-6 col-md-6 col-lg-12 col-xl-6">--}}
{{--                                    <div class="card bg-lightgreen ">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <h6 class="fw-bold mb-0 color-defult"> Lesson 3</h6>--}}
{{--                                            <small class="color-defult">#Video Call</small>--}}
{{--                                            <div class="duration d-flex align-items-center justify-content-between pt-5">--}}
{{--                                                <span class="fw-bold color-defult">15Min</span>--}}
{{--                                                <span class="fw-bold color-careys-pink"><i class="icofont-video-cam fs-2"></i></span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="dividers-block"></div>--}}
{{--                        <div class="team_members">--}}
{{--                            <h6 class="mb-3 fw-bold ">Your College Mates</h6>--}}
{{--                            <div class="owl-carousel owl-theme owl-carouselone">--}}
{{--                                <div class="item text-center">--}}
{{--                                    <img src="assets/images/sm/avatar3.jpg" alt="" class="rounded-3 img-thumbnail shadow-sm">--}}
{{--                                    <h6 class="mb-0 rounded-3">Peter Bower</h6>--}}
{{--                                </div>--}}
{{--                                <div class="item text-center">--}}
{{--                                    <img src="assets/images/sm/avatar5.jpg" alt="" class="rounded-3 img-thumbnail shadow-sm">--}}
{{--                                    <h6 class="mb-0 rounded-3">Joshu Turn</h6>--}}
{{--                                </div>--}}
{{--                                <div class="item text-center">--}}
{{--                                    <img src="assets/images/sm/avatar8.jpg" alt="" class="rounded-3 img-thumbnail shadow-sm">--}}
{{--                                    <h6 class="mb-0 rounded-3">Ryan Bell</h6>--}}
{{--                                </div>--}}
{{--                                <div class="item text-center">--}}
{{--                                    <img src="assets/images/sm/avatar9.jpg" alt="" class="rounded-3 img-thumbnail shadow-sm">--}}
{{--                                    <h6 class="mb-0 rounded-3">Sean	Jones</h6>--}}
{{--                                </div>--}}
{{--                                <div class="item text-center">--}}
{{--                                    <img src="assets/images/sm/avatar11.jpg" alt="" class="rounded-3 img-thumbnail shadow-sm">--}}
{{--                                    <h6 class="mb-0 rounded-3">Max Morg</h6>--}}
{{--                                </div>--}}
{{--                                <div class="item text-center">--}}
{{--                                    <img src="assets/images/sm/avatar10.jpg" alt="" class="rounded-3 img-thumbnail shadow-sm">--}}
{{--                                    <h6 class="mb-0 rounded-3">Colin Rees</h6>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="dividers-block"></div>--}}
{{--                        <div class="upcoming-lessons">--}}
{{--                            <h6 class="mb-3 fw-bold ">Upcoming-Lessons</h6>--}}
{{--                            <div class="card line-lightblue mb-3">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="d-flex align-items-center justify-content-between">--}}
{{--                                        <div class="lesson_name">--}}
{{--                                            <h6 class="mb-0 fw-bold ">Civil Law</h6>--}}
{{--                                            <small class="text-muted">Thu 15, 4 PM to 6 PM</small>--}}
{{--                                        </div>--}}
{{--                                        <div class="btn-group dropup">--}}
{{--                                            <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>--}}
{{--                                            <ul class="dropdown-menu border-0 shadow dropdown-menu-end">--}}
{{--                                                <li><a class="dropdown-item" href="#">Edit</a></li>--}}
{{--                                                <li><a class="dropdown-item" href="#">Share</a></li>--}}
{{--                                                <li><a class="dropdown-item" href="#">Delete</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex align-items-center justify-content-between mt-5">--}}
{{--                                        <div class="avatar-list avatar-list-stacked">--}}
{{--                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar2.jpg" alt="">--}}
{{--                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar1.jpg" alt="">--}}
{{--                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar3.jpg" alt="">--}}
{{--                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar4.jpg" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="add_lession_person avatar-list">--}}
{{--                                            <span class="avatar rounded-circle text-center pointer" data-bs-toggle="modal" data-bs-target="#addUser"><i class="icofont-ui-add"></i></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card line-lightgreen">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="d-flex align-items-center justify-content-between">--}}
{{--                                        <div class="lesson_name">--}}
{{--                                            <h6 class="mb-0 fw-bold ">Arts and Design</h6>--}}
{{--                                            <small class="text-muted">Thu 15, 2 PM to 4 PM</small>--}}
{{--                                        </div>--}}
{{--                                        <div class="btn-group dropup">--}}
{{--                                            <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>--}}
{{--                                            <ul class="dropdown-menu border-0 shadow dropdown-menu-end">--}}
{{--                                                <li><a class="dropdown-item" href="#">Edit</a></li>--}}
{{--                                                <li><a class="dropdown-item" href="#">Share</a></li>--}}
{{--                                                <li><a class="dropdown-item" href="#">Delete</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex align-items-center justify-content-between mt-5">--}}
{{--                                        <div class="avatar-list avatar-list-stacked">--}}
{{--                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar7.jpg" alt="">--}}
{{--                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar8.jpg" alt="">--}}
{{--                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar9.jpg" alt="">--}}
{{--                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar10.jpg" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="add_lession_person avatar-list">--}}
{{--                                            <span class="avatar rounded-circle text-center pointer" data-bs-toggle="modal" data-bs-target="#addUser"><i class="icofont-ui-add"></i></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card bg-dark mb-3">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="card-header py-3">--}}
{{--                            <h6 class="mb-0 fw-bold text-white">Are you ready next lessons </h6>--}}
{{--                        </div>--}}
{{--                        <div class="digital-clock d-flex justify-content-center align-items-center min-height-220">--}}
{{--                            <figure>--}}
{{--                                <div class="face top"><p id="s"></p></div>--}}
{{--                                <div class="face front"><p id="m"></p></div>--}}
{{--                                <div class="face left"><p id="h"></p></div>--}}
{{--                            </figure>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div><!-- Row End -->--}}
    </div>
</div>
