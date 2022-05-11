<footer class="bg-white">
    <div class="container pt-5 pb-5 ">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-widget">
                    <div class="footer-logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('frontend') }}/img/logo.png" alt="">
                        </a>
                        <p>Designed and built with all the love in the world by the Bootstrap team with the help of our
                            contributors.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-widget">
                    <h5 style="text-transform: uppercase;">usefull links</h5>
                    <ul>
                        <li><a href="{{ url('/') }}">home</a></li>
                        <li><a href="#">about</a></li>
                        <li><a href="{{ route('contact.index') }}">contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-widget">
                    <h5 style="text-transform: uppercase;">Subscribe</h5>
                    <form action="" method="post">
                        <input type="email" name="email" id="email" placeholder="Enter Email">
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="py-2 copyright">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-between  border-top align-items-center">
                    <p class="fw-bold" style="margin: 0;">© 2022 Company, Inc. All rights reserved.</p>
                    <ul class="list-unstyled d-flex footericon" style="margin: 0;">
                        <li class="ms-3">
                            <a class="link-dark" href="#">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="ms-3">
                            <a class="link-dark" href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="ms-3">
                            <a class="link-dark" href="#">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
