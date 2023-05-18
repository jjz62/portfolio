<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Jenny Zhang</title>
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

<div class="container position-relative overflow-hidden pt-5 pb-5 mb-5">
  <div class="row gx-5 mx-auto">
  <div class="col-3">
    <div class="bg-image">
      <img src="../public/uploads/home/profile.jpeg" class="rounded-circle w-100" alt="Girl with black hair wearing scarf">
      <div class="mask d-flex justify-content-end">
        <span class="wave bg-white rounded-circle">👋 </span>
      </div>
    </div>
  </div>
  <div class="col-8 align-self-center">
        <div class="row d-flex align-items-end gx-0">
          <div class="col">
            <h1>Jenny Zhang / 张嘉颖</h1>
          </div>
        </div>
        <h5><small class="text-muted">Product Designer</small></h5>
        <p class="lead">I create impact through my values of empathy, simplicity, and consistency. Passionate about UX in public-facing products for social good + game design!</p>
        <p class="lead">
          Learning ✍️ + Designing 🎨 <a href="https://cis.cornell.edu/" class="text-decoration-none">@cornelluniversity</a>. Incoming UX Design Intern <a href="https://www.capitalone.com/" class="text-decoration-none">@capitalone</a>.
        </p>
        <p class="lead">
          <a href="/" class="text-decoration-none"><i class="bi bi-link-45deg"></i> Resume</a>
        </p>
      </div>
    </div>
  </div>

<section id="home">
<div class="container">
<div class="row mb-5">
  <div class="col-8 case gx-5">
  <div class="bg-light pt-md-5 mr-5 text-center overflow-hidden object-fit-cover shadow-box" onclick="location.href = '/';">
        <div class="p-3">
          <h2>Zing</h2>
          <p>Student grouping tool for professors and administrators</p>
        </div>
        <img src="../public/uploads/home/zing-preview.png" style="width: 80%;">
      </div>
  <div class="container mt-4">
  <div class="row">
    <div class="col-1">
      <img src="../public/uploads/home/dti-logo.svg" class="rounded-circle" style="width: 3rem;">
    </div>
    <div class="col gy-0">
      <p class="mb-0 pb-0">Cornell Design and Tech Initiative</p>
      <small class="text-muted">Fall 2022 - Spring 2023</small>
    </div>
  </div>
  </div>
  </div>

  <div class="col-4 case gx-5">
      <div class="bg-light pt-md-5 text-center overflow-hidden object-fit-cover shadow-box" onclick="location.href = '/';">
        <div class="p-3">
          <h2>Topic Rooms</h2>
          <p>A potential Instagram feature</p>
        </div>
        <img class="img-fluid" src="../public/uploads/home/ig-preview.png" class="shadow" style="width: 80%;">
      </div>
    <div class="container mt-4">
      <div class="row">
        <!-- <div class="col-2">
          <img src="../public/uploads/home/dti-logo.svg" class="rounded-circle" style="width: 3rem;">
        </div> -->
        <div class="col gy-0">
          <p class="mb-0 pb-0">Independent Case Study</p>
          <small class="text-muted">Spring 2021</small>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row mb-5">
  <div class="col-4 case gx-5">
      <div class="bg-light pt-md-5 text-center overflow-hidden object-fit-cover shadow-box" onclick="location.href = '/';">
        <div class="p-3">
          <h2>Coachera</h2>
          <p>AI-Chatboat app to conduct research study</p>
        </div>
        <img class="img-fluid" src="../public/uploads/home/coachera-preview.png" class="shadow" style="width: 80%;">
      </div>
      <div class="container mt-4">
      <div class="row">
        <div class="col-2">
          <img src="../public/uploads/home/coachera-logo.png" class="rounded-circle" style="width: 3rem;">
        </div>
        <div class="col gy-0">
          <p class="mb-0 pb-0">Cornell Future of Learning Lab</p>
          <small class="text-muted">Summer 2022</small>
        </div>
      </div>
    </div>
    </div>
  <div class="col-8 case gx-5">
  <div class="bg-light pt-md-5 mr-5 text-center overflow-hidden object-fit-cover shadow-box" onclick="location.href = '/design/clubview';">
        <div class="p-3">
          <h2>Clubview</h2>
          <p>Student organization database for the Cornell community</p>
        </div>
        <img src="../public/uploads/home/clubview-preview.png" class="shadow" style="width: 80%;">
      </div>
<div class="container mt-4">
  <div class="row">
    <div class="col-1">
      <img src="../public/uploads/home/dti-logo.svg" class="rounded-circle" style="width: 3rem;">
    </div>
    <div class="col gy-0">
      <p class="mb-0 pb-0">Cornell Design and Tech Initiative</p>
      <small class="text-muted">Fall 2021 - Spring 2022</small>
    </div>
  </div>
  </div>
  </div>
</div>
</div>
</section>

<?php
  include('includes/footer2.php')
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    $(".dropdown-toggle").dropdown();
});
</script>
</body>

</html>
