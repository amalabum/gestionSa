<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
<?php
    require "includes/head.php";
?>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <?php
          require "includes/menu.php"
        ?>
        
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <?php
          require "includes/header.php";
        ?>
         

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Université/</span> accodorder le droit d'administration</h4>

              <!-- Basic Layout -->
              <div class="row">
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0"></h5>
                      <small class="text-muted float-end">Quelques informations</small>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Nom compet</label>
                          <input type="text" class="form-control" id="basic-default-fullname" placeholder="Nom post-nom prénom">
                        </div>
                        
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-email">Email</label>
                          <div class="input-group input-group-merge">
                            <input type="email" id="basic-default-email" class="form-control" placeholder="gmail.com" aria-label="..." aria-describedby="basic-default-email2">
                            <span class="input-group-text" id="basic-default-email2">@gmail.com</span>
                          </div>
                          <div class="form-text">Vous pouvez utiliser des lettres, chiffres &amp; quelques caracteres speciaux</div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-phone">Contact</label>
                          <input type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="658 799 8941">
                        </div>
                        <div class="mb-3">
                        <div class="form-password-toggle">
                        <label class="form-label" for="basic-default-password12">Mot de Pass</label>
                        <div class="input-group">
                          <input type="password" class="form-control" id="basic-default-password12" placeholder="············" aria-describedby="basic-default-password2">
                          <span id="basic-default-password2" class="input-group-text cursor-pointer"><i class="bx bx-show"></i></span>
                        </div>
                       
                        <br>
                        </div>
                        <button type="submit" class="btn btn-primary container" style="padding-top:12px;padding-bottom:12px">Enregistrer</button>
                      </form>
                    </div>
                  </div>
                </div>
 
            <!-- / Content -->

            <!-- Footer -->
            <?php
          require "includes/footer.php"
        ?>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->

    <?php
          require "includes/js.php"
        ?>

  </body>
</html>