<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Signatures1</title>
  <link rel="stylesheet" href="https://unpkg.com/lenis@1.1.14/dist/lenis.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" id="themeSwitch" href="css/color-switch1.css">
  <link rel="stylesheet" href="css/responsive.css" />
</head>

<body id="body-bg">

  <?php include 'includes/header.php' ?>

  <main>
    <section class="services-bs">
      <div class="services-bs-container">
        <div class="services-banner-text">
          <h1>SERVICES</h1>
        </div>

          <div class="services-bs-card services-bs-card1">
            <div class="services-bs-card-one">
              <h2>Branding Solutions</h2>
              <p>Conceiving a brand that stands for more than just products or services — it represents
                a distinct ethos and a commitment to your audience.</p>
              <p>Defining a purpose that serves as the north star for your business, guiding every decision and strategy.
                It answers the fundamental question of why your brand exists beyond making a profit.</p>
            </div>

            <!-- <div class="services-bs-card-one">
              <img src="images/services/25.svg" alt="">
            </div> -->

            <div class="services-bs-card-one">
              <ul>
                <li>Brand Research</li>
                <li>Brand Strategy</li>
                <li>Crafting a manifesto</li>
                <li>Brand Application</li>
                <li>Brand Management</li>
                <li>Rebranding</li>
              </ul>
            </div>
          </div>

          <div class="services-bs-card services-bs-card2">
            <div class="services-bs-card-one">
              <h2>Visual Identity Design</h2>
              <p>A brand's visual identity is often the most recognizable. This includes the logo, color palette, and typeface
                that become synonymous with the brand's design. Visual identity is the silent ambassador of your brand, speaking volumes without a word.</p>
              <p>Beyond visuals, brand design encompasses a brand's touchpoints overall aesthetic and functional aspects. This refers
                to creating a brand's products, packaging, and website and even extends to the layout of physical spaces.</p>
            </div>

            <!-- <div class="services-bs-card-one">
              <img src="images/services/26.svg" alt="">
            </div> -->

            <div class="services-bs-card-one">
              <ul>
                <li>Print Design</li>
                <li>Packaging Design</li>
                <li>Presentation Design</li>
                <li>Graphic Design</li>
              </ul>
            </div>
          </div>

          <div class="services-bs-card services-bs-card3">
            <div class="services-bs-card-one">
              <h2>Website Design & Development</h2>
              <p>At the heart of successful brands is the ability to tell a story that resonates with consumers, stimulating an
                emotional connection that transcends the product or service itself.</p>
              <p>Create visually appealing, user-friendly, and responsive websites that effectively communicate your brand's message and drive conversions. </p>
            </div>

            <!-- <div class="services-bs-card-one">
              <img src="images/services/27.svg" alt="">
            </div> -->

            <div class="services-bs-card-one">
              <ul>
                <li>Website Design</li>
                <li>E-commerce Solutions</li>
                <li>Landing Page Design</li>
                <li>Content Management Systems (CMS)</li>
                <li>Mobile-Responsive Design</li>
                <li>Website Maintenance and Support</li>
                <li>Mobile Application</li>
              </ul>
            </div>
          </div>

          <div class="services-bs-card services-bs-card4">
            <div class="services-bs-card-one">
              <h2>Digital Marketing</h2>
              <p>Establishing a successful brand can seem like a Herculean task in a marketplace teeming with competition.
                Successful branding isn't a matter of chance — it's a meticulous blend of strategy, creativity, and consistency.</p>
              <p>The consistent application of branding principles to every aspect of the business, from product development to customer service,
                ensures that the brand remains a living, breathing entity in the consciousness of consumers.</p>
            </div>

            <!-- <div class="services-bs-card-one">
              <img src="images/services/28.svg" alt="">
            </div> -->

            <div class="services-bs-card-one">
              <ul>
                <li>Content Marketing</li>
                <li>SEO (Search Engine Optimization)</li>
                <li>Social Media Marketing</li>
                <li>Google Ads or PPC (Pay-Per-Click)</li>
                <li>Advertising</li>
                <li>Email Marketing</li>
                <li>Influencer Marketing</li>
                <li>Analytics and Reporting</li>
              </ul>
            </div>
          </div>

      </div>
  </main>

  <!-- Footer -->
  <?php include 'includes/footer.php' ?>

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