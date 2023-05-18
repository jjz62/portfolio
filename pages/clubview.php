<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Clubview</title>
  <script src="jquery/jquery.js"></script>
  <script type="text/javascript" src='js/bootstrap.min.js'></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../public/site.css">
</head>

<body>

<?php
  include('includes/header.php')
?>

<div class="container">
    <div class="row">
        <div class="col-3">
            <p>Introduction</p>
        </div>

        <div class="col-9">
            <div class="bg-light py-md-4 mr-5 text-center overflow-hidden object-fit-cover">
                <img src="../public/uploads/home/clubview-preview.png" class="shadow" style="width: 70%;">
            </div>
            <h1 class="mt-3 display-1" id="introduction">Clubview</h1>
            <p class="pb-1 lead">ClubView is a student organization database to simplify the search and recruitment process for Cornell students created by <a href="https://www.cornelldti.org/" class="text-decoration-none text-danger">Cornell Design and Tech Initiative</a>.</p>

            <div class="container pl-0 ml-0 py-3">
                <div class="row pt-3">
                    <div class="col-4">
                        <h5>Details</h5>
                    </div>
                    <div class="col-2">
                        <h6>Functions</h6>
                        <ul class="list-unstyled">
                            <li>User Research</li>
                            <li>User Testing</li>
                            <li>Iteration</li>
                            <li>Design Systems</li>
                            <li>Branding</li>
                            <li>Product Thinking</li>
                        </ul>
                    </div>
                    <div class="col-2">
                        <h6>Team</h6>
                        <ul class="list-unstyled">
                            <li>1 PM</li>
                            <li>1 TPM</li>
                            <li>5 Developers</li>
                            <li>2 Designers</li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <h6>Timeline</h6>
                        <ul class="list-unstyled">
                            <li>Fall 2021 - Spring 2022</li>
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
                        <img src="../public/uploads/home/clubview-preview.png" class="shadow" style="width: 100%;">
                        <p class="mt-4"><b>Club Page:</b> Detailed information on a specific club and their recruitment.</p>
                    </div>
                    <div class="col">
                        <img src="../public/uploads/home/clubview-preview.png" class="shadow" style="width: 100%;">
                        <p class="mt-4"><b>Page Editing Interface:</b> Designing the editing interface for club pages and wireframing editing interactions.</p>
                    </div>
                </div>
            </div>

            <div class="container pl-0 ml-0 py-5 border-top" id="problem-space">
                <div class="row pt-3">
                    <div class="col">
                        <h3 class="text-uppercase text-muted">Problem Space</h3>
                        <h1 class="display-4 mt-5">Why ClubView?</h1>
                        <div class="container pt-3 pb-5">
                            <div class="row pt-3">
                                    <img src="../public/uploads/clubview/problem-space-1.png" style="width: 50%;">
                                    <img src="../public/uploads/clubview/problem-space-2.png" style="width: 50%;">
                                    <img src="../public/uploads/clubview/problem-space-3.png" style="width: 50%;">
                            </div>
                        </div>
                        <h1 class="display-4 mt-5">Who can we help?</h1>
                        <p class="pt-3 ">After acknowledging the common problem many students had at Cornell, we narrowed our target users into two distinctly defined user groups.</p>
                        <img src="../public/uploads/clubview/user-groups.png" class="mt-3" style="width: 100%;">
                    </div>
                </div>
            </div>

            <div class="container pl-0 ml-0 py-5 border-top" id="user-research">
                <div class="row pt-3">
                    <div class="col">
                        <h3 class="text-uppercase text-muted">User Research</h3>
                        <h1 class="display-4 mt-5">We surveyed Cornell students and synthesized insights.</h1>
                        <!-- <img src="../public/uploads/clubview/user-research.png" class="mt-3" style="width: 100%;"> -->
                        <img src="../public/uploads/clubview/research-insights.png" class="mt-5 pt-2" style="width: 100%;">
                        <p class="mt-5">From these research insights, we brainstormed features and decided on an MVP.</p>
                        <img src="../public/uploads/clubview/hierarchy.png" class="mt-5 mx-auto d-block" style="width: 50%;">
                    </div>
                </div>
            </div>

            <div class="container pl-0 ml-0 py-5 border-top" id="club-page">
                <div class="row pt-3">
                    <div class="col">
                        <h3 class="text-uppercase text-muted">Club Page</h3>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>

</body>

</html>
