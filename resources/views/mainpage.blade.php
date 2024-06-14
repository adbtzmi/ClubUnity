@extends('layout')
@section('content')

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url('https://news.iium.edu.my/wp-content/uploads/2019/11/96b17d2a3c3713703df33d8785f92d4f15669639031.jpg')">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="hero-title mb-4">Welcome to Club Unity</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Streamlining Club Activities, Empowering Community"></span></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="about-me pt-4 pt-md-0 text-center">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            About Us
                                        </h5>
                                    </div>
                                    <p class="lead">
                                        Welcome to Club Unity, a comprehensive web application designed to streamline university club management. Our platform provides tools for organizing events, managing memberships, and fostering community engagement within university clubs.
                                    </p>
                                    <p class="lead">
                                        Our goal is to simplify the administrative tasks associated with running a club, allowing club leaders to focus on what really matters - building a vibrant, inclusive community. Club Unity is your all-in-one solution for effective club management.
                                    </p>
                                    <p class="lead">
                                        Join us in transforming the way university clubs operate, making them more efficient, transparent, and enjoyable for all members. Whether you're a club leader or a member, Club Unity empowers you to make the most of your university club experience.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->
</main><!-- End #main -->

@endsection