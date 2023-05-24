<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Zing</title>
  <script src="jquery/jquery.js"></script>
  <script type="text/javascript" src='js/bootstrap.min.js'></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../public/site.css">
  <link rel="stylesheet" href="../public/footer.css">
  <link rel="icon" href="../public/uploads/favicon.png">
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
                        <a class="nav-link" href="#item-2">Problem</a>
                        <a class="nav-link" href="#item-3">Metrics Feature (LSC)</a>
                        <a class="nav-link" href="#item-4">Handoff Documentation (LSC)</a>
                        <a class="nav-link" href="#item-5">User Research</a>
                        <a class="nav-link" href="#item-6">Course Archive Feature (Grouper)</a>
                        <a class="nav-link" href="#item-7">Takeaways</a>
                    </nav>
            </nav>
        </div>

        <div class="col-3">
        </div>

        <div data-bs-spy="scroll" data-bs-target="#navbar-cv" data-bs-offset="0" tabindex="0" class="col-9 scrollspy">
            <div class="bg-light py-md-4 mr-5 text-center overflow-hidden object-fit-cover" id="item-1">
                <img src="../public/uploads/zing/statistics-preview.png" class="shadow" style="width: 60%;">
            </div>
            <h1 class="mt-3 display-1">Zing</h1>
            <p class="pb-1 lead">Zing, created by <a href="https://www.cornelldti.org/" class="text-decoration-none text-danger">Cornell Design and Tech Initiative</a>, tackles grouping students through 2 products: LSC and Grouper. LSC is a platform for the <a href="https://lsc.cornell.edu/" class="text-decoration-none text-danger">Cornell Learning Strategies Center</a> to create groups for Study Partners. Grouper is a platform for Professors to create groups for projects, assignments, etc.</p>

            <div class="container pl-0 ml-0 py-3 pb-5">
                <div class="row pt-3">
                    <div class="col-2">
                        <h5>Details</h5>
                    </div>
                    <div class="col-2">
                        <h6>Functions</h6>
                        <ul class="list-unstyled">
                            <li>User Research</li>
                            <li>User Testing</li>
                            <li>Ideation</li>
                            <li>Product Thinking</li>
                            <li>Documentation and Handoff</li>
                        </ul>
                    </div>
                    <div class="col-2">
                        <h6>Team</h6>
                        <ul class="list-unstyled">
                            <li>2 PMs</li>
                            <li>2 TPMs</li>
                            <li>5 Developers</li>
                            <li>2 Designers</li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <h6>Timeline</h6>
                        <ul class="list-unstyled">
                            <li>Fall 2022 - Spring 2023</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container pl-0 ml-0 pb-5">
                <div class="row pt-3">
                    <h5>Outcomes</h5>
                </div>
                <div class="row pt-3">
                    <div class="col">
                        <img src="../public/uploads/zing/statistics-preview.png" class="shadow" style="width: 100%;">
                        <p class="mt-4"><b>Metrics Feature (LSC):</b> Helping LSC admin visualize user metrics.</p>
                    </div>
                    <div class="col">
                        <img src="../public/uploads/zing/research-graphic.png" style="width: 80%;">
                        <p class="mt-4"><b>User Testing (Grouper):</b> Conducting user research and testing on Grouper V1 to brainstorm V2.</p>
                    </div>
                    <div class="col">
                        <img src="../public/uploads/zing/archived-courses-preview.png" class="shadow" style="width: 100%;">
                        <p class="mt-4"><b>Archived Courses (Grouper):</b> Explorations on a professors’ previous courses and the process of creating a new class.</p>
                    </div>
                </div>
            </div>

            <div class="container pl-0 ml-0 py-5 border-top" id="item-2">
                <div class="row pt-3">
                    <div class="col">
                        <h3 class="text-uppercase text-muted">Problem</h3>
                        <h5 class="lead mt-5">What is Zing?</h5>
                        <p class="pt-1">Zing makes it easier for users to create student groupings. It is organized into 2 products based on two seperate user groups.</p>

                        <h5 class="lead mt-5">Who are Zing users?</h5>
                        <p class="pt-1">Professors: Use Grouper to group students for projects, assignments, etc. in their classes.</p>
                        <p>Cornell Learning Strategies Center (LSC): Use LSC to match students for their Study Partners program where students request partners to study with for a specific class.</p>

                        <h5 class="lead mt-5" id="item-4-1">What can we fix?</h5>
                        <p>Cornell LSC staff and professors want to create groups efficiently, but they can’t do that well because:</p>
                        <h3 class="pt-1">They spend too much time sifting through a high volume of student data to make matches.</h3>
                        <p>LSC made 2,500+ study partner matches in the 2020-2021 academic year alone!</p>

                        <h3 class="pt-3">They struggle to email each student and keep track of emails.</h3>
                        <p>There are huge volumes of students to keep up with for various requests.</p>
                    </div>
                </div>
            </div>

            <div class="container pl-0 ml-0 py-5 border-top" id="item-3">
                <div class="row pt-3">
                    <div class="col">
                        <h3 class="text-uppercase text-muted">Metrics Feature (LSC)</h3>
                        <h5 class="mt-5">Overview</h5>
                        <p>Stakeholders requested for a Metrics feature to help them understand student use of the Study Partners program!</p>
                        <h5>User Group 👤</h5><p> Learning Strategies Center (LSC) Administrators</p>
                        <h5>User Needs 🗣</h5>
                        <ul class="mt-0">
                            <li>Need to know how many students, courses, requests, matches in total, as well as by college and school year.</li>
                            <li>Display statistics somewhere easily found.</li>
                            <li>High priority! User is data-centric when making decisions.</li>
                        </ul>

                        <h5 class="mt-5">Low-Fi Entry Points</h5>
                        <div class="row align-items-top">
                                <div class="col-6">
                                    <h6 class="text-success mt-3">A. Entry points to a separate page ✅</h6>
                                    <p class="mb-0">Pros:</p>
                                    <ul>
                                        <li>More space for filtering and displaying information</li>
                                        <li>Better visualizations possible because of greater space</li>
                                    </ul>
                                    <p class="mb-0">Cons:</p>
                                    <ul>
                                        <li>More clicks</li>
                                        <li>Less visibility</li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <img src="../public/uploads/zing/entry-points-1.png" style="width: 100%;">
                                </div>
                        </div>
                        <div class="row align-items-top">
                                <div class="col-6">
                                    <h6 class="mt-3">B. Card in dashboard</h6>
                                    <p class="mb-0">Pros:</p>
                                    <ul>
                                        <li>High visibility with constant view</li>
                                        <li>Less clicks</li>
                                    </ul>
                                    <p class="mb-0">Cons:</p>
                                    <ul>
                                        <li>Constricts amount of data able to view at once</li>
                                        <li>Reduces visualization possibilities for data</li>
                                        <li>Diverts attention from rest of Dashboard</li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <img src="../public/uploads/zing/entry-points-2.png" style="width: 100%;">
                                </div>
                        </div>

                        <h5 class="mt-5">High-Fi Entry Points</h5>
                        <p>Having chosen the type of entry point, it was time to decide on the style of the entry point itself...</p>
                        <img src="../public/uploads/zing/entry-hi-fi.png" class="my-5 mx-auto d-block w-75">
                        <div class="row align-items-top pt-3">
                                <div class="col-6">
                                    <h6 class="text-success">C. Admin dropdown menu ✅</h6>
                                    <p class="mb-0">Pros:</p>
                                    <ul>
                                        <li>Feature is grouped with other admin features</li>
                                        <li>Unintrusive to Dashboard</li>
                                        <li>Fitting visibility for frequency of feature use</li>
                                    </ul>
                                    <p class="mb-0">Cons:</p>
                                    <ul>
                                        <li>Less visibility</li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <img src="../public/uploads/zing/menu-metrics.png" style="width: 100%;">
                                </div>
                        </div>

                        <h5 class="mt-5">Displaying Numbers</h5>
                        <img src="../public/uploads/zing/number-display.png" class="my-5 mx-auto d-block w-75">
                        <div class="row align-items-to pt-3">
                                <div class="col-6">
                                    <h6 class="text-success">A. Seperate Cards ✅</h6>
                                    <p class="mb-0">Pros:</p>
                                    <ul>
                                        <li>Visual similarity to card style of dashboard</li>
                                        <li>More space for text = More descriptive data</li>
                                    </ul>
                                    <p class="mb-0">Cons:</p>
                                    <ul>
                                        <li>Less clean</li>
                                        <li>More visually prominent</li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <img src="../public/uploads/zing/separate-cards.png" style="width: 100%;">
                                </div>
                        </div>

                        <h5 class="mt-5">Metrics: Final Screen</h5>
                        <p>The metrics feature had final touches completed during high-fi iteration and was handed off and implemented to developers!</p>
                        <img src="../public/uploads/zing/metrics-final.png" class="mt-2 mx-auto d-block w-100">
                    </div>
                </div>
            </div>

            <div class="container pl-0 ml-0 py-5 border-top" id="item-4">
                <div class="row pt-3">
                    <div class="col">
                        <h3 class="text-uppercase text-muted">Handoff and Documentation (LSC)</h3>
                        <p class="mt-5">With LSC mostly finished, there were a few features to create designs for and handoff to programmers, which required thorough documentation.</p>
                        <h5 class="mt-5">Settings</h5>
                        <figure class="figure pt-4">
                            <img src="../public/uploads/zing/adding-admin-1.png" class="mb-0 figure-img img-fluid w-45 mx-auto d-block">
                            <img src="../public/uploads/zing/adding-admin-2.png" class="mt-0 figure-img img-fluid w-45 mx-auto d-block">
                            <figcaption class="figure-caption">The flow for adding an administrator documented.</figcaption>
                        </figure>


                    </div>
                </div>
            </div>

            <div class="container pl-0 ml-0 py-5 border-top" id="item-5">
                <div class="row pt-3">
                    <div class="col">
                        <h3 class="text-uppercase text-muted">User Research (Grouper)</h3>
                        <p class="mt-5">We conducted user testing with the V1 prototypes of Grouper and learned a lot...</p>
                        <img src="../public/uploads/zing/insights-solutions.png" class="py-2 mx-auto d-block w-75">
                        <p class="pt-5">From these ideas, we coalesced all our thoughts into sticky notes and evaluated brainstormed features by impact and feasibility to arrive at our MVP.</p>
                        <img src="../public/uploads/zing/mvp-features.png" class="mx-auto d-block w-100">
                        <figure class="figure pt-4">
                            <h6>Information Hierarchy</h6>
                            <img src="../public/uploads/zing/info-hierarchy.png" class="figure-img img-fluid w-75 mx-auto d-block">
                            <figcaption class="figure-caption">We developed our information hierarchy from features specified in our MVP.</figcaption>
                        </figure>
                    </div>
                </div>
            </div>

            <div class="container pl-0 ml-0 py-5 border-top" id="item-6">
                <div class="row pt-3">
                    <div class="col">
                        <h3 class="text-uppercase text-muted">Course Archive (Grouper)</h3>
                        <h5 class="mt-5">Overview</h5>
                        <p>Out of the MVP, I decided to focus on the Course Archive feature to help professors access previously added classes.</p>
                        <h5>User Group 👤</h5>
                        <p> Professors for courses</p>
                        <h5>User Needs 🗣</h5>
                        <ul class="mt-0">
                            <li>View previous courses.</li>
                            <li>Add previous courses into the current semester.</li>
                        </ul>

                        <h5 class="mt-5">Viewing Archived Courses</h5>
                        <img src="../public/uploads/zing/viewing-archived.png" class="py-2 mx-auto d-block w-75">
                        <div class="row align-items-top pt-3">
                                <div class="col-6">
                                    <h6 class="text-success">1. Archived Courses Grouped by Semester ✅</h6>
                                    <p class="mb-0">Pros:</p>
                                    <ul>
                                        <li>More organized</li>
                                        <li>Less daunting</li>
                                    </ul>
                                    <p class="mb-0">Cons:</p>
                                    <ul>
                                        <li>More scrolling</li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <img src="../public/uploads/zing/grouped-sem.png" style="width: 50%;">
                                </div>
                        </div>

                        <h5 class="mt-5">Grouped by Semester > Entry Point</h5>
                        <img src="../public/uploads/zing/grouped-sem-options.png" class="py-2 mx-auto d-block w-75">
                        <div class="row align-items-top pt-3">
                                <div class="col-6">
                                    <h6 class="text-success">B. Archive Menu Item ✅</h6>
                                    <p>Archive in the menu is fitting due to similar features also being grouped as menu items (statistics, settings, etc.) without being too intrusive, as Archived Courses wouldn’t be viewed especially often.
                                    </p>
                                </div>
                                <div class="col-6">
                                    <img src="../public/uploads/zing/archive-menu-item.png" style="width: 100%;">
                                </div>
                        </div>

                        <h5 class="mt-5">Adding Course to Current Semester from Archive</h5>
                        <img src="../public/uploads/zing/adding-course.png" class="py-2 mx-auto d-block w-75">
                        <div class="row align-items-top pt-3">
                                <div class="col-6">
                                    <h6 class="text-success">1. Same Add Button (New and Existing) ✅</h6>
                                    <p class="mb-0">Pros:</p>
                                    <ul>
                                        <li>Groups similar actions to be less confusing</li>
                                        <li>User wouldn’t differentiate between the two actions when looking for entry point</li>
                                    </ul>
                                    <p class="mb-0">Cons:</p>
                                    <ul>
                                        <li>Copy between inside modal and different flows if existing in comparison to new need to be extremely clear</li>
                                        <li>More dense</li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <img src="../public/uploads/zing/same-button.png" style="width: 100%;">
                                </div>
                        </div>

                        <h5 class="mt-5">Add Course Button - Final Prototype</h5>
                        <img src="../public/uploads/zing/add-button.gif" class="pt-2 shadow mx-auto d-block w-50">

                        <h5 class="mt-5 display-3">✋ Pause...</h5>
                        <h5 class="lead">As we were designing, we continued to conduct user research...</h5>
                        <p>We noticed how low professor interest was in Grouper and began to think on why professors would be so reluctant to utilize such a product, leading to two primary questions:</p>

                        <h3 class="pt-1">What is the need for Grouper?</h3>
                        <p>As we talked with professors, we realized that grouping students, while annoying, was also a process they were willing and wanted to take an active part in, even though time-consuming.</p>

                        <h3 class="pt-3">Is there enough stakeholder interest to make Grouper viable?</h3>
                        <p>Given professor reluctance and the individuality of the way professors create groups depending on their classes, is this a problem space the product can truly be impactful with?</p>

                        <h5 class="lead pt-3">After much brainstorming and discussion centering around how impactful our efforts could be, we decided that Grouper would not be moved forward with.</h5>


                    </div>
                </div>
            </div>

            <div class="container pl-0 ml-0 py-5 border-top" id="item-7">
                <div class="row pt-3">
                    <div class="col">
                        <h3 class="text-uppercase text-muted">Takeaways</h3>
                        <p class="lead mt-3">Learning to step in...</p>
                        <p class="mt-3">I came onto the team when the product had already been established, which forced me to gain familiarity with an entirely new product. Maybe my biggest takeaway was learning when to question previous designs and always be ready to do better to create the great final LSC that has already been implemented and entirely handed off to our stakeholders.</p>

                        <p class="lead mt-3">And learning to let go...</p>
                        <p class="mt-3">Especially given the super talented Zing team, we realized that we wanted to create a product that would truly be meaningful and have an impact in our community. After realizing that Grouper would unfortunately not meet those hopes, we decided to let the product go.</p>
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
