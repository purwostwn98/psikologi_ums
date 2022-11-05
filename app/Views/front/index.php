<?= $this->extend("/template/front_layout.php"); ?>
<?= $this->section("konten"); ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-xl-4">
        <h2 data-aos="fade-up">Get to Know Yourself</h2>
        <blockquote data-aos="fade-up" data-aos-delay="100">
          <p>The Assessme is a free self-assessment that takes 10 minutes and provides a wealth of information to help you understand yourself. Assessme report provide personalized, in-depth analysis of your free results. </p>
        </blockquote>
        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
          <!-- <a href="/home/quiz" class="btn-get-started">Get Started</a> -->
          <a href="#instrument-list" class="btn-get-started">Our Instruments</a>
          <!-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
        </div>

      </div>
    </div>
  </div>
</section><!-- End Hero Section -->

<main id="main">

  <!-- ======= Our Services Section ======= -->
  <section id="about-us" class="services-list">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>About Us</h2>
      </div>

      <div class="row gy-5 justify-content-center">
        <div class="col-md-8 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
          <div>
            <p class="text-center">Deskripsi detail platform (menjelaskan diinisiasi oleh Psikologi UMS) <br> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio aut nemo cupiditate dolorem vitae? Accusamus vero voluptates magni perspiciatis natus molestiae temporibus in reprehenderit dolores voluptas minus, earum quidem corporis.</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Our Services Section -->

  <!-- ======= Call To Action Section ======= -->
  <section id="our-services" class="call-to-action">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <h3 class="text-center mb-5">Our Services</h3>
          <div class="row justify-content-center">
            <div class="col-md-6 text-center">
              <h4 class="text-warning title">Self-Assessment</h4>
              <p class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi provident hic dolorem ducimus, temporibus blanditiis ipsa porro distinctio eum asperiores tempore id reprehenderit suscipit saepe eaque soluta, corporis vero et!
              </p>
              <a class="cta-btn" href="#">Get Started</a>
            </div>
            <div class="col-md-6 text-center">
              <h4 class="text-warning title">For Research</h4>
              <p class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi provident hic dolorem ducimus, temporibus blanditiis ipsa porro distinctio eum asperiores tempore id reprehenderit suscipit saepe eaque soluta, corporis vero et!
              </p>
              <a class="cta-btn" href="#">Get Started</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Call To Action Section -->

  <!-- ======= Our Services Section ======= -->
  <section id="instrument-list" class="services-list">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Our Instruments</h2>
      </div>
      <?php
      $icon = array('bi bi-briefcase', 'bi bi-card-checklist', 'bi bi-bar-chart');
      $color = array('#f57813', '#15a04a', '#d90769');

      function limit_words($string, $word_limit)
      {
        $words = explode(" ", $string);
        $words = str_replace("<p>", " ", $words);
        $words = str_replace("</p>", " ", $words);
        return implode(" ", array_splice($words, 0, $word_limit));
      }
      ?>
      <div class="row gy-5">
        <?php foreach ($instrumen as $ins) : ?>
          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="<?= $icon[rand(0, 2)]; ?>" style="color: <?= $color[rand(0, 2)]; ?>;"></i></div>
            <div>
              <h4 class="title"><a href="/home/instrument-detail<?php echo $ins['action_detail']; ?>" class="stretched-link"><?= $ins['nama_instrument']; ?></a></h4>
              <p class="description"><?= limit_words($ins['deskripsi_instrument'], 10); ?> ...</p>
              <a href="/home/instrument-detail<?php echo $ins['action_detail']; ?>" class="btn btn-info text-white">Get Started</a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>


      <!-- End Service Item -->

      <!-- <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
          <div class="icon flex-shrink-0"><i class="bi bi-card-checklist" style="color: #15a04a;"></i></div>
          <div>
            <h4 class="title"><a href="/home/instrument-detail" class="stretched-link">Religious Harmony Scale</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            <a href="/home/instrument-detail" class="btn btn-info text-white">Get Started</a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
          <div class="icon flex-shrink-0"><i class="bi bi-bar-chart" style="color: #d90769;"></i></div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">another scale</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            <button type="button" class="btn btn-info text-white">Get Started</button>
          </div>
        </div>
      </div> -->

    </div>
  </section><!-- End Our Services Section -->

  <!-- ======= Recent Blog Posts Section ======= -->
  <!-- <section id="recent-posts" class="recent-posts">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Recent Blog Posts</h2>

      </div>

      <div class="row gy-5">

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="post-box">
            <div class="post-img"><img src="<?= base_url(); ?>/depan/assets/img/blog/blog-1.jpg" class="img-fluid" alt=""></div>
            <div class="meta">
              <span class="post-date">Tue, December 12</span>
              <span class="post-author"> / Julia Parker</span>
            </div>
            <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>
            <p>Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi qui magni est...</p>
            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="post-box">
            <div class="post-img"><img src="<?= base_url(); ?>/depan/assets/img/blog/blog-2.jpg" class="img-fluid" alt=""></div>
            <div class="meta">
              <span class="post-date">Fri, September 05</span>
              <span class="post-author"> / Mario Douglas</span>
            </div>
            <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>
            <p>Voluptatem nesciunt omnis libero autem tempora enim ut ipsam id. Odit quia ab eum assumenda. Quisquam omnis doloribus...</p>
            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="post-box">
            <div class="post-img"><img src="<?= base_url(); ?>/depan/assets/img/blog/blog-3.jpg" class="img-fluid" alt=""></div>
            <div class="meta">
              <span class="post-date">Tue, July 27</span>
              <span class="post-author"> / Lisa Hunter</span>
            </div>
            <h3 class="post-title">Quia assumenda est et veritati</h3>
            <p>Quia nam eaque omnis explicabo similique eum quaerat similique laboriosam. Quis omnis repellat sed quae consectetur magnam...</p>
            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="post-box">
            <div class="post-img"><img src="<?= base_url(); ?>/depan/assets/img/blog/blog-4.jpg" class="img-fluid" alt=""></div>
            <div class="meta">
              <span class="post-date">Tue, Sep 16</span>
              <span class="post-author"> / Mario Douglas</span>
            </div>
            <h3 class="post-title">Pariatur quia facilis similique deleniti</h3>
            <p>Et consequatur eveniet nam voluptas commodi cumque ea est ex. Aut quis omnis sint ipsum earum quia eligendi...</p>
            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

      </div>

    </div>
  </section> -->
  <!-- End Recent Blog Posts Section -->

</main><!-- End #main -->

<?= $this->endSection(); ?>