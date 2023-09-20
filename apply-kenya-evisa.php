<?php
session_start();
include("db.php");


if(isset($_POST['btn_save']))
{
$arrival=$_POST['arrival'];
$name=$_POST['name'];
$email_address=$_POST['email_address'];
$phone=$_POST['phone'];
$home_address=$_POST['home_address'];
$locaton=$_POST['locaton'];

	{	
mysqli_query($con,"insert into page_one (contact,address,arrival_date,email, full_name,country) values ('$phone','$home_address','$arrival','$email_address','$name','$locaton')") or die ("query incorrect");

 header("location: apply-kenya-evisa-two.php");
}

mysqli_close($con);
}
include "topbar.php";
?>

<form action="" method="post" type="form" name="form" enctype="multipart/form-data">


            </div>
            <ul style='display: none' class='ff-el-progress-title'>
                <li></li><li></li>
            </ul></div><span class='ff_step_start'></span><div class='ff-step-body'><div class="fluentform-step active" data-name="step_start-9_3" data-disable_auto_focus="no" data-enable_auto_slider="no" data-enable_step_data_persistency="no" data-enable_step_page_resume="no" >
				<div data-name="ff_cn_id_1"  class='ff-t-container ff-column-container ff_columns_total_2  '><div class='ff-t-cell ff-t-column-1' style='flex-basis: 50%;'><div class='ff-el-group'><div class="ff-el-input--label ff-el-is-required asterisk-right">
					
				
				<label for='ff_9_datetime' aria-label="Date of Arrival">Date of Arrival</label></div>
				<div class='ff-el-input--content'>
				<input type="text" id="arrival" required name="arrival" class="ff-el-form-control ff-el-datepicker" data-name="datetime"  aria-invalid='false' aria-required=true></div></div></div><div class='ff-t-cell ff-t-column-2' style='flex-basis: 50%;'><div class='ff-el-group'>
					<div class="ff-el-input--label ff-el-is-required asterisk-right">
						
					
					<label for='ff_9_input_text' aria-label="Full Name">Full Name</label></div><div class='ff-el-input--content'>
						<input type="text" id="name" required name="name"  class="ff-el-form-control" data-name="input_text" id="ff_9_input_text"  aria-invalid="false" aria-required=true></div></div></div></div>
					<div data-name="ff_cn_id_2"  class='ff-t-container ff-column-container ff_columns_total_2  '><div class='ff-t-cell ff-t-column-1' style='flex-basis: 50%;'><div class='ff-el-group'><div class="ff-el-input--label ff-el-is-required asterisk-right">
						
					
					<l<label for='ff_9_datetime' aria-label="Date of Arrival">Email</label></div>
				<div class='ff-el-input--content'>
				<input type="text" id="email_address" required name="email_address" class="ff-el-form-control ff-el-datepicker" data-name="datetime"  aria-invalid='false' aria-required=true></div></div></div><div class='ff-t-cell ff-t-column-2' style='flex-basis: 50%;'><div class='ff-el-group'>
					<div class="ff-el-input--label ff-el-is-required asterisk-right">
							
						
						<label for='ff_9_phone' aria-label="Phone/Mobile">Phone/Mobile</label></div><div class='ff-el-input--content'>
							<input type="number" id="phone" name="phone"   placeholder="Mobile Number"  class="ff-el-form-control ff-el-phone ff_el_with_extended_validation"  data-name="phone"  inputmode="tel" >
						</div></div></div></div><div class="ff-name-address-wrapper fluent-address ff_map_autocomplete" data-type="address-element" data-name="address_1" data-ff_with_auto_locate="no" ><div class='ff-el-input--content'><div class='ff-t-container'><div class='ff-t-cell'><div class='ff-el-group'><div class="ff-el-input--label ff-el-is-required asterisk-right">
							
						
						<label for='ff_9_address_1_address_line_1_' aria-label="Home Address">Home Address</label></div><div class='ff-el-input--content'>
							<input type="text"  id="home_address" name="home_address" name="address_1[address_line_1]" class="ff-el-form-control" placeholder="Enter Home Address" aria-invalid="false" aria-required=true>
							</div></div></div><div class='ff-t-cell'><div class='ff-el-group'><div class="ff-el-input--label ff-el-is-required asterisk-right">
							
							
							<label for='ff_9_input_text' aria-label="Full Name">Country</label></div><div class='ff-el-input--content'>
						<input type="text" id="locaton" name="locaton"  class="ff-el-form-control" data-name="input_text" id="ff_9_input_text"  aria-invalid="false" aria-required=true></div></div></div></div>
					<div data-name="ff_cn_id_2"  class='ff-t-container ff-column-container ff_columns_total_2  '><div class='ff-t-cell ff-t-column-1' style='flex-basis: 100%;'><div class='ff-el-group'><div class="ff-el-input--label ff-el-is-required asterisk-right">
									
								
								<div class="card-footer">
                  <button type="submit" id="btn_save" name="btn_save" required class="btn btn-fill btn-primary">Save</button>
				  <a href="index.php?page=balance_receipt&id=<?php echo $row['id'] ?>" type="button" id="btn_save" name="btn_save" required class="btn btn-fill btn-primary">Save</a>

              </div>
			  </div>
			  </div>
</form>										
								
								 

		








<call-us-selector phonesystem-url="https://1121.3cx.cloud" party="raysdigital" enable-poweredby="false"></call-us-selector><link rel='stylesheet' id='jeg-dynamic-style-css' href='wp-content/plugins/jeg-elementor-kit/lib/jeg-framework/assets/css/jeg-dynamic-styles077c.css?ver=1.2.9' media='all' />
<link rel='stylesheet' id='flatpickr-css' href='wp-content/plugins/elementor/assets/lib/flatpickr/flatpickr.mineda1.css?ver=4.1.4' media='all' />
<link rel='stylesheet' id='intlTelInput-css' href='wp-content/plugins/fluentformpro/public/libs/intl-tel-input/css/intlTelInput.min85e8.css?ver=16.0.0' media='all' />
<link rel='stylesheet' id='fluent-form-styles-css' href='wp-content/plugins/fluentform/assets/css/fluent-forms-publicaaf9.css?ver=5.0.8' media='all' />
<link rel='stylesheet' id='fluentform-public-default-css' href='wp-content/plugins/fluentform/assets/css/fluentform-public-defaultaaf9.css?ver=5.0.8' media='all' />
<link rel='stylesheet' id='fluentform-payment-skin-css' href='wp-content/plugins/fluentformpro/public/css/payment_skinaaf9.css?ver=5.0.8' media='all' />
<link rel='stylesheet' id='e-animations-css' href='wp-content/plugins/elementor/assets/lib/animations/animations.minb73d.css?ver=3.15.3' media='all' />
<script defer src='wp-content/plugins/wp-live-chat-support/public/js/callus0a14.js?ver=10.0.6' id='wp-live-chat-support-callus-js'></script>
<script src='wp-content/themes/popularfx/js/navigation9030.js?ver=1.2.4' id='popularfx-navigation-js'></script>
<script src='wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-scriptab7d.js?ver=2.9.2' id='elementskit-framework-js-frontend-js'></script>
<script id="elementskit-framework-js-frontend-js-after">
		var elementskit = {
			resturl: 'https://applykenyaevisa.com/wp-json/elementskit/v1/',
		}


