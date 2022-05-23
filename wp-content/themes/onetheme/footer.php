<!-- footer section -->
<footer class="container-fluid">
		<section class="container ft" background-color: #e7e7e7; display: flexbox;">
			<div class="ft-col">
				<ul class="contacts">
					<li class="ft-logo"><a href="#" aria-label="footerlogo"><img src="<?=bloginfo('url');?>/wp-content/themes/onetheme/img/logintl.svg" alt="logo"
								style="width: 4rem;"></a>
					</li>
					<li>
						<p class="footer-company-about">
						1ecom is your end-to-end ecommerce solution provider.  Whether you are just starting your
						online store, expanding it to breach new channels, or putting up a customer support facility, we provide
						you the right tools and technology that fit your needs and grow your  business.
						</p>
					</li>
				</ul>
			</div>
			<div class="ft-col">
				<span class="ft-title" style="display:block; padding: 0 0 .2rem 0; margin: 0 7rem 1.1rem 3rem;">What We Do</span>
				<ul class="contacts" style="margin-left: 2.9rem;">
					<li><a href="<?=bloginfo('url');?>/company/" aria-label="about">Company</a></li>
					<li><a href="<?=bloginfo('url');?>/ecom-auto/" aria-label="ecommerce automation">Ecommerce Automation</a></li>
					<li><a href="<?=bloginfo('url');?>/#namedSolutions" aria-label="services">Services</a></li>
					<li><a href="<?=bloginfo('url');?>/#namedContacts" aria-label="contact us">Contact Us</a></li>
				</ul>

			</div>
			<div class="ft-col" >
				<span class=" ft-title" style="display:block; padding: 0 0 .2rem 0; margin: 0 6rem 1.1rem 3rem;">Connect With Us</span>
				<ul >
					<li>
						<div class="contacts ft-contacts">
							<a href="https://www.google.com/maps/place/In1Go+Technologies+Inc./@14.4481538,120.9922245,17z/data=!4m12!1m6!3m5!1s0x3397cf04d69589b7:0x378e5251d103adb7!2sLAS+PINAS+CARGO+COMPLEX!8m2!3d14.4481486!4d120.9944132!3m4!1s0x0:0x4b64607b8f930152!8m2!3d14.447798!4d120.9948852" id="map" aria-label="map" target="_blank" style="margin-top:.4rem;"><i class="fa fa-map-marker social-icons"
									style="border-radius: 20px; text-align: center;"></i></a>
							<a href="https://www.google.com/maps/place/In1Go+Technologies+Inc./@14.4481538,120.9922245,17z/data=!4m12!1m6!3m5!1s0x3397cf04d69589b7:0x378e5251d103adb7!2sLAS+PINAS+CARGO+COMPLEX!8m2!3d14.4481486!4d120.9944132!3m4!1s0x0:0x4b64607b8f930152!8m2!3d14.447798!4d120.9948852" id="address" aria-label="address" target="_blank">
								Las Pinas Cargo Complex J. Aguilar Avenue<br>Talon Uno,
								Las Pinas City, 1747,
								Philippines
							</a>
						</div>
					</li>
					<li>
						<div class="contacts ft-contacts">
							<a href="tel:+63288143209" aria-label="phone" style="margin-top:.5rem;"> <i class="fa fa-phone social-icons"
									style="border-radius: 20px; padding: .7em"></i></a>
							<p>
								<a href="tel:+63288143209" id="number1" aria-label="contact number1">+63 2 8814 3209</a>
								<br>
								<a href="tel:+63285118618" id="number2" aria-label="contact number2">+63 2 8511 8618</a>
							</p>
						</div>
						<div class="contacts ft-contacts" >
							<a href="mailto:customercare@in1go.com.ph" aria-label="email address" id="email"> <i class="fa fa-envelope social-icons"
									style="border-radius: 20px; padding: .7em; "></i></a>
							<a href="mailto:customercare@in1go.com.ph" id="email">customercare@in1go.com.ph</a>
						</div>
					</li>
					<li>
						<div class="contacts ft-contacts solicons" style="margin: 2.4rem 0 0 3rem; gap : 20px!important;">
							<a href="https://www.facebook.com/in1gotech/" aria-label="facebook profile"  target="_blank"><i class="fab fa-facebook-f social-icons"></i></a>
							<a href="https://www.linkedin.com/company/in1gotech" target="_blank" aria-label="linkedin profile"><i
									class="fab fa-linkedin-in social-icons"></i></a>
							<a href="https://www.youtube.com/channel/UCWu79HfXHYax8e-wnLhJU3g/videos" target="_blank" aria-label="youtube profile"><i class="fab fa-youtube social-icons"></i></a>
						</div>
					</li>
				</ul>
			</div>
		</section>
		<h6 class="toc"><span style="font-weight: 500;">Copyright © 2022 1ecom.ph</span> | <a href="https://in1gotech.com/privacy-policy/"target="_blank">Privacy Policy</a>
  </h6>
	</footer>
	<style>
	</style>
</body>
<!-- jquery -->
<?php wp_footer()?>
<!-- jquery -->
<!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "100677485664957");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v13.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>																  
																  
</html>
<!-- footer section -->