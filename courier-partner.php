<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="css/custom.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.0/css/all.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;500;600;700&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <style>
        .order-card .fedex-text {
            font-size: 0.8rem;
            color: #000;
            font-weight: bold;
            margin-top: 15px;
        }
        .card {
          border: none;
        }
  </style>
</head>

<body class="notification-content overflow-page">

<?php  include("inc/header.php"); ?>  

<?php  include("inc/sidebar.php"); ?>

      <div class="col py-3 content">
        <h3 class="heading mt-3 ms-4">SET COURIER PARTNER PRIORITY</h3>
        <div class="row fields-instruction">
          <div class="col-auto fields-report">
            <div class="main-area ms-4">

              <div class="checkboxes">

                <div class="col-md-2 mt-4 form-check form-check-inline long-label">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                  <label class="form-check-label no-space-break" for="inlineRadio1"><img class="blue-logo" src="images/Bhejooo-Logo.png" alt="" width="90%"><p class="italic-text" style="display: inline-block;">(Recommended)</p></label>
                  <p class="sub-text-radio">Courier partner selection is based on AI recommendation to optimise shipping charges and reduce RTO</p>
                </div>
                <div class="col-md-2 form-check form-check-inline ms-5 checkbox-2">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label no-space-break custom-prio-label" for="inlineRadio2">Custom Priority</label>
                  <p class="sub-text-radio">Drag & drop cards to set your own priority <br><br><br></p>
                </div>
              </div>

            <p class="italic-text" style="display: inline-block;">These priority settings will only be used in bulk shipping for Forward orders.</p>
            <!-- <button type="button" class="btn btn-primary btn-connect mt-2">DOWNLOAD</button> -->

            </div>

            <div class="custom-div"  id="custom-card-section" style="margin-top: 100px; display: none;">

              <h3 class="note custom-prio-heading mb-0">YOUR CUSTOM PRIORITY LIST:</h3>
              <p class="points-rates mt-3 courier-cards-sub-head">Drag cards to reorder/ add / remove courier partners (Minimum 1 Shipping partner required)</p>

              <div class="">
                <div class="row">
                  <div class="col-md-4 col-xl-3">
                    <div class="card order-card">
                      <i class="fa fa-minus-circle fa-lg" style="margin-left: calc(100% - 12px); margin-top: -2px; color: #062366; " aria-hidden="true"></i>
                      <h6 class="m-b-20 fedex-text">FEDEX STANDARD OVERNIGHT</h6>
                    </div>
                  </div>
                </div>
              </div>

              <hr>

              <h3 class="note mt-3 ms-3 mb-4">OTHER COURIER PARTNER(S)</h3>
              <div class="">
                <div class="row">
                  <div class="col-md-4 col-xl-3">
                    <div class="card order-card">
                      <i class="fa fa-plus-circle fa-lg" style="margin-left: calc(100% - 12px); margin-top: -2px; color: #062366; cursor: pointer;" aria-hidden="true"></i>
                      <h6 class="m-b-20 fedex-text">FEDEX STANDARD OVERNIGHT</h6>
                    </div>
                  </div>

                  <div class="col-md-4 col-xl-3">
                    <div class="card order-card">
                      <i class="fa fa-plus-circle fa-lg" style="margin-left: calc(100% - 12px); margin-top: -2px; color: #062366; cursor: pointer;" aria-hidden="true"></i>
                      <h6 class="m-b-20 fedex-text">FEDEX STANDARD OVERNIGHT</h6>
                    </div>
                  </div>

                  <div class="col-md-4 col-xl-3">
                    <div class="card order-card">
                      <i class="fa fa-plus-circle fa-lg" style="margin-left: calc(100% - 12px); margin-top: -2px; color: #062366; cursor: pointer;" aria-hidden="true"></i>
                      <h6 class="m-b-20 fedex-text">FEDEX STANDARD OVERNIGHT</h6>
                    </div>
                  </div>

                  <div class="col-md-4 col-xl-3">
                    <div class="card order-card">
                      <i class="fa fa-plus-circle fa-lg" style="margin-left: calc(100% - 12px); margin-top: -2px; color: #062366; cursor: pointer;" aria-hidden="true"></i>
                      <h6 class="m-b-20 fedex-text">FEDEX STANDARD OVERNIGHT</h6>
                    </div>
                  </div>
                </div>
              </div>

              <br>

              <div class="">
                <div class="row">
                  <div class="col-md-4 col-xl-3">
                    <div class="card order-card">
                      <i class="fa fa-plus-circle fa-lg" style="margin-left: calc(100% - 12px); margin-top: -2px; color: #062366; cursor: pointer;" aria-hidden="true"></i>
                      <h6 class="m-b-20 fedex-text">FEDEX STANDARD OVERNIGHT</h6>
                    </div>
                  </div>

                  <div class="col-md-4 col-xl-3">
                    <div class="card order-card">
                      <i class="fa fa-plus-circle fa-lg" style="margin-left: calc(100% - 12px); margin-top: -2px; color: #062366; cursor: pointer;" aria-hidden="true"></i>
                      <h6 class="m-b-20 fedex-text">FEDEX STANDARD OVERNIGHT</h6>
                    </div>
                  </div>

                  <div class="col-md-4 col-xl-3">
                    <div class="card order-card">
                      <i class="fa fa-plus-circle fa-lg" style="margin-left: calc(100% - 12px); margin-top: -2px; color: #062366; cursor: pointer;" aria-hidden="true"></i>
                      <h6 class="m-b-20 fedex-text">FEDEX STANDARD OVERNIGHT</h6>
                    </div>
                  </div>

                  <div class="col-md-4 col-xl-3">
                    <div class="card order-card">
                      <i class="fa fa-plus-circle fa-lg" style="margin-left: calc(100% - 12px); margin-top: -2px; color: #062366; cursor: pointer;" aria-hidden="true"></i>
                      <h6 class="m-b-20 fedex-text">FEDEX STANDARD OVERNIGHT</h6>
                    </div>
                  </div>
                </div>
              </div>

              <button type="button" class="btn btn-primary btn-connect mt-4">SAVE</button>

            </div>

            
          </div>
        </div>
      </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
      jQuery(document).ready(function(){
        $('input[type=radio][name=inlineRadioOptions]').change(function() {
            if (this.value == 'option1') {
              jQuery('#custom-card-section').hide();
            }
            else if (this.value == 'option2') {
              jQuery('#custom-card-section').show();
            }
        });
      });
    </script>
</body>

</html>
