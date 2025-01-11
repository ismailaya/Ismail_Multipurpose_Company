@include("website.includes.header")
<div class="subpage">
    <div id="slider_wrapper">
        <div class="img"><img src="./assets/images/mountain.jpg" alt=""></div>
        <div class="slider_bot">
            <div class="page_title text-center">Wasifu</div>
            <div class="container text-white pb-10">
                <a href="./" class="link text-info">Nyumbani</a> / Wasifu
            </div>
        </div>
    </div>


    <!-- ABOUT SECTION -->
    <section>
        <div class="message-section p-5 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 meyor-message">
                        <h5 class="">BARAZA LA JIJI LA ZANZIBAR</h5>
                        <hr class="mb-3">
                        {!!$data!!}
                        <br>
                        <b class="py-5">Majukumu Makuu</b>
                        <p class="mt-2">Majukumu makuu ya Baraza la Jiji la Zanzibar ni pamoja na yafuatayo:</p>
                        <ul class="list-group">
                            <li class="list-group-item pb-0">
                                <i class="fa fa-check-circle text-dark mr-3"></i><b>Mipango Miji na Ujenzi</b>
                                <p class="pl-5 pt-3">Kusimamia mipango ya ujenzi na maendeleo ya miundombinu, ikiwa ni pamoja na barabara, masoko, na maeneo ya umma.</p>
                            </li>
                            <li class="list-group-item pb-0">
                                <i class="fa fa-check-circle text-dark mr-3"></i><b>Usafi na Mazingira</b>
                                <p class="pl-5 pt-3">Kuhakikisha usafi wa mazingira kwa kutoa huduma za kukusanya taka na kuhifadhi mazingira ya kijani.</p>
                            </li>
                            <li class="list-group-item pb-0">
                                <i class="fa fa-check-circle text-dark mr-3"></i><b>Huduma za Afya na Elimu</b>
                                <p class="pl-5 pt-3">Kusimamia vituo vya afya na shule za msingi ndani ya jiji, pamoja na kutoa huduma kwa jamii zinazohusiana na afya na elimu.</p>
                            </li>
                            <li class="list-group-item pb-0">
                                <i class="fa fa-check-circle text-dark mr-3"></i><b>Biashara na Leseni</b>
                                <p class="pl-5 pt-3">Kusimamia utoaji wa leseni za biashara na vibali vingine ili kurahisisha shughuli za kiuchumi ndani ya jiji.</p>
                            </li>
                            <li class="list-group-item pb-0">
                                <i class="fa fa-check-circle text-dark mr-3"></i><b>Usalama wa Jamii</b>
                                <p class="pl-5 pt-3">Kushirikiana na vyombo vya usalama ili kuhakikisha usalama wa wakazi na wageni katika jiji.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include("website.includes.footer")