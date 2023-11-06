<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <script src="path/to/bootstrap/js/bootstrap.min.js"></script>



    <!--My CSS-->
    <link rel="stylesheet" href="{{asset('css/styleweb.css')}}">

    <title>Christhoper Pangaribuan</title>
  </head>
  <body>

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="#">CP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#about">About</a>
        <a class="nav-item nav-link" href="#portfolio">Portfolio</a>
        <a class="nav-item nav-link" href="#experience">Experience</a>
        <a class="nav-item btn btn-primary tombol" href="#contact">Contact Me</a>
      </div>
    </div>
  </div>
</nav>
<!--End Navbar-->

<!--Jumbotron-->
<div class="jumbotron jumbotron-fluid" id="home">
  <div class="container">
    <h1 class="display-4">I'm <span>Christhoper Pangaribuan.</span><br><span>Information Systems Student</span> with a Passion for <span>Photography.</span></h1>
  </div>
</div>
<!--End Jumbotron-->


<!-- About Me Section -->
<section id="about" class="section-about">
  <div class="container">
    <h2 class="styled-heading">Get to Know Me</h2>
    <div class="about-grid">
      <div class="about-item">
        <div class="icon">
          <img src="img/icons8-camera-50.png" alt="Photography Icon">
        </div>
        <div class="description-box">
          <h3>Passion for Photography</h3>
          <p>Photography is my unwavering passion. With a camera in hand, I embark on a journey to encapsulate the extraordinary beauty of everyday life. Each click of the shutter is a brushstroke in my visual canvas, a unique perspective on the world. Through my lens, I seek to uncover the captivating stories, emotions, and hidden details that often go unnoticed. Photography isn't just a hobby; it's my way of connecting with the world, sharing its enchanting moments, and expressing myself creatively.</p>
        </div>
      </div>
      <div class="about-item">
        <div class="icon">
          <img src="img/icons8-computer-50.png" alt="Photography Icon">
        </div>
        <div class="description-box">
          <h3>Information Systems Student</h3>
          <p>I'm an Information Systems student, and my passion lies in understanding how data and technology work. It's like solving a puzzle; I dive into databases and coding, figuring out how they make our digital world tick. In the realm of Information Systems, I'm like a curious explorer, connecting the dots and finding solutions to make technology work better for all of us. I'm on a mission to understand and improve the digital world we live in.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End About Me -->

<!-- Experience Section - Photography -->
<section id="experience" class="section-experience">
  <div class="container">
    <h2>My Photography Experience</h2>
    <p>Explore my journey and experience in the world of photography:</p>

    <div class="experience-item">
      <h3>Freelance Photographer</h3>
      <p>As a freelance photographer, I've had the opportunity to work on a wide range of projects, including portrait photography, event coverage, and landscape photography. I've developed a keen eye for capturing the perfect moment and creating visually stunning images that tell stories.</p>
      <span class="date">2016 - Present</span>
    </div>

    <div class="experience-item">
      <h3>Photography Workshops</h3>
      <p>I've attended several photography workshops and seminars to enhance my skills and knowledge. These workshops have allowed me to learn from experienced photographers and master different photography techniques and styles.</p>
      <span class="date">2018 - 2020</span>
    </div>

    <div class="experience-item">
      <h3>Worldwide Photography Adventures</h3>
      <p>I embarked on a series of worldwide photography adventures, exploring diverse cultures, landscapes, and environments. These journeys allowed me to capture the beauty of our world and document unique moments from around the globe. From the bustling streets of Tokyo to the serene landscapes of Patagonia, I've had the privilege of sharing the world's beauty through my lens.</p>
      <span class="date">2019 - Present</span>
    </div>
  </div>
</section>
<!-- End Experience Section - Photography -->


<!--Portofolio Section-->
<section id="portfolio" class="section-portfolio">
  <div class="container">
    <h2>My Portfolio</h2>
    <p>Explore some of my photography work:</p>
    <div class="portfolio-grid">
      <div class="portfolio-item">
        <img src="img/defender.jpg" alt="Photograph 1">
      </div>
      <div class="portfolio-item">
        <img src="img/doha arch.jpg" alt="Photograph 2">
      </div>
      <div class="portfolio-item">
        <img src="img/hilux.jpg" alt="Photograph 3">
      </div>
      <div class="portfolio-item">
        <img src="img/hot air baloon.jpg" alt="Photograph 4">
      </div>
      <div class="portfolio-item">
        <img src="img/doha.jpg" alt="Photograph 5">
      </div>
      <div class="portfolio-item">
        <img src="img/san dune.jpg" alt="Photograph 6">
      </div>
      <div class="portfolio-item">
        <img src="img/rektorat.jpg" alt="Photograph 7">
      </div>
      <div class="portfolio-item">
        <img src="img/venice.jpg" alt="Photograph 7">
      </div>
    </div>
  </div>
</section>
<!--End Portofolio Section-->


<!-- Contact Form Section -->
<section id="contact" class="section-contact">
  <div class="container">
    <h2>Contact Me</h2>
    <p>Feel free to get in touch with me:</p>

    <form>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary tombol">Send Message</button>
    </form>
  </div>
</section>
<!-- End Contact Form Section -->

  </body>
</html>

