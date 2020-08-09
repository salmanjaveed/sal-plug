<?php declare(strict_types=1);
/**
 * @package sal-plug
 */

namespace SalPlug\Src;

class Template
{
    public static function display()
    {
        ?>
  <link rel="stylesheet" href=<?php echo esc_url_raw(PLUGIN_URL . "assets/css/style.min.css") ;?> >
  <link rel="stylesheet" href=<?php echo esc_url_raw(PLUGIN_URL . "assets/css/style1.css") ;?> >
  <link rel="stylesheet" href=<?php echo esc_url_raw(PLUGIN_URL .
            "vendor/datatables/datatables/media/css/jquery.dataTables.min.css") ;?> >
  <link rel="stylesheet" href=<?php echo esc_url_raw(PLUGIN_URL .
            "assets/css/select.dataTables.min.css") ;?> >
  <div class="container-fluid top-bar">
    <div class="row">
      <div class="col-md-12">
        <h1 class="logo">SalPlug</h1>
      </div>
    </div>
  </div>
  <div class="container-fluid" style="margin-top:20px;">
    <div class="row">
      <!-- FIRST MAIN TABLE COLUMN-->
      <div class="col-md-7">
        <table class="display dataTable" id="mainView" width="100%" cellspacing="0" role="grid">
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Username</th>
              <th>City</th>
            </tr>
          </thead>
        </table>
        <tbody></tbody>
      </div>
      <div class="col-md-5">
        <div class="row">
          <h4>User Details</h4>
          <div class="col-md-12">

        <?php
    }

    public static function display2()
    {
        ?>
            <div class="row row-border">
              <div class="col-md-4 side-head">
                ID
              </div>
              <div class="col-md-6 detail-head" id="id">
                1
              </div>
            </div>
            <div class="row row-border">
              <div class="col-md-4 side-head">
                Name
              </div>
              <div class="col-md-6 detail-head" id="name">
                Salman
              </div>
            </div>
            
            <div class="row row-border">
              <div class="col-md-4 side-head">
                Username
              </div>
              <div class="col-md-6  detail-head" id="username">
                javeedSalman
              </div>
            </div>
            <div class="row row-border">
              <div class="col-md-4 side-head">
                Email
              </div>
              <div class="col-md-6  detail-head" id="email">
                email
              </div>
            </div>
            <div class="row row-border">
              <div class="col-md-4 side-head">
                City
              </div>
              <div class="col-md-6  detail-head" id="city">
                City
              </div>
            </div>
        <?php
    }

    public static function display3()
    {
        ?>
            <div class="row row-border">
              <div class="col-md-4 side-head">
                ZipCode
              </div>
              <div class="col-md-6 detail-head" id="zipcode">
                ZipCode
              </div>
            </div>
            <div class="row row-border">
              <div class="col-md-4 side-head">
                Company
              </div>
              <div class="col-md-6 detail-head" id="company">
                Company
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src=<?php echo esc_url_raw(PLUGIN_URL .
              "vendor/components/jquery/jquery.min.js") ;?> ></script>
  <script src=<?php echo esc_url_raw(PLUGIN_URL .
              "vendor/datatables/datatables/media/js/jquery.dataTables.min.js") ;?> ></script>
  <script src=<?php echo esc_url_raw(PLUGIN_URL .
              "assets/scripts/dataTables.select.min.js") ;?> ></script>
  <script src=<?php echo esc_url_raw(PLUGIN_URL . "assets/scripts/process.js") ;?> ></script>

<!-- END OF HTML -->

                <?php
    }
}
