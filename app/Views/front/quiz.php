<?= $this->extend("/template/front_layout.php"); ?>
<?= $this->section("konten"); ?>
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?= base_url(); ?>/depan/assets/img/services-header.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center">

      <h4 style="color: white;">SKALA KECENDERUNGAN PERILAKU HOMOSEKSUAL</h4>
      <!-- <ol>
        <li><a href="index.html">Home</a></li>
        <li>Services</li>
      </ol> -->

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Our Services Section ======= -->
  <section id="services-list" class="services-list" style="padding-top: 40px;">
    <div class="container" data-aos="fade-up">

      <form id="regForm" action="/action_page.php">
        <?php foreach ($pertanyaan as $z => $prt) : ?>
          <div id="bagian" class="tab huhu">
            <strong><?= $prt['pertanyaan']; ?></strong>
            <div class="row gy-5 my-2">
              <div class="col-lg-3 col-md-6 d-flex paling_atas" data-aos="fade-up" data-aos-delay="100">
                <div class="opt_input">
                  <input class="form-check-input" type="radio" name="answer_<?= $z; ?>" id="option_01_<?= $z; ?>" value="4">
                  <label class="form-check-label" for="option_01_<?= $z; ?>">
                    Sangat Setuju
                  </label>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 d-flex paling_atas" data-aos="fade-up" data-aos-delay="100">
                <div class="opt_input">
                  <input class="form-check-input" type="radio" name="answer_<?= $z; ?>" id="option_02_<?= $z; ?>" value="3">
                  <label class="form-check-label" for="option_02_<?= $z; ?>">
                    Setuju
                  </label>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 service-item d-flex paling_atas" data-aos="fade-up" data-aos-delay="100">
                <div class="opt_input">
                  <input class="form-check-input" type="radio" name="answer_<?= $z; ?>" id="option_03_<?= $z; ?>" value="2">
                  <label class="form-check-label" for="option_03_<?= $z; ?>">
                    Tidak Setuju
                  </label>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 service-item d-flex paling_atas" data-aos="fade-up" data-aos-delay="100">
                <div class="opt_input">
                  <input class="form-check-input" type="radio" name="answer_<?= $z; ?>" id="option_04_<?= $z; ?>" value="1">
                  <label class="form-check-label" for="option_04_<?= $z; ?>">
                    Sangat Tidak Setuju
                  </label>
                </div>
              </div>
            </div>
            <div class="my-2">
              <hr class="mt-5">
            </div>
          </div>
        <?php endforeach; ?>
        <div id="peringatan" class="row" style="display: none;">
          <div class="col-12">
            <div class="alert alert-warning" role="alert">
              Mohon maaf, Anda tidak bisa melanjutkan sebelum mengisi pertanyaan ini.
            </div>
          </div>
        </div>
        <div class="row align-items-center justify-content-center">
          <div class="col-auto">
            <div class="d-flex">
              <button type="button" class="btn btn-secondary" id="prevBtn" onclick="nextPrev(-1)"><span class='bi bi-box-arrow-left'></span> | Sebelumnya</button>
            </div>
          </div>
          <div class="col-auto">
            <div class="d-flex">
              <button type="button" class="btn btn-success" id="nextBtn" onclick="nextPrev(1)"><span class='bi bi-box-arrow-right'></span> | Selanjutnya</button>
            </div>
          </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
          <?php foreach ($pertanyaan as $prt) : ?>
            <span style="display: none;" class="step"></span>
          <?php endforeach; ?>
          <div class="progress">
            <div id="progress_bar" class="progress-bar" role="progressbar" style="width: 3%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
          </div>
        </div>
      </form>
  </section><!-- End Our Services Section -->


</main><!-- End #main -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>
  var currentTab = 0; // Current tab is set to be the first tab (0)
  showTab(currentTab); // Display the current tab

  function showTab(n) {
    // This function will display the specified tab of the form ...
    var x = document.getElementsByClassName("huhu");
    var numHuhu = $(".huhu").length;
    // var x = document.getElementsById("bagian");
    x[n].style.display = "block";
    // ... and fix the Previous/Next buttons:
    if (n == 0) {
      document.getElementById("prevBtn").style.display = "none";
    } else {
      document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (numHuhu - 1)) {
      document.getElementById("nextBtn").innerHTML = "Submit";
      document.getElementById("nextBtn").type = "submit";
    } else {
      var persen = (n / x.length) * 100;
      var strPersen = Math.floor(persen).toString();
      // alert(Math.floor(persen));
      $('#progress_bar').attr("aria-valuenow", strPersen);
      $('#progress_bar').attr("style", "width:" + Math.floor(persen) + "%");
      document.getElementById("progress_bar").innerHTML = strPersen + "%";
      document.getElementById("nextBtn").innerHTML = "<span class='bi bi-box-arrow-right'></span> | Selanjutnya";
    }
    // ... and run a function that displays the correct step indicator:
    fixStepIndicator(n)
  }

  function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("huhu");
    // var x = document.getElementsById("bagian");
    var numHuhu = $(".huhu").length;
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // alert(x.length + currentTab);
    // if you have reached the end of the form... :
    if (currentTab >= numHuhu) {
      document.getElementById("regForm").submit();
      return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
  }

  function validateForm() {
    // This function deals with validation of the form fields
    $("#peringatan").css('display', 'block');
    var x, y, i, valid = false;
    x = document.getElementsByClassName("huhu");
    var numHuhu = $(".huhu").length;
    // var x = document.getElementsById("bagian");
    // w = x[currentTab].getElemen
    w = $('input[name="answer_' + currentTab + '"]').checked;
    // var a = $(`input[name="answer_${currentTab}"]`)
    y = x[currentTab].getElementsByTagName("input");
    for (i = 0; i < y.length; i++) {
      // console.log(y[i].checked);
      if (y[i].checked == true) {
        valid = true;
        $("#peringatan").css('display', 'none');
      }

    }
    if (valid) {
      document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
  }

  function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
      x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class to the current step:
    x[n].className += " active";
  }
</script>
<?= $this->endSection(); ?>