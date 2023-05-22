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
                        <a class="nav-link" href="#item-2">Problem Space</a>
                        <a class="nav-link" href="#item-3">User Research</a>
                        <a class="nav-link" href="#item-4">Club Page</a>
                            <nav class="nav nav-pills flex-column">
                                <a class="nav-link ms-3 my-1" href="#item-4-1">Low and Mid-Fi</a>
                                <a class="nav-link ms-3 my-1" href="#item-4-2">High-Fi</a>
                                <a class="nav-link ms-3 my-1" href="#item-4-3">Feature: Displaying Events</a>
                            </nav>
                        <a class="nav-link" href="#item-5">Editing Club Page</a>
                            <nav class="nav nav-pills flex-column">
                                <a class="nav-link ms-3 my-1" href="#item-5-1">Previous UI</a>
                                <a class="nav-link ms-3 my-1" href="#item-5-2">New UI</a>
                                <a class="nav-link ms-3 my-1" href="#item-5-3">Feature: Editing Events</a>
                            </nav>
                        <a class="nav-link" href="#item-6">Prototypes</a>
                        <a class="nav-link" href="#item-7">Takeaways</a>
                    </nav>
            </nav>
        </div>

        <div class="col-3">
        </div>

        <div data-bs-spy="scroll" data-bs-target="#navbar-cv" data-bs-offset="0" tabindex="0" class="col-9 scrollspy">
            <div class="bg-light py-md-4 mr-5 text-center overflow-hidden object-fit-cover" id="item-1">
                <img src="../public/uploads/home/clubview-preview.png" class="shadow" style="width: 70%;">
            </div>
            <h1 class="mt-3 display-1">Clubview</h1>
            <p class="pb-1 lead">ClubView is a student organization database to simplify the search and recruitment process for Cornell students created by <a href="https://www.cornelldti.org/" class="text-decoration-none text-danger">Cornell Design and Tech Initiative</a>.</p>

            <div class="container pl-0 ml-0 py-3">
                <div class="row pt-3">
                    <div class="col-2">
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

            <div class="container pl-0 ml-0 py-5 border-top" id="item-2">
                <div class="row pt-3">
                    <div class="col">
                        <h3 class="text-uppercase text-muted">Problem Space</h3>
                        <h1 class="lead mt-5">Why ClubView?</h1>
                        <div class="container pt-3 pb-3">
                            <div class="row pt-3 mx-auto d-block" style="width: 95%;">
                                    <img src="../public/uploads/clubview/problem-space-1.png" style="width: 40%;">
                                    <img src="../public/uploads/clubview/problem-space-2.png" style="width: 40%;">
                                    <img src="../public/uploads/clubview/problem-space-3.png" style="width: 40%;">
                            </div>
                        </div>
                        <h1 class="lead mt-5">Who can we help?</h1>
                        <p class="pt-3 ">After acknowledging the common problem many students had at Cornell, we narrowed our target users into two distinctly defined user groups.</p>
                        <img src="../public/uploads/clubview/user-groups.png" class="mt-3" style="width: 100%;">
                    </div>
                </div>
            </div>

            <div class="container pl-0 ml-0 py-5 border-top" id="item-3">
                <div class="row pt-3">
                    <div class="col">
                        <h3 class="text-uppercase text-muted">User Research</h3>
                        <h1 class="lead mt-5">We surveyed Cornell students and synthesized insights.</h1>
                        <!-- <img src="../public/uploads/clubview/user-research.png" class="mt-3" style="width: 100%;"> -->
                        <img src="../public/uploads/clubview/research-insights.png" class="mt-5 pt-2 figure-img img-fluid w-75 mx-auto d-block" style="width: 100%;">
                        <p class="mt-5">From these research insights, we brainstormed features and decided on an MVP.</p>
                        <img src="../public/uploads/clubview/hierarchy.png" class="mt-5 mx-auto d-block" style="width: 50%;">
                    </div>
                </div>
            </div>

            <div class="container pl-0 ml-0 py-5 border-top" id="item-4">
                <div class="row pt-3">
                    <div class="col">
                        <h3 class="text-uppercase text-muted">Club Page</h3>
                        <h5 class="mt-5" id="item-4-1">Low-Fi and Mid-Fi Ideation</h5>
                        <p>From low-fi sketches, I began to draft how a club's information could best be represented. In particular, I focused on the layout of content- which parts could utilize the most visibility to meet the user goal of users searching for clubs and recruitment information.</p>
                        <img src="../public/uploads/clubview/lowfis-cv.png" class="my-5 mx-auto d-block w-100">
                        <p>I wanted to create something that was visually engaging, communicative, and emphasized what features I prioritized based on the previous user research:</p>
                        <div class="container my-3">
                            <div class="row">
                                <div class="col">
                                <figure class="figure mt-2">
                                    <img src="../public/uploads/clubview/lowfi-cv.png" class="figure-img img-fluid">
                                    <figcaption class="figure-caption">The low-fi layout chosen to iterate upon for its straightforward structuring of content which highlights elements of most importance such as name, links, and the favoriting clubs feature.</figcaption>
                                </figure>
                                </div>
                                <div class="col">
                                <ul class="list-unstyled">
                                    <li class="py-2"><b>🚩 Recruitment Banner:</b> Recruitment status details</li>
                                    <li class="py-2"><b>📝 Categories:</b> Tag descriptions.</li>
                                    <li class="py-2"><b>🖼️ Image:</b> A logo or photo that could represent the club.</li>
                                    <li class="py-2"><b>🔗 Links:</b> Links to other resources.</li>
                                    <li class="py-2"><b>❤️ Favorite Button:</b> Users can favorite a club they're interested in to return to.</li>
                                </ul>
                                </div>
                            </div>
                        </div>
                        <p>With this criteria in mind, I chose a low-fi teration. This layout seperates between a left and right side to distribute different key components to the page. The right side allows users to scroll through larger pieces of content such as descriptions and images. The static left side displays more vital information such as name, links, and other categories so that they won't move and will always be visible.</p>
                        <figure class="figure my-2">
                            <img src="../public/uploads/clubview/mid-fis.png" class="figure-img img-fluid">
                            <figcaption class="figure-caption">After establishing a general page layout through my low-fi's, I began to iterate and receive feedback upon mid-fi's for location and type of component for features.</figcaption>
                        </figure>
                        <h5 class="pt-5" id="item-4-2">High-Fi UI</h5>
                        <p>There were many rounds of iterations to adjust both the visual branding and layout of the individual club page.</p>
                        <figure class="figure my-2">
                            <img src="../public/uploads/clubview/old-iterations.png" class="figure-img img-fluid">
                            <figcaption class="figure-caption">Mid-fi iterations on the individual club page that were adjusted to reduce visual clutter and have a more modern interface.</figcaption>
                        </figure>
                        <p class="pt-3">The individual clubpage went thorugh mid-fi and high-fi iterating to arrive at this final design. Important functions such as accessing links to various club resources or favoriting the club by clicking the heart were highlighted, and the design itself was centered around a pink palette as a bright color to draw attention and demonstrate the excitement of student organizations.</p>
                        <p>While previous iterations applied a large variety of colors used frequently, in developing the current high-fi designs I focused on applying color to emphasize specific calls-to-action to create a less visually crowded page where important features are more visible.</p>
                        <figure class="figure my-2">
                            <img src="../public/uploads/clubview/clubpage-final.png" class="figure-img img-fluid">
                            <figcaption class="figure-caption">The finalized club pages apply the primary pink color minimally and features a gray backdrop with white cards to visually organize different information components in an easily digestible way.</figcaption>
                        </figure>
                        <p class="pt-4">The more finalized UI I settled upon made some primary changes to better fulfill the goals of the users:</p>
                        <p><b>🎨 Reduced color:</b> I reduced the use of the color palette to encourage user attention towards important features such as links or the recruitment banner.</p>
                        <p><b>☯️ Improved contrast:</b> To increase visibility I introduced dropshadows and a gray background behind the white cards so that there was more contrast to emphasize pieces of content.</p>
                        <h5 class="pt-4" id="item-4-3">Feature: Displaying Events</h5>
                        <p>A major pain point when students were surveyed was the lack of an easy way to see a club's recruitment schedule.</p>
                        <figure class="figure my-2">
                            <img src="../public/uploads/clubview/scrolled-events.png" class="figure-img img-fluid w-75 mx-auto d-block">
                            <figcaption class="figure-caption">Users can add an event to their Google Calendar.</figcaption>
                        </figure>
                        <figure class="figure my-2 pt-4">
                            <img src="../public/uploads/clubview/eventcard-iterations.png" class="figure-img img-fluid w-75 mx-auto d-block">
                            <figcaption class="figure-caption">Considerations: Scrolling vs Details, Content availability, Limited attention span</figcaption>
                        </figure>
                        <p class="pt-3">We took inspiration from platforms with similar content such as Facebook and LinkedIn, though a major feature of these platforms is that continued scrolling is encouraged. Furthermore, having one standardized card size wouldn't give certain clubs the level of personalization they desire. Clubview's user group would be moving quickly and might not want to scroll through multiple large cards, which helped us arrive at our solution:</p>
                        <figure class="figure my-2 pt-4 pb-5">
                            <img src="../public/uploads/clubview/seemore-click.png" class="figure-img img-fluid w-75 mx-auto d-block">
                            <figcaption class="figure-caption">Users can expand Event cards for further details.</figcaption>
                        </figure>
                </div>
            </div>

            <div class="container pl-0 ml-0 py-5 border-top" id="item-5">
                <div class="row pt-3">
                    <div class="col">
                        <h3 class="text-uppercase text-muted">Page Editing</h3>
                        <h5 class="mt-5" id="item-5-1">Previous Interface</h5>
                        <p class="lead">Editing was first conceptualized so that users could edit directly on the page.<p>
                        <figure class="figure my-2 pt-4">
                            <img src="../public/uploads/clubview/old-editing-flow.png" class="figure-img img-fluid mx-auto d-block">
                            <img src="../public/uploads/clubview/old-large.png" class="figure-img img-fluid mx-auto d-block">
                            <figcaption class="figure-caption">Users would change to Editing Mode and select specific cards to edit so that they could visualize the page as a whole.</figcaption>
                        </figure>
                        <p class="lead mt-3 py-2">So, why change?<p>
                        <p>While the benefits of in-page editing included better visualization and a similar UI to match viewing a page, we ultimately came to the conclusion to change how club owners edit.</p>
                        <ul class="list-unstyled">
                            <li><b>❌ Less Intuitive:</b> Understanding the format of editing is not as intuitive in comparison to typical practice for editing through a form, which could create confusion.</li>
                            <li><b>❌ More Clicks:</b> Moving to edit small individual pieces of content such as links would require lots more clicks to move through and seperate screens, which would discourage users.</li>
                            <li><b>❌ Prioritizng a Clear User Flow:</b> Accessing and exiting editing mode might not be clear due to the similarity between the page as a viewer and editor. Furthermore, actions to take aren't clear.</li>
                        </ul>
                        <h5 class="mt-5" id="item-5-2">New Interface</h5>
                        <p>
                        After rounds of iteration, I decided upon a seperate form with different sections for different pieces of content on the page broken down into 4 categories: Profile, Recruitment Banner, Description, and Events. To make a clear differentiation to viewing I used a complementary blue shade to distinguish editing actions.
                        </p>
                        <figure class="figure my-2 pt-4">
                            <img src="../public/uploads/clubview/new-editing-flow.png" class="figure-img img-fluid mx-auto d-block">
                            <img src="../public/uploads/clubview/editing-large.png" class="figure-img img-fluid mx-auto d-block">
                            <figcaption class="figure-caption">Users enter the editing form through the menu and can move through the different sections to change information.</figcaption>
                        </figure>
                        <ul class="list-unstyled pt-3">
                            <li><b>✅ Editable Information is Clear:</b> The form shows clear parameters for a user to edit to make features obvious.</li>
                            <li><b>✅ Reduce Clicks:</b> The features are all organized into pages that make editing multiple parameters at once less of a hassle through less clicks.</li>
                            <li><b>✅ More Intuitive:</b> Forms are common and have a low barrier of knowledge to interact with.</li>
                        </ul>
                        <h5 class="mt-5" id="item-5-2">Feature: Editing Pre-Existing Event</h5>
                        <p>I iterated multiple options for editing specific content pieces.</p>
                        <figure class="figure my-2 pt-4">
                            <img src="../public/uploads/clubview/editing-events1.png" class="figure-img img-fluid mx-auto d-block">
                            <figcaption class="figure-caption">Editing directly in the card</figcaption>
                        </figure>
                        <p class="pt-3">While this option reduced additional interactions on the screen, the entry point and interaction was not the most intuitive for users to understand. We instead tried familiar patterns employed in the Editing UX through a form.</p>
                        <figure class="figure my-2 pt-4">
                            <img src="../public/uploads/clubview/editing-events2.png" class="figure-img img-fluid mx-auto d-block">
                            <figcaption class="figure-caption">Popup form below initial event card to edit without additional clicks outside of page.</figcaption>
                        </figure>
                    </div>
                </div>
            </div>

            <div class="container pl-0 ml-0 py-5 border-top" id="item-6">
                <div class="row pt-3">
                    <div class="col">
                        <h3 class="text-uppercase text-muted">Prototyping</h3>
                        <p class="mt-3">I created many different prototypes of different actions users would take when editing the different parts of a club's page, with some included below.</p>
                        <h5 class="my-2">Moving to Editing Mode</h5>
                        <video class="mb-3" style="width: 100%;" controls>
                            <source src="../public/uploads/clubview/cv-prototype1.mp4" type="video/mp4">
                        </video>
                        <h5 class="my-2">Generating the Recruitment Banner</h5>
                        <video class="mb-3" style="width: 100%;" controls>
                            <source src="../public/uploads/clubview/cv-prototype2.mp4" type="video/mp4">
                        </video>
                        <h5 class="my-2">Editing the Recruitment Banner</h5>
                        <video class="mb-3" style="width: 100%;" controls>
                            <source src="../public/uploads/clubview/cv-prototype3.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>

            <div class="container pl-0 ml-0 py-5 border-top" id="item-7">
                <div class="row pt-3">
                    <div class="col">
                        <h3 class="text-uppercase text-muted">Takeaways</h3>
                        <h5 class="mt-4">Documentation is super important</h5>
                        <p>Working with developers to implement features I created, as well as working with other designers, really emphasized the importance of good documentation for me. It made handoff and teamwork in general so much easier and allowed processes to flow much more smoothly.</p>
                        <h5 class="mt-3">When I'm feeling stuck, outside input is the best medicine</h5>
                        <p>Whenever I'd feel stuck in my designs, the best remedy was always outside input. When working on a design for so long its so easy to loose sight of easy and simple solutions as details get more convoluted, which is why outside help can sometimes be such a breath of fresh air. This experience taught me the importance of reaching out for help when I need it.</p>
                        <h5 class="mt-3">Trust yourself</h5>
                        <p>As a relatively new designer when first joining the team, it took me a long time to find my voice and advocate for my designs. The other designers I learned from emphasized the importance of trusting myself and being confident!</p>
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
