@extends('layout.app')
@extends('layout.css')
@section('content')


<main role="main">
    <section class="page-section about-heading">
        <div class="container">
            <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/img/about.jpg" alt="..." />
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto">
                        <div class="bg-faded rounded p-5">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">Strong Coffee, Strong Roots</span>
                                <span class="section-heading-lower">About Our Cafe</span>
                            </h2>
                            <p>Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.</p>
                            <p class="mb-0">
                                We guarantee that you will fall in
                                <em>lust</em>
                                with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="card">
        <img
                src="https://mdbootstrap.com/img/new/standard/nature/184.jpg"
                class="card-img-top"
                alt="..."
        />
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the
                card's content.
            </p>
            <a href="#!" class="btn btn-primary">Button</a>
        </div>
    </div>
    <div class="card">
        <img
                src="https://mdbootstrap.com/img/new/standard/nature/184.jpg"
                class="card-img-top"
                alt="..."
        />
        <div style="width: 300px; height: 300px" class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the
                card's content.
            </p>
            <a href="#!" class="btn btn-primary">Button</a>
        </div>
    </div>
    <div class="card">
        <img
                src="https://mdbootstrap.com/img/new/standard/nature/184.jpg"
                class="card-img-top"
                alt="..."
        />
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the
                card's content.
            </p>
            <a href="#!" class="btn btn-primary">Button</a>
        </div>
    </div>
</main>
    @endsection