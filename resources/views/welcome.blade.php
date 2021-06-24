{{--@extends('layout.app')--}}
@extends('layout.css')
{{--@section('content')--}}

        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Chenney Chang | Sollicitatie</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />

    <!-- Google Font -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet" /> -->
    <link href="https://fonts.googleapis.com/css2?family=Nova+Cut&display=swap" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-dark fixed-top text-uppercase" id="mainNav">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right text-uppercase text-white rounded" type="button"
                data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link " href="#about">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#portfolio">Motivatiebrief</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#education">Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#connect">Connect</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<hr class="star-light mb-5">
<!-- Header -->
<header class="masthead bg-primary text-white text-center">
    {{--<div class="container">--}}
        {{--<img class="img-fluid mb-5 d-block mx-auto rounded-circle" src="assets/img/chenney.jpg" alt="" />--}}
        {{--<h1 class="mb-0">Chenney Chang</h1>--}}
        {{--<hr />--}}
        {{--<h2 class="mb-0">OJ Family--}}
        {{--</h2>--}}
        {{--<h3 class="mb-0">Artist & Repertoire--}}

        {{--</h3>--}}

        {{--<!-- Replace this text with your brand statement or other short text about you. -->--}}
        {{--<p class="brand-statement" style="text-align: justify;">--}}
            {{--images are not only visuals, They're also auditory, they involve sensuous impressions, bundles of information that come to us through our senses, and mainly through seeing and hearing: the audio-visual field.--}}
        {{--</p>--}}
        {{--<p class="links">--}}

        {{--</p>--}}
    {{--</div>--}}
    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-9 px-0">
            <h1 class="display-4 font-italic">Chenney Chang</h1>

            <p class="lead my-3"> Stagiare Artist & Repertoire</p>
            <p class="lead my-3">OJ Family</p>
            <p class="lead my-2">"images are not only visuals, They're also auditory, they involve sensuous impressions, bundles of information that come to us through our senses, and mainly through seeing and hearing: the audio-visual field."</p>
            <img class="rounded-circle" style="margin-left: 100%; margin-top: -300px; height: 300px; width: 300px  "
                 src="img/chencho.jpeg" alt="Generic placeholder image" width="140" height="140"  >
        </div>
    </div>
</header>
{{--about section--}}
<section  id="about">
    <div class="container">
        <h2 class="text-center text-uppercase">About Me</h2>

        <hr class="star-dark mb-5">
        <p class="about-me text-center">
            Beste, <br><br>Bedankt dat je een kijkje neemt op mijn kennismaking website voor mijn sollicitatie! Ik zal een korte toelichting houden over wie ik eigenlijk ben.
            <br><br> Mijn naam is <em>Chenney Chang</em>, ik ben 19 jaar oud en woon in Almere;. Als persoon ben ik leergierig, ik sta open voor uitdagingen en ik ben enthousiast over een
            positieve werk omgeving waar ik veel kan leren. Ik kan zelfstandig te werk gaan, maar ik kan ook functioneren in teamverband.
            Afgelopen jaar (2021) heb ik mijn MBO niv 4 diploma behaald. In september begin ik met de hbo opleiding media & communicatie. De vaardigheden
            die ik op deze opleiding zal op doen zouden waarde kunnen toevoegen aan mijn kennen en kunnen als A&R.
            Denk bijvoorbeeld aan promoties, een artiest goed op de markt zetten, aandacht trekkeen van de juiste publiek enzovoorts.







        </p>
    </div>
    <div class="container">
        <div class="col-md-10 offset-md-1">
            <div class="row text-center skills-row">

                <!-- Replace these icons and text with skills you want to show case -->
                <!-- You should ideally not include any more than 5-6 tech skills -->
                <div class="col">
                    <i class="fab fa-html5 fa-3x"></i>
                </div>
                <div class="col">
                    <i class="fa fa-table fa-3x" aria-hidden="true"></i>
                </div>
                <div class="col">
                    <i class="fa fa-bar-chart fa-3x" aria-hidden="true"></i>
                </div>
                <div class="col">
                    <i class="fa fa-database fa-3x" aria-hidden="true"></i>
                </div>
                <div class="col">
                    <i class="fab fa-git fa-3x"></i>
                </div>
            </div>
        </div>
        {{--<div class="text-center mt-4">--}}
            {{--<!-- <a class="btn btn-lg btn-outline-light" href="/assets/pdfs/up_resume_comp_v2.pdf"> -->--}}
            {{--<img src="img/about.png" width="600px" height="200px" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">--}}
            {{--<!-- <i class="fas fa-download mr-2"></i>--}}
            {{--Resume--}}
        {{--</a> -->--}}
        {{--</div>--}}
    </div>
</section>
<!-- Portfolio Grid Section -->
<section class="bg-primary text-white mb-0" class="portfolio" id="portfolio">
    <div class="container">
            <h2 style="background-color: #FFFFFF; border-radius: 8%;" class="text-center text-uppercase text-white text-secondary mb-0">
            Motivatiebrief <br>
                aan <br>
                OJ Family<br>
                Stagaire A&R

        </h2>
        <hr class="star-light mb-5">
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">

                        <p style="font-size: 1.2em">

                            Almere, 09-06-2021
                            <br><br>
                            Betreft: Stagair <em>A&R</em>
                            <br><br>
                            Beste <em>Oshadix Leonara</em> & <em>OJ Family Team</em>,
                            <br><br>
                            Door de loop van de tijd heb ik een ambitie gecreeerd om <em>A&R</em> te worden. Ik vond het altijd leuk om te bekijken welke stappen
                            artiesten namen om verder te komen in hun carriere. Zelf wist ik heel lang niet wat ik wou doen in me leven tot eind 2019. Toen ik erachter kwam
                            dat je kan werken in de muziek industrie. Vooral hoe in 2015/2016 de nederlandse hiphop scene een enorme boost kreeg zijn er meer mogelijkheden
                            gekomen om een steentje bij te dragen aan een artiest ze carriere.
                            <br><br>
                            In Januari heb ik de mogelijkheid gekregen om mee te werken in het team van de artiest "<em>Bully</em>" en nog steeds heb ik een actieve rol in zijn carriere.
                            Daarbij heb ik meer ervaring mogen opdoen over de nederlandse hiphop scene. Ook al is het nog het begin van zijn carriere gaan we toch de goede kant op.
                            Met de plannen die we bedacht hebben en de kleine meetings waar we onder andere onderwerpen bespreken zoals bijvoorbeeld:
                            <br>
                            -videoclips bedenken tot details (script & edits)<br>
                            -Welke tunes de volgende release wordt (op basis van een iets langere termijn)<br>
                            -stappen vooruit denken<br>
                            -artiesten & producers (benaderen voor een samenwerking)<br>
                            <br>
                            Met de kleine ervaring wat ik heb mogen opdoen zou ik graag meer ervaring willen opdoen bij <em>OJ Family</em> als stagair. Graag zou ik mij ook meer willen verdiepen over wat het vak daadwerkelijk inhoudt. Daarnaast lijkt  <em>OJ Family</em> een mooie plek om meer ervaring op te doen.
                            Ook omdat  <em>OJ Family</em> een snel groeiend label is, ondanks ze nog niet lang bezig zijn.
                            <br><br>
                            Kortom: Vind ik dat OJ Family creatieve artiesten heeft gevonden, die hun en de artiesten goed presenteert. Ik zou graag deel willen uitmaken van het team
                            om meer te leren en ervaring op te doen!


                            <br><br>
                            Met vriendelijke groet,
                            <br>
                            Chenney Chang
                            <br>
                            Bijlage: CV

                        <p class="mb-0">
                            <br>


                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>




<!-- Education -->
<section class="education" id="education">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">
            Education
        </h2>
        <hr class="star-dark mb-5" />
        <div class="credential">
            <h2 class="location mb-0">
                MAVO TECHNIEK |
                <span class="credential-date text-muted">2014 - 2018</span>
            </h2>
            <p class="lead">Buitenhout College diploma behaald</p>
            <p class="credential-description">
            </p>
        </div>
        <hr class="credential-divider" />
        <div class="credential">
            <h2 class="location mb-0">
                Applicatie en media ontwikkelaar
                MBO niveau 4 |
                <span class="credential-date text-muted">2019 - 2021</span>
            </h2>
            <p class="lead">ROC Almere Buiten diploma behaald</p>
            <p class="credential-description">

            </p>
        </div>
        <hr class="credential-divider" />
        <div class="credential">
            <h2 class="location mb-0">
                Media & Communicatie
                HBO Bachelor |
                <span class="credential-date text-muted">Sep 2021</span>
            </h2>
            <p class="lead"></p>
            <p class="credential-description">

            </p>
        </div>
        <hr class="credential-divider" />
    </div>
</section>


<!-- Footer -->
<footer class="footer text-center" id="connect">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center text-uppercase mb-3">
                    CONTACTGEGEVENS:
                </h2>
                <p class="text-uppercase mb-4">
                    E: chenneyccc@outlook.com

                </p>
                <p class="text-uppercase mb-4">
                    T: 0640080859

                </p>
                <ul class="list-inline mb-0">
                    <!-- <li class="list-inline-item">
                        <a class="btn-social text-center rounded-circle" href="#">
                            <i class="fab fa-fw fa-twitter"></i>
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
</footer>

<div class="copyright py-4 text-center text-white">
    <div class="container">
        <small>Copyright &copy; Chenney Chang 2021</small>
    </div>
</div>



<!-- Portfolio Modals: These are what open up when you click on each project. Replace the information as needed. -->
<!-- Portfolio Modal 1 -->
<div class="modal portfolio-modal mfp-hide" id="portfolio-modal-1">
    <div class="portfolio-modal-dialog bg-white">
        <a class="close-button portfolio-modal-dismiss" href="#" data-dismiss="modal">
            <i class="fa fa-2x fa-times close-link"></i>
        </a>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">
                        California Car Accidents and Severity
                    </h2>
                    <hr class="star-dark mb-5" />
                    <img class="img-fluid mb-5" src="assets/img/portfolio/correlationheatmap.png" alt="sevr" />
                    <p class="mb-5" id="sevr">
                        Displayed summary visualizations of car accidents in California Counties on a user-input interactive dashboard
                        using Plotly.js, HTML, and CSS with AJAX jQuery and SQLAlchemy from a locally hosted PostgreSQL US Car Accidents Database.
                        Modeled Accident Severity prediction for a user-selected California County using Decision Tree Classifier with various features
                        and Severity as the target.</p>
                    <!-- <a class="btn btn-primary portfolio-modal-dismiss" href="#">
                        Live Demo</a> -->
                    <a class="btn btn-primary portfolio-modal-dismiss" href="https://github.com/SiMewL8/Car_Accident_Severity_FinalProject">
                        View Code</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal portfolio-modal mfp-hide" id="portfolio-modal-2">
    <div class="portfolio-modal-dialog bg-white">
        <a class="close-button portfolio-modal-dismiss" href="#" data-dismiss="modal">
            <i class="fa fa-2x fa-times close-link"></i>
        </a>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">
                        Credit Risk Machine Learning
                    </h2>
                    <hr class="star-dark mb-5" />
                    <img class="img-fluid mb-5" src="assets/img/portfolio/ml_credit_risk.jpg" alt="risk" />
                    <p class="mb-5" id="risk">
                        Predicted credit risk with various machine learning algorithms using Python to monitor profiles and validate candidates for lending loans.
                        Utilized and compared various machine learning models with trained and tested data such as Random Oversampling and
                        Balanced Random Forest Classifier to select best-fit model of accuracy and precision</p>
                    <!-- <a class="btn btn-primary portfolio-modal-dismiss" href="#">
                        Live Demo</a> -->
                    <a class="btn btn-primary portfolio-modal-dismiss" href="https://github.com/SiMewL8/credit_risk_ml">
                        View Code</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal portfolio-modal mfp-hide" id="portfolio-modal-3">
    <div class="portfolio-modal-dialog bg-white">
        <a class="close-button portfolio-modal-dismiss" href="#" data-dismiss="modal">
            <i class="fa fa-2x fa-times close-link"></i>
        </a>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">
                        Mapping Weekly Earthquakes
                    </h2>
                    <hr class="star-dark mb-5" />
                    <img class="img-fluid mb-5" src="assets/img/portfolio/sitesnip.jpg" alt="mapp" />
                    <p class="mb-5" id="mapp">
                        Mapped earthquakes from the last seven days on an interactive map dashboard using JavaScript, HTML, and CSS with Flask App
                        Utilized Leaflet.js API to populate recent earthquakes on a layered map with US Geological Survey GeoJSON data rendered
                        with D3.js library hosted on a local server</p>
                    <!-- <a class="btn btn-primary portfolio-modal-dismiss" href="#">
                        Live Demo</a> -->
                    <a class="btn btn-primary portfolio-modal-dismiss" href="https://github.com/SiMewL8/Mapping_Earthquakes_JS">
                        View Code</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal portfolio-modal mfp-hide" id="portfolio-modal-4">
    <div class="portfolio-modal-dialog bg-white">
        <a class="close-button portfolio-modal-dismiss" href="#" data-dismiss="modal">
            <i class="fa fa-2x fa-times close-link"></i>
        </a>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">
                        Big Data Video Game Reviews
                    </h2>
                    <hr class="star-dark mb-5" />
                    <img class="img-fluid mb-5" src="assets/img/portfolio/pyspark1.jpg" alt="game" />
                    <p class="mb-5" id="game">
                        Performed ETL process and uploaded Reviews Datasets to an Amazon Relational Database Service (RDS) instance in the cloud through PostgreSQL.
                        Utilized PySpark functions to perform statistical analysis of select reviews ("Vine") on video game reviews on Amazon.</p>
                    <!-- <a class="btn btn-primary portfolio-modal-dismiss" href="#">
                        Live Demo</a> -->
                    <a class="btn btn-primary portfolio-modal-dismiss" href="www.github.com/SiMewL8/big_data">
                        View Code</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal portfolio-modal mfp-hide" id="portfolio-modal-5">
    <div class="portfolio-modal-dialog bg-white">
        <a class="close-button portfolio-modal-dismiss" href="#" data-dismiss="modal">
            <i class="fa fa-2x fa-times close-link"></i>
        </a>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">
                        Belly Button Bacteria Plotting
                    </h2>
                    <hr class="star-dark mb-5" />
                    <img class="img-fluid mb-5" src="assets/img/portfolio/plotly_dashboard.jpg" alt="bely" />
                    <p class="mb-5" id="game">
                        Created a live dashboard to showcase user-selected bacteria samples and statistics with interactive visualizations from JavaScript with development and debugging
                        Plotted bar charts and a gauge counter using Plotly.js with D3.js event handlers to fetch external bacteria sample data .</p>
                    <a class="btn btn-primary portfolio-modal-dismiss" href="https://simewl8.github.io/Belly_Button_Plotly/">
                        Live Demo</a>
                    <a class="btn btn-primary portfolio-modal-dismiss" href="https://github.com/SiMewL8/Belly_Button_Plotly">
                        View Code</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 2 -->
<div class="modal portfolio-modal mfp-hide" id="portfolio-modal-6">
    <div class="portfolio-modal-dialog bg-white">
        <a class="close-button portfolio-modal-dismiss" href="#" data-dismiss="modal">
            <i class="fa fa-2x fa-times close-link"></i>
        </a>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">
                        Election_Analysis
                    </h2>
                    <hr class="star-dark mb-5" />
                    <img class="img-fluid mb-5" src="assets/img/portfolio/project2.jpg" alt="elec" />
                    <p class="mb-5">
                        The Election Analysis Project aims to showcase the election auditing process for the Colorado congressional districts. Tom and Seth have asked an aspiring data analyst to help find the total votes, candidates, candidate votes, and the winner of the election.
                    </p>
                    <!-- <a class="btn btn-primary portfolio-modal-dismiss" href="#">
                        Live Demo
                    </a> -->
                    <a class="btn btn-primary portfolio-modal-dismiss" href="https://github.com/SiMewL8/Election_Analysis/blob/master/PyPoll_Challenge.py">
                        View Code</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 3 -->
<div class="modal portfolio-modal mfp-hide" id="portfolio-modal-7">
    <div class="portfolio-modal-dialog bg-white">
        <a class="close-button portfolio-modal-dismiss" href="#" data-dismiss="modal">
            <i class="fa fa-2x fa-times close-link"></i>
        </a>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">
                        Pewlett Hackard Analysis
                    </h2>
                    <hr class="star-dark mb-5" />
                    <img class="img-fluid mb-5" src="assets/img/portfolio/project3.jpg" alt="pwdb" />
                    <p class="mb-5">
                        An analysis of the current and retiring employees in the Pewlett-Hackard Company.
                    </p>
                    <!-- <a class="btn btn-primary portfolio-modal-dismiss" href="#">
                        Live Demo
                    </a> -->
                    <a class="btn btn-primary portfolio-modal-dismiss" href="https://github.com/SiMewL8/Pewlett-Hackard-Analysis/blob/master/challenge_queries.sql">
                        View Code</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 4 -->
<div class="modal portfolio-modal mfp-hide" id="portfolio-modal-8">
    <div class="portfolio-modal-dialog bg-white">
        <a class="close-button portfolio-modal-dismiss" href="#" data-dismiss="modal">
            <i class="fa fa-2x fa-times close-link"></i>
        </a>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">
                        Kickstarter Analysis and Trends
                    </h2>
                    <hr class="star-dark mb-5" />
                    <img class="img-fluid mb-5" src="assets/img/portfolio/project4.jpg" alt="camp" />
                    <p class="mb-5">
                        Trends and insights from various types of Kickstarters in order to help kickstart a friend's theatre campaign.
                        Utilized Advanced Excel formulas and Pivot Charts to Analyize successfull kickstarters.
                    </p>
                    <!-- <a class="btn btn-primary portfolio-modal-dismiss" href="#">
                        Live Demo
                    </a> -->
                    <a class="btn btn-primary portfolio-modal-dismiss" href="https://github.com/SiMewL8/kickstarter-analysis/blob/master/README.md">
                        View Code</a>
                </div>
            </div>
        </div>
    </div>
</div>

{{--<!-- Portfolio Modal 5 -->--}}
{{--<div class="modal portfolio-modal mfp-hide" id="portfolio-modal-9">--}}
    {{--<div class="portfolio-modal-dialog bg-white">--}}
        {{--<a class="close-button portfolio-modal-dismiss" href="#" data-dismiss="modal">--}}
            {{--<i class="fa fa-2x fa-times close-link"></i>--}}
        {{--</a>--}}
        {{--<div class="container text-center">--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-8 mx-auto">--}}
                    {{--<h2 class="text-secondary text-uppercase mb-0">--}}
                        {{--World Weather Analysis--}}
                    {{--</h2>--}}
                    {{--<hr class="star-dark mb-5" />--}}
                    {{--<img class="img-fluid mb-5" src="assets/img/portfolio/project5.jpg" alt="dest" />--}}
                    {{--<p class="mb-5">--}}
                        {{--Helping travelers pick the best time for vacation based on weather data from--}}
                        {{--cities. Create visual trends of weather patterns in 500 randomly selected cities--}}
                        {{--from around the world.--}}
                    {{--</p>--}}
                    {{--<!-- <a class="btn btn-primary portfolio-modal-dismiss" href="#">--}}
                        {{--Live Demo--}}
                    {{--</a> -->--}}
                    {{--<a class="btn btn-primary portfolio-modal-dismiss" href="https://github.com/SiMewL8/World_Weather_Analysis">--}}
                        {{--View Code</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<!-- Portfolio Modal 6 -->--}}
{{--<div class="modal portfolio-modal mfp-hide" id="portfolio-modal-10">--}}
    {{--<div class="portfolio-modal-dialog bg-white">--}}
        {{--<a class="close-button portfolio-modal-dismiss" href="#" data-dismiss="modal">--}}
            {{--<i class="fa fa-2x fa-times close-link"></i>--}}
        {{--</a>--}}
        {{--<div class="container text-center">--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-8 mx-auto">--}}
                    {{--<h2 class="text-secondary text-uppercase mb-0">--}}
                        {{--School District Analysis--}}
                    {{--</h2>--}}
                    {{--<hr class="star-dark mb-5" />--}}
                    {{--<img class="img-fluid mb-5" src="assets/img/portfolio/project6.jpg" alt="dist" />--}}
                    {{--<p class="mb-5">--}}
                        {{--Helping analyze school testing results to allocate district budgets.--}}
                    {{--</p>--}}
                    {{--<!-- <a class="btn btn-primary portfolio-modal-dismiss" href="#">--}}
                        {{--Live Demo--}}
                    {{--</a> -->--}}
                    {{--<a class="btn btn-primary portfolio-modal-dismiss" href="https://github.com/SiMewL8/School_District_Analysis">--}}
                        {{--View Code</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<!-- Portfolio Modal 7 -->--}}
{{--<div class="modal portfolio-modal mfp-hide" id="portfolio-modal-11">--}}
    {{--<div class="portfolio-modal-dialog bg-white">--}}
        {{--<a class="close-button portfolio-modal-dismiss" href="#" data-dismiss="modal">--}}
            {{--<i class="fa fa-2x fa-times close-link"></i>--}}
        {{--</a>--}}
        {{--<div class="container text-center">--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-8 mx-auto">--}}
                    {{--<h2 class="text-secondary text-uppercase mb-0">--}}
                        {{--P2P Ride Sharing Analysis--}}
                    {{--</h2>--}}
                    {{--<hr class="star-dark mb-5" />--}}
                    {{--<img class="img-fluid mb-5" src="assets/img/portfolio/project1.jpg" alt="p2p" />--}}
                    {{--<p class="mb-5">--}}
                        {{--Create line, bar, scatter, bubble, pie, and box-and-whisker plots using Matplotlib. Add and modify features of Matplotlib charts.--}}
                        {{--Add error bars to line and bar charts. Determine mean, median, and mode using Pandas, NumPy, and SciPy statistics.--}}
                    {{--</p>--}}
                    {{--<!-- <a class="btn btn-primary portfolio-modal-dismiss" href="#">--}}
                        {{--Live Demo--}}
                    {{--</a> -->--}}
                    {{--<a class="btn btn-primary portfolio-modal-dismiss" href="https://github.com/SiMewL8/PyBer_Analysis">--}}
                        {{--View Code</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

<!-- Plugin JavaScript -->
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"
        integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk=" crossorigin="anonymous"></script>
<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

<!-- Plugin JavaScript -->
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"
        integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk=" crossorigin="anonymous"></script>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js "></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js "></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js "></script>
<script src="vendor/scrollreveal/scrollreveal.min.js "></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js "></script>

<!-- Custom scripts for this template -->
<script src="js/creative.min.js "></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/scripts.min.js"></script>
</body>

</html>
</main>




