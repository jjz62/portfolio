<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Coachera</title>
  <script src="jquery/jquery.js"></script>
  <script type="text/javascript" src='js/bootstrap.min.js'></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../public/site.css">
  <link rel="stylesheet" href="../public/footer.css">
</head>

<body>

<?php
  include('includes/header.php')
?>

<div class="container">
    <div class="row">
        <div class="contents">
            <nav id="navbar-cv" class="navbar navbar-light flex-column align-items-stretch p-3">
                <!-- <h5 class="text-dark">Contents</h5> -->
                    <nav class="nav nav-pills flex-column mt-0 pt-0">
                        <a class="nav-link" href="#item-1">Introduction</a>
                        <a class="nav-link" href="#item-2">Background</a>
                        <a class="nav-link" href="#item-3">Character Design</a>
                        <a class="nav-link" href="#item-4">Branding</a>
                        <a class="nav-link" href="#item-5">User Interface</a>
                        <a class="nav-link" href="#item-6">Takeaways</a>
                    </nav>
            </nav>
        </div>

        <div class="col-3">
        </div>
        <div data-bs-spy="scroll" data-bs-target="#navbar-cv" data-bs-offset="0" tabindex="0" class="col-9 scrollspy">
            <div class="bg-light py-md-4 mr-5 text-center overflow-hidden object-fit-cover" id="item-1">
                <img src="../public/uploads/home/coachera-preview.png" style="width: 40%;">
                <img src="../public/uploads/coachera/full-duck.png" style="width: 30%;">
            </div>
            <h1 class="mt-3 display-1">Coachera</h1>
            <p class="pb-1 lead">A mobile chatbot app for personal coaching developed for use in a research study by the <a href="https://www.cornelldti.org/" class="text-decoration-none text-info">Cornell Future of Learning Lab</a>.</p>

            <div class="container pl-0 ml-0 py-3 pb-5">
                <div class="row pt-3">
                    <div class="col-2">
                        <h5>Details</h5>
                    </div>
                    <div class="col-2">
                        <h6>Functions</h6>
                        <ul class="list-unstyled">
                            <li>UI</li>
                            <li>Graphic Design</li>
                            <li>Front-End Web Development</li>
                            <li>Front-End Mobile Development</li>
                        </ul>
                    </div>
                    <div class="col-2">
                        <h6>Team</h6>
                        <ul class="list-unstyled">
                            <li>1 Designer</li>
                            <li>Project Supervisor</li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <h6>Timeline</h6>
                        <ul class="list-unstyled">
                            <li>Summer 2022</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container pl-0 ml-0 py-5 border-top" id="item-2">
                <div class="row pt-3">
                    <div class="col">
                        <h3 class="text-uppercase text-muted">Background</h3>
                        <h1 class="lead mt-5">What is Coachera?</h1>
                        <p class="pt-3">CoachEra is a mobile app to assist users in achieving goals. A digital coach will guide you to make weekly plans and check in with you every day on your progress. Coaching focuses more on building a sustainable learning routine rather than optimizing your learning process. CoachEra is being utilized by the Cornell Future of Learning Lab to conduct research in classrooms.</p>

                        <p class="pb-3">Our user group centers around those who have learning goals, particularly those who have primary jobs that often need to be prioritized in daily routines, like a full-time job, full-time childcare, full-time academic degree program (a.k.a. school). CoachEra gives them support to learn outside of simple daily obligation.</p>
                    </div>
                </div>
            </div>

            <div class="container pl-0 ml-0 py-5 border-top" id="item-3">
                <div class="row pt-3">
                    <div class="col">
                        <h3 class="text-uppercase text-muted">Character Design</h3>
                        <h5 class="mt-5">The Coach</h5>
                        <p class="mt-3">I went through various character designs of a coach that users could talk to like a companion and feel at ease with. While I originally conceptualized a human coach, our research team realized that utilizing a human coach with a distinct look could hold demographic traits that wouldn't make them feel as close should others not share those same traits.</p>

                        <figure class="figure mt-2">
                            <img src="../public/uploads/coachera/original-coach.png" class="figure-img img-fluid">
                            <figcaption class="figure-caption">The original coach design showing different expressions.</figcaption>
                        </figure>

                        <p class="mt-3">Instead of a human coach, we settled on anthropomorphic coaches, so I got to work and conceptualized the robot animals that are now implemented!</p>
                        <figure class="figure mt-2">
                            <img src="../public/uploads/coachera/robot-coaches.png" class="figure-img img-fluid">
                            <figcaption class="figure-caption">New coach designs have demographic distinctions removed so that more users can relate to them.</figcaption>
                        </figure>

                    </div>
                </div>
            </div>

            <div class="container pl-0 ml-0 py-5 border-top" id="item-4">
                <div class="row pt-3">
                    <div class="col">
                        <h3 class="text-uppercase text-muted">Branding</h3>
                        <figure class="figure mt-3">
                            <img src="../public/uploads/coachera/color-scheme.png" style="width: 100%;">
                            <figcaption class="figure-caption">A teal and yellow centered color scheme was created to be playful yet modern and inviting.</figcaption>
                        </figure>
                        <figure class="figure mt-3">
                            <img src="../public/uploads/coachera/logos.png" style="width: 100%;">
                            <figcaption class="figure-caption">Different logo styles were prepared.</figcaption>
                        </figure>
                    </div>
                </div>
            </div>

            <div class="container pl-0 ml-0 py-5 border-top" id="item-5">
                <div class="row pt-3">
                    <div class="col">
                        <h3 class="text-uppercase text-muted">User Interface</h3>
                        <div class="container pl-0 ml-0 py-3 align-left" id="item-5">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h6>Initial Design</h6>
                                    <p>CoachEra was initially built based off pre-existing code and as such had not gone through a designer. Tasks were unclear due to a lack of formatting, and content such as 'Your Past Accomplishments' was not layed out in a visually digestible way.</p>
                                    <p>
                                    Viewing this existing design, I prioritized the emphasis of important content in the dashboard and visualizing information rather than relying on text. I wanted the Dashboard to be visually engaging as a resource users would find helpful in summarizing the data that had been collected from the app.
                                    </p>
                                </div>
                                <div class="col-4">
                                    <img src="../public/uploads/coachera/old-coachera.jpg" style="width: 100%;">
                                </div>
                            </div>
                        </div>
                        <h6 class="pt-3">Message Notification Iterations</h6>
                        <p>I iterated considering a new color palette I'd created centered around teal.</p>
                        <p>As the existing structure was already in place, iteration was mainly to improve the UI and visually update the Dashboard rather than interating through UX decisions.</p>
                        <figure class="figure mt-2">
                            <img src="../public/uploads/coachera/message-notifications.png" style="width: 100%;">
                            <figcaption class="figure-caption">I chose C for it's mix between visibility without calling too much attention.</figcaption>
                        </figure>
                        <h6 class="pt-3">Menu Iterations</h6>
                        <figure class="figure mt-2 figure-img img-fluid w-50 mx-auto d-block pb-5">
                            <img src="../public/uploads/coachera/menu-iteration.png" style="width: 100%;">
                            <figcaption class="figure-caption mt-1">B was selected as the menu due to greater visibility and fewer click throughs to encourage use of multiple pages.</figcaption>
                        </figure>
                </div>
            </div>

            <div class="container pl-0 ml-0 py-5 border-top" id="item-6">
                <div class="row pt-3">
                    <div class="col">
                        <h3 class="text-uppercase text-muted">Takeaways</h3>
                        <p class="lead mt-3">Designer and Developer</p>
                        <p class="mt-3">This opportunity focused more on my visual design skills through UI improvement and branding, but was also unique for my role both as a designer and developer that was both freeing and limiting. The opportunity really allowed me to understand the troubles developers may run into when implementing designs and the necessary adjustments that might need to happen, a lesson I'll definitely take into the future.</p>
                        <p>I'm excited to see the results that CoachEra can yield and am thankful to have worked under the mentorship of Ji-Yong Cho during this research opportunity.</p>
                    </div>
                </div>
            </div>





        </div>
    </div>

    <!-- <button id="scrollToTopBtn">☝️</button> -->

</div>

<?php
  include('includes/footer2.php')
?>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="scrolltotop.js"></script>
<script>
  $(document).ready(function() {
    $(".dropdown-toggle").dropdown();
});
</script>
<script>
    $(document).ready(function(){
            $('[data-spy="scroll"]').each(function () {
                var $spy = $(this).scrollspy('refresh')
                });
        });

</script>

</html>
