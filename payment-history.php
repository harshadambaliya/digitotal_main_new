<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.0/css/all.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    

  <link rel="stylesheet" href="css/custom.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


  
  <title>Weight Discrepancy</title>
</head>
<body class="overflow-page notification-content payment-history-content" onload="pagi()">

<?php  include("inc/header.php"); ?> 

<?php  include("inc/sidebar.php"); ?>

<div class="col py-3 content">
    <div id="content" style="background-color: #ffffff;">
    <h2 class="heading" style="letter-spacing: 2px;">PYMENT HISTORY</h2>
        <div class="row mb-3">
            <div class="col col-md-4">
                <div class="input-group  filter2 search_cust4 col-lg-3">
                    <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default dropdown-toggle searchbtn" data-toggle="dropdown">
                        <span id="status">Filter by [ Payout Date ]</span> <i class="fas fa-chevron-circle-down caret_style3"></i>
                    </button>
        
                    <ul class="dropdown-menu scrollable-dropdown" role="menu">
                        <li><a href="#">Approve</a></li>
                        <li><a href="#">Reject</a></li>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="col col-md-4">
                <div class="input-group  filter2 search_cust4 col-lg-3">
                    <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default dropdown-toggle searchbtn" data-toggle="dropdown">
                        <span id="status">Filter by [ payment Status ]</span> <i class="fas fa-chevron-circle-down caret_style3"></i>
                    </button>

                    <ul class="dropdown-menu scrollable-dropdown" role="menu">
                        <li><a href="#">Approve</a></li>
                        <li><a href="#">Reject</a></li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
        

        <table class=" table-style table2 col-lg-10 payment-history-table" style="color: #000000;">
            <tbody>
                <tr class="payment-history-head detail-show">
                    <td>
                        <span class="day"> Mon,</span>
                        <span class="date"> 28 jul 2021</span>
                    </td>
                    <td>
                        <span class="satus"> Paid</span>
                        <span class="date">₹ 200</span>
                    </td>
                    <td class="text-end">
                        <button class="btn2">PYMENT SHEET</button>
                        <button class="btn2">INVOICE</button>
                        <span style="float:right;" class="open-details-icon">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </td>
                </tr>
                <tr class="payment-history-details detail-show">
                    <td colspan="3">
                        <div class="payment-history-detail-content">
                            <div class="payment-history-detail__inner">
                                <span class="price">₹ 200</span>
                                <span class="description">Total Ammount Collected</span>
                            </div>
                            <div class="payment-history-detail__inner">
                                <span>+</span>
                            </div>
                            <div class="payment-history-detail__inner">
                                <span class="price">₹ 200</span>
                                <span class="description">Shipping Credits Used</span>
                            </div>
                            <div class="payment-history-detail__inner">
                                <span>-</span>
                            </div>
                            <div class="payment-history-detail__inner">
                                <span class="price">₹ 200</span>
                                <span class="description">Total Shipping Charges</span>
                            </div>
                            <div class="payment-history-detail__inner">
                                <span>=</span>
                            </div>
                            <div class="payment-history-detail__inner">
                                <span class="price">₹ 200</span>
                                <span class="description">Amount Paid</span>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="payment-history-head">
                    <td>
                        <span class="day"> Mon,</span>
                        <span class="date"> 28 jul 2021</span>
                    </td>
                    <td>
                        <span class="satus"> Paid</span>
                        <span class="date">₹ 200</span>
                    </td>
                    <td class="text-end">
                        <button class="btn2">PYMENT SHEET</button>
                        <button class="btn2">INVOICE</button>
                        <span style="float:right;" class="open-details-icon">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </td>
                </tr>
                <tr class="payment-history-details">
                    <td colspan="3">
                        <div class="payment-history-detail-content">
                            <div class="payment-history-detail__inner">
                                <span class="price">₹ 200</span>
                                <span class="description">Total Ammount Collected</span>
                            </div>
                            <div class="payment-history-detail__inner">
                                <span>+</span>
                            </div>
                            <div class="payment-history-detail__inner">
                                <span class="price">₹ 200</span>
                                <span class="description">Shipping Credits Used</span>
                            </div>
                            <div class="payment-history-detail__inner">
                                <span>-</span>
                            </div>
                            <div class="payment-history-detail__inner">
                                <span class="price">₹ 200</span>
                                <span class="description">Total Shipping Charges</span>
                            </div>
                            <div class="payment-history-detail__inner">
                                <span>=</span>
                            </div>
                            <div class="payment-history-detail__inner">
                                <span class="price">₹ 200</span>
                                <span class="description">Amount Paid</span>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="payment-history-head">
                    <td>
                        <span class="day"> Mon,</span>
                        <span class="date"> 28 jul 2021</span>
                    </td>
                    <td>
                        <span class="satus"> Paid</span>
                        <span class="date">₹ 200</span>
                    </td>
                    <td class="text-end">
                        <button class="btn2">PYMENT SHEET</button>
                        <button class="btn2">INVOICE</button>
                        <span style="float:right;" class="open-details-icon">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </td>
                </tr>
                <tr class="payment-history-details">
                    <td colspan="3">
                        <div class="payment-history-detail-content">
                            <div class="payment-history-detail__inner">
                                <span class="price">₹ 200</span>
                                <span class="description">Total Ammount Collected</span>
                            </div>
                            <div class="payment-history-detail__inner">
                                <span>+</span>
                            </div>
                            <div class="payment-history-detail__inner">
                                <span class="price">₹ 200</span>
                                <span class="description">Shipping Credits Used</span>
                            </div>
                            <div class="payment-history-detail__inner">
                                <span>-</span>
                            </div>
                            <div class="payment-history-detail__inner">
                                <span class="price">₹ 200</span>
                                <span class="description">Total Shipping Charges</span>
                            </div>
                            <div class="payment-history-detail__inner">
                                <span>=</span>
                            </div>
                            <div class="payment-history-detail__inner">
                                <span class="price">₹ 200</span>
                                <span class="description">Amount Paid</span>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="payment-history-head">
                    <td>
                        <span class="day"> Mon,</span>
                        <span class="date"> 28 jul 2021</span>
                    </td>
                    <td>
                        <span class="satus"> Paid</span>
                        <span class="date">₹ 200</span>
                    </td>
                    <td class="text-end">
                        <button class="btn2">PYMENT SHEET</button>
                        <button class="btn2">INVOICE</button>
                        <span style="float:right;" class="open-details-icon">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </td>
                </tr>
                <tr class="payment-history-details">
                    <td colspan="3">
                        <div class="payment-history-detail-content">
                            <div class="payment-history-detail__inner">
                                <span class="price">₹ 200</span>
                                <span class="description">Total Ammount Collected</span>
                            </div>
                            <div class="payment-history-detail__inner">
                                <span>+</span>
                            </div>
                            <div class="payment-history-detail__inner">
                                <span class="price">₹ 200</span>
                                <span class="description">Shipping Credits Used</span>
                            </div>
                            <div class="payment-history-detail__inner">
                                <span>-</span>
                            </div>
                            <div class="payment-history-detail__inner">
                                <span class="price">₹ 200</span>
                                <span class="description">Total Shipping Charges</span>
                            </div>
                            <div class="payment-history-detail__inner">
                                <span>=</span>
                            </div>
                            <div class="payment-history-detail__inner">
                                <span class="price">₹ 200</span>
                                <span class="description">Amount Paid</span>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>

        </table>
      </div><!--    disput content div end  -->
</div>



</body>
</html>