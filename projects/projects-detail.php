<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Signatures1</title>
  <link rel="stylesheet" href="https://unpkg.com/lenis@1.1.14/dist/lenis.css">
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/responsive.css" />
</head>

<body id="body-bg">

  <!-- Header -->

  <?php include '../includes/header.php' ?>

  <main>
    <section class="projects-banner">
      <div class="projects-banner-container custom-container">
        <img src="../images/projects/projects-banner.jpg" alt="" />

        <div class="banner-texts">
          <span>Logo design</span>
          <span>Nomenclature</span>
          <span>Brand design</span>
          <span>Brand animations</span>
          <span>Social Media creatives</span>
          <span>Print Collaterals & Visuals</span>
        </div>
      </div>
    </section>

    <section class="projects-detail-section">
      <div class="projects-detail-container">
        <div class="projects-detail-one">
          <img src="../images/projects/United-logo-01.png" alt="" />
        </div>

        <div class="projects-detail-two">
          <h1>UNITD MULTI UTILITY HOMES</h1>
          <p>
            Signatures1 proudly collaborated with Unitd to deliver a
            comprehensive design overhaul, including a unique logo that
            captures the brand's innovative essence. Through a harmonious
            blend of aesthetic appeal and functional design, we have helped
            LiveUnitd stand out in a competitive market, reflecting our
            commitment to excellence and ability to bring any vision to life.
            Explore our portfolio to see how we transform ideas into
            captivating visual identities.
          </p>
        </div>
      </div>

      <div class="project-details-image-holder">
        <!-- <div class="projects-details-three">
          <img src="../images/projects/c1.jpg" alt="" />
          <img src="../images/projects/c2.jpg" alt="" />
        </div>

        <div class="projects-details-four">
          <img src="../images/projects/c3.jpg" alt="" />
          <img src="../images/projects/c4.jpg" alt="" />
        </div>

        <div class="projects-details-five">
          <img src="../images/projects/c6.jpg" alt="" />
          <img src="../images/projects/c10.jpg" alt="" />
        </div>

        <div class="projects-details-six">
          <img src="../images/projects/c8.jpg" alt="" />
          <img src="../images/projects/c9.jpg" alt="" />
        </div> -->

        <div class="projects-details-seven">
          <img src="../images/projects/c7.jpg" alt="" />
        </div>

        <!-- <div class="project-details-part3">
          <div class="projects-details-eight">
            <img src="../images/projects/c11.jpg" alt="" />
          </div>

          <div class="projects-details-nine">
            <img src="../images/projects/c12.jpg" alt="" />
          </div>

          <div class="projects-details-ten">
            <img src="../images/projects/c13.jpg" alt="" />
          </div>

          <div class="projects-details-eleven">
            <img src="../images/projects/c16.jpg" alt="" />
          </div>

          <div class="projects-details-twelve">
            <img src="../images/projects/c15.jpg" alt="" />
          </div>
        </div> -->


        <div class="project-inner-slider">

          <div class="projects-inner-slider-flex">
            <h2>Branding Design</h2>
            <swiper-container class="mySwiper" autoplay="true" effect="fade" autoplay: {delay: 1000, disableOnInteraction: false,},>
              <swiper-slide>
                <img src=" ../images/projects/c1.jpg" />
              </swiper-slide>
              <swiper-slide>
                <img src="../images/projects/c2.jpg" />
              </swiper-slide>
              <swiper-slide>
                <img src="../images/projects/c3.jpg" />
              </swiper-slide>
              <swiper-slide>
                <img src="../images/projects/c4.jpg" />
              </swiper-slide>
            </swiper-container>
          </div>


          <div class="projects-inner-slider-flex">
            <h2>Print Collaterals & Visuals</h2>
            <swiper-container class="mySwiper" autoplay="true" effect="fade" autoplay: {delay: 1000, disableOnInteraction: false,},>
              <swiper-slide>
                <img src=" ../images/projects/c6.jpg" />
              </swiper-slide>
              <swiper-slide>
                <img src="../images/projects/c8.jpg" />
              </swiper-slide>
              <swiper-slide>
                <img src="../images/projects/c9.jpg" />
              </swiper-slide>
              <swiper-slide>
                <img src="../images/projects/c10.jpg" />
              </swiper-slide>
            </swiper-container>
          </div>

        </div>

        <div class="projects-inner-allworks-link">
            <a href="">ALL WORKS</a>
            <img src="../images/home/button.png" alt="">
        </div>

      </div>
    </section>
  </main>

  <!-- Footer -->
  <?php include '../includes/footer.php' ?>

  <script src="https://unpkg.com/lenis@1.1.14/dist/lenis.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

  <script>
    // Initialize Lenis with slower scroll speed settings
    const lenis = new Lenis({
      duration: 2, // Increase duration for slower scroll
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

  <script src="https://cdn.jsdelivr.net/npm/matter-js@0.14.2/build/matter.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/two.js@v0.7.0-stable.1/build/two.js"></script>
  <script src="../js/matter.js"></script>
  <script src="../js/app.js"></script>
</body>

</html>