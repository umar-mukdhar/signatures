<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.1.14/dist/lenis.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" id="themeSwitch" href="css/color-switch1.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body id="body-bg">

    <?php include 'includes/header.php' ?>

    <main>

        <section class="about-us-section">
            <div class="about-us-heading-div">
                <h1>Crafting Ideas for new worlds</h1>
            </div>

            <div class="about-us-second-div">
                <div class="about-us-second-image">
                    <img class="about-us-image1" src="images/company/about1.png" alt="">
                    <img class="about-us-image2" src="images/company/about2.png" alt="">
                </div>
                <div class="about-us-second-cotent">
                    <p>We are more than a service provider; we are your creative partners, ready to bring your unique vision to life.
                        Together, we'll turn your aspirations into accomplishments, one creative endeavor at a time.</p>
                </div>
            </div>

            <div class="about-us-third-div">
                <img src="images/company/about3.png" alt="">
                <p>With our inherently creative team, we are dedicated to helping businesses like yours establish a strong online presence,
                    reach a wider audience, and achieve remarkable growth.</p>
            </div>

          

            <div class="about-us-fourth-div">
                <p>Do you allow your imagination to speak through your work?</p>
                <div>
                    <p>join us</p>
                    <img src="images/company/sign1.png" alt="">
                </div>
            </div>
        </section>


<div class="sticky-container">
                <div class="sticky-section">
                    <div class="outer-circle-container" id="outer-circle"></div>
                    <div class="circle-container" id="circle"></div>
                    <div class="text-overlay" id="text-overlay">
                        <h2>MAKING HEADS TURN</h2>
                        <p>A team of designers, developers, strategists, producers brought together by good fortune, great clients, and a shared drive to make amazing things. A group of never still, always creating, growth hacking, searching for the next big thing, music-loving, supportive, curious, motivated doers.</p>
                    </div>
                </div>
            </div>


        <section class="about-us-initiatives-section">
            <div class="aboutus-initiatives-div">
                <h2>Initiatives</h2>
                <p>A collection of internal projects and initiatives, often launched from personal passion and
                    intended to inspire, broaden our horizons, and challenge our existing skill sets.</p>
                <div class="initiatives-image-div">
                    <img src="images/company/uyir-logo.png" alt="">
                    <img src="images/company/uyir-logo.png" alt="">
                    <img src="images/company/uyir-logo.png" alt="">
                </div>
            </div>
        </section>



    </main>


    <!-- Footer -->
    <?php include 'includes/footer.php' ?>

    <!-- // smooth scroll for lenis -->

    <script src="https://unpkg.com/lenis@1.1.14/dist/lenis.min.js"></script> 


    <script src="/js/app.js"></script>

    <script>
        //Initialize Lenis with slower scroll speed settings
        const lenis = new Lenis({
            duration: 1, // Increase duration for slower scroll
            easing: (t) => 1 - Math.pow(1 - t, 3) // Optional: Custom easing for smoother, slower scroll
        });

        //Listen for the scroll event and log the event data
        lenis.on('scroll', (e) => {
        console.log(e);
        });

        // Use requestAnimationFrame to continuously update the scroll
        function raf(time) {
         lenis.raf(time);
         requestAnimationFrame(raf);
        }

        requestAnimationFrame(raf);
    </script>

    <script>
        function placeImages(containerId, radius, imageUrls) {
            const container = document.getElementById(containerId);
            const centerX = container.offsetWidth / 2;
            const centerY = container.offsetHeight / 2;
            const totalImages = imageUrls.length;

            imageUrls.forEach((url, index) => {
                const angle = (index / totalImages) * (2 * Math.PI) - Math.PI / 2;
                const x = centerX + radius * Math.cos(angle) - (containerId === "outer-circle" ? 37.5 : 25);
                const y = centerY + radius * Math.sin(angle) - (containerId === "outer-circle" ? 37.5 : 25);

                const img = document.createElement("img");
                img.src = url;
                img.style.left = `${x}px`;
                img.style.top = `${y}px`;
                img.classList.add('circle-img');
                container.appendChild(img);
            });
        }

        const circleImages = [
            "https://vendredi-society.com/wp-content/uploads/2024/02/collaborateur_5.webp",
            "https://vendredi-society.com/wp-content/uploads/2024/02/collaborateur_4.webp",
            "https://vendredi-society.com/wp-content/uploads/2024/02/collaborateur_5.webp",
            "https://vendredi-society.com/wp-content/uploads/2024/02/collaborateur_4.webp",
            "https://vendredi-society.com/wp-content/uploads/2024/02/collaborateur_5.webp",
            "https://vendredi-society.com/wp-content/uploads/2024/02/collaborateur_4.webp",
            "https://vendredi-society.com/wp-content/uploads/2024/02/collaborateur_5.webp",
            "https://vendredi-society.com/wp-content/uploads/2024/02/collaborateur_4.webp",
            "https://vendredi-society.com/wp-content/uploads/2024/02/collaborateur_5.webp",
            "https://vendredi-society.com/wp-content/uploads/2024/02/collaborateur_4.webp",
            "https://vendredi-society.com/wp-content/uploads/2024/02/collaborateur_4.webp",
            "https://vendredi-society.com/wp-content/uploads/2024/02/collaborateur_5.webp",
        ];

        const outerCircleImages = [
            "https://vendredi-society.com/wp-content/uploads/2024/02/collaborateur_4.webp",
            "https://vendredi-society.com/wp-content/uploads/2024/02/collaborateur_5.webp",
            "https://vendredi-society.com/wp-content/uploads/2024/02/collaborateur_4.webp",
            "https://vendredi-society.com/wp-content/uploads/2024/02/collaborateur_5.webp",
            "https://vendredi-society.com/wp-content/uploads/2024/02/collaborateur_4.webp",
            "https://vendredi-society.com/wp-content/uploads/2024/02/collaborateur_5.webp",
            "https://vendredi-society.com/wp-content/uploads/2024/02/collaborateur_4.webp",
            "https://vendredi-society.com/wp-content/uploads/2024/02/collaborateur_5.webp",
            "https://vendredi-society.com/wp-content/uploads/2024/02/collaborateur_4.webp",
            "https://vendredi-society.com/wp-content/uploads/2024/02/collaborateur_5.webp",
            "https://vendredi-society.com/wp-content/uploads/2024/02/collaborateur_4.webp",
            "https://vendredi-society.com/wp-content/uploads/2024/02/collaborateur_5.webp",
            "https://vendredi-society.com/wp-content/uploads/2024/02/collaborateur_4.webp",
            "https://vendredi-society.com/wp-content/uploads/2024/02/collaborateur_5.webp",
            "https://vendredi-society.com/wp-content/uploads/2024/02/collaborateur_4.webp",
            "https://vendredi-society.com/wp-content/uploads/2024/02/collaborateur_5.webp",
           
        ];

        placeImages("circle", 220, circleImages);
        placeImages("outer-circle", 360, outerCircleImages);

        window.addEventListener("scroll", () => {
            const scrollTop = window.scrollY;
            const section = document.querySelector(".sticky-section");
            const sectionTop = section.getBoundingClientRect().top;
            const sectionHeight = section.offsetHeight;
            const maxScale = 3;
            const textOverlay = document.getElementById("text-overlay");
            const circle = document.getElementById("circle");
            const outerCircle = document.getElementById("outer-circle");
            const images = document.querySelectorAll('.circle-img');

            if (sectionTop <= 50) {
                const progress = Math.min(Math.max(scrollTop / (sectionHeight * 7), 0), 1);
                const innerRotation = -progress * 180;
                const outerRotation = progress * 180;
                const scaleValue = 0.1 + progress * (maxScale - 0.1);

                circle.style.transform = `scale(${scaleValue}) rotate(${innerRotation}deg)`;
                outerCircle.style.transform = `scale(${scaleValue}) rotate(${outerRotation}deg)`;

                console.log(`Progress: ${progress}, scale value ${scaleValue}`)

                if (scaleValue >= 1.2 && scaleValue < 2.1) {
                    textOverlay.style.opacity = Math.min((scaleValue - 1.2) / (2.1 - 1.2), 1);
                } else if (scaleValue >= 2) {
                    textOverlay.style.opacity = Math.max(0, 1 - (scaleValue - 2.1) / (2.3 - 2.1));
                } else {
                    textOverlay.style.opacity = 0;
                }

                if (scaleValue >= 2.0) {
                    images.forEach(img => img.style.opacity = 0);
                } else {
                    images.forEach(img => img.style.opacity = 1);
                }
            }
        });
    </script>

</body>

</html>