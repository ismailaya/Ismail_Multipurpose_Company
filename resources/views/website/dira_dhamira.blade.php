@include("website.includes.header")
<div class="subpage">
    <div id="slider_wrapper">
        <div class="img"><img src="{{ asset('assets/images/mountain.jpg')}}" alt=""></div>
        <div class="slider_bot">
            <div class="page_title text-center">Dira na dhamira</div>
            <div class="container text-white pb-10">
                <a href="./" class="link text-info">Nyumbani</a> / Dira na dhamira
            </div>
        </div>
    </div>


    <!-- ABOUT SECTION -->
    <section>
        <div class="message-section p-5 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 meyor-message">
                        <h5 class="">DIRA, DHAMIRA NA MIKAKATI</h5>
                        <hr class="mb-3">
                        {!!$data!!}

                        <br>
                        <b class="py-5">Mikakati mahsusi ya Baraza la Jiji la Zanzibar</b>
                        <p class="mt-2">Mpango Mkakati wa Baraza la Jiji umetaja mikakati mahsusi ya kiutekelezaji ili
                            kuhakikisha kupatikana kwa mafanikio yaliyokusudiwa ndani wa wakati wa
                            utekelezaji wa shughuli zilizopangwa. Mikakati hiyo ni pamoja na ifuatayo:</p>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <i class="fa fa-check-circle text-dark"></i>
                                Kuyasimamia Mabaraza ya Manispaa yaliyomo ndani ya Jiji la
                                Zanzibar
                                na kuhakikisha usafi na udhibiti wa taka unafanyika kwa kiwango cha
                                kuridhisha ili kulifanya Jiji kuwa na mandhari ya kupendeza na kulinda
                                afya za wakaazi wake.
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-check-circle text-dark"></i>
                                Kubuni vyanzo vya mapato na udhitibiti wa mapato kwa kutumia
                                mifumo
                                ya kielektroniki.
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-check-circle text-dark"></i>
                                Kuandaa mazingira bora ya yatakayowezesha kuimarisha maendeleo
                                ya
                                biashara, kukuza utalii, kuvutia uwekezaji na kuwakuza wajasiriamali.
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-check-circle text-dark"></i>
                                Kuimarisha uwezo wa taasisi na kukuza mahusiano na mashirikiano
                                na
                                jamii pamoja na taasisisi mbalimbali za ndani na nje ya nchi.
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-check-circle text-dark"></i>
                                Kuhakikisha shughuli zote za Baraza la Jiji la Zanzibar
                                zinafanyika kwa
                                kuzingatia Utawala Bora na kuzingatia Sera, Sheria na Miongozo ya
                                Serikali ya Mapinduzi ya Zanzibar.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include("website.includes.footer")