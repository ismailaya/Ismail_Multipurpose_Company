@include("website.includes.header")
<div class="subpage">
    <div id="slider_wrapper">
        <div class="img"><img src="{{ asset('storage/'.$data->file)}}" alt=""></div>
        <div class="slider_bot">
            <div class="page_title text-center">{{$data->title}}</div>
            <div class="container text-white pb-10">
                <a href="./" class="link text-info">Nyumbani</a> / Habari zaidi
            </div>
        </div>
    </div>

    <div class="kstyle">
        <section class="contact-main pt-12 pb-0">
            <div class="m-auto container">
                <div class="contact-info-main mt-0">
                    <div class="row">
                        <div class="col-lg-10 col-offset-lg-1 mx-auto">
                            <div class="contact-info bg-white">
                                <div class="contact-info-title text-center mb-4 px-5">
                                    <h3 class="mb-1">{{$data->title}}</h3>
                                </div>
                                <div>
                                    <div class="mb-4">
                                        <img src="{{ asset('storage/'.$data->file)}}" class="img img-thumbnail" alt="">
                                    </div>
                                    <p class="h6 text-justify">
                                        {{$data->details}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><br /><br />
    </div>

</div>
@include("website.includes.footer")