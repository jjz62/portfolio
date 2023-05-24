<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>About</title>
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

  <div class="container pt-5 px-5 pb-5 w-75">
    <div class="row gx-5 pb-5">
      <!-- <div class="col-4 pl-5">
        <img class="pb-3" src="../public/uploads/about/jenny.gif" style="width: 100%;">
        <small>Currently seeking: New grad product design roles for 2024 + Fall 2023 co-op opportunities! Get in contact with me at jjz62@gmail.com ✉️ </small>
      </div> -->
      <div class="col-8 pr-5">
        <h1>Hey there! I'm Jenny 😽</h1>
        <p class="lead">
        While I was originally planning to pursue urban planning, I took a class called ‘Introduction to Digital Product Design’ that changed my life. I fell in love with the product design cycle and resolved to mix my experience in graphic design and problem-solving to create human-centered solutions.
        </p>
        <p class="lead">
        A leap of faith led me to change my major. Now I’m studying Information Science with a concentration in User Design & minor in Game Design at Cornell University and couldn’t be happier to follow my passions.
        </p>
        <p class="lead">
        When I’m not glued to my computer, you can find me hammocking under the sun creating new Spotify playlists, reading cheesy romances, googling dinosaur plushies to grow my collection of dinosaur paraphernalia, and spoiling my 2 cats Bagheera 🐈‍⬛ and Goulash 🐈.
        </p>
      </div>
      <div class="col-4 pl-5">
        <img class="pb-3" src="../public/uploads/about/jenny.gif" style="width: 100%;">
        <small>Currently seeking: New grad product design roles for 2024 + Fall 2023 co-op opportunities! Get in contact with me at jjz62@gmail.com ✉️ </small>
      </div>
    </div>

    <div class="row gx-5 pt-5 pb-5">
      <div class="col">
        <h3>Experience</h3>
        <h5 class="pt-3 mb-0"><a href="https://www.cornelldti.org/">Cornell Design&Tech Initiative ↗</a><span style="opacity: 40%; margin-left: 20px;">Product Designer</span></h5>
        <small class="text-muted mb-0">Fall 2021 - Present</small>
        <p class="opacity">- User Research, Wireframing, Prototyping, Ideation, Interface Design, User Testing, Cross-Functional Communication, Design Systems, Documentation</p>
      </div>
      <div class="experience">
        <h5 class="mb-0"><a class="view hover-underline-animation2 hover-reveal" href="https://infosci.cornell.edu/research">Future of Learning Lab ↗</a><span style="opacity: 40%; margin-left: 20px;">Researcher</span></h5>
        <small class="text-muted mb-0">Summer 2022</small>
        <p class="opacity">- Interface Design, Ideation, Web Development, Front-End Mobile Development, Branding, Graphic Design, Design Systems</p>
      </div>
      <div class="experience">
        <h5 class="mb-0"><a class="view hover-underline-animation2 hover-reveal" href="https://infosci.cornell.edu/research">Communications and Collaborative Tech Lab ↗</a><span style="opacity: 40%; margin-left: 20px;">Researcher</span></h5>
        <small class="text-muted mb-0">Spring 2023</small>
        <p class="opacity">- User Testing, User Research, Human-Computer Interaction</p>
      </div>
      <div class="experience">
        <h5 class="mb-0"><a class="view hover-underline-animation2 hover-reveal" href="https://www.aabix.com/">AABIX ↗</a><span style="opacity: 40%; margin-left: 20px;">Product Designer</span></h5>
        <small class="text-muted mb-0">Summer 2022 - Present</small>
        <p class="opacity">- Interface Design, Ideation, Prototyping, Wireframing, Design Systems</p>
      </div>
      <div class="experience">
        <h5 class="mb-0"><a class="view hover-underline-animation2 hover-reveal" href="https://www.opendoorsnyc.org/">Open Doors NYC ↗</a><span style="opacity: 40%; margin-left: 20px;">Media Assistant</span></h5>
        <small class="text-muted mb-0">Winter 2022 - Fall 2022</small>
        <p class="opacity">- Branding, Graphic Design, Media Strategy, Accessibility</p>
      </div>
    </div>

    <div class="row gx-5 pt-5">
      <div class="col">
        <h3>Music 🎶</h3>
        <p>As a serial Spotify user, here are some of my on-repeat playlists, which include my all-time favorite song, Hearts on Fire.</p>
        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/2UMTqNhC7qO8bMXMvNM0Zq?utm_source=generator&theme=0" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/4bVS4kXsEsEBNymQvP1Zdv?utm_source=generator&theme=0" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
      </div>
    </div>

  </div>

</body>

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
