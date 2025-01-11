@include("website.includes.header")
<div class="subpage">
    <div id="slider_wrapper">
        <div class="img"><img src="./assets/images/mountain.jpg" alt=""></div>
        <div class="slider_bot">
            <div class="page_title text-center">Vitengo</div>
            <div class="container text-white pb-10">
                <a href="./" class="link text-info">Nyumbani</a> / Vitengo
            </div>
        </div>
    </div>


    <!-- ABOUT SECTION -->
    <section>
        <div class="message-section p-5 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 meyor-message">
                        <h5 class="">VITENGO VYA BARAZA LA JIJI LA ZANZIBAR</h5>
                        <hr class="mb-3">

                        <section id="service">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel-group" id="accordion" role="tablist"
                                            aria-multiselectable="true">
                                            @foreach ($data as $i => $v)
                                            <div class="panel panel-default ">
                                                <div class="panel-heading" role="tab" id="heading{{$i}}">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                            href="#collapse{{$i}}" aria-expanded="true"
                                                            aria-controls="collapse{{$i}}">
                                                            {{$v->title}}
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse{{$i}}" class="panel-collapse collapse in"
                                                    role="tabpanel" aria-labelledby="heading{{$i}}">
                                                    <div class="panel-body">
                                                        <div class="px-3">
                                                        {!!$v->details!!}

                                                        </div>

                                                        <br>
                                                        @if ($v->majukumu)
                                                            <b class="py-5 px-3">MAJUKUMU MAKUU</b>
                                                            <p class="mt-2">Majukumu makuu ya kitengo hiki katika Baraza la
                                                                Jiji la Zanzibar ni kama yafuatayo:
                                                            </p>
                                                            <ul class="list-group">
                                                                @foreach ($v->majukumu as $jukumu)
                                                                    <li class="list-group-item pb-0">
                                                                        <i
                                                                            class="fa fa-check-circle text-dark mr-3"></i><b>{{$jukumu}}</b>
                                                                    </li>
                                                                @endforeach

                                                            </ul>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>



</div>
@include("website.includes.footer")