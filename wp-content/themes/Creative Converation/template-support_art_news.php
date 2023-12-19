<?php
/* Template Name: Support Art News  */
get_header();


$businessemail = get_field('business_email_for_paypal');
?>
<style>
	.temp_header {
		background: #f7f7f7;
	}
</style>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/parsley.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=<?php echo get_field('recaptcha_site_key', 'option'); ?>"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/donate.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/donate_responsive.css">

<?php $pageid = get_the_ID(); ?>
<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>







<div class="header_banner_section afclr">
        <div class="home_banner_sec add_overlay_on_slider">
             <?php
                $header_background_image = get_field('header_background_image');
                if( !empty( $header_background_image ) ){ ?>
                    <img src="<?php echo esc_url($header_background_image['url']); ?>" alt="<?php echo esc_attr($header_background_image['alt']); ?>" />
                <?php }else{ ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/inner_page_crtedit.jpg" alt="Art News Now">
                <?php } ?>

            <div class="home_text">
                <div class="wrapper afclr">

					<h1><?php $header_title = get_field('header_title'); if(!empty($header_title)){ echo $header_title; }else{ the_title(); } ?></h1>
                        <p><?php the_field('header_subtitle'); ?></p>
                </div>
            </div>
            </div>
</div>


<article>

<?php
$id = get_the_ID();
$post = get_post($id);
$content = apply_filters('the_content', $post->post_content);
echo $content;
?>


</article>








<div class="mission_main_section form_extend_new afclr" id="go_to_donate_form">
	<div class="page-elementor-wrapper">
		<div class="mission_main_section_inner afclr">
			<div class="c_cources_section afclr">

				<div class="popup-inner">
					<div class=" afclr">
						<div class="donate-form-area">

							<h4>Make a Gift Today</h4> 

							<form class="donate-form paypal_form_only" id="paypal_donateform" action="https://www.paypal.com/cgi-bin/webscr" method="post">

								<input type="hidden" name="business" value="<?php echo $businessemail; ?>">
								<input type="hidden" name="cmd" id="fix" value="_donations">
								<input type="hidden" name="cmd" id="rec" disabled="disabled" value="_xclick-subscriptions">
								<input type="hidden" id="a3" disabled="disabled" name="a3" value="125.00">
								<input type="hidden" id="p3" disabled="disabled" name="p3" value="1">
								<input type="hidden" id="t3" disabled="disabled" name="t3" value="M">
								<input type="hidden" name="amount" id="amount" value="250">
								<input type="hidden" name="src" value="1">
								<input type="hidden" name="item_number" value="Donate to Arts News Now">
								<input type="hidden" name="currency_code" value="USD">
								<input type="hidden" name="custom" id="custom" value="">
								<input type="hidden" value="<?php echo get_site_url(); ?>/?paypalipn=1&notify=true" name="notify_url" id="notify_url">
								<input type="hidden" name="return" value="<?php echo get_site_url(); ?>/support-arts-news">
								<button class="thm-btn" type="submit" name="donatebtn" id="donatebtnsubmit" style="display:none">Donate Now</button>

							</form>

							<form method="post" class="default-form" action="" id="donation_start_form">
								<input type="hidden" name="captcha_verification" id="captcha_verification" />

								<ul class="chicklet-list clearfix checklist_type">
									<li class="select_dtype">
										<input type="radio" id="type-amount-1" name="type-amount" value="One Time Gift" checked>
										<label for="type-amount-1" onclick="onetime()" class="paypal_form_label">One Time Gift</label>
									</li>
									<li class="select_dtype">
										<input type="radio" id="type-amount-2" name="type-amount" value="Monthly Gift">
										<label for="type-amount-2" onclick="monthly()" class="paypal_form_label">Monthly Gift</label>
									</li>
									<input type="hidden" name="paytype" value="One Time Gift" id="paymenttype">
								</ul>

								<?php if (have_rows('donation_price')) : ?>
									<div class="select_donat_amount_section">
										<h3>How much would you like to donate</h3>
										<ul class="chicklet-list clearfix" class="" id="onetime_payment">
											<?php $i = 1;
											while (have_rows('donation_price')) :
												the_row();
												$pvalue = get_sub_field('price_value');
											?>
												<li>
													<input type="radio" id="donate-amount-k<?php echo $i; ?>" name="donate-amount-ot" value="<?php echo $pvalue; ?>">
													<label for="donate-amount-k<?php echo $i; ?>" onclick="setamount(<?php echo $pvalue; ?>, false)" data-amount="<?php echo $pvalue; ?>">$<?php echo $pvalue; ?></label>
												</li>

											<?php $i++;
											endwhile; ?>
											<li class="other-amount">
												<div class="input-container" data-message="Every dollar you donate helps end hunger.">
													<span>OR</span><input autocomplete="off" type="text" onkeyup="setamount(this.value, true)" id="custom_amount_onetime" placeholder="Type In Other Amount" value="<?php if (isset($_GET['total'])) {
																																																						echo $_GET['total'];
																																																					} ?>">
												</div>
											</li>
										</ul>

										<?php if (have_rows('donation_price_for_monthly')) : ?>
											<ul class="chicklet-list clearfix" id="monthly_payment">
												<?php $i = 1;
												while (have_rows('donation_price_for_monthly')) :
													the_row();
													$pvalue = get_sub_field('price');
												?>
													<li>
														<input type="radio" id="donate-amount-<?php echo $i; ?>" name="donate-amount-m" value="<?php echo $pvalue; ?>">
														<label for="donate-amount-<?php echo $i; ?>" onclick="setamount(<?php echo $pvalue; ?>, false)" data-amount="<?php echo $pvalue; ?>">$<?php echo $pvalue; ?></label>
													</li>

												<?php $i++;
												endwhile; ?>
												<li class="other-amount">
													<div class="input-container" data-message="Every dollar you donate helps end hunger.">
														<span>OR</span><input autocomplete="off" type="text" onkeyup="setamount(this.value, true)" id="custom_amount_monthly" placeholder="Type In Other Amount">
													</div>
												</li>
											</ul>
										<?php
										endif; ?>
										<div style="position: relative;">
											<input style="clip:rect(0 0 0 0);
    clip-path: inset(50%);
    width: 0px;
    height: 0px;
    overflow: hidden;
    border: none;
    padding: 0;
    margin: 0;" type="text" name="donate-amount" id="selectedamount" data-parsley-required-message="Please select donation amount." data-parsley-errors-container=".value_select_error" required="required" value="">
										</div>
										<div class="value_select_error"></div>

									</div>

								<?php
								endif; ?>



								<div id="donorinfo_block">

									<div class="form-bg" style="margin-top:20px;">
										<h3>Donor Information</h3>
										<div class="row clearfix main_form_group">
											<div class="col-md-8 col-sm-12 col-xs-12">

												<div class="form-group">
													<label>First name*</label>
													<input type="hidden" name="item_name" value="Donate to Madina Institute">
													<input type="text" id="item_name_val" required="required" name="first_name" data-mapping="firstname_map">
												</div>
											</div>
											<div class="col-md-8 col-sm-12 col-xs-12">
												<label>Last name</label>
												<div class="form-group">
													<input type="text" name="last_name" id="last_name" data-mapping="lastname_map" form-group>
												</div>
											</div>
											<div class="col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<label>Email*</label>
													<input type="email" id="payemail" required="required" name="email" id="email" data-mapping="email_map">
												</div>
											</div>
											<div class="col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<label>State</label>
													<input type="text" id="paystate" name="state" data-mapping="state_map">
												</div>
											</div>
											<div class="col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<label>City</label>
													<input type="text" id="paycity" name="city" data-mapping="city_map">
												</div>
											</div>

											<div class="col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<label>Address</label>
													<input type="text" name="address1" id="address1" data-mapping="address_map">
												</div>
											</div>

											<div class="col-md-8 col-sm-12 col-xs-12">
												<div class="form-group">
													<label>Zip</label>
													<input type="text" id="payzip"  name="zip"  data-mapping="zip_map">
												</div>
											</div>

											<div class="col-md-8 col-sm-12 col-xs-12 notes_field">
												<div class="form-group">
													<label>Additional note</label>
													<textarea name="fname" id="nots_additional"></textarea>

												</div>
											</div>

											<!-- <div class="col-md-12 col-sm-12 col-xs-12">
												<div id="amount_section" class="amount_section" style="padding-bottom:20px; font-weight:bold;"></div>
											</div> -->
										</div>
									</div>
								</div>

								<div class="select_payment col-md-12 col-sm-12 col-xs-12">
									<h3 style="margin-bottom: 15px;">PAYMENT DETAILS</h3>
									<div class="payment_error"></div>
									<div class="afclr selected_method_div">
										<div class="pay_1">
                                            <input type="radio" name="paymentthrough" value="paypal" id="paypal" checked="checked" />
                                            <label for="paypal"><img src="<?php bloginfo('template_directory'); ?>/images/paypalbutton.svg" alt=""></label>
											<div class="clr"></div>
										</div>
										<div class="clr"></div>
										<div class="payment_form_div">
											<div class="payment_form">
												<div class="card_img"><img src="<?php bloginfo('template_directory'); ?>/images/all-cards.svg"></div>

												<div id="card-element" class="field"></div>

												<div class="outcome ">
													<div class="error"></div>
													<div id="card-errors" class="payment_error" role="alert"></div>
												</div>
											</div>

										</div>
									</div>
									<div class="">


										<input type="submit" id="donatebtn" class="thm-btn" disabled value="Donate Via Paypal" name="donatebtn" /><span class="loader_payment" style="display:none; padding-left:10px;"><img style="width:30px;" src="<?php bloginfo('template_directory'); ?>/images/ZKZg.gif" alt=""></span>
									</div>
								</div>



							</form>
						</div>

					</div>


				</div>
			</div>
			<?php $stripeservertype = get_field('stripe_demo', 'option');
			$stripelivesecretkey = get_field('stripe_secret_key', 'option');
			$stripelivepublishkey = get_field('stripe_publish_key', 'option');
			$stripeldemosecretkey = get_field('stripe_secret_key_demo', 'option');
			$stripedemopublishkey = get_field('stripe_publish_key_demo', 'option');
			if ($stripeservertype == 1) {
				$stripekey = $stripedemopublishkey;
			} else {
				$stripekey = $stripelivepublishkey;
			}
			//echo $stripekey;
			?>





			<script>
				$ = jQuery;
				$(document).ready(function() {
					if ($('#stripe').is(':checked')) {
						$(".payment_form").slideDown();
					}
				});
            </script>



            <script>
				$(document).ready(function() {
					$(".faq_inner").click(function() {
						$(this).toggleClass("active");
						$(this).parent().children(".faq_inner_box").slideToggle(1000);
						$(this).closest(".faq_boxes ").siblings().children(".faq_inner_box").slideUp(1000);
					});
				});
                </script>


            <script>
				$("input[name='type-amount']").click(function() {
					var amounttype = this.value;
					$("#paymenttype").val(amounttype);
				});

            </script>

            <script>

				$("input[name='paymentthrough']").click(function() {
                    // $(document).ready(function () {
                        
					$("#donatebtn").removeAttr("disabled");

					if ($('input[name="paymentthrough"]:checked').val() == 'paypal') {
						$("#donatebtn").val("DONATE VIA PAYPAL");
					} else {
						$("#donatebtn").val("DONATE NOW");
					}

					$(".pay_1").removeClass("active");

					$(this).parent(".pay_1").addClass("active");

					var amounttype = this.value;
                    
					if (amounttype == 'stripe') {
						$(".payment_form").slideDown();
						$(".payment_paypal").slideUp();
					} else if (amounttype == 'paypal') {
						$(".payment_form").slideUp();
						$(".payment_paypal").slideDown();
					}
				});

            </script>

            <script>
                $(document).ready(function () {
					$("#donatebtn").removeAttr("disabled");
				});
            </script>

            <script>
				$("input[name='billinginfo']").click(function() {
					if ($('input#billinginfo').is(':checked')) {
						$(".hidden_bloginfo").slideUp();
						var firstname = $("#item_name_val").val();
						var lastname = $("#last_name").val();
						var email = $("#payemail").val();
						var address = $("#address1").val();
						var city = $("#paycity").val();
						var state = $("#paystate").val();
						var zip = $("#payzip").val();
						$("#billing_firstname").val(firstname);
						$("#billing_lastname").val(lastname);
						$("#billing_email").val(email);
						$("#billing_address1").val(address);
						$("#billing_city").val(city);
						$("#billing_state").val(state);
						$("#billing_zip").val(zip);
					} else {
						$(".hidden_bloginfo").slideDown();
						$("#billing_firstname").val("");
						$("#billing_lastname").val("");
						$("#billing_email").val("");
						$("#billing_address1").val("");
						$("#billing_city").val("");
						$("#billing_state").val("");
						$("#billing_zip").val("");
					}
				});

            </script>

            <script>

				function monthly() {
					$("#type-amount-2").prop("checked", true);
					$("#montlhy").removeClass('hide');
					$("#a3").removeAttr('disabled');
					$("#p3").removeAttr('disabled');
					$("#t3").removeAttr('disabled');
					$("#rec").removeAttr('disabled');
					//$("#srt").removeAttr('disabled');

					$("#fix").attr('disabled', 'disabled');

					var month = $("#totalmonth").val();
					if (!month) {
						month = 1;
					}
					var amount = $("#selectedamount").val();
					var monthlyamount = parseFloat(amount / month).toFixed(2);
					$("#monthlyamount").html('$' + monthlyamount);
					//	$("#srt").val(month);
					$("#a3").val(monthlyamount);

					if (document.querySelector('input[name="donate-amount-ot"]:checked') != null) {
						document.querySelector('input[name="donate-amount-ot"]:checked').checked = false;
					}
					$('#custom_amount_onetime').val('');
					$('#selectedamount').val('');

				}

            </script>

            <script>
				function onetime() {
					$("#montlhy").addClass('hide');
					$("#a3").attr('disabled', 'disabled');
					$("#p3").attr('disabled', 'disabled');
					$("#t3").attr('disabled', 'disabled');
					//$("#srt").attr('disabled','disabled');
					$("#fix").removeAttr('disabled');
					$("#rec").attr('disabled', 'disabled');
					var month = $("#totalmonth").val();
					var amount = $("#selectedamount").val();
					var monthlyamount = parseFloat(amount).toFixed(2);
					$("#monthlyamount").html('$' + monthlyamount);
					//$("#srt").val(month);
					$("#a3").val(monthlyamount);

					if (document.querySelector('input[name="donate-amount-m"]:checked') != null) {
						document.querySelector('input[name="donate-amount-m"]:checked').checked = false;
					}
					$('#custom_amount_monthly').val('');
					$('#selectedamount').val('');

				}

            </script>

            <script>

				function setamount(amount, reset_radio) {
					if (reset_radio == true) {
						if (document.querySelector('input[name="donate-amount-m"]:checked') != null) {
							document.querySelector('input[name="donate-amount-m"]:checked').checked = false;
						}
						if (document.querySelector('input[name="donate-amount-ot"]:checked') != null) {
							document.querySelector('input[name="donate-amount-ot"]:checked').checked = false;
						}
					}
					if (reset_radio == false) {
						$('#custom_amount_onetime').val("");
						$('#custom_amount_monthly').val("");
					}
					$("#amount").val(amount);
					$("#selectedamount").val(amount);
					$("#monthlyamount").html('$' + amount);
					$("#a3").val(amount);


					var month = $("#totalmonth").val();
					var amount = $("#selectedamount").val();
					var monthlyamount = parseFloat(amount).toFixed(2);
					$("#monthlyamount").html('$' + monthlyamount);
					//$("#srt").val(month);
					$("#a3").val(monthlyamount);
					$("#selectedamount").parsley().reset(); //reset parsley validation

				}

            </script>

            <script>

				var stripe = Stripe('<?php echo $stripekey; ?>');
				// Create an instance of Elements.
				var elements = stripe.elements();
				// Custom styling can be passed to options when creating an Element.
				// (Note that this demo uses a wider set of styles than the guide below.)
				var style = {
					base: {
						color: '#32325d',
						fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
						fontSmoothing: 'antialiased',
						fontSize: '16px',
						'::placeholder': {
							color: '#aab7c4'
						}
					},
					invalid: {
						color: '#fa755a',
						iconColor: '#fa755a'
					}
				};
				// Create an instance of the card Element.
				var card = elements.create('card', {
					style: style
				});
				// Add an instance of the card Element into the `card-element` <div>.
				card.mount('#card-element');
				// Handle real-time validation errors from the card Element.
				card.addEventListener('change', function(event) {
					var displayError = document.getElementById('card-errors');
					if (event.error) {
						displayError.textContent = event.error.message;
					} else {
						displayError.textContent = '';
					}
				});
                
            </script>
            
            <script>
				function setmonthlyamount(month) {
					var amount = $("#selectedamount").val();
					var monthlyamount = parseFloat(amount).toFixed(2);
					$("#monthlyamount").html('$' + monthlyamount);
					$("#a3").val(monthlyamount);
				}
            </script>

                <script>
                    $("#monthly_payment").hide();
                </script>
            <script>
				
				$('.select_dtype input').click(function() {
					if ($("#type-amount-2").is(":checked")) {
						$("#monthly_payment").show();
						$("#onetime_payment").hide();
					} else {
						$("#monthly_payment").hide();
						$("#onetime_payment").show();
					}
				});
			</script>

			<?php if (isset($_GET['recurring']) && $_GET['recurring'] == true) {
			?>
				<script type="text/javascript">
					monthly();
				</script>
			<?php
			} ?>


		</div>
	</div>
</div>
<script type="text/javascript">

	$('#donation_start_form').parsley();


	$('#donation_start_form').on('submit', function(e) {
		e.preventDefault();
		var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
		//run form validation here -- ARUN
		
		$('#donation_start_form').parsley();
		if ($(this).parsley().isValid()) {
				// using paypal gateway
				$("#donatebtn").val('Processing ...');

						// Add your logic to submit to your backend server here.

						var form_data = $("#donation_start_form").serialize(); // serializes the form's elements.
						// alert(form_data);
						$.ajax({
							type: "POST",
							url: ajaxurl,
							dataType: "json",
							data: {
								action: "paypal_payment_begin",
								formData : form_data,
							},
							success: function(data) {
								if (data.status == "success") {
									$("#custom").val(data.donation_entry_id);
									$('#paypal_donateform').submit(); 
									//$("#donatebtn").attr("onclick",'donateNow()');
									//$('#donatebtnsubmit').click();
								} else {
									alert("Some error occured while processing your request. Please refresh the page and try again.");
								}

							},
							error: function(error) {
								//$("#donatebtn").val('Donate Now');
								
							},
						});
					

		}
	});

</script>







<style>
	.thm-btn {
		-webkit-transition: all 0.3s ease !important;
		transition: all 0.3s ease !important;
		cursor: pointer
	}

	.thm-btn:hover {
		background-color: #3495e0 !important;
		color: #fff !important;
	}

	.payment_form {
		display: none;
	}
</style>




<script>
	$ = jQuery;
	$(".main_form_group input").on("input", function() {
		if ($('input#billinginfo').is(':checked')) {
			var mapfield = $(this).attr("data-mapping");
			$("." + mapfield).val(this.value);
		}
	});
</script>





<?php
get_footer();
?>