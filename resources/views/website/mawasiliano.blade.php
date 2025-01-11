@include("website.includes.header")
<div class="subpage">
    <div id="slider_wrapper">
        <div class="img"><img src="{{ asset('assets/images/mountain.jpg')}}" alt=""></div>
        <div class="slider_bot">
            <div class="page_title text-center">Mawasiliano</div>
            <div class="container text-white pb-10">
                <a href="./" class="link text-info">Nyumbani</a> / Mawasiliano
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
                                    <h3 class="mb-1">WASILIANA NASI</h3>
                                    <p class="mb-0">Tungependa kusikia kutoka kwako</p>
                                </div>
                                <div class="contact-info-content row mb-1">
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="info-item bg-lgrey px-4 py-5 border-all text-center rounded">
                                            <div class="info-icon mb-2">
                                                <i class="fa fa-map-marker theme"></i>
                                            </div>
                                            <div class="info-content">
                                                <h3>Mahali pa ofisi</h3>
                                                <p class="m-0">{{$global_setting->address ?? "-"}}</p>
                                                <p class="m-0"><i class="fa fa-clock-o text-primary mt-1"></i>
                                                    {{$global_setting->working_hour ?? "-"}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="info-item bg-lgrey px-4 py-5 border-all text-center rounded">
                                            <div class="info-icon mb-2">
                                                <i class="fa fa-phone theme"></i>
                                            </div>
                                            <div class="info-content">
                                                <h3>Nambari za simu</h3>
                                                <p class="m-0">{{$global_setting->phone1 ?? "-"}}</p>
                                                <p class="m-0">{{$global_setting->phone2 ?? "-"}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 mb-4">
                                        <div class="info-item bg-lgrey px-4 py-5 border-all text-center rounded">
                                            <div class="info-icon mb-2">
                                                <i class="fa fa-envelope theme"></i>
                                            </div>
                                            <div class="info-content ps-4">
                                                <h3>Barua Pepe</h3>
                                                <p class="m-0">{{$global_setting->email1 ?? "-"}}</p>
                                                <p class="m-0">{{$global_setting->email2 ?? "-"}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div id="contact-form1" class="contact-form">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="map rounded overflow-hiddenb rounded mb-md-4">
                                                <div style="width: 100%">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <form method="post" action="sender.php">
                                                <input type="hidden" name="from" value="contact" required="true">
                                                <div class="form-group mb-2">
                                                    <input type="text" name="fullname" class="form-control"
                                                        id="fullname" placeholder="Jina kamili">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <input type="email" name="email" class="form-control" id="email"
                                                        placeholder="Barua pepe" required="true">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <input type="text" name="phone" class="form-control" id="phone"
                                                        placeholder="Nambari ya siku" required="true">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <input type="text" name="subject" class="form-control" id="subject"
                                                        placeholder="Kichwa cha habari" required="true">
                                                </div>
                                                <div class="textarea mb-2">
                                                    <textarea name="contactmessage" placeholder="Ingiza ujumbe wako"
                                                        required="true"></textarea>
                                                </div>
                                                <div class="comment-btn text-center">
                                                    <button class="nir-btn">Send Message Now</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><br /><br />
    </div>


    <div class="container-fluid p-0 m-0">
        <figure class="google_map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d507805.17901787854!2d39.3810133!3d-6.09997095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185d29602a2909e5%3A0xa035af4aad9b7d5f!2sUnguja!5e0!3m2!1sen!2stz!4v1655326025173!5m2!1sen!2stz"
                style="border:0;height: 50vh !important;paddinh:0px;margin: 0px;" allowfullscreen="true" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </figure>
    </div>

</div>
@include("website.includes.footer")