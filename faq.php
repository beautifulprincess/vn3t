<?php
$menus = array(
	array("href" => "home", "title" => "HOME"),
	array("href" => "problematic", "title" => "OVERVIEW"),
	array("href" => "faq", "title" => "FAQ"),
	array("href" => "roadmap", "title" => "ROADMAP"),
	array("href" => "members", "title" => "TEAM"),
	array("href" => "advisory", "title" => "ADVISORS"),
	array("href" => "partners", "title" => "PARTNERS")
);
$signature = "H8A6R3D38QI6JZ9Y";
$contract = "98013274197";
$funcname = "getMyBalance";
$faqs = array(
	array("q" => "How to buy VC01N’s?", "a" => "<p>You can buy vc01ns in one (1) of two (2) ways. You must have an Ethereum wallet, that accepts custom tokens (ei,e: Mist, MyEthereumWallet, Jaxx.io ). You should ALWAYS verify that the green lock of the website URL correspond to our signature. <em title='Copy to clipboard' class='cp_signature'>$signature</em>.</p><p>You can send Ethers directly to the smart contract address using our main callback function or use the buyToken function from the contract.</p><p>We will NEVER broadcast our address from any other sources than : <em title='Copy to clipboard' class='cp_contract'>$contract</em></p><p>You can also use our website directly in the buy token form, enter your ethereum wallet address, the amount to token you wish to buy and clock “buy vc01n” button. You can also consult your actual vc01n balance and the current vc01ns price there.</p>"),
	array("q" => "What is the minimum Ether amount I can buy vc01ns with?", "a" => "<p>The minimal amount to Ether that can be sent for a transaction is 1 Ether. This is for the purpose of lowering the number of overall transaction for better performance and to discourage buying attacks (micro buying to freeze contract).</p><p>Nota:  remember you must take in account the transaction fees in gas also.</p>"),
	array("q" => "Can I cancel my transaction?", "a" => "<p>NO, the transaction are final.</p>"),
	array("q" => "Is there a soft cap, and can i be refunded?", "a" => "<p>There is NO soft cap, this is because we will continue to emit new rounds of crowdale, and will use whatever amount of Ether we collected to create results for the next round. We truly believe in our project, ourselves and the vision of VN3T infrastructure, thus we will continue each step with the means at our disposal.</p>"),
	array("q" => "What is VN3T Marketplace?", "a" => "<p>VN3T is a Decentralized marketplace for data, algorithms and softwares services in the form of a SaaS platform. It enable to safely and easily sell data/algorithms services using our tool like the data visualization tool and the sandbox algorithms training ground, this enabling the creation of complex services in a “building block” manner.</p>"),
	array("q" => "Who is VN3T Marketplace for?", "a" => "<p>VN3T is designed primarily for the big Data and Ai community. VN3T intent to enable all data and algorithm based software services stakeholders to create new revenue stream.  this synergy create an ecosystem, using free market and game theory, which will lower the cost and the difficulty associated with big data handling, aggregation and commercialisation.</p>"),
	array("q" => "Who is building the VN3T Marketplace Software?", "a" => "<p>The VN3T Technologies team will handle the development, implementation and continuous evolution of VN3T network. The team will be responsible, amongst other things, for the mining application, the cooperative GPU pooling, the data visualization tool and sandbox training environment.</p><p>The management will follow an agile approach cooperatively with a community of beta testers, the Affiliates(insert link here) and will continue to do so for features implementation on a continuous basis,  for ever.</p><p>The team operations will take place in Montreal (Canada) and Gibraltar. The executive team is composed of 15-20 years in management of large tech companies and the experience of rising companies from 4 to more than 200 employees internationally.</p><p>The core team is composed of seniors developer, devops, kernel, cloud computing engineer and is working hand in hand with Academia, such as the University Of Laval IITS and Montreal.ai formation center.</p>"),
	array("q" => "Will the VN3T Software be released under open source software license?", "a" => "<p>VN3T network infrastructure will be fully open source, will have an open SDK procuded to ensure transparency for the community and continuous participation of a large and incentivized community of developers, and academics researchers. The marketplace, thought, respect with the utmost importance the intellectual property of the data and/or algorithms services that are available on the network, thus, there is no any form of right release or open source commitment for users on the infrastructure.</p>"),
	array("q" => "What are VN3T  tokens, the VC01NS?", "a" => "<p>The vc01ns start by a erc-20 compliant token on Ethereum platform , for the crowdsale purpose. In the 6 month milestone, we will start exchanging the vc01ns for our own native blockchain coins. The vc01ns have 18 decimals, a maximum supply og 5B at the same time before triggering the “halving”.</p><p>After the initial emision, no other vc01ns will be created, the next ones will only be “mined” by miners, allocating GPU calculations to cooperative virtual environments. The difficulty to create theses token is based on the number of power allocated by miners and is using cryptographic signature feature of ethereum technology to calculate this.</p><p>In simple terms, the miners must “collect” cryptographic signature, made from transaction (request) made on the network. When a miner has reached a certain amount(difficulty level) he can “submit” a new block to the chain. He use the confirmation algorithm services reconcile all signatures with the Virtualized environment pool associated with the signatures. This process is handled with state-if -the art machine learning and open sourced. When a block is successful, it is added to the chain and all transaction concerned are considered “reconciled”.</p>"),
	array("q" => "What is the “halving”?", "a" => "<p>The “halving “ is a period events ensuring an infinite need of coins, while maintaining a maximum supply of coins “existing” at the same time. This process ensure the deflationary pattern for the vc01ns and is on two angles. It is important to remember that the price of data and/or services on the marketplace are ALWAYS calculated from a chosen fiat currency perspective, this the price WILL NOT fluctuate with the token value.</p><p class='faq-h1'>First angle:</p><p>When the maximum supply limit of blocks is created (last block) the network will enter an automatic process in which, all token will from now on be considered as half a token, keeping the “exact” same value. (token effectively double). User possessing vc01ns will see their token be considered divided in 2, but will keep same value. In others words, the total supply is divided in two, but market cap is maintained, thus enabling another rounds of mining until next halving, and so on, so forth.</p><p class='faq-h1'>Second angle:</p><p>Each time the a halving is done, the difficulty level of needed signature is raised, to cover to the evolution of data technology and to push on the deflation of the coin overtime.</p>"),
);
$socials = array(
	array('class' => 'facebook', 'link' => 'https://www.facebook.com/Vn3t-186287608614206/'),
	array('class' => 'twitter', 'link' => 'https://twitter.com/Vn3t1?lang=en'),
	array('class' => 'btc', 'link' => 'https://bitcointalk.org/index.php?action=profile;u=1312644;sa=showPosts'),
	array('class' => 'medium', 'link' => 'https://medium.com/@vn3ttech/decentralized-marketplace-for-global-data-network-e94e4fa1707b'),
	array('class' => 'youtube-play', 'link' => 'https://www.youtube.com/channel/UCn0BOghrGyl61inu6XdFEpA'),
	array('class' => 'google-plus', 'link' => 'https://plus.google.com/communities/114641882272567968874'),
	array('class' => 'telegram', 'link' => 'https://t.me/vn3tTech'),
);
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Earn up 1,5% per day, Hottest-ICO/X50, BGG for a worldwide scale ICO Reliable investment,  Lending and exchange trading" /> 
	<meta id="project_name" name="project_name" content="">
	<meta name="keywords" content="ICO, ico website, ico team, ico work, bitcoin, ethereum">
	<meta name="msvalidate.01" content="0279349BB9CF7ACA882F86F29C50D3EA" />

	<title>VN3T</title>

	<link rel="shortcut icon" href="images/favicon.ico"/>
	<link rel="bookmark" href="images/favicon.ico"/>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/faq.css" />
	<link rel="stylesheet" media="screen" href="particles/style.css">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script src="js/faq.js"></script>
</head>
<body>
<div id="particles-js"></div>
<div id="particles-color-overlay"></div>
<!--<div id="top-logo-ani"><img src="images/logo.png"></div>-->
<!--<header class="onTop">
	<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div id="header-logo"><a class="navbar-brand" href="#"><img src="images/logo.png"></a></div>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
<?php /*foreach ($menus as $i => $menu) { ?>
			<li class="nav-item<?php echo $i == 0 ? " active" : ""; ?>">
				<a class="nav-link" href="#<?php echo $menu['href']; ?>"><?php echo $menu['title']; ?></a>
			</li>
<?php }*/ ?>
		</ul>
		</div>
	</nav>
</header>-->

<section id="home">
	<div class="home-content">
		<img src="images/logo-footer.png"><span> - FAQS</span>
	</div>
</section>
<input class="for-clipboard" type="text" value="<?php echo $signature; ?>" id="signature">
<input class="for-clipboard" type="text" value="<?php echo $contract; ?>" id="contract">
<section id="faq">
	<div class="skew-div"></div>
	<!--<h1>VN3T - FAQ</h1>-->
	<div class="faq-div">
<?php foreach ($faqs as $i => $faq) { ?>
		<div class="faq-question-div">
			<p class="faq-question" for="<?php echo $i + 1; ?>"><?php echo $faq['q']; ?></p>
		</div>
		<div class="faq-answer answer<?php echo $i + 1; ?>">
			<?php echo $faq['a']; ?>
		</div>
		<?php //if ($i == 0) echo "<h4>Common faq</h4>"; ?>
<?php } ?>
	</div>
	<div class="skew-div"></div>
</section>
<footer>
	<div class="row">
		<div class="col col-xs-12 col-sm-12 col-md-6 follow-us">
			<div class="row">
				<div class="col col-sm-10">
					<h1>FOLLOW US</h1>
				</div>
			</div>
			<div class="row">
<?php foreach ($socials as $s) { ?>
				<div class="social-link"><a href="<?php echo $s['link']; ?>" target="_blank"><i class="fa fa-<?php echo $s['class']; ?>"></i></a></div>
<?php } ?>
			</div>
			<img src="images/logo-footer.png">
			<!--<button type="button">Become Affiliate</button>-->
			<p>Copyright &copy; 2017  Vn3t.<br>All rights reserved.</p>
		</div>
		<div class="col col-xs-12 col-sm-12 col-md-5 offset-md-1 contact-us">
			<h1>CONTACT US</h1>
			<form id="contact_frm" onSubmit="return submit_contact_frm();" method="post">
			<input type="text" id="username" name="username" placeholder="Your name" required>
			<input type="email" id="useremail" name="useremail" placeholder="E-mail" required>
			<textarea id="message" name="message" required placeholder="Your message"></textarea>
			<button type=submit>SEND</button>
			</form>
		</div>
	</div>
</footer>

<div id="work-in-progress"><div class="work-spinner"></div></div>

	<script src="particles/particles.min.js"></script>
	<script src="js/slider.js"></script>
	<script src="particles/app.js"></script>
	<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="f504cac8-32a2-4341-9e49-a69d3a0e8452";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</body>
</html>
