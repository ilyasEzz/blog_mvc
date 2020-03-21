<!-- Header -->
<?php require_once APP_ROOT . '/views/layout/header.php'; ?>

<!-- Body  -->
<header id="main-header">
      <div class="row no-gutters">
        <div class="col-lg-4 col-md-5">
          <img src="assets/img/person1.jpg"  class="profile" alt="profile image">
        </div>
        <div class="col-lg-8 col-md-7">
          <div class="d-flex flex-column">
            <div class="p-5 bg-dark text-white">
              <div class="d-flex flex-row justify-content-between align-items-center">
                <h1 class="display-4">John Doe</h1>
                <div class="d-none d-md-block">
                  <a href="http://twitter.com" class="text-white">
                    <i class="fab fa-twitter"></i>
                  </a>
                </div>
                <div>
                  <a href="http://facebook.com" class="text-white">
                    <i class="fab fa-facebook"></i>
                  </a>
                </div>
                <div>
                  <a href="http://instagram.com" class="text-white">
                    <i class="fab fa-instagram"></i>
                  </a>
                </div>
                <div>
                  <a href="http://github.com" class="text-white">
                    <i class="fab fa-github"></i>
                  </a>
                </div>
              </div>
            </div>

            <div class="p-4 bg-black">
              Experienced Full Stack Web Developer
            </div>

            <div>
              <div class="d-flex flex-row text-white align-items-stretch text-center">
                <div class="port-item p-4 bg-primary" data-toggle="collapse" data-target="#home">
                  <i class="fas fa-home fa-2x d-block"></i>
                  <span class="d-none d-sm-block">Home</span>
                </div>
                <div class="port-item p-4 bg-success" data-toggle="collapse" data-target="#resume">
                  <i class="fas fa-graduation-cap fa-2x d-block"></i>
                  <span class="d-none d-sm-block">Resume</span>
                </div>
                <div class="port-item p-4 bg-warning" data-toggle="collapse" data-target="#work">
                  <i class="fas fa-folder-open fa-2x d-block"></i>
                  <span class="d-none d-sm-block">Work</span>
                </div>
                <div class="port-item p-4 bg-danger" data-toggle="collapse" data-target="#contact">
                  <i class="fas fa-envelope fa-2x d-block"></i>
                  <span class="d-none d-sm-block">Contact</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- HOME -->
    <div id="home" class="collapse show">
      <div class="card card-body bg-primary text-white py-5">
        <h2>Welcome To My Page</h2>
        <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil, ut!</p>
      </div>

      <div class="card card-body py-5">
        <h3>My Skills</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus ea excepturi officia quisquam atque eos.
        </p>
        <hr>
        <h4>HTML 5</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-success" style="width:100%"></div>
        </div>
        <h4>CSS 3</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-success" style="width:100%"></div>
        </div>
        <h4>JavaScript</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-success" style="width:90%"></div>
        </div>
        <h4>PHP</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-success" style="width:80%"></div>
        </div>
        <h4>Python</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-success" style="width:70%"></div>
        </div>
      </div>
    </div>

    <!-- RESUME -->
    <div id="resume" class="collapse">
      <div class="card card-body bg-success text-white py-5">
        <h2>My Resume</h2>
        <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil, ut!</p>
      </div>

      <div class="card card-body py-5">
        <h3>Where Have I Worked?</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque similique saepe inventore rem vitae esse.
        </p>
        <div class="card-deck">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Devmasters</h4>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, magnam.</p>
              <p class="p-2 mb-3 bg-dark text-white">
                Position: Full Stack Developer
              </p>
              <p class="p-2 mb-3 bg-dark text-white">
                Phone: (444) 444-4444
              </p>
            </div>
            <div class="card-footer">
              <h6 class="text-muted">Dates: 2015 - 2018</h6>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h4 class="card-title">123 Designs</h4>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, magnam.</p>
              <p class="p-2 mb-3 bg-dark text-white">
                Position: Web Designer
              </p>
              <p class="p-2 mb-3 bg-dark text-white">
                Phone: (222) 222-2222
              </p>
            </div>
            <div class="card-footer">
              <h6 class="text-muted">Dates: 2013 - 2015</h6>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Web Designer Pros</h4>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, magnam.</p>
              <p class="p-2 mb-3 bg-dark text-white">
                Position: Web Designer
              </p>
              <p class="p-2 mb-3 bg-dark text-white">
                Phone: (333) 333-3333
              </p>
            </div>
            <div class="card-footer">
              <h6 class="text-muted">Dates: 2010 - 2013</h6>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- WORK -->
    <div id="work" class="collapse">
      <div class="card card-body bg-warning text-white py-5">
        <h2>My Work</h2>
        <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil, ut!</p>
      </div>

      <div class="card card-body py-5">
        <h3>What Have I Built?</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nostrum repudiandae debitis, nam iste amet.
        </p>
        <div class="row no-gutters">
          <div class="col-md-3">
            <a href="https://unsplash.it/1200/768.jpg?image=252" data-toggle="lightbox">
              <img src="https://unsplash.it/600.jpg?image=252" alt="" class="img-fluid">
            </a>
          </div>
          <div class="col-md-3">
            <a href="https://unsplash.it/1200/768.jpg?image=253" data-toggle="lightbox">
              <img src="https://unsplash.it/600.jpg?image=253" alt="" class="img-fluid">
            </a>
          </div>
          <div class="col-md-3">
            <a href="https://unsplash.it/1200/768.jpg?image=254" data-toggle="lightbox">
              <img src="https://unsplash.it/600.jpg?image=254" alt="" class="img-fluid">
            </a>
          </div>
          <div class="col-md-3">
            <a href="https://unsplash.it/1200/768.jpg?image=255" data-toggle="lightbox">
              <img src="https://unsplash.it/600.jpg?image=255" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="row no-gutters">
          <div class="col-md-3">
            <a href="https://unsplash.it/1200/768.jpg?image=256" data-toggle="lightbox">
              <img src="https://unsplash.it/600.jpg?image=256" alt="" class="img-fluid">
            </a>
          </div>
          <div class="col-md-3">
            <a href="https://unsplash.it/1200/768.jpg?image=257" data-toggle="lightbox">
              <img src="https://unsplash.it/600.jpg?image=257" alt="" class="img-fluid">
            </a>
          </div>
          <div class="col-md-3">
            <a href="https://unsplash.it/1200/768.jpg?image=258" data-toggle="lightbox">
              <img src="https://unsplash.it/600.jpg?image=258" alt="" class="img-fluid">
            </a>
          </div>
          <div class="col-md-3">
            <a href="https://unsplash.it/1200/768.jpg?image=259" data-toggle="lightbox">
              <img src="https://unsplash.it/600.jpg?image=259" alt="" class="img-fluid">
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- CONTACT -->
    <div id="contact" class="collapse">
      <div class="card card-body bg-danger text-white py-5">
        <h2>Contact</h2>
        <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil, ut!</p>
      </div>

      <div class="card card-body py-5">
        <h3>Get In Touch</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error quos illo, dicta id voluptates enim.</p>
        <form>
          <div class="form-group">
            <div class="input-group input-group-lg">
              <div class="input-group-prepend">
                <span class="input-group-text bg-danger text-white">
                  <i class="fas fa-user"></i>
                </span>
              </div>
              <input type="text" class="form-control bg-dark text-white" placeholder="Name">
            </div>
          </div>

          <div class="form-group">
            <div class="input-group input-group-lg">
              <div class="input-group-prepend">
                <span class="input-group-text bg-danger text-white">
                  <i class="fas fa-envelope"></i>
                </span>
              </div>
              <input type="email" class="form-control bg-dark text-white" placeholder="Email">
            </div>
          </div>

          <div class="form-group">
            <div class="input-group input-group-lg">
              <div class="input-group-prepend">
                <span class="input-group-text bg-danger text-white">
                  <i class="fas fa-pencil-alt"></i>
                </span>
              </div>
              <textarea class="form-control bg-dark text-white" placeholder="Name"></textarea>
            </div>
          </div>

          <input type="submit" value="Submit" class="btn btn-danger btn-block btn-lg">
        </form>
      </div>
    </div>

  <script src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
    integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

  <script>
    $('.port-item').click(function () {
      $('.collapse').collapse('hide');
    });
  </script>
<!-- Footer -->
<?php require_once APP_ROOT . '/views/layout/footer.php' ?>