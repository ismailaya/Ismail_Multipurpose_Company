@include("website.includes.header")
<div class="subpage">
    <div id="slider_wrapper">
        <div class="img"><img src="./assets/images/mountain.jpg" alt=""></div>
        <div class="slider_bot">
            <div class="page_title text-center">Huduma Zetu</div>
            <div class="container text-white pb-10">
                <a href="./" class="link text-info">Nyumbani</a> / Huduma Zetu
            </div>
        </div>
    </div>


    <!-- ABOUT SECTION -->
    <section>
        <div class="message-section p-5 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 meyor-message">
                        <h5 class="">HUDUMA ZETU</h5>
                        <hr class="mb-3">
                        
                        <ul class="list-group">
                            @foreach ($data as $v)
                            
                            <li class="list-group-item pb-0">
                                <i class="fa fa-check-circle text-dark mr-3"></i><b>{{$v->title}}</b>
                                <p class="pl-5 pt-3">{!!$v->details!!}</p>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include("website.includes.footer")