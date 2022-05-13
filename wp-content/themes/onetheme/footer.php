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
					<li>
						<p class="footer-company-name">© 2022 1ecom.ph</p>
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
							<a href="#" id="map" aria-label="map" style="margin-top:.4rem;"><i class="fa fa-map-marker social-icons"
									style="border-radius: 20px; text-align: center;"></i></a>
							<a href="#" id="address" aria-label="address">
								Las Pinas Cargo Complex J. Aguilar Avenue<br>Talon Uno,
								Las Pinas City, 1747,
								Philippines
							</a>
						</div>
					</li>
					<li>
						<div class="contacts ft-contacts">
							<a href="#" aria-label="phone" style="margin-top:.5rem;"> <i class="fa fa-phone social-icons"
									style="border-radius: 20px; padding: .7em"></i></a>
							<p>
								<a href="#" id="number1" aria-label="contact number1">+63 2 8814 3209</a>
								<br>
								<a href="#" id="number2" aria-label="contact number2">+63 2 8511 8618</a>
							</p>
						</div>
						<div class="contacts ft-contacts" >
							<a href="#" aria-label="email address" id="email"> <i class="fa fa-envelope social-icons"
									style="border-radius: 20px; padding: .7em; "></i></a>
							<a href="#" id="email">customercare@in1go.com.ph</a>
						</div>
					</li>
					<li>
						<div class="contacts ft-contacts solicons" style="margin: 2.4rem 0 0 3rem; gap : 20px!important;">
							<a href="#" aria-label="facebook profile"><i class="fab fa-facebook-f social-icons"></i></a>
							<a href="#" aria-label="instagram profile"><i class="fab fa-instagram social-icons"></i></a>
							<a href="#" aria-label="linkedin profile"><i
									class="fab fa-linkedin-in social-icons"></i></a>
							<a href="#" aria-label="youtube profile"><i class="fab fa-youtube social-icons"></i></a>
						</div>
					</li>
				</ul>
			</div>
		</section>
		<h6 class="toc"><a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a>
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