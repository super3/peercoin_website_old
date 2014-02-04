<?php include ('header.php'); ?>

	<div class="container content">
		<div class="row">

			<div class="col-lg-12">
				<h1>Peercoin Pool Mining Guide</h1>
				<p><strong>Introduction</strong></p>
			</div>

			<div class="col-lg-6">
				<p>
					Peercoin is a hybrid Proof-Of-Work / Proof-Of-Stake coin, with the same work algorithm as Bitcoin. This means you can mine with GPU's, FGPA's and ASICs using bitcoin mining software. With the increasing popularity of Peercoin, the slow switch to minting blocks, and the decreasing return on mining, competition for blocks becomes more fierce.
				</p>
			</div>

			<div class="col-lg-6">
				<p>
					Even with powerful hardware it is difficult to mine alone.	Mining pools combine the power of all participants to find blocks, and share the reward proportionally based on shares. These guides show you how to poolmine at some of the largest PPC pools.
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="item">
					<p>
						<strong>Setting up the PPC wallet</strong><br />
						Download the Peercoin wallet if you did not do this already. Install, let it sync, and secure the wallet with a good password. You can find your wallet address on the receive tab. You can follow <a href="http://peercoin.net/downloads.php">this guide</a> to download and configure it.
					</p>
				</div>

				<div class="item">
					<p>
						<strong>Sign Up in a Pool</strong><br />
						You can find a list of pools in the <a href="http://peercoin.net/resources.php">resources page</a>. Here you can find instructions to join some of these pools.
					</p>
				</div>
				<div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                                <h2 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-chevron-down"></span> Ecoining Pool </a>
                                                </h2>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse">
					
					<div class="item">
						<p>
							<strong>·</strong> Go to the pool website: <a href="http://peercoin.ecoining.com">http://peercoin.ecoining.com</a> and sign up [1]. A valid email address is not required but It's recommended if you want to receive worker and pool notifications or for password retrieval. You should also enter a 4 number pin that will be required to change your payout address and for manual payouts. Don't forget to read and accept de Terms and Conditions [2].
						</p>
						<a href="img/mining7.png" target="_blank"><img src="img/mining7.png" alt="Mining" /></a>
					</div>
                                        
					<div class="item">
						<p>
                                        		<strong>·</strong> Log in and setup your workers clicking the "My Workers" section [1]. Add a different worker for every machine you mine with. Here you can activate the worker monitoring, which will notify you if your workers stop mining[2].
                                        	</p>
						<a href="img/mining8.png" target="_blank"><img src="img/mining8.png" alt="Mining" /></a>
					</div>
                                        
					<div class="item">
						<p>
                                                	<strong>·</strong> Click on "Edit Account" [1] and set-up your wallet address [2]. Here you can set-up also your payout threshold, which will make an automatic transaction once the stated number of PPC is reached in your account. You can also add a donation percentage to help with the pool operational costs. Don't forget you need to enter the 4 digit PIN [3] every time you want to change these settings.
                                        	</p>
						<a href="img/mining9.png" target="_blank"><img src="img/mining9.png" alt="Mining" /></a>
					</div>
					
					<div class="item">
						<p>
							<strong>·</strong> Now just point your BFGminer/CGminer to <strong>"-o stratum+tcp://peercoin.ecoining.com:3336 -u username.workername -p workerpassword"</strong>. If you have any doubt or suggestion contact us at <strong>support@ecoining.com</strong> or use the contact form in the pool.
							<br /> Thanks for your support!
						</p>
					</div>
				</div>

				<div class="panel-heading">
				      <h2 class="panel-title">
					       <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-chevron-down"></span> D7 Pool</a>
                                                </h2>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                	<div class="item">
						<p>
							Go over to the pool website: <a href="https://ppcoin.d7.lt">https://ppcoin.d7.lt</a> and sign up
						</p>
						<a href="img/mining1.png" target="_blank"><img src="img/mining1.png" alt="Mining" /></a>
					</div>
	
					<div class="item">
						<p>
							Set-up your wallet address and specify a minimum payout, fill in 1. Don't forget to press update after setting both the fields.
						</p>
						<a href="img/mining2.png" target="_blank"><img src="img/mining2.png" alt="Mining" /></a>
					</div>
	
					<div class="item">
						<p>
							Your workers are here, you can mine on multiple PC's. Remember the worker's details. Leave the difficulty as is.
						</p>
						<a href="img/mining3.png" target="_blank"><img src="img/mining3.png" alt="Mining" /></a>
					</div>

					<div class="item">
						<p>
							Download the software from here. The link is where arrow 2 points to. The pool settings are where arrow 3 points.
						</p>
						<a href="img/mining4.png" target="_blank"><img src="img/mining4.png" alt="Mining" /></a>
						<p>Download the zip file, and save it to C:/Peercoin. If the file downloaded without a .zip extension, rename it and add .zip to the end of the filename. Extract the archive and open the folder "ppc".</p>
					</div>

					<div class="item">
						<p>
							<strong>Set-up the Miner</strong><br />
							For the first worker, there is no set-up needed! Just double click start.bat and you should see this
						</p>
						<a href="img/mining5.png" target="_blank"><img src="img/mining5.png" alt="Mining" /></a>
						<p>In the above image [2] displays the mining rate and [3] are submitted shares accepted by the pool!</p>
					</div>

					<div class="item">
						<p>
							Now to add another worker, create a worker on the pool website and remember the details. Right click the start.bat file and click edit, press ok on the dialog. Now edit the text behind the -u (see [3]) and -p (see [4]) flags to the settings of the new worker.
							<br />Save, hit start.bat and you are mining!
							<br />You can see your results on the first page, see image one!
							<br />
							<br />Happy mining!
						</p>
					</div>
				</div><!-- end col -->
			</div><!-- end row -->
		</div>
	    </div>	
	</div>
</div>
<?php include ('footer.php'); ?>
