<header id="header" class="banner">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="left col-lg-4 col-md-5">
        <a class="brand" href="<?= esc_url(home_url('/')); ?>">
          <?php //bloginfo('name'); ?>
          <img class="logo" src="<?= build_url('/assets/images/logo.png')?>"/>
          <img class="logo-fixed" src="<?= build_url('/assets/images/logo-fixed.png')?>"/>
        </a>
        <button type="button" class="d-md-none navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        </button>
      </div> 
      <div class="col-lg-8 col-md-7">
        <!-- Button Menu -->
        <div id="navbar" class="navbar-collapse collapse">
          <nav id="myMenu" class="navbar navbar-expand-md navbar-dark justify-content-end px-0 py-0">  
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#features">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
  </div>
</header>
