@include("website.includes.header")
<div class="subpage">
    <div id="slider_wrapper">
        <div class="img"><img src="{{ asset('assets/images/mountain.jpg')}}" alt=""></div>
        <div class="slider_bot">
            <div class="page_title text-center">Historia</div>
            <div class="container text-white pb-10">
                <a href="./" class="link text-info">Nyumbani</a> / Historia
            </div>
        </div>
    </div>


    <!-- ABOUT SECTION -->
    <section>
        <div class="message-section p-5 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 meyor-message">
                        <h5 class="p-0 py-0 pb-4">HISTORIA YA JIJI LA ZANZIBAR</h5>
                        <hr class="mb-3">
                        {!!$data!!}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@include("website.includes.footer")