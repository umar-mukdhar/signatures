<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signatures1</title>
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.1.14/dist/lenis.css">
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" id="themeSwitch" href="/css/color-switch1.css">
    <link rel="stylesheet" href="/css/responsive.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/atom-one-dark-reasonable.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
</head>

<body id="body-bg">

    <?php
    include '../includes/header.php'
    ?>


    <main class="bg-career">
        <section class="career-head">
            <div class="custom-container paddings">
                <div class="inner-text-width">
                    <h1>We're creative thinkers
                        doing work that matters</h1>
                </div>

            </div>
        </section>


        <section class="banner-img">
            <img src="../images/careers/banner_team.jpg" alt="Slide Image">
        </section>


        <section class="join-three custom-container paddings">

            <div class="join-three-flex">
                <div class="join-three-one">
                    <p>A meeting ground for forward-thinkers, strategists, and creative minds, our workplace is a balance of
                        dynamic digitalism and creative shape shifting. We're a supportive team that thrives on shared
                        knowledge and collective growth. With us, you will play a pivotal role in creating meaningful and
                        lasting impact in the digital realm.</p>
                    <p>
                        Are you an artistic virtuoso? Do you have an eye for design that can turn a simple concept into a
                        visual masterpiece?</p>

                    <p>Join <a href="/the-team" class="interlinks">our team</a> of creative thinkers who give life to ideas through compelling
                        visuals and captivating content.
                    </p>
                </div>
                <div class="join-three-two">

                </div>
            </div>

        </section>



        <section class="join-four">
            <div class="custom-container paddings">
                <div class="looking">
                    <h3>Join us to transform the way brands connect with audiences</h3>

                </div>



                <div class="applying-positions-flex">

                    <!---<div class="applying-positions-sec applying">
                        <p>Coimbatore</p>
                        <p>IT Support / System Administrator</p>
                        <p>Exp : 2-5 years</p>
                        <a href="/careers/IT-support-system-administrator">
                            <div class="applying-arrow">
                                <img src="../images/careers/red_arrow.svg" alt="Red Arrow" class="arrow">
                                <p>Apply</p>
                            </div>
                        </a>
                    </div> -->

                    <div class="applying-positions-sec applying">
                        <p>Coimbatore</p>
                        <p>Full Stack Web Developer</p>
                        <p>Exp : 3 - 5 years</p>
                        <a href="../careers/web-developer.php">
                            <div class="applying-arrow">

                                <img src="/images/careers/red_arrow.svg" alt="Red Arrow" class="arrow">
                                <p>Apply</p>
                            </div>
                        </a>
                    </div>

                    <div class="applying-positions-sec applying">
                        <p>Coimbatore</p>
                        <p>Client Service Executive</p>
                        <p>Exp : 0 - 2 years</p>
                        <a href="../careers/client-service-executive.php">
                            <div class="applying-arrow">
                                <img src="/images/careers/red_arrow.svg" alt="Red Arrow" class="arrow">
                                <p>Apply</p>
                            </div>
                        </a>
                    </div>
                    <div class="applying-positions-sec applying">
                        <p>Coimbatore</p>
                        <p>Senior Graphic Designer</p>
                        <p>Exp : 3 - 5 years</p>
                        <a href="../careers/senior-graphic-designer.php">
                            <div class="applying-arrow">
                                <img src="/images/careers/red_arrow.svg" alt="Red Arrow" class="arrow">
                                <p>Apply</p>
                            </div>
                        </a>
                    </div>
                    <div class="applying-positions-sec applying">
                        <p>Coimbatore</p>
                        <p>Content Writer</p>
                        <p>Exp : 1 - 3 years</p>
                        <a href="../careers/content-writer.php">
                            <div class="applying-arrow">
                                <img src="/images/careers/red_arrow.svg" alt="Red Arrow" class="arrow">
                                <p>Apply</p>
                            </div>
                        </a>
                    </div>


                </div>
            </div>
        </section>


        <?php include_once "../includes/footer.php" ?>

    </main>

    <script src="/js/matter.js"></script>
    <script src="/js/app.js"></script>

    <script src="/https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js"></script>

    <script>
        const lenis = new Lenis()

        lenis.on('scroll', (e) => {
            console.log(e)
        })

        function raf(time) {
            lenis.raf(time)
            requestAnimationFrame(raf)
        }

        requestAnimationFrame(raf)
    </script>

    <script>
        window.addEventListener('load', function() {
            var y = 0;
            var myVar1 = setInterval(function() {
                if (y == 0) {
                    if (document.querySelectorAll('[class="response_message_p"]').length > 0 && document.querySelector('[class="response_message_p"]').innerText.indexOf('Successfully') != -1) {
                        gtag('event', 'conversion', {
                            'send_to': 'AW-11192408006/0lD2CIqh3usYEMav-tgp'
                        });
                        clearInterval(myVar1);
                        y = 1;
                    }
                }
            }, 1000);

        });
    </script>
</body>

</html>