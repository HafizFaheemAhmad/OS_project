@extends('dashboard/layouts.app')
@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Chartjs</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Charts &amp; Maps</a>
                                    </li>
                                    <li class="breadcrumb-item active">Chartjs
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i
                                        class="me-1" data-feather="check-square"></i><span
                                        class="align-middle">Todo</span></a><a class="dropdown-item"
                                    href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span
                                        class="align-middle">Chat</span></a><a class="dropdown-item"
                                    href="app-email.html"><i class="me-1" data-feather="mail"></i><span
                                        class="align-middle">Email</span></a><a class="dropdown-item"
                                    href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span
                                        class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <p>
                            You can easily create reuseable chart components. Read full documentation
                            <a href="https://www.chartjs.org/docs/latest/getting-started/" target="_blank">here</a>.
                        </p>
                    </div>
                </div>
                <!-- ChartJS section start -->
                <section id="chartjs-chart">
                    <div class="row">
                        <!--Bar Chart Start -->
                        <div class="col-xl-6 col-12">
                            <div class="card">
                                <div
                                    class="card-header d-flex justify-content-between align-items-sm-center align-items-start flex-sm-row flex-column">
                                    <div class="header-left">
                                        <h4 class="card-title">Latest Statistics</h4>
                                    </div>
                                    <div class="header-right d-flex align-items-center mt-sm-0 mt-1">
                                        <i data-feather="calendar"></i>
                                        <input type="text"
                                            class="form-control flat-picker border-0 shadow-none bg-transparent pe-0"
                                            placeholder="YYYY-MM-DD" />
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas class="bar-chart-ex chartjs" data-height="400"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- Bar Chart End -->

                        <!-- Horizontal Bar Chart Start -->
                        <div class="col-xl-6 col-12">
                            <div class="card">
                                <div
                                    class="card-header d-flex justify-content-between align-items-sm-center align-items-start flex-sm-row flex-column">
                                    <div class="header-left">
                                        <p class="card-subtitle text-muted mb-25">Balance</p>
                                        <h4 class="card-title">$74,123</h4>
                                    </div>
                                    <div class="header-right d-flex align-items-center mt-sm-0 mt-1">
                                        <i data-feather="calendar"></i>
                                        <input type="text"
                                            class="form-control flat-picker border-0 shadow-none bg-transparent pe-0"
                                            placeholder="YYYY-MM-DD" />
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas class="horizontal-bar-chart-ex chartjs" data-height="400"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- Horizontal Bar Chart End -->
                    </div>

                    <!-- Line Chart Starts-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div>
                                        <h4 class="card-title">Statistics</h4>
                                        <span class="card-subtitle text-muted">Commercial networks and enterprises</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas class="line-chart-ex chartjs" data-height="450"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Line Chart Ends-->

                    <div class="row">
                        <!-- Radar Chart Starts-->
                        <div class="col-lg-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-row justify-content-between align-items-center">
                                    <h4 class="card-title">Radar Chart</h4>
                                    <div class="d-flex align-items-center flex-wrap">
                                        <div id="tooltip" class="tooltip-placeholder"></div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas class="radar-chart-ex chartjs" id="canvas" data-height="355"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- Radar Chart Ends-->

                        <!-- Polar Area Chart Starts -->
                        <div class="col-lg-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Average Skills</h4>
                                    <div class="dropdown">
                                        <i data-feather="more-vertical" class="cursor-pointer" role="button"
                                            id="heat-chart-dd" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        </i>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="heat-chart-dd">
                                            <a class="dropdown-item" href="#">Last 28 Days</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas class="polar-area-chart-ex chartjs" data-height="350"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- Polar Area Chart Ends-->
                    </div>

                    <!-- Bubble Chart Starts -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Bubble Chart</h4>
                                    <div class="d-flex align-items-center flex-wrap">
                                        <h5 class="fw-bolder mb-0 me-1">$ 100,000</h5>
                                        <span class="badge badge-light-secondary">
                                            <i class="text-danger font-small-3" data-feather="arrow-down"></i>
                                            <span class="align-middle">20%</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas class="bubble-chart-ex chartjs" data-height="500"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Bubble Chart Ends -->

                    <div class="row">
                        <!-- Donut Chart Starts -->
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Sessions By Device</h4>
                                </div>
                                <div class="card-body">
                                    <canvas class="doughnut-chart-ex chartjs" data-height="275"></canvas>
                                    <div class="d-flex justify-content-between mt-3 mb-1">
                                        <div class="d-flex align-items-center">
                                            <i data-feather="monitor" class="font-medium-2 text-primary"></i>
                                            <span class="fw-bold ms-75 me-25">Desktop</span>
                                            <span>- 80%</span>
                                        </div>
                                        <div>
                                            <span>2%</span>
                                            <i data-feather="arrow-up" class="text-success"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mb-1">
                                        <div class="d-flex align-items-center">
                                            <i data-feather="tablet" class="font-medium-2 text-warning"></i>
                                            <span class="fw-bold ms-75 me-25">Mobile</span>
                                            <span>- 10%</span>
                                        </div>
                                        <div>
                                            <span>8%</span>
                                            <i data-feather="arrow-up" class="text-success"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <i data-feather="tablet" class="font-medium-2 text-success"></i>
                                            <span class="fw-bold ms-75 me-25">Tablet</span>
                                            <span>- 10%</span>
                                        </div>
                                        <div>
                                            <span>-5%</span>
                                            <i data-feather="arrow-down" class="text-danger"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Donut Chart Starts -->

                        <!-- Scatter Chart Starts  -->
                        <div class="col-lg-8 col-12">
                            <div class="card">
                                <div
                                    class="card-header d-flex justify-content-between align-items-baseline align-items-sm-center flex-sm-row flex-column">
                                    <h4 class="card-title">New Product Data</h4>
                                    <div class="btn-group mt-md-0 mt-1" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="radio_options" id="radio_option1"
                                            autocomplete="off" checked />
                                        <label class="btn btn-outline-primary" for="radio_option1">Daily</label>

                                        <input type="radio" class="btn-check" name="radio_options" id="radio_option2"
                                            autocomplete="off" />
                                        <label class="btn btn-outline-primary" for="radio_option2">Monthly</label>

                                        <input type="radio" class="btn-check" name="radio_options" id="radio_option3"
                                            autocomplete="off" />
                                        <label class="btn btn-outline-primary" for="radio_option3">Yearly</label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas class="scatter-chart-ex chartjs" data-height="415"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- Scatter Chart Ends  -->
                    </div>

                    <!-- Area Chart Starts -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div
                                    class="card-header d-flex justify-content-between align-items-baseline flex-sm-row flex-column">
                                    <h4 class="card-title">Data Science</h4>
                                    <div class="header-right d-flex align-items-center mt-sm-0 mt-1">
                                        <i data-feather="calendar"></i>
                                        <input type="text"
                                            class="form-control flat-picker border-0 shadow-none bg-transparent pe-0"
                                            placeholder="YYYY-MM-DD" />
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas class="line-area-chart-ex chartjs" data-height="450"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Area Chart Ends -->
                </section>
                <!-- ChartJS section end -->

            </div>
        </div>
    </div>
@endsection

@push('css')
    <link href="{{ asset('css/flatpickr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bordered-layout.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form-flat-pickr.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endpush

@push('js')
    <script src="{{ URL::asset('/js/chart.min.js') }}"></script>
    <script src="{{ URL::asset('/js/flatpickr.min.js') }}"></script>
    <script src="{{ URL::asset('/js/chart-chartjs.js') }}"></script>

@endpush
