<!-- Grey Wrap / Site Stats -->
<div class="tuts">
		<!-- Portfolio Section -->
<div class="container">
	<div class="row centered">
		<h2>Tutorials</h2>
		<div class="ch-grid">
			<div class="col-lg-4">
				<ul>
					<li>
						<div class="ch-item ch-img-1">
							<a href="downloads.php">
								<div class="ch-info">
									<h3>Installing a Wallet</h3>
								</div>
							</a>
						</div><!-- /ch-img-1 -->
						<h4><a href="downloads.php">Installing a Wallet</a></h4>
					</li>
				</ul>
			</div><!-- /col-lg-4 -->

			<div class="col-lg-4">
				<ul>
					<li>
						<div class="ch-item ch-img-2">
							<a href="downloads.php#config">
								<div class="ch-info">
									<h3>Setting Up Wallet</h3>
								</div>
							</a>
						</div><!-- /ch-img-1 -->
						<h4><a href="downloads.php#config">Setting Up Wallet</a></h4>
					</li>
			</div><!-- /col-lg-4 -->

		<div class="col-lg-4">
			<ul>
				<li>
					<div class="ch-item ch-img-3">
						<a href="https://www.youtube.com/playlist?list=PLBt4zAxcWonnA8-InWGUEw-UZofHdUIeT">
							<div class="ch-info">
								<h3>More...</h3>
							</div>
						</a>
					</div><!-- /ch-img-1 -->
					<h4><a href="https://www.youtube.com/playlist?list=PLBt4zAxcWonnA8-InWGUEw-UZofHdUIeT">More...</a></h4>
				</li>
			</ul>
		</div><!-- /col-lg-4 -->
		</div><!-- /ch-igrid -->
	</div><!-- /row -->
</div><!-- /container -->

</div><!-- /G Wrap -->

	<!-- FOOTER -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<h2>Info</h2>
					<ul>
						<li><a href="bitaddress.html">Wallet Generator (Beta!)</a></li>
						<li><a href="https://github.com/ppcoin/ppcoin">Source Code (Github)</a></li>
						<li><a href="mining.php">How to Mine</a></li>
						<li><a href="minting.php">Set up Minting</a></li>
						<li><a href="resources.php">List of Resources</a></li>
						<li><a href="https://github.com/ppcoin/ppcoin/wiki">Wiki</a></li>
						<li><a href="http://www.peercointalk.org/">Forum</a></li>
						<li><a href="http://peercoinmyths.com/">Myths</a></li>
					</ul>
				</div>
				<div class="col-lg-3">
					<h2>Exchanges</h2>
					<ul>
						<li><a href="https://vircurex.com/welcome/index?alt=ppc&amp;base=btc&amp;locale=en">Vircurex</a></li>
						<li><a href="https://btc-e.com/exchange/ppc_btc/">BTC-E</a></li>
						<li><a href="https://mcxnow.com/exchange/PPC">MCX Now</a></li>
						<li><a href="https://coinmkt.com/">CoinMkt</a></li>
						<li><a href=" https://crypto-trade.com/trade/ppc_btc">Crypto-Trade</a></li>
					</ul>
				</div>

				<div class="col-lg-3">
					<h2>More Exchanges</h2>
					<ul>
						<li><a href="http://bter.com/trade/ppc_btc">BTER Exchange</a></li>
						<li><a href="http://cryptonit.net/exchange/btc/ppc">Cryptonit</a></li>
						<li><a href="https://www.cryptsy.com/markets/view/28">Cryptsy</a></li>
						<li><a href="https://www.coins-e.com/exchange/PPC_BTC/">Coins-e</a></li>
						<li><a href="https://www.vaultofsatoshi.com/">Vault of Satoshi</a></li>
					</ul>
				</div>

				<div class="col-lg-3">
					<h2>Mining</h2>
					<ul>
						<li><a href="https://www.coinotron.com/">Coinotron</a></li>
						<li><a href="https://ppcoin.d7.lt/">D7 Pool</a></li>
						<li><a href="http://ppc.fixx.ru/index">Fixx</a></li>
					</ul>
				</div>
			</div><!-- /row -->

		</div><!-- /container -->
	</footer>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/retina.js"></script>
	<script src="assets/js/jquery.themepunch.revolution.min.js"></script>
	<script src="assets/js/jquery.themepunch.plugins.min.js"></script>
	<script src="assets/js/peercoin.js"></script>
	<script>
	$(document).ready(function() {
	//Slideshow
	$('.banner').revolution({
	delay:9000,
	startwidth:1040,
	startheight:463,
	onHoverStop:"off",						// Stop Banner Timet at Hover on Slide on/off

	thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
	thumbHeight:50,
	thumbAmount:3,

	hideThumbs:0,
	navigationType:"bullet",				// bullet, thumb, none
	navigationArrows:"none",				// nexttobullets, solo (old name verticalcentered), none

	navigationStyle:"round-old",			// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


	navigationHAlign:"center",				// Vertical Align top,center,bottom
	navigationVAlign:"bottom",				// Horizontal Align left,center,right
	navigationHOffset:-419,
	navigationVOffset:72,

	touchenabled:"on",						// Enable Swipe Function : on/off

	stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
	stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

	hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
	hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
	hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value


	fullWidth:"on",

	shadow:0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)
	})

	});
	</script>



  </body>
</html>
