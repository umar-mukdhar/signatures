<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signatures1</title>
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.1.14/dist/lenis.css">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" id="themeSwitch" href="css/color-switch1.css">
    <link rel="stylesheet" href="css/responsive.css" />
</head>

<body id="body-bg">

    <?php include 'includes/header.php'?>

    <main>
        <section class="blog-page-section">
            <div class="blog-page-container custom-container">
                <div class="blog-section-text">
                    <h1>INSIGHTS</h1>
                </div>

                <div class="blog-card-container">
                    <div class="blog-card-odd">
                        <a href="blogs/blog-inner.php">
                            <h2>June 04, 2024</h2>
                            <img src="images/blog/blog-1.jpg" alt="">
                            <h3>How to Add Google Ads gtag.js Tracking to Your Next js Website</h3>
                        </a>
                    </div>

                    <div class="blog-card-even blog-card-btm">
                        <a href="#" >
                            <h2>April 14, 2024</h2>
                            <img src="images/blog/blog-2.jpg" alt="">
                            <h3>A Step-by-Step Approach to Designing a Logo in 2024:</h3>
                        </a>
                    </div>

                    <div class="blog-card-odd">
                        <a href="#">
                            <h2>April 29, 2024</h2>
                            <img src="images/blog/blog-3.jpg" alt="">
                            <h3>From clicks to customer: Unleash the power of paid search</h3>
                        </a>
                    </div>

                    <div class="blog-card-even">
                        <a href="#">
                            <h2>March 19, 2024</h2>
                            <img src="images/blog/blog-4.jpg" alt="">
                            <h3>Tell Your Story, Win the World: How to Design a Powerful Company Profile</h3>
                        </a>
                    </div>

                    <div class="blog-card-odd blog-card-btm">
                        <a href="#">
                            <h2>March 08, 2024</h2>
                            <img src="images/blog/blog-5.jpg" alt="">
                            <h3>Harnessing the Future: The Evolution of Chatbots</h3>
                        </a>
                    </div>

                    <div class="blog-card-even">
                        <a href="#">
                            <h2>January 18, 2024</h2>
                            <img src="images/blog/blog-6.jpg" alt="">
                            <h3>Navigating the Future of Online Advertising: Google's Deprecation of 3rd-Party Cookies</h3>
                        </a>
                    </div>

                    <div class="blog-card-odd">
                        <a href="#">
                            <h2>December 28, 2023</h2>
                            <img src="images/blog/blog-7.jpg" alt="">
                            <h3>Importance of Content in the Realm of Digital Marketing</h3>
                        </a>
                    </div>

                    <div class="blog-card-even blog-card-btm">
                        <a href="#">
                            <h2>December 28, 2023</h2>
                            <img src="images/blog/blog-8.jpg" alt="">
                            <h3>Unveiling the Visual Pillars of Brand Designe</h3>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php
    include 'includes/footer.php'
    ?>
    <!-- // smooth scroll for lenis -->
 
    <script src="https://unpkg.com/lenis@1.1.14/dist/lenis.min.js"></script> 

    <script>
        // Initialize Lenis with slower scroll speed settings
        const lenis = new Lenis({
            duration: 1, // Increase duration for slower scroll
            easing: (t) => 1 - Math.pow(1 - t, 3) // Optional: Custom easing for smoother, slower scroll
        });

        // Target the element with sticky effect
        const stickyElement = document.querySelector('.blog-section-text');
        const initialTop = stickyElement.getBoundingClientRect().top;

        // Lenis scroll event listener
        lenis.on('scroll', (e) => {
            const scrollTop = lenis.scroll;
            const elementTop = stickyElement.getBoundingClientRect().top - initialTop;

            // Check if the element should become fixed or not
            if (elementTop <= 10) {
                stickyElement.style.position = 'fixed';
                stickyElement.style.top = '20%';
                stickyElement.style.left = '50%';
                stickyElement.style.transform = 'translateX(-50%)';
            }
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