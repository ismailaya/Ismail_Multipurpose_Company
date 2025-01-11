</div>
<!-- content-wrapper ends -->
<footer class="footer">
    <div class="footer-top py-8">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-8 pe-xxl-10">
                    <div class="row gy-5">
                        <div class="col-6 col-lg-12">
                            <h5 class="text-white footer-title-02">{{$global_setting->name ?? "-"}}</h5>
                            <ul class="list-unstyled footer-link-01 m-0">
                                <li><a class="text-white text-opacity-75"
                                        href="#">{{$global_setting->address ?? "-"}}</a></li>
                                <li><a class="text-white text-opacity-75"
                                        href="#">{{$global_setting->email1 ?? "-"}}</a></li>
                                <li><a class="text-white text-opacity-75"
                                        href="#">{{$global_setting->phone1 ?? "-"}}</a></li>
                                <li><a class="text-white text-opacity-75" href="#">{{$global_setting->pobox ?? "-"}}</a>
                                </li>
                            </ul>
                        </div>
                        <!-- <div class="col-6 col-lg-4">
                            <h5 class="text-white footer-title-01">About</h5>
                            <ul class="list-unstyled footer-link-01 m-0">
                                <li><a class="text-white text-opacity-75" href="#">Customer Service</a></li>
                                <li><a class="text-white text-opacity-75" href="#">Privacy Policy</a></li>
                                <li><a class="text-white text-opacity-75" href="#">Cookie Policy</a></li>
                                <li><a class="text-white text-opacity-75" href="#">Terms &amp; Conditions</a></li>
                                <li><a class="text-white text-opacity-75" href="#">Terms of Use</a></li>
                            </ul>
                        </div> -->
                        <!-- <div class="col-6 col-lg-6">
                            <h6 class="text-white footer-title-01">Need Help?</h6>
                            <ul class="list-unstyled footer-link-01 m-0">
                                <li><a class="text-white text-opacity-75" href="#">Contact Us</a></li>
                                <li><a class="text-white text-opacity-75" href="#">FAQs</a></li>
                                <li><a class="text-white text-opacity-75" href="#">Offers &amp; Kits</a></li>
                                <li><a class="text-white text-opacity-75" href="#">Get the app</a></li>
                                <li><a class="text-white text-opacity-75" href="#">Store locator</a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
                <!-- <div class="col-lg-4">
                    <h5 class="text-white footer-title-01 fs-5">Subscribe to our newsletter and get 15% off your
                        next order.</h5>
                    <div>
                        <form class="d-flex flex-row mb-2 p-1 bg-white input-group"><input type="email"
                                class="form-control rounded border-0" placeholder="Your Email"> <button
                                class="btn btn-secondary flex-shrink-0" type="submit">Subscribe</button></form>
                        <p class="fs-sm text-white text-opacity-75">I agree to receive Absolution newsletters
                        </p>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="footer-bottom small py-3 border-top border-white border-opacity-10">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start py-1">
                    <p class="m-0 text-white text-left text-opacity-75">© Copyright <?= date("Y") ?> <a
                            class="text-reset" href="#"> {{$global_setting->name ?? "-"}}</a></p>
                </div>
                <div class="col-md-6 text-center text-md-end py-1">
                    <!-- <ul class="nav justify-content-center justify-content-md-end list-unstyled footer-link-01 m-0">
                        <li class="p-0 mx-3 ms-md-0 me-md-3"><a href="#" class="text-white text-opacity-75">Privace
                                &amp; Policy</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
<script type='text/javascript' src='{{ asset('assets/js/jquery.easing.1.3.js')}}'></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.ui.totop.js')}}"></script>
<style>
    /* Container for Google Translate dropdown */
    #google_translate_element {
        font-family: Arial, sans-serif; /* Customize font */
        display: inline-block;
        position: absolute;
        top: 10px;
        left: 20px;
        padding: 10px;
    }

    /* Style the translation dropdown container */
    .goog-te-combo {
        font-family: Arial, sans-serif; /* Customize font */
        background-color: #f0f0f0;  /* Background color */
        border: 1px solid #ccc;      /* Border */
        border-radius: 4px;          /* Rounded corners */
        padding: 8px 12px;            /* Padding */
        font-size: 14px;              /* Font size */
        margin-top: 10px;             /* Margin from other content */
        cursor: pointer;             /* Pointer cursor on hover */
        width: auto;
        
    }

    /* Hover effect on the dropdown */
    .goog-te-combo:hover {
        background-color: #e0e0e0;  /* Hover color */
    }

    /* Customize the translation dropdown */
    .goog-te-menu-frame {
        border: 2px solid #ccc; /* Border color */
        border-radius: 4px;     /* Rounded corners */
    }

    /* Style the language menu */
    .goog-te-menu-value {
        font-family: Arial, sans-serif;
        font-size: 14px;
    }

    /* Style the menu options */
    .goog-te-menu2-item {
        font-family: Arial, sans-serif;
        font-size: 14px;
        color: #333;
    }

    /* Hover effect on language options */
    .goog-te-menu2-item:hover {
        background-color: #f0f0f0;
    }

    /* Optional: Hide the language selector on mobile */
    /* @media screen and (max-width: 600px) {
        #google_translate_element {
            display: none; 
        }
    } */
</style>

<div id="google_translate_element"></div>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'sw',
            includedLanguages: 'en,sw',  // You can add more languages
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }
</script>

<script type="text/javascript"
    src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>

</html>