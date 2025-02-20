<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.1.14/dist/lenis.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" id="themeSwitch" href="css/color-switch1.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<style>
    @media(max-width:1770px) {
        canvas {
            width: 650px !important;
            height: 650px !important;
        }
    }       

    @media(max-width:1600px) {

        canvas {
            width: 600px !important;
            height: 600px !important;
        }
    }

    @media (max-width: 1560px) {
        canvas {
            width: 500px !important;
            height: 500px !important;
        }
    }
</style>

<body id="body-bg">

    <?php include 'includes/header.php' ?>

    <main>

        <section>
            <div class="custom-container">
                <div class="contact-flex">
                    <div class="round-wid">
                        <div class="media-round">
                            <div id="container-social"></div>
                        </div>
                    </div>

                    <div class="contact-form">
                        <h2>Let’s inspire the world into the future</h2>
                        <h2>New github text</h2>
                        <div class="contact-form-flex">

                            <form id="contactform-flex" name="contactform-flex" class="contactform-flex" method="POST">
                                <div class="contactformleft">
                                    <div class="contactformfield">
                                        <label for="">Name</label>
                                        <input type="text" id="name" name="name">
                                        <p id="nameErr"></p>
                                    </div>
                                    <div class="contactformfield">
                                        <label for="">Phone</label>
                                        <input type="tel" id="phone" name="phone">
                                        <p id="phoneErr"></p>
                                    </div>
                                    <div class="contactformfield">
                                        <label for="">Email</label>
                                        <input type="text" class="email" id="email" name="email">
                                        <p id="emailErr"></p>
                                    </div>
                                </div>
                                <div class="contactsendbtn">
                                    <div class="contactsubmit-flex">
                                        <p>S</p>
                                        <p>U</p>
                                        <p>B</p>
                                        <p>M</p>
                                        <p>I</p>
                                        <p>T</p>
                                    </div>

                                    <a href="">
                                        <svg width="45" height="45" viewBox="0 0 166 166" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="hover-svg">
                                            <path
                                                d="M83 166C128.84 166 166 128.84 166 83C166 37.1604 128.84 0 83 0C37.1604 0 0 37.1604 0 83C0 128.84 37.1604 166 83 166Z"
                                                fill="red" />
                                            <path
                                                d="M95.2574 80.1518L69.4325 69.0841L53.4456 80.152L76.8111 88.7602L14.0936 131.802L28.8506 146.559L107.555 92.4493L95.2574 80.1518Z"
                                                fill="white" />
                                        </svg>
                                    </a>

                                </div>
                            </form>
                        </div>

                        <div class="address-section-flex">
                            <div class="address-part">
                                <p>Signatures Designs & <br>Communications <br>Private Limited</p>
                                <address>#180, TS Road, Race Course,<br>Coimbatore, Tamil Nadu,<br>India - 641018.
                                </address>
                                <span>Monday to Friday: 09:30–18:00</span>
                            </div>

                            <div class="link-part">
                                <a href="mailto:brand@signatures1.com">brand@signatures1.com</a>
                                <a href="tel:+919943479797">For Enquiry: +91 99434 79797</a>
                                <a href="tel:+919943033250">Branding: +91 99430 33250</a>
                                <a href="tel:+919943316165">Digital: +91 99433 16165</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>


    <!-- <script src="js/app.js"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/two.js/0.8.10/two.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/matter-js/0.19.0/matter.min.js"></script>


    <!-- Contact page Image switch script -->

    <script>
        function viewonwhenclickedsayhello() {
            var vector = new Two.Vector();
            var entities = [];
            var mouse;

            function getThemeImages() {
                let isDarkMode = localStorage.getItem("theme") === "dark"; // Detect theme
                return isDarkMode ? [
                    "images/contact/face.svg",
                    "images/contact/whats.svg",
                    "images/contact/insta.svg",
                    "images/contact/linked.svg",
                ] : [
                    "images/contact/face-dark.svg",
                    "images/contact/whats-dark.svg",
                    "images/contact/insta-dark.svg",
                    "images/contact/linked-dark.svg",
                ];
            }

            var images = getThemeImages();
            var urls = [
                "https://www.facebook.com",
                "https://web.whatsapp.com/",
                "https://www.instagram.com",
                "https://www.linkedin.com",
            ];

            var container = document.getElementById('container-social');
            var two = new Two({
                type: Two.Types.canvas,
                width: 700,
                height: 700,
                autostart: true
            }).appendTo(container);

            var solver = Matter.Engine.create();
            solver.world.gravity.y = 0.3;

            var bounds = {
                radius: 350,
                segments: 32,
                properties: {
                    isStatic: true
                }
            };

            var circularBoundary = createCircularBoundary(bounds.radius, bounds.segments);
            Matter.World.add(solver.world, circularBoundary);

            addLogos();
            mouse = addMouseInteraction();
            two.bind("update", update);

            function addMouseInteraction() {
                var mouse = Matter.Mouse.create(container);
                var mouseConstraint = Matter.MouseConstraint.create(solver, {
                    mouse: mouse,
                    constraint: {
                        stiffness: 0
                    }
                });

                Matter.World.add(solver.world, mouseConstraint);
                container.addEventListener('click', handleClick);

                return mouseConstraint;
            }

            function handleClick(event) {
                var rect = container.getBoundingClientRect();
                var x = event.clientX - rect.left;
                var y = event.clientY - rect.top;

                for (var i = 0; i < entities.length; i++) {
                    var entity = entities[i];
                    var dx = entity.position.x - x;
                    var dy = entity.position.y - y;
                    var distance = Math.sqrt(dx * dx + dy * dy);

                    if (distance <= entity.circleRadius) {
                        window.open(urls[i], '_blank');
                        return;
                    }
                }
            }

            function addLogos() {
                var centerX = two.width / 2;
                var centerY = two.height / 2;

                for (var i = 0; i < images.length; i++) {
                    var angle = Math.random() * Math.PI * 2;
                    var distance = Math.random() * (bounds.radius - 100);
                    var x = centerX + Math.cos(angle) * distance;
                    var y = centerY + Math.sin(angle) * distance;

                    var image = new Two.ImageSequence(images[i], 0, 0, {
                        width: 100,
                        height: 100
                    });

                    var group = new Two.Group();
                    group.isLogo = true;

                    var visibleRadius = 50;
                    var invisibleRadius = 80;

                    var visibleCircle = new Two.Circle(0, 0, visibleRadius);
                    var invisibleCircle = new Two.Circle(0, 0, invisibleRadius);

                    visibleCircle.noStroke();
                    visibleCircle.fill = "rgba(255, 255, 255, 0)";
                    invisibleCircle.noStroke();
                    invisibleCircle.fill = "rgba(255, 255, 255, 0)";

                    var entity = Matter.Bodies.circle(x, y, invisibleRadius);
                    entity.scale = new Two.Vector(invisibleRadius, invisibleRadius);
                    entity.object = group;
                    entity.circleRadius = invisibleRadius;
                    entities.push(entity);

                    group.add(invisibleCircle, visibleCircle, image);
                    two.add(group);

                    group.translation.set(x, y);

                    group.circle = invisibleCircle;
                    group.entity = entity;
                }

                Matter.World.add(solver.world, entities);
            }

            function update(frameCount, timeDelta) {
                var allBodies = Matter.Composite.allBodies(solver.world);
                Matter.MouseConstraint.update(mouse, allBodies);
                Matter.MouseConstraint._triggerEvents(mouse);

                Matter.Engine.update(solver);

                for (var i = 0; i < entities.length; i++) {
                    var entity = entities[i];
                    entity.object.position.copy(entity.position);
                    entity.object.rotation = entity.angle;
                }
            }

            function createCircularBoundary(radius, segments) {
                var bodies = [];
                var centerX = two.width / 2;
                var centerY = two.height / 2;

                for (var i = 0; i < segments; i++) {
                    var angle = (i / segments) * Math.PI * 2;
                    var nextAngle = ((i + 1) / segments) * Math.PI * 2;

                    var x1 = centerX + Math.cos(angle) * radius;
                    var y1 = centerY + Math.sin(angle) * radius;
                    var x2 = centerX + Math.cos(nextAngle) * radius;
                    var y2 = centerY + Math.sin(nextAngle) * radius;

                    var segment = Matter.Bodies.rectangle(
                        (x1 + x2) / 2,
                        (y1 + y2) / 2,
                        Math.sqrt(Math.pow(x2 - x1, 2) + Math.pow(y2 - y1, 2)),
                        5, {
                            isStatic: true,
                            angle: Math.atan2(y2 - y1, x2 - x1)
                        }
                    );

                    bodies.push(segment);
                }

                var boundaryCircle = two.makeCircle(centerX, centerY, radius);
                boundaryCircle.noFill();
                localStorage.getItem("theme") === "dark" ?
                    (boundaryCircle.stroke = "#ffffff") :
                    (boundaryCircle.stroke = "#000000");
                boundaryCircle.linewidth = 1.5;

                return bodies;
            }
        }

        viewonwhenclickedsayhello();
    </script>

    <!-- // smooth scroll for lenis -->

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

    <script>

        // Function to remove all canvas elements inside the container
        // Function to remove all existing elements and event listeners

        function removeExistingCanvases() {
            var container = document.getElementById("container-social");

            // Remove all canvas elements inside the container
            var existingCanvases = container.querySelectorAll("canvas");
            existingCanvases.forEach(function(canvas) {
                container.removeChild(canvas);
            });

            // Remove all event listeners to prevent duplication
            container.replaceWith(container.cloneNode(true)); // This removes all event listeners

            // Clear previous Matter.js world if exists
            if (window.solver) {
                Matter.World.clear(window.solver.world, true); // Remove all bodies
                Matter.Engine.clear(window.solver); // Clear the engine
                window.solver = null; // Reset the reference
            }
        }


        // light and dark mode css switch

        document.addEventListener("DOMContentLoaded", () => {
            if (!localStorage.getItem("theme")) {
                localStorage.setItem("theme", "dark");
            }

            // Check if a theme is stored in localStorage, otherwise default to dark mode
            let isDarkTheme = localStorage.getItem("theme") === "dark";

            const themeToggle = document.getElementById("themeToggle");
            const themeSwitch = document.getElementById("themeSwitch");

            // Apply theme based on localStorage or default to dark
            if (isDarkTheme) {
                themeSwitch.setAttribute("href", "css/color-switch1.css");
                themeToggle.classList.remove("active");
            } else {
                themeSwitch.setAttribute("href", "css/color-switch2.css");
                themeToggle.classList.add("active");
                // document.documentElement.classList.add('light-mode'); // Set dark mode initially
            }

            // Toggle theme on click
            themeToggle.addEventListener("click", () => {

                isDarkTheme = !isDarkTheme;

                const theme = isDarkTheme ?
                    "css/color-switch1.css" :
                    "css/color-switch2.css";

                themeSwitch.setAttribute("href", theme);
                themeToggle.classList.toggle("active"); // Toggle class

                document.documentElement.classList.toggle("light-mode");
                // Store the theme preference in localStorage
                localStorage.setItem("theme", isDarkTheme ? "dark" : "light");

                removeExistingCanvases();
                viewonwhenclickedsayhello();
            });
        });
    </script>
</body>

</html>