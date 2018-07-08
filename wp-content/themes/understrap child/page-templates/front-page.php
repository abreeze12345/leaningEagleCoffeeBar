<?php
/* Template Name: Front Page */

get_header(); ?>

<div id="main-image">

    <div class="container-fluid" id="sticky-navbar-content">

        <div id="section-1">

            <div class="row text-center section-1-item-1-row">
                <div class="col-lg-7"></div>
                <div class="col-lg-5 section-1-item" data-0="opacity: 0;" data-100="opacity: 1;"><h1>Lean In</h1></div>
            </div>

            <div class="row text-center">
                <div class="col-lg-6"></div>
                <div class="col-lg-6 section-1-item" data-100="opacity: 0" data-200="opacity: 1;"><h1>Take a Sip</h1>
                </div>
            </div>

        </div>

    </div>

</div>

<div class="container-fluid">

    <div class="row row-padding row-odd" id="map-row">


        <div class="col-12 col-md-6" id="map-col">
            <div id="map"></div>
        </div>

        <div class="col-12 col-md-6 text-center">
            <div class="middle">
                <h2 class="title">Location</h2>
                <p>Cincinnati Hills Christian Academy</p>
                <p>11525 Snider Rd, Cincinnati, OH 45249</p>
            </div>
        </div>

    </div>
</div>


<div class="container-fluid">

    <div class="row row-padding row-even">
        <div class="col-12 col-md-6 text-center">
            <div class="middle">
                <h2 class="title">Contact Us</h2>
            </div>
        </div>
        <div class="col-12 col-md-6" id="contact-col">
            <form id="contact">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.
                    </small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <div class="row row-padding row-odd text-center">
        <div class="col-6">
            <h2>Content1</h2>
        </div>
        <div class="col-6">
            <h2>Content2</h2>
        </div>
    </div>
</div>

<?php get_footer(); ?>
