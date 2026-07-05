<?= $this->extend('layouts/template-home'); ?>
<?= $this->section('content'); ?>

<main class="main">

<!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Deskripsi</h2>
        <p>Nelayan yang sukses mencari ikan ikan besar </p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="assets/img/cello.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 content">
            <h2>Quotes</h2>
            <p class="fst-italic py-3">
               "Seperti ombak yang tak pernah lelah menghantam pantai, begitu pula semangat kita yang tak boleh pernah padam."
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>2 May 2004</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+62 81399452915</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Jakarta, INDONESIA</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Umur:</strong> <span>21</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>zikri@example.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>berani</span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">
               "Seperti air laut yang tak pernah habis meski banyak yang menguap, begitu pula semangat hidup yang tak boleh pernah padam."
            </p>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

</main>

<?= $this->endSection(); ?>