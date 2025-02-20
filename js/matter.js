function getCanvasSize() {
  let width = 850;
  let height = 850;
  let radius = 320;

  if (window.innerWidth <= 1750) {
    width = height = 700;
    radius = 270;
  }
  if (window.innerWidth <= 1350) {
    width = height = 600;
    radius = 240;
  }
  if (window.innerWidth <= 1150) {
    width = height = 500;
    radius = 200;
  }
  if (window.innerWidth <= 1024) {
    width = height = 400;
    radius = 160;
  }

  return { width, height, radius };
}

function viewonwhenclickedsayhello() {
  const { width, height, radius } = getCanvasSize();
  var vector = new Two.Vector();
  var entities = [];
  var mouse;

  function getThemeImages() {
    let isDarkMode = localStorage.getItem("theme") === "dark"; // Detect theme
    return isDarkMode
      ? [
          "images/home/social/face-dark.svg",
          "images/home/social/insta-dark.svg",
          "images/home/social/whats-dark.svg",
          "images/home/social/linked-dark.svg",
        ]
      : [
          "images/home/social/face-light.svg",
          "images/home/social/insta-light.svg",
          "images/home/social/whats-light.svg",
          "images/home/social/linked-light.svg",
        ];
  }

  var images = getThemeImages();

  var urls = [
    "https://www.facebook.com",
    "https://www.instagram.com",
    "https://web.whatsapp.com/",
    "https://www.linkedin.com",
  ];

  var container = document.getElementById("container-social");

    var two = new Two({
    type: Two.Types.canvas,
    width: width,
    height: height,
    autostart: true,
  }).appendTo(container);

  var solver = Matter.Engine.create();
  solver.world.gravity.y = 0.3;

  var bounds = {
    radius: radius,
    segments: 32,
    properties: {
      isStatic: true,
    },
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
        stiffness: 0,
      },
    });

    Matter.World.add(solver.world, mouseConstraint);
    container.removeEventListener("click", handleClick);
    console.log("Event listerners removed");
    container.addEventListener("click", handleClick);
    // container.addEventListener("click", handleClick);

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
        // console.log(urls[i]);
        window.open(urls[i], "_blank");
        return;
      }
    }
  }

  function addLogos() {
    var centerX = two.width / 2;
    var centerY = two.height / 2;

    for (var i = 0; i < images.length; i++) {
      var angle = Math.random() * Math.PI * 2;
      var distance = Math.random() * (bounds.radius - 100); // Adjusted to keep logos within the circle
      var x = centerX + Math.cos(angle) * distance;
      var y = centerY + Math.sin(angle) * distance;
      
      var logoScale = bounds.radius / 320;

      var image = new Two.ImageSequence(images[i], 0, 0, {
        width: 100,
        height: 100,
      });
      console.log(`scale value ${logoScale}`)
      image.scale = logoScale; // Dynamically scale the image

      var group = new Two.Group();
      group.isLogo = true;

      // Scale radii based on logo scale
      var visibleRadius = 50 * logoScale; 
      var invisibleRadius = 80 * logoScale;

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
        5,
        {
          isStatic: true,
          angle: Math.atan2(y2 - y1, x2 - x1),
        }
      );

      bodies.push(segment);
    }

    var boundaryCircle = two.makeCircle(centerX, centerY, radius);
    boundaryCircle.noFill();
    localStorage.getItem("theme") === "dark"
      ? (boundaryCircle.stroke = "#000000")
      : (boundaryCircle.stroke = "#ffffff");
    boundaryCircle.linewidth = 1.5;

    return bodies;
  }
}
