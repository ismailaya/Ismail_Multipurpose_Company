@include("website.includes.header")
<div class="subpage">
    <div id="slider_wrapper">
        <div class="img"><img src="./assets/images/mountain.jpg" alt=""></div>
        <div class="slider_bot">
            <div class="page_title text-center">Kamati ya kudumu</div>
            <div class="container text-white pb-10">
                <a href="./" class="link text-info">Nyumbani</a> / Kamati ya kudumu
            </div>
        </div>
    </div>


    <!-- ABOUT SECTION -->
    <section>
        <div class="message-section p-5 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 meyor-message">
                        <h5 class="">KAMATI YA KUDUMU YA BARAZA LA JIJI</h5>
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
                                                            <p class="mt-2">Majukumu makuu ya idara hii katika Baraza la
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


                                            <br>
                                            <b class="py-5">MAJUKUMU MAKUU</b>
                                            <p class="mt-2">Mjukumu ya Kamati za Kudumu za Baraza la Jiji ni kama
                                                yafuatayo:
                                            </p>
                                            <ul class="list-group">
                                                <li class="list-group-item pb-0">
                                                    <i class="fa fa-check-circle text-dark mr-3"></i><b>
                                                        Kuainisha, kuchanganua na kuweka vipaumbele kulingana na
                                                        mahitaji
                                                        ya Baraza.</b>
                                                </li>
                                                <li class="list-group-item pb-0">
                                                    <i class="fa fa-check-circle text-dark mr-3"></i><b>
                                                        Kuainisha na kuwasilisha mapendekezo ya Idara inayohusiana na
                                                        Kamati
                                                        hiyo.</b>
                                                </li>
                                                <li class="list-group-item pb-0">
                                                    <i class="fa fa-check-circle text-dark mr-3"></i><b>
                                                        Kuongoza na kusimamia utekelezaji wa sera na kazi za ldara
                                                        katika
                                                        kamati husika na kushauri idara ipasavyo.
                                                    </b>

                                                </li>
                                                <li class="list-group-item pb-0">
                                                    <i class="fa fa-check-circle text-dark mr-3"></i><b>
                                                        Kupokea na kutatua Changamoto, matatizo au malalamiko yatakayo
                                                        pelekwa katika Kamati kutoka Barazani. </b>

                                                </li>
                                                <li class="list-group-item pb-0">
                                                    <i class="fa fa-check-circle text-dark mr-3"></i><b>
                                                        Kufanya upembuzi wa miradi, mipango inayotoka katika Mabaraza ya
                                                        Wadi na Shehia.
                                                    </b>
                                                </li>
                                                <li class="list-group-item pb-0">
                                                    <i class="fa fa-check-circle text-dark mr-3"></i><b>
                                                        Kuwasilisha ripoti katika Baraza.
                                                    </b>
                                                </li>
                                                <li class="list-group-item pb-0">
                                                    <i class="fa fa-check-circle text-dark mr-3"></i><b>
                                                        Kuandaa Mipango ya Baraza na Bajeti kwa ajili ya kupitishwa na
                                                        Baraza.
                                                    </b>
                                                </li>
                                                <li class="list-group-item pb-0">
                                                    <i class="fa fa-check-circle text-dark mr-3"></i><b>
                                                        Kuongoza na kusimamia utekelezaji wa Mipango ya Bajeti ya
                                                        Baraza.
                                                    </b>
                                                </li>
                                                <li class="list-group-item pb-0">
                                                    <i class="fa fa-check-circle text-dark mr-3"></i><b>
                                                        Kutekeleza kazi na majukumu mengine kama itakavyoelekezwa na
                                                        Baraza.
                                                    </b>
                                                </li>
                                                <li class="list-group-item pb-0">
                                                    <i class="fa fa-check-circle text-dark mr-3"></i><b>
                                                        Kufanya ufuatiliaji wa utekelezaji wa maazimio, maagizo ya vikao
                                                        vya
                                                        Baraza.
                                                    </b>
                                                </li>
                                            </ul>
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