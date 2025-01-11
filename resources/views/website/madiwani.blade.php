@include("website.includes.header")
<div class="subpage">
    <div id="slider_wrapper">
        <div class="img"><img src="./assets/images/mountain.jpg" alt=""></div>
        <div class="slider_bot">
            <div class="page_title text-center">Orodha Ya Madiwani</div>
            <div class="container text-white pb-10">
                <a href="./" class="link text-info">Nyumbani</a> / Orodha Ya Madiwani
            </div>
        </div>
    </div>


    <!-- ABOUT SECTION -->
    <section>
        <div class="message-section p-5 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 meyor-message">
                        <h5 class="">ORODHA YA MADIWANI</h5>
                        <hr class="mb-3">

                        <ul class="list-group">
                            @foreach ($data as $v)
                            
                            <li class="list-group-item">
                                <b class="float-left mt-1">{{$v->name}}</b>
                                <span class="btn btn-info btn-sm mr-3 float-right">{{$v->phone}}</span><span
                                class="btn btn-info btn-sm float-right mr-3">{{$v->role}}</span>
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