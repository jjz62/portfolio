<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Topic Rooms</title>
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
                        <a class="nav-link" href="#item-2">Background</a>
                        <a class="nav-link" href="#item-3">User Research</a>
                        <a class="nav-link" href="#item-4">Problem Statement</a>
                        <a class="nav-link" href="#item-5">Brainstorming</a>
                        <a class="nav-link" href="#item-6">High-Fi Ideation</a>
                        <a class="nav-link" href="#item-7">Final Prototype</a>
                        <a class="nav-link" href="#item-7">Takeaways</a>
                    </nav>
            </nav>
        </div>

        <div class="col-3">
        </div>

        <div data-bs-spy="scroll" data-bs-target="#navbar-cv" data-bs-offset="0" tabindex="0" class="col-9 scrollspy">
            <div class="bg-light py-md-4 mr-5 text-center overflow-hidden object-fit-cover" id="item-1">
                <img src="../public/uploads/topic-rooms/tr-preview-1.png" class="shadow" style="width: 25%;">
                <img src="../public/uploads/topic-rooms/tr-preview-2.png" class="shadow" style="width: 25%;">
                <img src="../public/uploads/topic-rooms/tr-preview-3.png" class="shadow" style="width: 25%;">
            </div>
            <h1 class="mt-3 display-1">Instagram Topic Rooms</h1>
            <p class="pb-1 lead">Integrating a live video room feature in Instagram to address user pain points.</p>

            <div class="container pl-0 ml-0 py-3 pb-5">
                <div class="row pt-3">
                    <div class="col-2">
                        <h5>Details</h5>
                    </div>
                    <div class="col-2">
                        <h6>Functions</h6>
                        <ul class="list-unstyled">
                            <li>User Research</li>
                            <li>Product Thinking</li>
                            <li>Ideation</li>
                            <li>Prototyping</li>
                        </ul>
                    </div>
                    <div class="col-2">
                        <h6>Team</h6>
                        <ul class="list-unstyled">
                            <li>1 Designer</li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <h6>Timeline</h6>
                        <ul class="list-unstyled">
                            <li>Spring 2021</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container pl-0 ml-0 py-5 border-top" id="item-2">
                <div class="row pt-3">
                    <div class="col">
                        <h3 class="text-uppercase text-muted">Background</h3>
                        <h1 class="lead mt-5">Why can Instagram feel so hard sometimes?</h1>
                        <p class="pt-3">The summer before freshman year, I was excited to go to college but especially desperate to find a good roommate, a search that naturally fell to online platforms like Instagram. Yet, it felt terrifying to message random girls and strike up conversation. I checked my phone constantly, stressing over a reply, stressing over why I might not have received a reply, just stress.</p>

                        <p>When I think about my personal problems with Instagram, I think about how difficult it can feel to complete Instagram’s fundamental action of interacting with others. In the same way that it can be difficult to interpret meaning behind a text, interpreting relationships through an online, textual lense is hard. I often second guess myself- should I have liked that persons post? Should I comment if we’re not that close, and even if I do, what do I say? The pressure to interact can feel suffocating. It’s even scarier to try and connect with those you don’t know or aren’t close.</p>

                        <p class="pb-3">I designed Topic Rooms, a live video and message chat room feature, to give users a space without pressure where they can interact organically and at a level of immersion they feel comfortable with, to form more meaningful connections.</p>
                    </div>
                </div>
            </div>

            <div class="container pl-0 ml-0 py-5 border-top" id="item-3">
                <div class="row pt-3">
                    <div class="col">
                        <h3 class="text-uppercase text-muted">User Research</h3>
                        <h1 class="lead mt-5">What do people have to say?</h1>
                        <p>I conducted user research with the resolve to uncover Instagram pain points and uncovered particular findings:</p>

                        <blockquote class="blockquote pt-3">
                            <p class="text-dark">1. Users react to posts because they want people they are physically seperate from to know that they are still present.</p>
                            <footer class="blockquote-footer">“Because right now I’m in college and not interacting with my friends from home as much... then I would interact with the photo as my way of showing my appreciation for our friendship.”</footer>
                        </blockquote>
                        <blockquote class="blockquote">
                            <p class="text-dark">2. Users want to stay connected with others, but this is difficult because of the time it takes to stay in touch.</p>
                            <footer class="blockquote-footer">“I check my Instagram feed almost every morning, and sometimes it can be really overwhelming and time-consuming to see the number of posts on my home feed.“</footer>
                        </blockquote>
                        <blockquote class="blockquote">
                            <p class="text-dark">3. Users may not interact with posts of people they want to engage with because it’s time-consuming to think of what to say or do.</p>
                            <footer class="blockquote-footer">“The physical action of liking, I tend to skip over, because it will take too much time.“</footer>
                        </blockquote>
                    </div>
                </div>
            </div>

            <div class="container pl-0 ml-0 py-5 border-top" id="item-4">
                <div class="row pt-3">
                    <div class="col">
                        <h3 class="text-uppercase text-muted">Problem</h3>
                        <h5 class="mt-5" id="item-4-1">What can we fix?</h5>
                        <p>It is hard to stay meaningfully connected with others because...</p>
                        <h3 class="pt-3">People are busy. Interactions can become mindless and brief.</h3>
                        <p>Many use Instagram and similar social media platforms to stay connected to others and demonstrate interest in their lives in a way that is quick and cursory, but it is common to fall into the trap of scrolling through your homepage feed without thought as you rain likes on every post you see.</p>

                        <h3 class="pt-3">People are unsure. Interactions can become stressful and difficult.</h3>
                        <p class="pb-5">Why is it so scary to like a post, let alone add a comment or send a DM? Even in an online space, social anxieties can get the best of us. Though Instagram was intended to connect, it is difficult to truly engage new people without gauging their interest or having a common point to strike conversation that feels natural.</p>
                </div>
            </div>

            <div class="container pl-0 ml-0 py-5 border-top" id="item-5">
                <div class="row pt-3">
                    <div class="col">
                        <h3 class="text-uppercase text-muted">Brainstorming</h3>
                        <h5 class="mt-5">Cardsorting</h5>
                        <p>With a clear people problem in mind, it was time to get down to business. I assembled some friends to post-it ideas as we explored possible solution areas. In particular, we organized areas for potential and narrowed options down to 3 solution spaces:<p>
                        <ul class="list-unstyled">
                            <li><b>1. Reacting Meaningfully:</b> How can we balance meaningful reactions alongside Instagram’s focus on quick interactions?</li>
                            <li><b>2. Similar Interests:</b> How can we add areas for similar interests in a crowded app with so many different functions?</li>
                            <li><b>3. Further Interactions:</b> How can we extend how users interact with one another through the platform?</li>
                        </ul>

                        <h5 class="mt-5">Considering Features</h5>
                        <p>I considered different features to answer the above problem spaces.</p>
                        <div class="container pl-0 ml-0 py-3 align-left" id="item-5">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h6>Topic Rooms</h6>
                                    <p>Online rooms users could interact with other users over similar interests.</p>
                                </div>
                                <div class="col-6">
                                    <img src="../public/uploads/topic-rooms/lowfi-a.png" style="width: 100%;">
                                </div>
                            </div>
                            <div class="row pt-2 align-items-center">
                                <div class="col-6">
                                    <h6>Home Page Categories</h6>
                                    <p>A feature to categorize following list to see what one wants when they want.</p>
                                </div>
                                <div class="col-6">
                                    <img src="../public/uploads/topic-rooms/lowfi-b.png" style="width: 100%;">
                                </div>
                            </div>
                            <div class="row pt-2 align-items-center">
                                <div class="col-6">
                                    <h6>Specific Notifications</h6>
                                    <p>Expanded upon settings availability for specific and distinct notifications for greater personalization.</p>
                                </div>
                                <div class="col-6">
                                    <img src="../public/uploads/topic-rooms/lowfi-c.png" style="width: 100%;">
                                </div>
                            </div>
                        </div>

                        <p>Still, I had to decide out of these iterations. After evaluating feasibility and impact, Topic Rooms was chosen for a variety of reasons:<p>
                        <ul">
                            <li>Users have a space to meet new people have have interactions with them that are less stressful</li>
                            <li>Because the users can choose a specific topic room to enter based on their interests, there is an easy and common topic through which interactions can be centered around, relieving the burden of having to figure that out</li>
                            <li>Users may make new connections with people who have similar interests that they can bond over</li>
                            <li>By having a structured space to make these interactions, the stress of having to initiate interactions and approach others is also gone</li>
                            <li>A space to interact with others in real time makes connecting with others less surface-level because it requires a certain amount of attention</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container pl-0 ml-0 py-5 border-top" id="item-6">
                <div class="row pt-3">
                    <div class="col">
                        <h3 class="text-uppercase text-muted">High-Fi Ideation</h3>
                            <div class="row pt-2 align-items-center">
                                <div class="col-4">
                                    <h6>Entry Points</h6>
                                    <p>A was more hidden and less intuitive, while C made the bottom bar too crowded with features in a way that might be overwhelming or too busy for users. I thought that B would be the perfect balance between visibility and Instagram’s more minimal aesthetic.</p>
                                </div>
                                <div class="col-8">
                                    <img src="../public/uploads/topic-rooms/entry.png" style="width: 100%;">
                                </div>
                            </div>
                            <div class="row pt-2 align-items-center">
                                <div class="col-4">
                                    <h6>Room Creation</h6>
                                    <p>I designed the form to create a new room with similar actions to other Instagram UI. When conceptualizing the topic room, I focused on adding details and features such as the Room ID that would give users personalization options to increase comfort.</p>
                                </div>
                                <div class="col-8">
                                    <img src="../public/uploads/topic-rooms/breakdown.png" style="width: 100%;">
                                </div>
                            </div>
                            <h6 class="pt-2">Room Creation Flow</h6>
                            <img src="../public/uploads/topic-rooms/new-room.png" style="width: 100%;">

                            <h6 class="pt-2">Entering a Room Flow</h6>
                            <img src="../public/uploads/topic-rooms/entering-room.png" style="width: 100%;">

                    </div>
                </div>
            </div>

            <div class="container pl-0 ml-0 py-5 border-top" id="item-7">
                <div class="row pt-3">
                    <div class="col">
                        <h3 class="text-uppercase text-muted">Final Prototype</h3>
                        <h5 class="mt-4">Creating a Topic Room</h5>
                        <video class="mb-3 mt-3" style="width: 100%;" controls>
                            <source src="../public/uploads/topic-rooms/ig-prototype.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>

            <div class="container pl-0 ml-0 py-5 border-top" id="item-8">
                <div class="row pt-3">
                    <div class="col">
                        <h3 class="text-uppercase text-muted">Takeaways</h3>
                        <p class="lead mt-3">My first case study...</p>
                        <p class="mt-3">Instagram is a fun and enjoyable platform, but it’s also scary at times. Topic Rooms are a fun and innovative approach to making Instagram a less intimidating and more meaningful place to interact with others. Next steps for Topic Rooms could be the creation and choice between Private and Public Topic Rooms to give the user even more of a chance for customizability.</p>
                        <p>For a first time creating a case study, the experience was fun yet challenging. I was constantly reminded how little I truly knew as I explored different solution spaces and thought through the problem. The opportunity to immerse myself into the design cycle without pre-existing notions of a solution allowed me to tap into my creativity and problem-solving to create an organic solution!</p>
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
