@include("website.includes.header")
<link rel="stylesheet" href="assets/css/camera.css?v=<? time() ?>" type="text/css" media="screen">
<link rel="stylesheet" href="./assets/css/touchTouch.css" type="text/css" media="screen">
<link rel="stylesheet" href="./assets/css/isotope.css" type="text/css" media="screen">
<style>
    /* NEWS SECTION STYLE */
    a:hover {
        text-decoration: none;
    }

    .widget.single-news {
        margin-bottom: 20px;
        position: relative;
    }

    .widget.single-news .image img {
        display: block;
        width: 100%;
    }

    .widget.single-news .image .gradient {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgeG1sbnM9Imh0d…IxIiBoZWlnaHQ9IjEiIGZpbGw9InVybCgjbGVzc2hhdC1nZW5lcmF0ZWQpIiAvPjwvc3ZnPg==);
        background-image: -webkit-linear-gradient(bottom, #000000 0%, rgba(0, 0, 0, 0.05) 100%);
        background-image: -moz-linear-gradient(bottom, #000000 0%, rgba(0, 0, 0, 0.05) 100%);
        background-image: -o-linear-gradient(bottom, #000000 0%, rgba(0, 0, 0, 0.05) 100%);
        background-image: linear-gradient(to top, #000000 0%, rgba(0, 0, 0, 0.05) 100%);
    }

    .widget.single-news .details {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 20px;
    }

    .widget.single-news .details .category {
        font-size: 11px;
        text-transform: uppercase;
        margin-bottom: 10px;
    }

    .widget.single-news .details .category a {
        color: #fff;
        zoom: 1;
        -webkit-opacity: 0.5;
        -moz-opacity: 0.5;
        opacity: 0.5;
        -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=50);
        filter: alpha(opacity=50);
    }

    .widget.single-news .details h3 {
        margin: 0;
        padding: 0;
        margin-bottom: 10px;
        font-size: 19px;
    }

    .widget.single-news .details h3 a {
        color: #fff;
        zoom: 1;
        -webkit-opacity: 0.8;
        -moz-opacity: 0.8;
        opacity: 0.8;
        -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=80);
        filter: alpha(opacity=80);
    }

    .widget.single-news .details:hover time {
        position: relative;
        display: block;
        color: #fff;
        font-size: 13px;
        margin-bottom: -20px;
        -webkit-transition: all 350ms cubic-bezier(0.175, 0.885, 0.320, 1.275);
        -moz-transition: all 350ms cubic-bezier(0.175, 0.885, 0.320, 1.275);
        -o-transition: all 350ms cubic-bezier(0.175, 0.885, 0.320, 1.275);
        transition: all 350ms cubic-bezier(0.175, 0.885, 0.320, 1.275);
        zoom: 1;
        -webkit-opacity: 0;
        -moz-opacity: 0;
        opacity: 0;
        -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
        filter: alpha(opacity=0);
    }
</style>
<div class="row m-0 p-0">
    <div class="col-lg-8">
        <div id="slider_wrapper">
            <div id="slider" class="clearfix">
                <div id="camera_wrap">
                    @foreach ($slides as $s)
                        <div data-src="{{asset('storage/' . $s->file)}}">
                            <div class="camera_caption moveFromLeft">
                                <div class="txt1">{{$s->title}}</div>
                                <div class="txt2">{{$s->details}}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 row m-0 p-0">
        <div class="row col-md-6 m-0 p-0">
            <div class="card p-2 m-2">
                <div class="col-sm-12">
                    <img src="{{asset('assets/images/meya.jpg')}}" alt="" class="img img-thumbnail"
                        style="width: 100%;">
                    <div class="col-sm-12 text-center mt-5">
                        <h6>Mahmoud Muhammed Mussa</h6>
                        <hr>
                        <h3><span class="font-weight-bold">Meya</span> <br> wa jiji la Zanzibar</h3>
                    </div>
                </div>

            </div>
        </div>
        <div class="row col-md-6 m-0 p-0">
        <div class="card p-2 m-2">
                <div class="col-sm-12">
                    <img src="{{asset('assets/images/mkurugenzi.jpg')}}" alt="" class="img img-thumbnail"
                        style="width: 100%;">
                    <div class="col-sm-12 text-center mt-5">
                        <h6>Salmin Amour Abdalla</h6>
                        <hr>
                        <h3><span class="font-weight-bold">Mkurugenzi</span> <br> wa jiji la Zanzibar</h3>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



<!-- SERVICE SECTION -->
<section>
    <div class="service-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 p-2">
                    <a href="{{route('wasifu')}}">
                        <div class="text-center card py-5 icon">
                            <img src="assets/images/service_1.png" alt="">
                            <div class="service-content">
                                <h5 class="mt-3">Wasifu</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 p-2">
                    <a href="{{route('historia')}}">
                        <div class="text-center card py-5 icon">
                            <img src="assets/images/service_2.png" alt="">
                            <div class="service-content">
                                <h5 class="mt-3">Historia</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 p-2">
                    <a href="{{route('dira-na-dhamira')}}">
                        <div class="text-center card py-5 icon">
                            <img src="assets/images/vision.png" alt="">
                            <div class="service-content">
                                <h5 class="mt-3">Dira na dhamira</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 p-2">
                    <a href="{{route('muundo')}}">
                        <div class="text-center card py-5 icon">
                            <img src="assets/images/service_4.png" alt="">
                            <div class="service-content">
                                <h5 class="mt-3">Muundo wa kiutawala</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="news-section">
    <div class="container pb-5 mt-5">
        <div class="row bg-gray">
            <div class="">
                <div class="py-3">
                    <h5 class="text-dark"><span class="fa fa-globe text-city"></span> Habari na Matukio</h5>
                </div>
                <div class="row">
                    @foreach ($matukio as $m)
                        <div class="mb-2 col-md-4">
                            <div class="card row  m-0">
                                <div class="col-md-12 p-0"><img src="{{asset('storage/' . $m->file)}}" alt=""
                                        class="img img-thumbnail">
                                </div>
                                <div class="col-md-12 p-5">
                                    <h5 class="font-weight-bold news-title">{{$m->title}}</h5>
                                    <div class="pt-3"
                                        style="height: 55px !important;white-spacing: break-word;overflow: hidden;">
                                        {{$m->details}}
                                    </div>
                                    <a href="{{route('maelezo-zaidi', ['id' => $m->id])}}"
                                        class="btn bg-city text-white btn-sm mt-3">Soma zaidi ...</a>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2 col-md-4">
                            <div class="card row  m-0">
                                <div class="col-md-12 p-0"><img src="{{asset('storage/' . $m->file)}}" alt=""
                                        class="img img-thumbnail">
                                </div>
                                <div class="col-md-12 p-5">
                                    <h5 class="font-weight-bold news-title">{{$m->title}}</h5>
                                    <div class="pt-3"
                                        style="height: 55px !important;white-spacing: break-word;overflow: hidden;">
                                        {{$m->details}}
                                    </div>
                                    <a href="{{route('maelezo-zaidi', ['id' => $m->id])}}"
                                        class="btn bg-city text-white btn-sm mt-3">Soma zaidi ...</a>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2 col-md-4">
                            <div class="card row  m-0">
                                <div class="col-md-12 p-0"><img src="{{asset('storage/' . $m->file)}}" alt=""
                                        class="img img-thumbnail">
                                </div>
                                <div class="col-md-12 p-5">
                                    <h5 class="font-weight-bold news-title">{{$m->title}}</h5>
                                    <div class="pt-3"
                                        style="height: 55px !important;white-spacing: break-word;overflow: hidden;">
                                        {{$m->details}}
                                    </div>
                                    <a href="{{route('maelezo-zaidi', ['id' => $m->id])}}"
                                        class="btn bg-city text-white btn-sm mt-3">Soma zaidi ...</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @if (count($matukio) == 0)
                    <div class="alert alert-info container">
                        HAKUNA TAARIFA KWA SASA
                    </div>
                @endif
            </div> <!-- container -->
        </div>
    </div>
</section>


<section class="partiner-section">
    <div class="container">
        <div class="thumbnails row" id="isotope-items">
            @foreach($images as $v)
                <div class="col-md-3 isotope-element isotope-filterall pb-7 {{ $v->related }}">
                    <div class="thumb-isotope">
                        <div class="thumbnail clearfix">
                            <a href="{{asset('storage/' . $v->file) }}">
                                <figure style="width: 100%;border-radius: 0px !important;">
                                    <img src="{{asset('storage/' . $v->file) }}" alt=""
                                        style="width: 100%;border-radius: 0px !important;"><em></em>
                                </figure>

                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- <div class="row">
            <div class="col-md-2 m-auto p-0">
                <div class="p-3">
                    <img src="assets/images/smzlogo.png" alt="" class="img img-thumbnail">
                </div>
            </div>
            <div class="col-md-2 m-auto p-0">
                <div class="p-3">
                    <img src="assets/images/smzlogo.png" alt="" class="img img-thumbnail">
                </div>
            </div>
            <div class="col-md-2 m-auto p-0">
                <div class="p-3">
                    <img src="assets/images/smzlogo.png" alt="" class="img img-thumbnail">
                </div>
            </div>
            <div class="col-md-2 m-auto p-0">
                <div class="p-3">
                    <img src="assets/images/smzlogo.png" alt="" class="img img-thumbnail">
                </div>
            </div>
            <div class="col-md-2 m-auto p-0">
                <div class="p-3">
                    <img src="assets/images/smzlogo.png" alt="" class="img img-thumbnail">
                </div>
            </div>
            <div class="col-md-2 m-auto p-0">
                <div class="p-3">
                    <img src="assets/images/smzlogo.png" alt="" class="img img-thumbnail">
                </div>
            </div>
        </div> -->
    </div>
</section>

@include("website.includes.footer")
<script type="text/javascript" src="./assets/js/touchTouch.jquery.js"></script>
<script type="text/javascript" src="./assets/js/jquery.isotope.min.js"></script>
<script type='text/javascript' src='./assets/js/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='./assets/js/camera.js'></script>

<script>
    $(document).ready(function () {
        // camera
        $('#camera_wrap').camera({
            thumbnails: true,
            autoAdvance: true,
            mobileAutoAdvance: true,
            fx: 'curtainTopLeft',
            // height: '40%',
            hover: true,
            loader: 'none',
            navigation: true,
            navigationHover: false,
            mobileNavHover: true,
            playPause: true,
            pauseOnClick: false,
            pagination: true,
            time: 7000,
            transPeriod: 1000,
            minHeight: '300px'
        });

        // touchTouch
        $('.thumb-isotope .thumbnail a').touchTouch();

    }); //
</script>


<script>
    $(document).ready(function () {





    }); //