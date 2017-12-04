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
$problematics = array(
	array("class" => "icon-privacy", "title" => "PRIVACY"),
	array("class" => "icon-property", "title" => "INTELLECTURAL<br>PROPERTY"),
	array("class" => "icon-security", "title" => "SECURITY")
);
$problematics2 = array(
	array("img" => "vn3tcoin.png", "txt" => "MONETIZE YOUR VALUABLE DATA ASSETS<br>and<br>MACHINE LEARNING ALGORITHMs"),
	array("img" => "s2.jpg", "txt" => "SOLUTION FOR PRIVACY, SECURITY, INTELLECTUAL PROPERTY"),
	array("img" => "s3.jpg", "txt" => "CREDITABLE AND SCALABLE INFRASTRUCTURE")
);
$technologies = array(
	array("class" => "icon-gpu", "title" => "GPU POOLING &amp;<br>PROOF-OF-ALLOCATION", "content" => "<p class=\"tech-content\">All mining schemes are made to enable the creation of a “supercomputer” composed of clusters of virtualized environments powered by cooperative GPU pooling, created to handle specific calculations using specifications given by GPU power buyers.</p>
			<p class=\"tech-content\">The proof-of-allocation serves as a method for determining the quantity of processing power allocated to a single virtualized environment.</p>"),
	array("class" => "icon-data", "title" => "DATA ABSTRACTION<br>AND KPI'S", "content" => "<p class=\"tech-content\">VN3T makes this structuring and monetizing process easily available and at an attractive price, using a Data Visualization Tool, which enables the data provider to tag the key performance indicator (KPI) that can be used and propose the best statistic calculation layer that can be extracted.</p>")
);
$ecosystems = array(
	array("td1" => "Provider 1", "td2" => "Channel 1 +<br>Virtual Machine 1", "p" => "Data <i class=\"fa fa-long-arrow-right\"></i> Channel<br>Algorithm <i class=\"fa fa-long-arrow-right\"></i> VM"),
	array("td1" => "Provider 2", "td2" => "Virtual Machine 2", "p" => "Standard data<br>channel"),
	array("td1" => "Provider 3", "td2" => "Channel 3", "p" => "Standard virtual<br>machine"),
	array("td1" => "Provider 4", "td2" => "Channel 4", "p" => "Standard virtual<br>machine")
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
$roadmaps = array(
	array("date" => "2017 Q4", "content" => "ICO Custodian Fund creation"),
	array("date" => "2018 Q1", "content" => "ICO Private Investor Presale<br>ICO campaign<br>Crowdsale 1st round"),
	array("date" => "2018 Q2", "content" => "VN3T operation starts"),
	array("date" => "2018 Q3", "content" => "VN3T ethereum fork - Genesis Block -  Crypto exchange release"),
	array("date" => "2018 Q4", "content" => "VN3T mining apps Beta"),
	array("date" => "2019 Q1", "content" => "Beta release for data visualisation tool, sandbox and marketplace web (chrome, edge) and mobile clients (android, Ios)"),
	array("date" => "2019 Q2", "content" => "Alpha release for data visualisation tool, sandbox and marketplace web (chrome, edge) and mobile clients (android, Ios)"),
	array("date" => "2019 Q4", "content" => "1 Millions trade volume"),
	array("date" => "2020 Q1", "content" => "Cooperative dataset builder Alpha,"),
	array("date" => "2020 Q4", "content" => "Cooperative dataset builder Beta, 150 Millions trade volume"),
	array("date" => "2021 Q1", "content" => "Personal information pooling Beta,"),
	array("date" => "2021 Q4", "content" => "Personal information pooling Alpha, 350 Millions trade volume")
);
$administratives = array(
	array('img' => '4.png', 'title' => 'Accounting: BDO (Canada-Gibralta)', 'link' => 'https://www.bdo.com'),
	array('img' => '2.png', 'title' => 'Legal: Fasken Martineau Québec', 'link' => 'http://www.fasken.com')
);
$partners = array(
	array('img' => 'virtuba.png', "url" => "http://www.virtuba.com/"),
	array('img' => '2.png', "url" => "http://www.fasken.com/en/offices/Office.aspx?office=384fbfab-c09e-4fe9-8dd8-09c94cfb012d"),
	array('img' => '3.png', "url" => "https://www.itis.ulaval.ca/cms/site/itis/page75792.html"),
	array('img' => '4.png', "url" => "https://www.bdo.ca/en-ca/home/"),
	array('img' => '5.png', "url" => "http://www.gibraltarlawyers.com/"),
	array('img' => '6.png', "url" => "http://www.eruditescience.com/"),
	array('img' => '7.png', "url" => "http://www.montreal.ai/"),
	array('img' => '8.png', "url" => "https://www.nrc-cnrc.gc.ca/index.html"),
);
$blogs = array(
	array('img' => 'b1.png', 'title' => 'VN3T Solution for Global Data Network', 'content' => 'As data assets or algorithms become more valuable, many organizations develop strategies to extract greater value either directly or indirectly. With VN3t data stream services, it will become possible for AI decision making to develop in real-time using live data streams as well as complex services and create innovative solutions.', 'pasttime' => 'Nov 23, 2017', 'url' => 'https://medium.com/@vn3ttech/vn3t-solution-for-global-data-network-cefb29ae32d3'),
	array('img' => 'b2.jpeg', 'title' => 'Challenge and Solution of Vn3t', 'content' => 'The world is changing and physical assets are becoming less and less essential in business. In contrast, data has become main part of company assets and IT world.', 'pasttime' => 'Nov 22, 2017', 'url' => 'https://medium.com/@vn3ttech/challenge-and-solution-of-vn3t-b119faf193e0'),
	array('img' => '3.jpg', 'title' => 'Decentralized Marketplace For Global Data Network', 'content' => 'VN3T is a two-way marketplace designed for an ecosystem of data and algorithm stakeholders. The infrastructure is built using blockchain distributed ledger and self executing code technology which handles multi-layered transactional environment supporting a real-time service creation scaling market in the form of software as a service (SaaS) or “building block” strategy.', 'pasttime' => 'Nov 15, 2017', 'url' => 'https://medium.com/@vn3ttech/decentralized-marketplace-for-global-data-network-e94e4fa1707b'),
	array('img' => 'provider.png', 'title' => 'VN3T Architecture', 'content' => 'Most machine learning algorithms currently available are commonly known as “narrow artificial intelligence (AI)”. With the breakthrough of deep learning, the advent of reinforced learning, and “policy based” decision making AI, in the next ten (10) years more decision making AIs will be commonly found. Starting with self-driving cars which make ethical choices based on a regulations framework, complex chatbots and smart trading bots AI will occupy an important, vital position in many aspects of society. With VN3t data stream services, it will become possible for AI decision making to develop in real-time using live data streams as well as complex services and create innovative solutions.', 'pasttime' => 'Nov 29, 2017', 'url' => 'https://medium.com/@vn3ttech/vn3t-architecture-a4ae5bb237d2')
);
$newss = array(
	array('img' => 'https://i.imgur.com/bfdF6aS.jpg', 'title' => 'Distributed Marketplace', 'content' => 'VN3T provides a marketplace infrastructure and interface, distributed within the data community, which enables multiple organizations to easily and safely monetize their data, algorithm models and train new algorithms.', 'pasttime' => '2 days ago'),
	array('img' => 'https://i.imgur.com/oncEmGj.jpg', 'title' => 'Data Visualization Tool', 'content' => 'One of the main approach of VN3T is to make data assets and algorithms structuring and monetizing process easily available and at an attractive price, using a Data Visualization Tool.', 'pasttime' => '2 days ago')
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
$solutions = array(
	array("icon" => "s1.png", "title" => "Distributed Marketplace", "content" => "VN3T provides a free market approach which will allow users and providers to simultaneously sell and buy data and algorithm services in the form of multi-layered transactions to build a more complex service, or to extract more valuable data. These operations are all handled in a powerful distributed ledger - a virtual environment of GPU power - that will permit peer-2-peer transactions."),
	array("icon" => "s2.png", "title" => "Data Visualization Tool", "content" => "This enables the data provider to tag the key performance indicator (KPI) that can be used and propose the best statistic calculation layer that can be extracted. These statistical calculations become the data endpoint streams that are sold either by volume, bulk or time method, which is set by the data provider."),
	array("icon" => "s3.png", "title" => "Standardized Data Channels", "content" => "In a VN3T network, all Input/Output streams follow the standardized, abstracted stream format or “channel”. This makes every data or algorithm model easily sellable/scalable and each model is enabled to create a multi-layered cross service based on the “building block” approach."),
	array("icon" => "s4.png", "title" => "Sandbox", "content" => "Sandbox is the “in-network” training platform for new algorithms. The sandbox will aid the user to visualize the output data stream and to tag sellable data KPI using the data visualization tool, creating a standard output which can be used to evaluate and determine its economic value.")
);
$bios = array(
	"executive" => array(
		array('name' => 'Jean-Philippe Beaudet', 'title' => 'President<br>Co-Founder &amp; CTO', 'photo' => '1.jpg', 'detail' => "Becoming an entrepreneur was the next logical step for Jean-Philippe Beaudet and even more so as the CTO and co-founder of S3R3NITY Technologies.<br>The firm is specialized in software development services which are directly aligned with the young man’s passions, experiences and ambitions.<br>Mr. Beaudet is a highly skilled professional with extensive experience in software management, operations development, human resources management as well as design and implementation of technological pipelines.<br>As a result of his previous work and studies, Mr. Beaudet became proficient in multiple programming languages, platforms and software such as: Javascript web development software, Node.js, HTML5, CSS3, jQuery, Python and Java.<br>This specific level of knowledge has allowed him to further develop his capacities in software architecture and game development.<br>Mr. Beaudet’s ability to effectively communicate otherwise intricate concepts and ideas truly makes him an asset for transmitting intelligible data and information to his team and customers.", 'socials' => array('linkedin' => 'https://www.linkedin.com/in/jean-philippe-beaudet-12472884/')),
//		array('name' => 'Yves Lamarre', 'title' => 'Vice President/CBDO<br>Co-Founder', 'photo' => '2.jpg', 'detail' => "Former member of the Canadian Armed Forces. Yves Lamarre spent the last 12 years doing business development for physical and online retailers, mainly in Nicaragua and Spain. He was involved in real estate development in Nicaragua. He developed and built “International Call Center” and online based projects. When he came back to Canada, he decided to work on his project; Virtuba; which is a digital safety-box for individuals and 14 corporations. From the need to ensure proper security of this digital safety-box, Vn3t Technologies was born. With this blockchain technology, Vn3t Technologies is able to provide stronger level of security of data than the cloud and servers can do. As well, it respects the core element of this unique ecosystem; PRIVACY. As a strong advocate for privacy Yves Lamarre believe that every business should provide security and privacy to its customers. That is exactly what Vn3t Technologies et Virtuba are all about.", 'socials' => array('linkedin' => 'https://www.linkedin.com/in/ylvirtuba#')),
		array('name' => 'Mathieu Fanoni', 'title' => 'COO / Co-Founder', 'photo' => '3.jpg', 'detail' => "Mathieu Fanoni has an acute passion for new technologies and new ways of implementing them; he excels in providing strategic support and defines himself as an \"evangelist for AI and blockchain technologies\".<br>As a fierce believer in new digital technologies, he would say they are an indispensable tool to solve the current challenges the world faces in regards of economic issues, environment sustainability and/or global security for examples. His strong experiences in positions such as VP at G.I.P. and now VP at S3R3NITY technologies have allowed him to reinforce his natural aptitude for leadership.<br>Mr. Fanoni’s versatility and ability to simultaneously manage multiple teams and files enables both him and his team to easily adapt to various environment and clientele.", 'socials' => array('linkedin' => 'https://www.linkedin.com/in/mathieufanoni')),
		array('name' => 'Daniel Bastien', 'title' => 'CFO', 'photo' => '4.jpg', 'detail' => "Strong experience in structuring corporate, legal and accounting environment for web based projects. He was a founding member of a web based company.<br>At the start, they were 4 people, when he left the company, they were 200 employees.<br>He was capable to work with multiple partners in various continents.<br>Have extensive experience in Europe, Latin America and Asia.<br>He has a strong experience in implementation of stimulating work environment.<br> 15 Specialties: International corporate, accounting and fiscal planning. Risk analysis of emerging markets. Government and Tax agencies negotiation. Bring start-up to multi-million dollars company.", 'socials' => array('linkedin' => 'https://www.linkedin.com/in/daniel-bastien-63583b6/')),
		array('name' => 'Dominique-Sébastien Forest', 'title' => 'CBDO', 'photo' => '5.jpg', 'detail' => "Dominique-Sébastien Forest – Strategic Senior Executive Advisor<br>As a Strategic Senior Executive Advisor; Dominique-Sébastien Forest works with CEOs and Executive Teams with a comprehensive approach, supporting his clients by taking an active role within the organization; generating revenues, raising capital, finding fitting talent and creating the appropriate communication channels.<br>His involvement includes: Strategic Planning, Corporate Development, Business Development, PR & Product Plans, Sales Funnel Optimization, Operational Efficiency, and Scalability & Executive Coaching.<br>In the past, Mr. Forest worked with Edelman Communications, was Chairman of the <br>Internet Advertising Bureau of Canada, sat on the advisory boards of the Canadian Innovation Exchange and Next Media.<br>He also mentored young entrepreneurs at Founder Fuel – a usiness start-up accelerator program.<br>Last but most certainly not least, Mr.Forest spent three years as Vice-President, National Digital Solutions for Transcontinental Media, where he was responsible for the digital strategy, including the diversification of product offerings and the acceleration and growth of the New Media and Digital Solutions Group.<br>During his mandate, the company won multiple awards including Marketing Magazine’s 2012 Media Player of the Year.", 'socials' => array('linkedin' => 'https://www.linkedin.com/in/dominiqueforest/')),
//		array('name' => 'In Process', 'title' => 'CAIO', 'photo' => '6.jpg', 'detail' => "", 'socials' => array('linkedin' => '#')),
	),
	"technical" => array(
		array('name' => 'Dmytro Sytnyk', 'title' => 'Technical ICO<br>manager', 'photo' => '1.jpg', 'detail' => "Human Resource Management: Research and define job descriptions to fill department resource needs. Screen and recommend interview candidates. Integrate new hires into teams and processes.<br>
Project discovery and planning: Guide work from client needs and idea to goals and delivery. Pull together team leaders and account staff to research and define new products and budget. Build and delegate work plans, communicating progress to account executives.<br>
Accountability: Set clear expectations and goals for project teams. Track progress against timeline, milestones and budget, revise as needed.<br><br>
Skill sets: <br>
- JavaScript ES6+<br>
- React / React Native / Angular / Meteor / CoffeeScript / Node.js Express Framework<br>
- Redux for JavaScript<br>
- Less, CSS3, Bootstrap<br>
- D3, Three.js<br>
- HTML5<br>
- MongoDB, MySQL, Postgresql, MSSQL<br>
- WebGL<br>
- TypeScript/Flow<br>
- Node.js + Express + ASP.NET + C# + PHP + Laravel + Symfony +Java + Spring<br>
- Scala + Akka<br>
- Blockchain, Smart Contract, Bitcoin, Ethereum, Litecoin, Ripple, Truffle, Bitgo, Kraken, Galileo<br>
--TOOLS--<br>
- Webpack/Gulp<br>
- Git / Bitbucket / Gitlab<br>
- Jest, Karma, Mocha, Jasmine, Enzyme<br>
- Selenium<br>
- WebStorm / PHPStore / PyCharm<br>
- Jira/Asana/Redmine<br>
- Heroku / AWS / Godday / Digital Ocean / Google Cloud", 'socials' => array('linkedin' => '#')),
		array('name' => 'Ahmed Al-Bayati', 'title' => 'Zealot<br>Community Manager &amp; Evangelist', 'photo' => '10.jpg', 'detail' => "Managing and directing Vn3t's internal and external communications. Lead corporate multimedia divisions and technical departments for develop and execute marketing campaigns that build memorable brands.<br>
Anayzing business architecture and marketing strategies of company, build web sites, social medias and other advertising campaigns so that more investors and affiliates have interest to our idea and marketing strategy.<br>
Expert in the technical, conceptual and content development of sales-driving collateral.<br><br>
Skills:<br>
Marketing Strategies and Campaigns<br>
Corporate Communications<br>
Web Content development<br>
Market Research<br>
Development of Training Materials", 'socials' => array('linkedin' => '#')),
		array('name' => 'Julia Fodor', 'title' => 'Senior trooper developer', 'photo' => '2.jpg', 'detail' => "I am a full stack web developer with over 10 years experience of working history.<br><br>Main Skills :<br>✓ Basic Web Skills : JavaScript / jQuery / PHP / HTML / CSS / SASS<br>✓ JavaScript Frameworks : Angular / Vue / Node / Express Framework<br>✓ PHP Frameworks : Laravel / CodeIgniter / Symfony / Yii / CakePHP<br>✓ WebGL Skills : ThreeJS / BabylonJS / Canvas<br>✓ Databases: MongoDB / MySQL / Sqlite / DB Schema<br>✓ Cloud Computing Technologies: Heroku / AWS / EC2 / Google Cloud / Digital Ocean<br><br>I am specialist for AngularJs and Vue.js in frontend development and PHP, nodeJS frameworks in backend development.<br><br>My goal is to provide 100% highest quality of work to my clients.<br><br>I like challenging hard and big projects.", 'socials' => array('linkedin' => 'http://beautifulprincess.000webhostapp.com/')),
		array('name' => 'Eduard Dimitru', 'title' => 'Front-end artists', 'photo' => 'eduard.png', 'detail' => "", 'socials' => array('linkedin' => 'https://www.linkedin.com/in/eduard-dumitru-59112a146/')),
		array('name' => 'Christopher Barber', 'title' => 'Smart Contract Developer', 'photo' => 'chris.jpg', 'detail' => "Blockchain Advisor, Solidity Programmer and Whitepaper Author<br>Chris has been project managing engineering for over 10 years, and recently migrated into the blockchain space relying on his computer science degree and love for anything tech to advance himself quickly. Chris has been helping people in the blockchain space achieve their goals since 2016.", 'socials' => array('linkedin' => '#')),
		array('name' => 'Vladimir Chernyshev', 'title' => 'FullStack Developer', 'photo' => 'vlad.jpg', 'detail' => "As a experienced developer in Ethereum/Blockchain development, I specialize in development of Ethereum, Blockchain, token/smart contract and I am familiar with Daap, Solidity, web3, Node.js, Javascript.<br>I am a dedicated, reliable developer and create high quality production, clean and robust code.<br><br>-Expertise<br>Ethereum Token and smart contract<br>ERC20 standard for token/contract<br>Daap, Contract ABI<br>Cryptocurrency wallets and Blockchain Explorer<br>Ethereum / Blockchain integration with Web site and mobile app<br><br>-Languages<br>Solidity<br>C++<br>QT<br>Web3<br><br>-Web Application<br>React<br>Node.js<br>Angular 1.x/2.x/4<br><br>-Dev Environment<br>Truffle<br>Metamask<br>Geth<br>TestRPC (local test)<br>Ropsten (Full testnet)", 'socials' => array('linkedin' => '#')),
		array('name' => 'Nikita Rozmaritsa', 'title' => 'System Administrator and DevOps Expert', 'photo' => 'nik.png', 'detail' => "Core competence is to manage and provide remote support on Windows 2003+ Server, RDP and Linux(CentOs/RedHat/Ubuntu/Debian) or any other Linux/Unix variant servers.<br>Expert on AWS, Azure, Google Cloud, Rackspace, DigitalOcean, Softlayer, Cloudflare, CloudVPS like cloud infrastructures, LAMP & MEAN & MERN Architecture, MySQL clustering and replications.<br>Having in depth hands on experiences on DevOps with Ansible, LAMP, MEAN, MERN, specialized Magento/Wordpress hosting, Nameservers, PCI-DSS compliance, Mail Servers, OpenLDAP, OpenVPN, Monitoring tools (Nagios, Zabbix, Ncentral, GWOS, FAN), Squid, Dansguardian, FreeNAS, OCS/GLPI, SNORT, SVN, CVS, GIT, Clustering, Virtualization with OpenStack, Vagrant, VMWare, Virtualbox, OpenVZ and many more tools in production/development environments.", 'socials' => array('linkedin' => '#')),
		array('name' => 'John Popescu', 'title' => 'Technical Advisor', 'photo' => 'john.jpg', 'detail' => "A software developer, technical advisor, writer who has been focusing on web development for 8 years.<br>John have worked as a team member and a lead developer to develop security software, web sites and client-side web apps and recently has been working on ethereum blockchain technology and DAO application development, helped and advised clients to apply latest technology, well written document for the project.<br>Have professional knowledge and experience in software engineering and web development technology, very strong at blockchain smart contract and token development, crypto techniques.", 'socials' => array('linkedin' => '#')),
//		array('name' => 'In process', 'title' => 'Decentralized Storage Wizard', 'photo' => '8.jpg', 'detail' => "", 'socials' => array('linkedin' => '#')),
//		array('name' => 'In process', 'title' => 'Devops Buccaneer', 'photo' => '9.jpg', 'detail' => "", 'socials' => array('linkedin' => '#')),
//		array('name' => 'John Popescu', 'title' => 'Technical Writer', 'photo' => '11.jpg', 'detail' => "", 'socials' => array('linkedin' => '#')),
//		array('name' => 'In process', 'title' => 'AI guru’s', 'photo' => '12.jpg', 'detail' => "", 'socials' => array('linkedin' => '#')),
//		array('name' => 'In process', 'title' => 'Uncanny cryptographer', 'photo' => '13.jpg', 'detail' => "", 'socials' => array('linkedin' => '#')),
//		array('name' => 'In process', 'title' => 'Obsessive Data scientist', 'photo' => '14.jpg', 'detail' => "", 'socials' => array('linkedin' => '#')),
	),
	"advisory" => array(
		array('name' => 'University LAVAL', 'title' => 'University LAVAL', 'photo' => 'ITIS.jpg', 'detail' => "", 'socials' => array('linkedin' => '#'), "link" => "https://www.itis.ulaval.ca/cms/site/itis/page75792.html"),
//		array('name' => '', 'title' => '', 'photo' => '2.jpg', 'detail' => "", 'socials' => array('linkedin' => '#')),
//		array('name' => '', 'title' => '', 'photo' => '3.jpg', 'detail' => "", 'socials' => array('linkedin' => '#')),
//		array('name' => '', 'title' => '', 'photo' => '4.jpg', 'detail' => "", 'socials' => array('linkedin' => '#')),
//		array('name' => '', 'title' => '', 'photo' => '5.jpg', 'detail' => "", 'socials' => array('linkedin' => '#')),
	),
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
	<link rel="stylesheet" href="css/countdown.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" media="screen" href="particles/style.css">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script src="js/countdown.js"></script>
	<script>var roadmap_datas = <?php echo json_encode($roadmaps); ?>;</script>
	<script>var problematic_datas = <?php echo json_encode($problematics2); ?>;</script>
	<script>var bios = <?php echo json_encode($bios); ?>;</script>
	<script src="js/main.js"></script>
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/highcharts-3d.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script src="js/piechart.js"></script>
	<script src="js/scroll.js"></script>
</head>
<body>
<div id="particles-js"></div>
	<div id="top-logo-ani"><img src="images/logo.png"></div>
<header class="onTop">
	<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div id="header-logo"><a class="navbar-brand" href="#"><img src="images/logo.png"></a></div>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
<?php foreach ($menus as $i => $menu) { ?>
			<li class="nav-item<?php echo $i == 0 ? " active" : ""; ?>">
				<a class="nav-link" href="#<?php echo $menu['href']; ?>"><?php echo $menu['title']; ?></a>
			</li>
<?php } ?>
		</ul>
		</div>
	</nav>
</header>

<section id="home">
<!-- Video BG Init -->
<!-- Please, replace three video files in folder "video" with your own ones -->
<div class="bg-video-wrapper" id="video-background-1">
	<div class="bg-video-overlay bg-dark-alfa-50"></div>
</div>
<!-- End Video BG Init -->
<!--<div class="video-background">
    <div class="video-foreground">
      <iframe src="https://www.youtube.com/embed/W0LHTWG-UmQ?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=W0LHTWG-UmQ" frameborder="0" allowfullscreen></iframe>
    </div>
</div>-->
<div class="color-background"></div>
<div class="home-content">
	<h1 id="animate-txt1">
		<span class="ani-txt1-sub ani-txt1-sub1">Decentralized</span>
		<span class="ani-txt1-sub ani-txt1-sub2">Marketplace</span>
		<span class="ani-txt1-sub ani-txt1-sub3">For</span>
		<span class="ani-txt1-sub ani-txt1-sub4">Global</span>
		<span class="ani-txt1-sub ani-txt1-sub5">Data</span>
		<span class="ani-txt1-sub ani-txt1-sub6">Network</span>
	</h1>
	<p>VN3T is <span id="animate-txt2" vals="Built for AI,Structured Data,Built on Ethereum,A 2-way Marketplace,Data Economy,Open Source,A Distributed Economy,Built for Big Data,A SaaS Platform,Fast & Scalable,Safe & Secure,An Ecosystem,A Free Market"></span></p>
	<!--<p class="align-center">VN3T is <span id="animate-txt3" vals="Built for AI,Structured Data,Built on Ethereum,A 2-way Marketplace,Data Economy,Open Source,A Distributed Economy,Built for Big Data,A SaaS Platform,Fast & Scalable,Safe & Secure,An Ecosystem,A Free Market"></span></p>-->
	<!--<div class="home-icon"></div>
	<div class="home-btn-div">PARTICIPATE NOW!</div>-->
</div>
</section>
<section id="problematic">
	<h1>PROBLEMATIC</h1>
<!--
	<div class="row">
<?php /*foreach ($problematics as $prob) { ?>
		<div class="col col-md-4">
			<div class="prob-icon <?php echo $prob['class']; ?>"></div>
			<p><?php echo $prob['title']; ?></p>
		</div>
<?php }*/ ?>
	</div>
-->
	<div class="htmleaf-container">
		<div class="carousel">
			<figure>
<?php for ($i = 0; $i < 3; $i++) { foreach ($problematics2 as $prob) { ?>
				<img src="images/problematic/<?php echo $prob['img']; ?>" alt="">
<?php } } ?>
			</figure>
			<button class="nav prev"><i class="fa fa-angle-left"></i></button>
			<button class="nav next"><i class="fa fa-angle-right"></i></button>
			<div class="prob-slider-bg"><div class="prob-txt-container"><p></p></div></div>
		</div>
	</div>
	<!--<p class="amp">&amp;</p>-->
	<!--<p class="description">The monopoly of giants on structured data</p>-->
</section>
<section class="solution-section">
	<h1>SOLUTIONS</h1>
	<div class="row">
<?php foreach($solutions as $i => $item) { ?>
		<div class="col col-sm-12 col-md-6 col-lg-3">
			<div class="solution-title"><h3><?php echo $item['title']; ?></h3></div>
			<div class="solution solution-<?php echo $i; ?>" style="background-image:url(images/solution/<?php echo $item['icon']; ?>);">
				<div class="solution-content solution-content-<?php echo $i; ?>">
					<h3>
						<?php echo $item['title']; ?>
						<p><?php echo $item['content']; ?></p>
					</h3>
				</div>
			</div>
		</div>
<?php } ?>
	</div>
</section>
<section class="technology">
	<h1>TECHNOLOGY</h1>
	<div class="row">
<?php foreach ($technologies as $tech) { ?>
		<div class="col col-sm-6">
		<div class="tech-block">
			<div class="tech-icon <?php echo $tech['class']; ?>"></div>
			<p class="tech-title"><?php echo $tech['title']; ?></p>
			<?php echo $tech['content']; ?>
		</div>
		</div>
<?php } ?>
	</div>
</section>
<section class="ecosystem">
	<h1>ECOSYSTEM</h1>
	<img class="ecosystem-image" src="images/provider.png">
	<img class="ecosystem-image" src="images/customer_service.png">
	<!--<img class="ecosystem-image" src="images/ecosystem.png">-->
	<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>-->
<!--	<div class="row ecosystem-wireframe-div">
<?php /*foreach ($ecosystems as $eco) { ?>
		<div class="col-sm-3">
			<table class="ecosystem-table">
				<tr><td><?php echo $eco['td1']; ?></td></tr>
				<tr><td><?php echo $eco['td2']; ?></td></tr>
			</table>
			<p><?php echo $eco['p']; ?></p>
		</div>
<?php }//*/ ?>
	</div>-->
</section>
<section class="icodetails">
	<h1>VC01n Pre-Sale</h1>
	<div class="countdown row">
		<div class="countdown-day col col-sm-6 col-md-6 col-lg-3">
			<canvas id="countdown1" width="220px" height="220px"></canvas>
			<div class="counting-val days-val"></div>
			<p>DAYS</p>
		</div>
		<div class="countdown-hour col col-sm-6 col-md-6 col-lg-3">
			<canvas id="countdown2" width="220px" height="220px"></canvas>
			<div class="counting-val hours-val"></div>
			<p>HOURS</p>
		</div>
		<div class="countdown-minute col col-sm-6 col-md-6 col-lg-3">
			<canvas id="countdown3" width="220px" height="220px"></canvas>
			<div class="counting-val minutes-val"></div>
			<p>MINUTES</p>
		</div>
		<div class="countdown-second col col-sm-6 col-md-6 col-lg-3">
			<canvas id="countdown4" width="220px" height="220px"></canvas>
			<div class="counting-val seconds-val"></div>
			<p>SECONDS</p>
		</div>
	</div>
	<p class="ico-detail-txt">The VC01n runs from December 1st until December 22nd 2017.<br>The Public Sale will begin March 1st 2018. </p>

	<div id="pie-container"></div>
	<div>
		<p><span class="white">Hard Cap for Crowdsale:</span> <span class="black">55000 Ether</span> <span class="white">Supply:</span> <span class="black">4.25  billion tokens</span></p>
		<table align=center>
			<tr><td><span class="ico-percent-color color1"></span></td><td><span class="white">76.8% Community:</span> <span class="black">3 250 000 000</span></td></tr>
			<tr><td><span class="ico-percent-color color2"></span></td><td><span class="white">5.8 % Affiliate program:</span> <span class="black">250 000 000</span></td></tr>
			<tr><td><span class="ico-percent-color color3"></span></td><td><span class="white">11.6 % Founders:</span> <span class="black">500 000 000</span></td></tr>
			<tr><td><span class="ico-percent-color color4"></span></td><td><span class="white">5.8 % Bounties, Rewards:</span> <span class="black">250 000 000</span></td></tr>
		</table>
		<p><span class="white">Purchase method:</span> <span class="black">USD, ETH, BTC, ZCash, DashCoin</span></p>
	</div>
</section>
	<input class="for-clipboard" type="text" value="<?php echo $signature; ?>" id="signature">
	<input class="for-clipboard" type="text" value="<?php echo $contract; ?>" id="contract">
<section id="faq">
	<h1>VN3T - FAQ</h1>
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
</section>
<section id="roadmap">
	<h1>ROADMAP</h1>
	<div id="roadmap_graph"></div>
</section>
<section id="members">
	<h1>EXECUTIVE MEMBERS</h1>
	<div class="row exe-members">
<?php foreach ($bios['executive'] as $i => $em) { ?>
		<?php /* ?><div class="col col-xs-12 col-sm-6 col-md-4<?php echo $i == 3 ? ' offset-lg-0 offset-md-2' : ''; ?><?php echo $i == 4 ? ' col-lg-4 offset-lg-4 offset-md-0 offset-sm-3' : ' col-lg-3'; ?>"><?php //*/ ?>
		<?php //* ?><div class="col col-xs-12 col-sm-6 col-md-6 col-lg-3"><?php //*/ ?>
			<div class="circle-dashed exe-member" style="background-image: url(images/member/executive/<?php echo $em['photo']; ?>);" onclick="show_bio('executive', <?php echo $i; ?>)">
				<div class="member-detail">
					<div class="member-info">
						<p><?php echo $em['title']; ?></p>
						<div class="member-soicals">
							<a href="<?php echo $em['socials']['linkedin']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
			</div>
			<p><?php echo $em['name']; ?></p>
		</div>
<?php } ?>
	</div>
	<h1>TECHNICAL TEAM</h1>
	<div class="row tech-members">
<?php foreach ($bios['technical'] as $i => $tm) { ?>
		<div class="col col-xs-12 col-sm-4 col-md-3 col-lg-3<?php echo $i == 6 ? " offset-lg-0 offset-md-0 offset-sm-2" : ''; ?>">
			<div class="circle-dashed tech-member" style="background-image: url(images/member/technical/<?php echo $tm['photo']; ?>);" onclick="show_bio('technical', <?php echo $i; ?>)">
				<div class="member-detail">
					<div class="member-info">
						<p><?php echo $tm['title']; ?></p>
						<div class="member-soicals">
							<a href="<?php echo $tm['socials']['linkedin']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
			</div>
			<p><?php echo $tm['name']; ?></p>
		</div>
<?php } ?>
	</div>
</section>
<section class="administrative">
	<h1>ADMINISTRATIVE</h1>
	<div class="row">
<?php foreach ($administratives as $a) { ?>
		<div class="col col-xs-12 col-sm-6 administrative-item">
			<img src="images/administrative/<?php echo $a['img']; ?>">
			<div class="administrative-item-info">
				<p><?php echo $a['title']; ?><br><span><a href="<?php echo $a['link']; ?>" target="_blank"><?php echo $a['link']; ?></a></span></p>
			</div>
		</div>
<?php } ?>
	</div>
</section>
<section id="advisory">
	<h1>ADVISORY TEAM</h1>
	<div class="row">
<?php foreach ($bios['advisory'] as $i => $am) { ?>
		<div class="col col-xs-12 col-sm-12 col-md-6 col-lg-6 offset-md-3 offset-lg-3">
			<a href="<?php echo $am['link']; ?>" target="_blank"><img src="images/member/advisory/<?php echo $am['photo']; ?>" width="90%"></a>
		</div>
<?php } ?>
	</div>
</section>
<section id="partners">
	<h1>PARTNERS</h1>
	<div class="row">
<?php foreach ($partners as $p) { ?>
		<div class="col col-xs-12 col-sm-6 col-md-3">
			<div class="partner-bg" style="background-image: url(images/partners/<?php echo $p['img']; ?>);" onclick="window.open('<?php echo $p['url']; ?>')"></div>
		</div>
<?php } ?>
	</div>
</section>
<section class="blogs-news">
	<div class="row">
		<div class="blog-col col col-xs-12 col-sm-12 col-lg-8">
			<h1>BLOG</h1>
			<div class="row">
<?php foreach ($blogs as $b) { ?>
				<div class="col-xs-12 col-md-6">
					<div class="blog" style="background-image:url(images/blog/<?php echo $b['img']; ?>)">
						<div class="blog-infos-container" onclick="window.open('<?php echo $b['url']; ?>')">
							<div class="blog-infos">
								<p class="blog-title"><?php echo $b['title']; ?></p>
								<p class="blog-past"><?php echo $b['pasttime']; ?></p>
								<p class="blog-content"><?php echo $b['content']; ?></p>
							</div>
						</div>
					</div>
				</div>
<?php } ?>
			</div>
		</div>
		<div class="news-col col col-xs-12 col-sm-12 col-lg-4">
			<h1>NEWS</h1>
			<div class="row">
<?php foreach ($newss as $n) { ?>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
					<div class="news" style="background-image:url(<?php echo $n['img']; ?>)">
						<div class="news-infos-container">
							<div class="news-infos">
								<p class="news-title"><?php echo $n['title']; ?></p>
								<p class="news-past"><?php echo $n['pasttime']; ?></p>
								<p class="news-content"><?php echo $n['content']; ?></p>
							</div>
						</div>
					</div>
				</div>
<?php } ?>
			</div>
		</div>
	</div>
</section>
<!--
<section id="countdown">
<div class="countdown-container main-example" id="countdown-counter">
<div class="time days flip">
  <span class="count curr top">00</span>
  <span class="count next top">00</span>
  <span class="count next bottom">00</span>
  <span class="count curr bottom">00</span>
  <span class="label">days</span>
</div>

<div class="time hours flip">
  <span class="count curr top">00</span>
  <span class="count next top">00</span>
  <span class="count next bottom">00</span>
  <span class="count curr bottom">00</span>
  <span class="label">hours</span>
</div>

<div class="time minutes flip">
  <span class="count curr top">00</span>
  <span class="count next top">00</span>
  <span class="count next bottom">00</span>
  <span class="count curr bottom">00</span>
  <span class="label">min</span>
</div>

<div class="time seconds flip">
  <span class="count curr top">00</span>
  <span class="count next top">00</span>
  <span class="count next bottom">00</span>
  <span class="count curr bottom">00</span>
  <span class="label">sec</span>
</div>
</div>
</section>
-->
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

<div id="biodialog_bg"></div>
<div id="biodialog" title="VN3T Member">
	<i class="biodlg-close-btn fa fa-close"></i>
	<div class="photo"></div>
	<p class="name"></p>
	<p class="role"></p>
	<p class="detail"></p>
	<div class="socials">
	</div>
</div>

<div id="work-in-progress"><div class="work-spinner"></div></div>

	<script src="particles/particles.min.js"></script>
	<script src="js/slider.js"></script>
	<script src="js/jquery.videobackground.min.js"></script>
	<script src="particles/app.js"></script>
<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="f504cac8-32a2-4341-9e49-a69d3a0e8452";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</body>
</html>
