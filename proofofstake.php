<?php include ('header.php'); ?>

	<div class="container content">
		<div class="row">

			<div class="col-lg-12">
				<h1>What is Proof-of-Stake?</h1>
			</div>

			<div class="item">
				<div class="col-lg-12">
					<p>
						<strong>Introduction</strong><br />
						Proof-of-work and proof-of-stake are methods of securing cryptocurrency networks. Bitcoin uses a purely proof-of-work-based system, in which the probability of solving a block (and getting the block reward) depends on hashrate. On the Bitcoin network, rewards are distributed solely according to work done by miners.
					</p>
					<p>
					    Peercoin uses a hybrid proof-of-work/proof-of-stake system. Instead of being dependent on hashing power available, proof-of-stake blocks are distributed according to possession of the coins. For example, an individual possessing 1% of all Peercoins currently in existence would be able to mint 1% of the proof-of-stake blocks. Notice that the term "mint" is used in generation of proof-of-stake blocks. The term "mine" refers specifically to the generation of proof-of-work blocks. Minting can be performed by running a full node of the Peercoin client and does not require many resources. More information can be found on the <a href="/minting">minting page</a>.
					</p>
					<p>
					    Just like proof-of-work blocks, proof-of-stake blocks generate currency rewards. To generate proof-of-stake blocks, a user sends already-possessed coins to himself in exchange for a preset reward. This reward is currently set at about 1% per year. These transactions increase the "consumed coin age" of the blockchain, a property that Peercoin uses to determine the trustworthiness of the blockchain.</p>
				</div>
			</div>

			<div class="item">
				<div class="col-lg-12">
					<p>
						<strong>Efficiency</strong><br />
						Proof-of-work security is based on hashing power, and consumes a large amount of energy to solve blocks. This means that mining is prohibitively difficult for those that do not have access to powerful hardware and money for electricity. As the Peercoin network switches over to proof-of-stake security over time, minting proof-of-stake blocks provides security in a sustainable and green way without requiring consuming large amounts of energy.
					</p>
				</div>
			</div>

			<div class="item">
				<div class="col-lg-12">
					<p>
						<strong>Security</strong><br />
						In a proof-of-work system, the network is secure as long as no one party controls more than 51% of mining power. To perform an attack, a single attacker must be able to outpace the rest of the network in block generation. This may seem unlikely, but Bitcoin mining pools have approached 51% of the network hashrate in the past. At the time of writing, two mining pools control more than 51% of the Bitcoin network; an attack could be performed by coercing just two people (the pool operators) to collude.
					</p>
					<p>
					    In a hybrid proof-of-work/proof-of-stake system, an attacker would have to possess 51% of mining power <em>and</em> 51% of all coins. This makes the attack more difficult as it is unlikely one party would end up owning 51% of the wealth, but also acts as a deterrent to attack because an attack would cause the value of the currency to drop. A party that possesses more than 51% of coins has a vested interest in keeping the value of the coins steady or rising.
					</p>
				</div>
			</div>
		</div><!-- end row -->
	</div>

	<?php include ('footer.php'); ?>
