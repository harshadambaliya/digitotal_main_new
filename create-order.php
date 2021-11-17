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
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.0/css/all.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    

  <!-- <link rel="stylesheet" href="css/channel-styles.css"> -->
	
<!-- <link rel="stylesheet" type="text/css" href="css/style2.css">	 -->
<link rel="stylesheet" type="text/css" href="css/custom.css">	

  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>



    <title>Create New Order</title>
</head>
<body class="channel-integration style2">
<?php  include("inc/header.php"); ?> 

  <?php  include("inc/sidebar.php"); ?>

<div class="col content">


    <div class="head1">
        <h2 class="heading col-lg-7" style="letter-spacing: 2px;">CREATE NEW ORDERS</h2>
        <button class="btn2 bulk col-lg-1">BULK UPLOAD</button>
    </div>
    <div class="container col-lg-8">
        <div class="form-style form-popup">
            <form >
                <h4 class="part1">1.Create Order</h4>
            
        
            
            <h4 class="heading sub-heading">CUSTOMER DETAILS</h4>

            <table class="data">
                <tr>
                    <td class="for-column"><input type="text" name="name" class="input" placeholder="Name*" required/></td>
                    <td class="for-column"><input type="text" name="phone" class="input" placeholder="Phone*" required/></td>
                    <td class="for-column"><input type="email"  name="email" class="input" placeholder="Email Address"></td>
                </tr>
                <tr>
                    <td class="for-column"><input type="text" name="address" class="input" placeholder="Address*" required/></td>
                    <td class="for-column"><input type="text" name="pincode" class="input" placeholder="PinCode*" required/></td>
                    <td class="for-column"><input type="text"  name="city" class="input" placeholder="City*" required/></td>
                </tr>
                <tr>
                    <td class="for-column"><input type="text" name="state" class="input" placeholder="State*" required/></td>
                    
                </tr>
                <tr><td class="for-column"><h4 class="heading order-details sub-heading">ORDER DETAILS</h4></td></tr>
                <tr>
                    <td class="for-column"><input type="text" name="product_name" class="input" placeholder="Product Name*" required/></td>
                    <td class="for-column"><input type="text" name="price" class="input" placeholder="Price(per unit item)*" required/></td>
                    <td class="qty2"><label class="qty-label">Qty</label><input type="number" name="qty"class="qty" size="10">
                    <input type="text"  name="sku" class="sku" placeholder="SKU"></td>
                </tr>



                <tr>
                    <td class="for-column"><select name="product_category"class="input" required>
                        <option value="">Product Category*</option>
                        <option value="1">abc</option>
                        <option value="2">xyz</option>
                        </select>
                    </td>
                    
                    <td class="for-column"><label class="payment-label">Payment Mode*</label><input type="radio" name="payment" value="COD"><label class="cod">COD</label>

                    <input type="radio" name="payment" value="Prepaid"><label class="cod">Prepaid</label>
                    </td>
                    
                </tr>

                <tr><td class="for-column"><button class="btn2 btn-next">NEXT</button></td></tr>

            </table>
        
        </div><br><br>

<!--##############part 1 end #####################-->

        <div class="form-style">
            <h4 class="part1">2.Select Pickup Address</h4>
            

            <h4 class="heading">PICKUP DETAILS</h4>
              <table class="data">

              <tr>
                  <td class="for-column">
                      <label class="address-label">Address*</label><button data-toggle="modal" data-target="#exampleModalCenter"  class="btn2 select-btn">SELECT</button>
                  </td>
              </tr> 

            </table>
        </div><br><br>
<!----------########### part 2 end ##############----------->

        <div class="form-style">
            <h4 class="part1">3.Create Shipment</h4>

        
              <table class="data">

              <tr>
                  <td class="for-column">
                      <label class="package-label">Package Dead Weight*</label>
                      <input type="text" name="weight" class="qty"required/>
                      <label class="qty-label">Kgs</label>
                    </td>
                    <td class="for-column">
                      <span style="font-style: italic;font-weight: bold; width: 80%;color: #153474;padding-top: 10px;">The minimum chargeable weight is 0.50kgs</span>
                  </td>
              </tr> 
              <tr>
                  <td class="for-column" style="display: flex;">
                      <label class="package-label">Volumetric Weight*</label>
                      <input type="text" name="length" class="qty" required/>
                      <label class="cm-label">cm</label>
                      <input type="text" name="width" class="qty" required/>
                      <label class="cm-label">cm</label>
                      <input type="text" name="breadth" class="qty" required/>
                      <label class="cm-label">cm</label>
                  </td>
              </tr> 

              <tr>
                    <td class="for-column"><input type="text" name="courier_partner" class="input" placeholder="Courier Partner*" required/></td>
                    
                    <td class="for-column pickup-date">
                        <div id="datepicker" class="input-group input-group2 date pickup datepicker " data-date-format="dd-mm-yyyy">
                        <input class="form-control filter1 " type="text" value="Pickup Date*" />
                        <span class="input-group-addon calendar"><i class="glyphicon glyphicon-calendar"></i></span>
                      </div>
                  </td>
             </tr>


            </table>
        </div><br><br>

        <!-------##################part 3 end #########-->
        <div class="form-style">
            <h4 class="part1">Order Summary</h4>

        
               <table class="data">
                <tr>
                    <td><label class="summary">Order ID:</label><input type="text" name="order-id" value="1234567890" class="input2" disabled></td>
                    <td><label class="summary ext">Order Date & Time:</label><input type="text" name="order-date-and-time" class="input2 date-time" value="06 sep 2021 02:48pm" disabled></td>
                    <td><label class="summary ext2">Order Total:</label><input type="text"  name="order-total" value="₹ 200/-" class="input2"disabled></td>
                </tr>
                <tr>
                    <td><label class="summary">Paymode Mode:</label><input type="text"  name="order-total" value="COD" class="input2"disabled></td>
                </tr>

            </table>
            
            <hr>
            <table class="data">

                <tr>
                    <td>
                        <label class="summary">Customer Details:</label><input type="text" name="cust-details" value="Jameela Kapasi, 9876543210,Address,Pincode,City,State" class="cust-details" disabled>

                    </td>
                </tr>
            </table>

            

                <hr>

            <table class="data">
                <tr>
                    <td><label class="summary">Product Name:</label><input type="text" name="product-name1" value="ABC Bag" class="input2" disabled></td>
                    <td><label class="summary">Price(per unit item):</label><input type="text" name="price1" class="input2" value="₹ 200/-" disabled></td>
                    <td><label class="summary">Qty:</label><input type="text" class="input2" name="Qty1" value="3"disabled></td>
                </tr>



                <tr><td><button class="btn2 btn-next order-btn">PLACE ORDER</button></td></tr>

            </table>
        </div><br><br>

            </form>
        

    </div>
	<script>
      $(function () {
          $("#datepicker").datepicker({ 
                autoclose: true, 
                todayHighlight: true
          })
        });
</script>
</div>
<!-- Modals -->
<div class="modal fade edit-record-modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-body">
                <div class="modal-header border-0">
                    <span class="cross-circle1 close ms-auto" data-dismiss="modal">
                        <a href="#" class="cross-icon"> 
                        <i class="fas fa-times-circle"></i></a>
                    </span>
                </div>
				<h3 class="modal-title text-center w-100 m-0">SELECT PICKUP ADDRESS</h3>
                <div class="row custfields style2 " style="margin-top: 5%;">
                    <label class="col-4" style="font-size:0.9rem;font-weight: 500;">Add New Address?</label>
                    <button class="btn2 btn-next update-btn btn-hv col-4" data-dismiss="modal" data-toggle="modal" data-target="#SelectModalCenter" style="width: 18%;margin: -5px 10px 0px auto;">SELECT</button>
                    <div style="display: flex; padding: 10px 15px 60px 15px; border: 1px solid #9ce1d0;margin: 2% 0% 0% 0%; align-items: flex-start;">
                        <input type="checkbox" id="address1" class="check" style="margin: 10px -23px 0px 3px;">
                        <span class="checkmark"></span><label for="address1" class="custinput placeholder col-2" style="margin-left: 20px !important;padding-top:5px;    cursor: pointer;">Address1</label>
                        <label class="placeholder col-2" style="margin: 5px 2px 2px 8px !important;">+9123456789</label>
                        <button class="btn2 btn-next update-btn btn-hv dft-btn col-2" style="margin: 0 10px 0px auto;">DEFAULT</button>
                        <a href="#" class="edt-btn view" data-dismiss="modal" data-toggle="modal" data-target="#editAddressModalCenter" style="margin-left: auto; padding-left: 10px;">EDIT | </a><a href="#" style="padding-left: 5px;" class="text-danger view "> REMOVE</a>
                    </div>
                    <p style="    position: relative; width: calc(100% - 40px); top: -44px; left: 10px; font-size: 14px; margin-bottom: 0;"class="placeholder">Street 1,Locality 1,City 1,State 1,Pincode 1</p>

                    <div style="display: flex; padding: 10px 15px 60px 15px; border: 1px solid #9ce1d0;margin: 2% 0% 0% 0%; align-items: flex-start;">
                        <input type="checkbox" id="address2" style="margin: 10px -23px 0px 3px;">
                        <span class="checkmark"></span><label for="address2" class="custinput placeholder col-2" style="margin-left: 20px !important;padding-top:5px;    cursor: pointer;">Address2</label>
                        <label class="placeholder col-2" style="margin: 5px 2px 2px 8px !important;">+9123456789</label>
                        <a href="#" class="edt-btn view" data-dismiss="modal" data-toggle="modal" data-target="#editAddressModalCenter" style="margin-left: auto; padding-left: 10px;">EDIT | </a><a href="#" style="padding-left: 5px;" class="text-danger view "> REMOVE</a>
                    </div>
                    <p style="    position: relative; width: calc(100% - 40px); top: -44px; left: 10px; font-size: 14px; margin-bottom: 0;"class="placeholder">Street 1,Locality 1,City 1,State 1,Pincode 1</p>

                    <div style="display: flex; padding: 10px 15px 60px 15px; border: 1px solid #9ce1d0;margin: 2% 0% 0% 0%; align-items: flex-start;">
                        <input type="checkbox" id="address3" style="margin: 10px -23px 0px 3px;">
                        <span class="checkmark"></span><label for="address3" class="custinput placeholder col-2" style="margin-left: 20px !important;padding-top:5px;    cursor: pointer;">Address3</label>
                        <label class="placeholder col-2" style="margin: 5px 2px 2px 8px !important;">+9123456789</label>
                        <a href="#" class="edt-btn view" data-dismiss="modal" data-toggle="modal" data-target="#editAddressModalCenter" style="margin-left: auto; padding-left: 10px;">EDIT | </a><a href="#" style="padding-left: 5px;" class="text-danger view "> REMOVE</a>
                    </div>
                    <p style="    position: relative; width: calc(100% - 40px); top: -44px; left: 10px; font-size: 14px; margin-bottom: 0;"class="placeholder">Street 1,Locality 1,City 1,State 1,Pincode 1</p>
                </div>
			</div>
		</div>
	</div>
</div>


<!-- Modal Select -->
<div class="modal fade edit-record-modal" id="SelectModalCenter" tabindex="-1" role="dialog" aria-labelledby="SelectModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
            <div class="modal-header border-0">
                <span class="cross-circle1 close ms-auto" data-dismiss="modal">
                    <a href="#" class="cross-icon"> 
                    <i class="fas fa-times-circle"></i></a>
                </span>
            </div>
			<div class="modal-body">
				<div class="text-center">
					<h5 class="modal-title" >ADD NEW PICKUP ADDRESS</h5>
					<div class="customer-details-content">
						<div class="row">
							 <div class="col col-12 col-md-6">
								 <input type="text" class="form-control" placeholder="Full Name*">
							 </div>
							 <div class="col col-12 col-md-6">
								 <input type="text" class="form-control" placeholder="Phone*">
							 </div>
							 <div class="col col-12 col-md-12">
								 <input type="text" class="form-control" placeholder="Flat No.& Building Name*">
							 </div>
							 <div class="col col-12 col-md-12">
								 <input type="text" class="form-control" placeholder="Road, Locality">
							 </div>
							 <div class="col col-12 col-md-12">
								 <input type="text" class="form-control" placeholder="Landmark*">
							 </div>
							 <div class="col col-12 col-md-6">
								 <input type="text" class="form-control" placeholder="Pincode*">
							 </div>
							 <div class="col col-12 col-md-6">
								 <input type="text" class="form-control" placeholder="Area*">
							 </div>
							 <div class="col col-12 col-md-6">
								 <input type="checkbox" placeholder="Area*" id="SaveDefault" style="margin-left: -30px;">
                                 <label for="SaveDefault">Save as default address</label>
							 </div>
							 <div class="col col-12 col-md-12">
								 <button type="submit" class="btn2">SAVE</button>
							 </div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>

<!-- Modal Select -->
<div class="modal fade edit-record-modal" id="editAddressModalCenter" tabindex="-1" role="dialog" aria-labelledby="editAddressModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
            <div class="modal-header border-0">
                <span class="cross-circle1 close ms-auto" data-dismiss="modal">
                    <a href="#" class="cross-icon"> 
                    <i class="fas fa-times-circle"></i></a>
                </span>
            </div>
			<div class="modal-body">
				<div class="text-center">
					<h5 class="modal-title" >EDIT PICKUP ADDRESS</h5>
					<div class="customer-details-content">
						<div class="row">
							 <div class="col col-12 col-md-6">
								 <input type="text" class="form-control" placeholder="Full Name*">
							 </div>
							 <div class="col col-12 col-md-6">
								 <input type="text" class="form-control" placeholder="Phone*">
							 </div>
							 <div class="col col-12 col-md-12">
								 <input type="text" class="form-control" placeholder="Flat No.& Building Name*">
							 </div>
							 <div class="col col-12 col-md-12">
								 <input type="text" class="form-control" placeholder="Road, Locality">
							 </div>
							 <div class="col col-12 col-md-12">
								 <input type="text" class="form-control" placeholder="Landmark*">
							 </div>
							 <div class="col col-12 col-md-6">
								 <input type="text" class="form-control" placeholder="Pincode*">
							 </div>
							 <div class="col col-12 col-md-6">
								 <input type="text" class="form-control" placeholder="Area*">
							 </div>
							 <div class="col col-12 col-md-6">
								 <input type="checkbox" placeholder="Area*" id="SaveDefault" style="margin-left: -30px;">
                                 <label for="SaveDefault">Save as default address</label>
							 </div>
							 <div class="col col-12 col-md-12">
								 <button type="submit" class="btn2">SAVE</button>
							 </div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
</body>
</html>