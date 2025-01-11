@include("website.includes.header")
<div class="subpage">
    <div id="slider_wrapper">
        <div class="img"><img src="./assets/images/mountain.jpg" alt=""></div>
        <div class="slider_bot">
            <div class="page_title text-center">Matukio</div>
            <div class="container text-white pb-10">
                <a href="./" class="link text-info">Nyumbani</a> / Matukio
            </div>
        </div>
    </div>


    <section class="news-section">
    <div class="container pb-5 mt-5">
        <div class="row bg-gray">
            <div class="">
                <div class="py-3">
                    <h5 class="text-dark"><span class="fa fa-globe text-city"></span> MATUKIO</h5>
                </div>
                <div class="row">
                    @foreach ($data as $m)
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
                                    <a href="{{route('maelezo-zaidi',['id'=>$m->id])}}" class="btn bg-city text-white btn-sm mt-3">Soma zaidi ...</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div> <!-- container -->
        </div>
    </div>
</section>
</div>
@include("website.includes.footer")