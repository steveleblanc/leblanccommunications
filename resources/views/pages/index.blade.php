@extends('layouts.master')
@section('content')
    <div class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="inner cover">
                    <h1 class="cover-heading">Small Business Website Design</h1>
                    <p class="cover-lead">We Build Websites That Bring You Results!</p>
                    <p class="lead">
                        <a href="#choose" class="btn btn-lg btn-warning">Learn How We Can Help</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="choose" class="shout">
    Choose The Perfect Website Service For You
    </div>

<!-- Marketing messaging and featurettes
    ================================================== -->
<!-- Wrap this area of the page in another container to center all the content. -->

<!-- <div class="cover-container"> -->
<div class="">
    <section>
        <div class="container">
            <!-- START THE FEATURETTES -->
            <div class="row featurette">
                <div class="col-md-6">
                    <div class="featurette-heading">BUSINESS WEBSITES</div>
                    <div class="featurette-subHeading">Unique, Powerful with the latest features.</div>
                    <br />
                    <p class="featurette-text">Our websites are hand coded and uniquely crafted to your needs. You will have a Search Engine Optimized website that has the latest technology and is mobile friendly.</p>

                    <p class="featurette-text">All of our services include free support.</p>
                    <div class="chapter">
                    <a href="website-design" class="btn btn-lg btn-warning">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="featurette-image img-fluid mx-auto" src="images/website-design.jpg" alt="Business Websites">
                </div>
            </div>
        </div><!-- container -->        
    </section>
    <section class="area">
        <div class="container">
            <div class="row featurette">
                <div class="col-md-6">
                    <img class="featurette-image img-fluid mx-auto" src="images/business-websites.png" alt="Business Websites">
                </div>
                <div class="col-md-6">
                    <div class="featurette-heading">LEAD GENERATION</div>
                    <div class="featurette-subHeading">Automated traffic, leads and follow up.</div>
                    <br />
                    <p class="featurette-text">
                        Our Lead Generation System drives quality traffic to your website. It converts that traffic into leads. Those leads are automatically followed up on.
                    </p>
                    <div class="chapter">
                    <a href="website-design" class="btn btn-lg btn-warning">Learn More</a>
                    </div>
                </div>
            </div>
        </div><!-- container -->        
    </section>
    <section>
        <div class="container">
            <div class="row featurette">
                <div class="col-md-6">
                    <div class="featurette-heading">WEBSITE APPS</div>
                    <div class="featurette-subHeading">Tell us what you need and we build it for you.</div>
                    <br />
                    <p class="featurette-text">
                        When you need website programming, updates, web design changes or anything that is pressing for you to get done. We are here to help.
                    </p>
                    <p class="featurette-text">
                        Let us know what you have in mind.
                    </p>
                    <div class="chapter">
                    <a href="website-design" class="btn btn-lg btn-warning">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="featurette-image img-fluid mx-auto" src="images/business-websites.png" alt="Business Websites">
                </div>
            </div>
        </div><!-- container -->        
    </section>

<!-- Contact
    ================================================== -->
<section class="area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="featurette-heading">Contact Me</div>
                </div>
                <div class="col-md-6" align="top">
                    <h3>Steve Leblanc</h3>
                    <p>Murphy, NC
                        <br>28906</p>
                </div><!-- col-md-5 -->            
            </div>
            </div>
</div><!-- class="col-md-12" -->
</section>
@include('includes.footer')
@endsection
