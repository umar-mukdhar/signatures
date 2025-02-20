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

    <main>
        <section class="articl-inner-whole-container">
            <div class="article-inner-div-container custom-container">
                <h1>June 04, 2024</h1>
                <h2>How to Add Google Ads gtag.js Tracking to Your Next js Website</h2>

                <div class="article-inner-cotents-container">
                    <div class="article-inner-grey">
                        <p>Table of Contents:</p>
                        <ul class="article-inner-li-decimel">
                            <li>Introduction to gtag.js and Next.js</li>
                            <li>Benefits of Adding gtag.js to Your Next.js Website</li>
                            <li>Prerequisites for Integrating gtag.js</li>
                            <li>Step-by-Step Guide: How to Add gtag.js to Your Next.js Website</li>

                            <ul class="article-inner-li-disc">
                                <li>Setting Up a Google Ads Account</li>
                                <li>Obtaining Your Google Ads Tracking ID</li>
                                <li>Adding gtag.js to Your Next.js Website</li>
                                <ul class="article-inner-li-disc-two">
                                    <li>Option 1: Adding gtag.js Code Directly</li>
                                    <li>Option 2: Integrating with Google Tag Manager package</li>
                                </ul>
                                <li>Verifying Your gtag.js Implementation</li>
                                <li>Troubleshooting Common gtag.js Integration Issues</li>
                            </ul>
                            <li>Conclusion: Unlock the Power of Google Ads Tracking in Your Next.js Website</li>
                        </ul>
                    </div>

                    <div class="article-inner-contents">
                        <div>
                            <h3>1.Introduction to gtag.js and Next.js</h3>
                            <p>gtag.js is a JavaScript tagging framework and API developed by Google that simplifies the process
                                of integrating multiple Google products, including Google Ads, into your website. It allows you to
                                send event data to Google Analytics, Google Ads, and other Google services, enabling accurate tracking
                                and analysis of your marketing campaigns.</p>
                        </div>

                        <div>
                            <h3>2.Benefits of Adding gtag.js to Your Next.js Website</h3>
                            <p>Next.js, on the other hand, is a popular React framework that enables server-side rendering and static site generation.
                                By combining the power of gtag.js with Next.js, you can ensure that your Google Ads data is accurately tracked across
                                your application, helping you make informed marketing decisions and optimize your campaigns for better performance.</p>
                        </div>

                        <div class="article-inner-contents-ul">
                            <h3>3.Prerequisites for Integrating gtag.js</h3>
                            <ul>
                                <li>Before you begin, ensure you have the following:</li>
                                <li>A Google Ads account</li>
                                <li>Access to your Next.js project</li>
                                <li>Basic knowledge of React and Next.js</li>
                            </ul>
                        </div>

                        <div>
                            <h3>4.Step-by-Step Guide Adding Google gtag.js code in Next.js website</h3>
                            <p>Create a Google Ads Account</p>
                            <p>If you don't already have a Google Ads account, create one in this link.</p>
                        </div>

                        <div class="article-inner-con-ul-num">
                            <h4>Obtain Your Google Ads Tracking ID</h4>

                            <ul>
                                <li>Log in to your Google Ads account.</li>
                                <li>Click the "Tools & Settings" icon in the upper right corner.</li>
                                <li>Under "Measurement", select "Conversions".</li>
                                <li>Click on the "+" button to create a new conversion action.</li>
                                <li>Follow the prompts to set up your conversion action and obtain your tracking ID (usually starts with `AW-`).</li>
                            </ul>
                        </div>

                        <div>
                            <h4>Add Google Ads gtag code to Your Next.js Website using Google Tag Manager</h4>
                            <p>You can add the Google tag for Google Ads to your Next.js project without installing any third-party packages.</p>
                        </div>

                        <div>
                            <p>Step 1: </p>
                            <p>Open your Next.js application files, and locate the layout.js file, which is usually located at root/src/app/layout.js if
                                you are using the src and app folders, or root/app/layout.js .</p>
                            <p>You can find your project structure in this <a href="#">documentation.</a></p>
                        </div>

                        <div class="article-inner-con-steps-flex">
                            <div class="article-steps-left">
                                <p>Step 2:</p>
                                <p>Your layout.js might look like this:</p>
                            </div>
                            <div class="article-steps-right">
                            <pre>
                                <code class="language-html">
                                    import Navbar from './navbar';<br>
                                    import Footer from './footer';<br>
                                    export default function Layout(&#123; children &#125;) &#123;<br>
                                    return (<br>
                                        &lt;&gt;<br>
                                        &lt;Navbar /&gt;<br>
                                        &lt;main&gt;&#123;children&#125;&lt;/main&gt;<br>
                                        &lt;Footer /&gt;<br>
                                        &lt;/&gt;<br>
                                    );<br>
                                    &#125;
                                </code>
                            </pre>
                            </div>
                        </div>

                        <div class="article-inner-con-steps-flex">
                            <div class="article-steps-left">
                                <p>Step 3:</p>
                                <p>Since adding the script tag to your head tag can be challenging with all the packages around the community, 
                                    and _app.js or _document.js might not work in some scenarios, you can directly embed the script tag in layout.js, 
                                    which will reflect on all pages of the website.</p>
                            </div>
                            <div class="article-steps-right">
                                <pre>
                                   <code class="language-html">
                                        // layout.js 

                                        import Script from 'next/script';<br>
                                        import Navbar from './navbar';<br>
                                        import Footer from './footer';<br><br>
                                        export default function Layout(&#123; children &#125;) &#123;<br>
                                        &nbsp;&nbsp;return (<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&lt;html lang="en"&gt;<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;head&gt;<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Script id="gtm" strategy="afterInteractive"&gt;<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#123;`(function(w,d,s,l,i)&#123;w[l]=w[l]||[];w[l].push(&#123;'gtm.start':<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new Date().getTime(),event:'gtm.js'&#125;);var f=d.getElementsByTagName(s)[0],<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;})(window,document,'script','dataLayer','GTM-xxxxxxxx');`&#125; <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/Script&gt;<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/head&gt;<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;body&gt;<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Navbar /&gt;<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;main&gt;&#123;children&#125;&lt;/main&gt;<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Footer /&gt;<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/body&gt;<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&lt;/html&gt;<br>
                                        &nbsp;&nbsp;);<br>
                                        &#125;
                                    </code>
                                </pre>
                            </div>
                        </div>

                        <div>
                            <p>In the above example code,we defined the <code class="gtag--option-list-marker">&lt;html&gt;</code> and <code class="gtag--option-list-marker">&lt;head&gt;</code> tags in <code class="gtag--option-list-marker">layout.js</code> and included the script tag using <code class="gtag--option-list-marker">&lt;Script&gt;</code> from <span class="gtag--option-list-marker"> "next/script" </span>.</p>

                            <p>Don't forget to import the Script component from <span class="gtag--option-list-marker"> "next/script" </span>.</p>

                            <p>We often get two script tags to add to our website. The first one should be added in the head tag, and the next one should be added immediately after the opening of your body tag. To do this, we can use the same layout.js file. Instead of adding the script directly, we can create a component for this and import it inside the body tag.</p>
                        </div>

                        <div class="article-inner-con-steps-flex">
                            <div class="article-steps-left">
                                <h3>Step 4:</h3>

                                <p>Create a component called <span class="gtag--option-list-marker">GoogleTagManager.jsx/tsx</span> in <span class="gtag--option-list-marker-wrap"> src/app/components/analytics/GoogleTagManager.jsx </span>:</p>
                            </div>

                            <div class="article-steps-right">
                                <pre>
                                    <code class="lanugage-html">
                                    const GoogleTagManager = () =&gt; &#123;<br>

                                    &nbsp;&nbsp;return (<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;noscript&gt;<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;iframe<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;src="https://www.googletagmanager.com/ns.html?id=GTM-xxxxxxxx" <br> 
                                    // Place your GTM code here
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height="0"<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width="0"<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;style=&#123;&#123; display: 'none', visibility: 'hidden' &#125;&#125;<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&gt;&lt;/iframe&gt;<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;/noscript&gt;<br>
                                    &nbsp;&nbsp;);<br>
                                    &#125;;<br><br><br>

                                    export default GoogleTagManager;
                                    </code>
                                </pre>
                            </div>
                        </div>

                        <div class="article-inner-con-steps-flex">
                            <div class="article-steps-left steps-space-between">
                                <div>
                                    <h3>Step 5:</h3>
                                    <p>Now import this component in your <span class="gtag--option-list-marker"> layout.js </span> like below:</p>
                                </div>
                                
                                <div>
                                    <p>Import the component immediately after the opening of your body tag.</p>
                                    <p>Build and run your application. The script tag will reflect on your website.</p>
                                </div>
                            </div>

                            <div class="article-steps-right">
                                <pre>
                                    <code>
                                    import Script from 'next/script';<br>
                                    import Navbar from './navbar';<br>
                                    import Footer from './footer';<br>
                                    import GoogleTagManager from '@/components/analytics/GoogleTagManager';<br><br>

                                    export default function Layout(&#123; children &#125;) &#123;
                                    &nbsp;&nbsp;return (<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;html lang="en"&gt;<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;head&gt;<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Script id="gtm" strategy="afterInteractive"&gt;<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#123;`(function(w,d,s,l,i)&#123;w[l]=w[l]||[];w[l].push(&#123;'gtm.start':<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new Date().getTime(),event:'gtm.js'&#125;);var f=d.getElementsByTagName(s)[0],<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#125;)(window,document,'script','dataLayer','GTM-xxxxxxxx');`&#125; // Place your GTM code here<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/Script&gt;<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/head&gt;<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;body&gt;<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;GoogleTagManager /&gt;<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Navbar /&gt;<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;main&gt;&#123;children&#125;&lt;/main&gt;<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Footer /&gt;<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/body&gt;<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;/html&gt;<br>
                                    &nbsp;&nbsp;);<br>
                                    &#125;
                                    </code>
                                </pre>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <section class="recent-articles-section">
            <div class="recent-articles-container custom-container">
                <div class="recent-articles-heading">
                    <h3>RECENT ARTICLES</h3>
                    <div>
                        <a href="#">
                            VIEW ALL <img src="../images/blog/button.svg" alt="">
                        </a>
                    </div>
                </div>

                <div class="blog-inner-card-container">
                    <a href="#" class="blog-inner-cards">
                        <h2>March 19, 2024</h2>
                        <img src="../images/blog/blog-4.jpg" alt="">
                        <h3>Tell Your Story, Win the World: How to Design a Powerful Company Profile</h3>
                    </a>

                    <a href="#" class="blog-inner-cards">
                        <h2>April 14, 2024</h2>
                        <img src="../images/blog/blog-2.jpg" alt="">
                        <h3>A Step-by-Step Approach to Designing a Logo in 2024:</h3>
                    </a>

                    <a href="#" class="blog-inner-cards">
                        <h2>April 29, 2024</h2>
                        <img src="../images/blog/blog-3.jpg" alt="">
                        <h3>From clicks to customer: Unleash the power of paid search</h3>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include '../includes/footer.php'?>

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

    <script src="https://cdn.jsdelivr.net/npm/matter-js@0.14.2/build/matter.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/two.js@v0.7.0-stable.1/build/two.js"></script>
    <script src="/js/matter.js"></script>
    <script src="/js/app.js"></script>

    <script>
        hljs.highlightAll();
    </script>
</body>

</html>