<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company</title>
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.1.14/dist/lenis.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body id="body-bg">

    <!-- Header -->

    <?php include 'includes/header.php' ?>

    <main>

        <section class="company-section">
            <div class="first-view">
                <div class="work-circle work-circle1">Branding</div>
                <div class="work-circle work-circle2">Designing</div>
                <div class="work-circle work-circle3">packaging</div>
            </div>
            <div class="second-view">
                <img class="showimg" src="images/home/signature-01.svg" alt="">
            </div>
        </section>

        <section class="company-container">
            <div class="custom-container">
                <h1>COMPANY</h1>
                <div class="company-content">
                    <div class="content-div">
                        <p>We are more than a service provider; we are your creative partners, ready to bring your unique vision to life. Together, we'll turn your aspirations into accomplishments, one creative endeavor at a time.</p>
                        <p>With our inherently creative team, we are dedicated to helping businesses like yours establish a strong online presence, reach a wider audience, and achieve remarkable growth.</p>
                    </div>
                    <div class="content-div1">
                        <p>Do you allow your imagination to speak through your work?</p>
                        <div>
                            <p>join us</p>
                            <img src="images/company/sign1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>


    <!-- Footer -->
    <?php
    include 'includes/footer.php'
    ?>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(() => {
                document.querySelector('.first-view').classList.add('hidden');
                const secondView = document.querySelector('.second-view');
                secondView.classList.add('fullscreen');
                setTimeout(() => {
                    secondView.querySelector('.showimg').classList.add('show-img');
                }, 500);
            }, 2500);
        });
    </script>

<script src="https://unpkg.com/lenis@1.1.14/dist/lenis.min.js"></script> 

<script>

    // Initialize Lenis with slower scroll speed settings
    const lenis = new Lenis({
        duration: 1, // Increase duration for slower scroll
        easing: (t) => 1 - Math.pow(1 - t, 3) // Optional: Custom easing for smoother, slower scroll
        });

        // Listen for the scroll event and log the event data
        lenis.on('scroll', (e) => {
        // console.log(e);
        });

        // Use requestAnimationFrame to continuously update the scroll
        function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
        }

        requestAnimationFrame(raf);

</script>

    <script src="js/app.js"></script>
</body>

</html>