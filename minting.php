<?php include ('header.php'); ?>

	<div class="container content">
		<div class="row">

			<div class="col-lg-12">
				<h1>Peercoin (PPC) Proof-of-Stake Minting</h1>
			</div>

			<div class="item">
				<div class="col-lg-12">
					<p>
						<strong>Introduction</strong><br />
						Peercoin (PPC) uses a novel, green and very interesting method of network validation and mining. Most alternative crypto-currencies in existence are forks of Bitcoin, with changed mining parameters or different mining algorithms. Miners maintain the network and check transactions, while spending a lot of energy on cryptographic brute force puzzles. Blockchain.info estimates that mid December 2013, Bitcoin mining takes up 22 million dollars or 150.000 megawatts of energy PER DAY. Peercoin also started out as a Proof-Of-Work network. But as more blocks and coins have been mined, the network switches slowly to Proof-Of-Stake validation. With it we also switch to a new approach of securing the network. In Peercoin terms this process of generating coins by stake is called minting. And if you have a stake in Peercoin (PPC) coins, you can mint too!
					</p>
					<p>This guide will explain what minting is, how to mint coins and what factors influence minting speed.</p>
				</div>
			</div>

			<div class="item">
				<div class="col-lg-12">
					<p>
						<strong>What is minting?</strong><br />
						All coins in the Peercoin network collect coin age. Your stake is calculated from this coinage, measured by last transaction, and multiplied with the amount of coin (time * coins). Transferred coins lose their age and start a new "life" as fresh coins. When you keep coins for 30 days, they are old enough to start the minting process. From that moment on the software tests the 'search space' given by the coinage, the limited options are tested if they "solve the puzzle" like in Bitcoin mining. You can simply think of this by comparing it with a raffle. But it is a raffle that lets you keep the tickets every time you do not win a round. And with it the chance of producing a valid solution of the next puzzle increases. More coins equal more raffle tickets. So 100 coins at an age of 30 days are twice as likely to solve the "puzzle" as 50 coins with 30 age days. The maximum age a coin can have is 90 days, after this the coin does not age further. When a puzzle is solved you can mint 1% of your input, by sending 101% of the coin to yourself. With it you "consume" your build up coin-age. As you test against a limited number of raffle tickets, the 'limited search space', this requires significantly less power. Attacks become more difficult as well, instead of controlling 51% calculating power to take over the block chain, you need 51% of the coins that are put up as stake! When a block is minted, your new coins will be unspendable for a period of 520 blocks (~ 3.6 days with 10 minutes blocks). More information can be found in the Peercoin <a href="bin/peercoin-paper.pdf">whitepaper</a>.
					</p>
				</div>
			</div>

			<div class="item">
				<div class="col-lg-12">
					<p>
						<strong>Minting Return</strong><br />
						Statistically you will get 1% interest on average on your coins per year if you mint. You only mint when your wallet is open, but as the resources use is a lot lower this will not lock up the computer or waste much power. Your wallet is unlocked, but you will still need your passphrase for transactions. An alternative strategy would be to wait till you have a lot of coinage and have a larger chance of minting a block. This would be around 90 days after transaction. However your return will be a little less compared with constant minting. A future wallet version will support in-wallet minting, possibly without decrypting.
					</p>
					<p>The Peercoin-QT wallet software takes care of this whole process automatically but it needs some configuration before it can start.</p>
				</div>
			</div>

			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-chevron-down"></span> Windows Minting Guide</a>
						</h2>
					</div>
					<div id="collapseOne" class="panel-collapse collapse">
						<div class="item">
							<div class="col-lg-12">
								<h4>Set-up required software:</h4>
								<p>	Download and install the <a href="http://sourceforge.net/projects/ppcoin/files/">Peercoin-Qt wallet</a> if you have not done so already.
								Encrypt your wallet with a good pass-phrase. Write this down and keep it somewhere safe, if you forget the pass-phrase you will lose your coins.
								The wallet encryption option can be found under the settings tab in the PeercoinQt wallet program. </p>
								<h4>Configure the software: </h4>
								<p>Open up explorer and select the navigation bar. Type in: %appdata%/PPCoin</p>
								<img src="img/minting1.png" alt="Minting" />
							</div>
						</div>
						<div class="item">
							<div class="col-lg-12">
								<p>Now create a text document. Open it up in notepad and copy the following information.<br />
								The reserve balance option sets the number of coins you do not put up for stake. These are the coins for daily use. The newly minted coins cannot be spent for 520 blocks (~ 3.6 days)!
								<br />Be sure to edit the rpc user and rpc password lines! Pick a good long random password; do not use your wallet passphrase!</p>
<pre>
	#ppcoin.conf
	# JSON-RPC options (for controlling a running ppcoind process)

	#Server mode allows Qt to accept JSON-RPC commands
	server=1

	# You must set rpcuser and rpcpassword to secure the JSON-RPC api
	rpcuser= "A username"
	rpcpassword= "A random password"

	#The reserve balance field is the minimum amount of coins you want to have available and NOT put up as stake.
	#The reason for this is that if you are generating proof of stake you cannot spend those coins for 520 blocks.
	#reservebalance=25
</pre>
								<p>Rename the file to PPCoin.conf</p>
							</div>
						</div>
						<div class="item">
							<div class="col-lg-12">
								<h4>Set-up the minting daemon: </h4>
								<p>Go back to the Peercoin-Qt wallet folder and go to the daemon folder. Create a new text document. Copy over this information:</p>
								<img src="img/minting2.png" alt="Minting" />
							</div>
						</div>
						<div class="item">
							<div class="col-lg-12">
<pre>
	@echo off
	@echo Enter PPC password...
	SET /P variable=Password :
	ppcoind walletpassphrase %variable% 9999999 true
</pre>
							</div>
						</div>
						<div class="item">
							<div class="col-lg-12">
								<p>Save the document and rename it to Minting.bat<br />
								<h4>Start minting:</h4>
								Run the PeercoinQt wallet. The bottom left should display a message that the wallet is locked and the minting process is suspended.</p>
								<img src="img/minting3.png" alt="Minting" />
								<p>Now double click the minting.bat file and enter your passphrase.<br /></p>
								<img src="img/minting4.png" alt="Minting" /><br />
								<p>If the bottom right corner shows a unlocked padlock after 30 seconds you are now minting. <strong>Congratulations!</strong></p>
							</div>
						</div>
					</div>
    	<div class="panel-heading">
      <h2 class="panel-title">
       <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-chevron-down"></span> Linux Minting Guide</a>
						</h2>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse">
						<div class="item">
							<div class="col-lg-12">
								<p> For this tutorial we'll assume the binaries are installed. If you have you can skip the next few lines. Otherwise use the binaries provided on the sourceforge page, click to download them: <a href="http://sourceforge.net/projects/ppcoin/files/0.3.0/ppcoin-0.3.0-linux.tar.gz/download">here</a>.
								<br> Download the compressed binaries either by command line or via the browser. Decompress the binaries and copy over the contents of either the 32bit or 64bit folder (depending on your CPU) to the usr/bin directory or whichever directory you prefer for your binaries.
								We'll use the QT version of peercoin: ppcoin-qt. Navigate to the /usr/bin folder and execute the ppcoin-qt binary. This will set-up the required folders. Encrypt the wallet and write down the passphrase. Don't lose it!
								Now close the Peercoin-QT client.</p>
								<p>Open a terminal and copy/type this block of text. Before you execute the command be sure to edit the password!</p>
<pre>
	cd ~
	echo '
	#ppcoin.conf
	# JSON-RPC options (for controlling a running ppcoind process)

	#Server mode allows Qt to accept JSON-RPC commands
	server=1

	# You must set rpcuser and rpcpassword to secure the JSON-RPC api
	rpcuser=rpcuser
	rpcpassword=&lt;A random password that is not your wallet passphrase&gt;

	#The reserve balance field is the minimum amount of coins you want to have available and NOT put up as stake.
	#The reason for this is that if you are generating proof of stake you cannot spend those coins for 520 blocks.
	#reservebalance=25
	' &gt; .ppcoin/ppcoin.conf
</pre>
					<p>Start the Peercoin-QT client. The bottom left should display a message that the wallet is locked and the minting process is suspended. Type this in the terminal: (If you have not installed peercoin system-wide, you need to first go to the directory you installed it in)</p>
<pre>
	ppcoind walletpassphrase &lt;secretpasswordtoyourwallet&gt; 9999999 true
</pre>

								<p>This unlocks the wallet for minting and starts the minting process if you have the Peercoin-Qt client open. After a few second you should see the padlock on the bottom right unlock. Congratulations you are minting!
										Don't forget to back-up your privatekey by backing-up the wallet.dat from the ~/.ppcoin folder or extracting the private key.
								</p>
							</div>
						</div>
     </div>
    	<div class="panel-heading">
      <h2 class="panel-title">
       <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-chevron-down"></span> Mac Minting Guide</a>
						</h2>
					</div>
					<div id="collapseThree" class="panel-collapse collapse">
						<div class="col-lg-12">
							<p>A Mac OS X tutorial, visually supported with step-by-step images,
										will follow soon. Step by step command line instructions for Mac Peercoin
										minting are available at the peercointalk forum <a
										href="http://www.peercointalk.org/index.php?topic=1104.0">here</a>.</p>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end row -->
	</div>

	<?php include ('footer.php'); ?>
