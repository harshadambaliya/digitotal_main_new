<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.0/css/all.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;500;600;700&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/style2.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <title>Select Pickup address</title>
    </head>
    <body class="overflow-page">
        <div class="col py-2 content popup" id="content">
            <span class="cross-circle1 close">
            <a href="#" class="cross-icon"> 
            <i class="fas fa-times-circle"></i></a></span>
            <script>
                var closebtns = document.getElementsByClassName("close");
                var i;
                
                for (i = 0; i < closebtns.length; i++) {
                  closebtns[i].addEventListener("click", function() {
                    this.parentElement.style.display = 'none';
                  });
                }
            </script>
            <h3 class="main-heading" style="margin: 10% 2% 2% 2%;">SELECT PICKUP ADDRESS</h3>
            <div class="row custfields" style="margin-top: 5%;">
                <label class="col-4" style="font-size:0.9rem;font-weight: 500;">Add New Address?</label>
                <button class="btn2 btn-next update-btn btn-hv col-4" style="width: 18%;margin: -5px 10px 0px 221px;">SELECT</button>
                <div style="display:inherit;width: 92%;border:1px solid #9ce1d0;margin:2% 0% 0% 0%;">
                    <input type="checkbox" class="check" style="margin: 17px -23px 0px 3px;">
                    <span class="checkmark"></span><label for="address1" class="custinput placeholder col-2" style="margin-left: 20px !important;padding-top:13px;!important;">Address1</label>
                    <label class="placeholder col-2" style="margin: 13px 2px 2px 8px !important;">+9123456789</label>
                    <button class="btn2 btn-next update-btn btn-hv dft-btn col-2" >DEFAULT</button>
                    <button class="col-2 edt-btn" style="margin-left: 57px;">EDIT | </button><button class="col-2 edt-btn"style="margin-left: -30px !important;color:#de0505;"> REMOVE</button>
                </div>
                <p style="position: relative;top: -44px;left: 3px;"class="placeholder">Street 1,Locality 1,City 1,State 1,Pincode 1</p>
                <div style="display:inherit;width: 92%;border:1px solid #9ce1d0;">
                    <input type="checkbox" class="check" style="margin: 17px -23px 0px 3px;">
                    <span class="checkmark"></span><label for="address1" class="custinput placeholder col-2" style="margin-left: 19px !important;padding-top:13px;!important;">Address2</label>
                    <label class="placeholder col-2" style="margin: 13px 113px 2px 8px !important;">+9123456789</label>
                    <button class="btn2 btn-next update-btn btn-hv dft-btn col-2" style="display:none;">DEFAULT</button>
                    <button class="col-2 edt-btn" style="margin-left: 57px;">EDIT | </button><button class="col-2 edt-btn"style="margin-left: -30px !important;color:#de0505;"> REMOVE</button><br><br><br>
                </div>
                <p style="position: relative;top: -30px;left: 3px;"class="placeholder">Street 2,Locality 2,City 2,State 2,Pincode 2</p>
                <div style="display:inherit;width: 92%;border:1px solid #9ce1d0;">
                    <input type="checkbox" class="check" style="margin: 17px -23px 0px 3px;">
                    <span class="checkmark"></span><label for="address1" class="custinput placeholder col-2" style="margin-left: 19px !important;padding-top:13px;!important;">Address3</label>
                    <label class="placeholder col-2" style="margin: 13px 113px 2px 8px !important;">+9123456789</label>
                    <button class="btn2 btn-next update-btn btn-hv dft-btn col-2" style="display:none;">DEFAULT</button>
                    <button class="col-2 edt-btn" style="margin-left: 57px;">EDIT | </button><button class="col-2 edt-btn"style="margin-left: -30px !important;color:#de0505;"> REMOVE</button><br><br><br>
                </div>
                <p style="position: relative;top: -30px;left: 3px;"class="placeholder">Street 3,Locality 3,City 3,State 3,Pincode 3</p>
            </div>
        </div>
    </body>
</html>