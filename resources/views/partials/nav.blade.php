<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <svg width="100" height="100">
      <polygon points="50,20 60,20 70,30 70,40 60,50 50,50 40,40 40, 30" style="fill:lightblue;stroke:purple;stroke-width:1">
        <animate id="animation1"
            attributeName="opacity"
            from="1" to="0" dur="3s"
            begin="0s;animation2.end" />
        <animate id="animation2"
            attributeName="opacity"
            from="0" to="1" dur="3s"
            begin="animation1.end" />
      </polygon>
      <text fill="red" font-size="10" font-family="Verdana" x="46" y="38">FFP</text>
    </svg>
    <a class="navbar-brand" href="#page-top">
    <h4 style="padding-top: 10px;"> Foot Forward Properties</h4>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="/#page-top">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="/blog">Blog</a>
            <a class="nav-item nav-link" href="/properties">Properties</a>
            <a class="nav-item nav-link" href="/about">About</a>
            <a class="nav-item nav-link" href="/contact">Contact</a>
            <span class="divider"></span>
        </div>
        <div class="udpad">
          <i class="fas fa-phone-square"><span class="nav-info">01302 000000</span></i>
          <i class="fas fa-envelope-square"><span class="nav-info">example@email.com</span></i>
        </div>
    </div>
</nav>

<div class="hero__background">
    <div class="background-wrapper" data-parallax="scroll" data-parallax-speed="3">
        <div class="background">
            <div class="owl-carousel hero__slider parallax-element" data-owl-items="1" data-owl-autoplay="1" data-owl-dots="0" data-owl-nav="1" data-owl-loop="1" data-owl-fadeout="1" data-owl-nav-container=".slider-nav">
                <div class="slide img-into-bg">
                    <img src="assets/img/slide-01.jpg" alt="">
                </div>
                <div class="slide img-into-bg">
                    <img src="assets/img/slide-02.jpg" alt="">
                </div>
                <div class="slide img-into-bg">
                    <img src="assets/img/slide-03.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--end background-->
</div>

<div class="container">
    <div class="row">
        <div class="hero__outer-wrapper">
            <div class="hero__inner-wrapper align-bottom">
                <div class="col-xl-5 col-lg-5 col-md-7">
                    <div class="hero__caption has-dark-background">
                        <h1>Footforward Properties</h1>
                        <form class="form">
                            <div class="form-group">
                                <label for="form-hero-email">Subscribe to our newsletter for updates.</label>
                                <div class="input-group">
                                    <input id="form-hero-email" type="text" class="form-control" placeholder="Your Email" aria-label="Your Email">
                                    <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="button">
                                        <i class="fa fa-arrow-right"></i>
                                    </button>
                                </span>
                                </div>

                            </div>
                            <!--end form-group -->
                        </form>
                        <hr>
                        <p>
                          We are a high quality, high standard, HMO company based in Doncaster with properties located all across South Yorkshire.
                        </p>
                        <a href="/properties" class="btn btn-primary btn-framed">Browse our Properties</a>
                    </div>
                </div>
                <div class="slider-nav"></div>
            </div>
            <!--end container-->
        </div>
        <!--end hero__inner-wrapper-->
    </div>
</div>
<!--end hero__outer-wrapper-->
