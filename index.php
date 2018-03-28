<!doctype html>
<?php
include_once('arrecada.php');
//SALES
$api_sales = "http://192.168.0.23:3001/ext/getbalance/SN3r5zNcfSBMtzUsVTp2ps7PyYG3sxUZVf";
$juncao_api_sales = json_decode(file_get_contents($api_sales), true);
$api_sales2 = "http://192.168.0.23:3001/ext/getbalance/SSi9PsXc3PUCqy9dAHfgArMDivrUuCGEbw";
$juncao_api_sales2 = json_decode(file_get_contents($api_sales2), true);
$api_sales3 = "http://192.168.0.23:3001/ext/getbalance/SSZceqUgksEQc8FLVS2gMf8Wi1n55uLSn7";
$juncao_api_sales3 = json_decode(file_get_contents($api_sales3), true);
$api_sales4 = "http://192.168.0.23:3001/ext/getbalance/SYP4LKWZoADLUe5xRLf3qn2X5Aw3kVa7eQ";
$juncao_api_sales4 = json_decode(file_get_contents($api_sales4), true);
$api_sales5 = "http://192.168.0.23:3001/ext/getbalance/Sd3gMK4buFuieAVKeGEBJHtdK4nmWbriD1";
$juncao_api_sales5 = json_decode(file_get_contents($api_sales5), true);
$api_sales6 = "http://192.168.0.23:3001/ext/getbalance/SeV5SdEJP1dJrtRvBpNud2bu5oZxNacmJ4";
$juncao_api_sales6 = json_decode(file_get_contents($api_sales6), true);
$sales = $juncao_api_sales + $juncao_api_sales2 + $juncao_api_sales3 + $juncao_api_sales4 + $juncao_api_sales5 + $juncao_api_sales6;
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, maximum-scale=1">

  <title>Sperocoin</title>
  <link rel="icon" href="favicon.png" type="image/png">
  <link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="css/responsive.css" rel="stylesheet" type="text/css">
  <link href="css/animate.css" rel="stylesheet" type="text/css">

  <script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.js"></script>
  <script type="text/javascript" src="js/wow.js"></script>
  <script type="text/javascript" src="js/classie.js"></script>
  <script src="contactform/contactform.js"></script>

  <!-- =======================================================
    Theme Name: Knight
    Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->

</head>

<body>
  <header class="header" id="header" style="padding-top: 4%">

<ul class="nav navbar-nav navbar-left" style="padding-left: 1%;">
    <li class="dropdown">
      <a href="#" class="dropdown-toggle btn-default" data-toggle="dropdown" role="button" aria-expanded="false">Language <span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="index.php"><img src="http://img.freeflagicons.com/thumb/glossy_square_icon/united_states_of_america/united_states_of_america_64.png" width="20px"> English</a></li>
        <li><a href="index_pt.php"><img src="http://img.freeflagicons.com/thumb/glossy_square_icon/brazil/brazil_64.png" width="20px"> Portuguese</a></li>
      </ul>
    </li>
  </ul>

    <!--header-start-->
    <div class="container">
      <figure class="logo animated fadeInDown delay-07s">
        <a href="#"><img src="img/logo.png" alt=""></a>
      </figure>
      <h1 class="animated fadeInDown delay-07s">Welcome To Spero Coin<br>Sustainability in technology</h1>
      <ul class="we-create animated fadeInUp delay-1s" >
        <li>We are an ecologically correct cryptocurrency that aims to eliminate the waste of electrical energy.</li>
      </ul>
      <a class="link animated fadeInUp delay-1s servicelink" href="#info">Get Started</a> <a class="link animated fadeInUp delay-1s servicelink" href="white_paper/index.php">White Paper</a>
      <br>

      <div class="row">
        <div class="col-md-3"></div>
    <div class="col-md-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title  animated pulse infinite" style="font-size:25px"><i class="fa fa-money" aria-hidden="true"></i> Spero Sales</h3>
          <span class="pull-right "></span>
        </div>
        <div class="panel-body">
          <a class="link animated delay-1s servicelink animated pulse infinite" href="https://sperocoin.ddns.net/exchange" target="_blank">BUY NOW!</a><br>
          <b style="color:green;font-size: 18px">Total reserved for sale:<br> 30,000.00000000</b><br>
          <b style="color:red;font-size: 18px">Total Sold:<br><?php echo $sales - 30000; ?></b><br>
          <b style="color:blue;font-size: 18px">Total available for sale:<br><?php echo $sales; ?> </b><br>
          <br><b style="font-size: 18px">Total collected:</b><br>
          <br><b style="font-size: 18px"><i class="fa fa-btc" aria-hidden="true"></i> Bitcoin[BTC]:<? if($BTC <= 0){echo "0.00000000 BTC";}else{echo number_format($BTC,"8",".",",")." BTC";} ?></b><br>
          <br><b style="font-size: 18px"><i class="fa fa-usd" aria-hidden="true"></i> Dolar[USD]: $ <? if($USD <= 0){echo "0.00";}else{echo $USD;} ?></b><br>
          <br><b style="font-size: 18px"><i class="fa fa-money" aria-hidden="true"></i> Real[BRL]: R$ <? if($BRL <= 0){echo "0.00";}else{echo $BRL;} ?></b><br>
          <br><b style="font-size: 18px"><i class="fa-spin fa fa-circle-o-notch" aria-hidden="true"></i> Digital Payments:</b><br>
          <b style="font-size: 18px">MERCADOPAGO: R$ <? if($MERCADOPAGO <= 0){echo "0.00";}else{echo $MERCADOPAGO;} ?></b><br>
          <b style="font-size: 18px">PAYPAL: $ <? if($PAYPAL <= 0){echo "0.00";}else{echo $PAYPAL;} ?></b><br>
          <!-- <b style="font-size: 18px">PAGSEGURO: R$ <? if($PAGSEGURO <= 0){echo "0.00";}else{echo $PAGSEGURO;} ?></b><br>
          <b style="font-size: 18px">CELCOIN: R$ <? if($CELCOIN <= 0){echo "0.00";}else{echo $CELCOIN;} ?></b><br>-->
        </div>
      </div>
    </div>
      <div class="col-md-3"></div>
  </div>

      <div class="row">
    <div class="col-md-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Collection of Bitcoin:</h3>
          <span class="pull-right "></span>
        </div>
        <div class="panel-body">
            <b style="font-size: 18px"><i class="fa fa-btc" aria-hidden="true"></i> Bitcoin[BTC]: <? if($BTC <= 0){echo "0.00000000 BTC";}else{echo number_format($BTC,"8",".",",")." BTC";} ?></b>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Collection of Dolar:</h3>
          <span class="pull-right "></span>
        </div>
        <div class="panel-body">
            <b style="font-size: 18px"><i class="fa fa-usd" aria-hidden="true"></i> Dolar[USD]: $ <? if($USD <= 0){echo "0.00";}else{echo $USD;} ?></b>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Collection of Real:</h3>
          <span class="pull-right "></span>
        </div>
        <div class="panel-body">
            <b style="font-size: 18px"><i class="fa fa-money" aria-hidden="true"></i> Real[BRL]: R$ <? if($soma_brl <= 0){echo "0.00";}else{echo number_format($soma_brl,'2','.',',');} ?></b>
        </div>
      </div>
    </div>
  </div>


    </div>
  </header>
  <!--header-end-->

  <nav class="main-nav-outer" id="test">
    <!--main-nav-start-->
    <div class="container">
      <ul class="main-nav">
        <li><a href="#header">Home</a></li>
        <li><a href="#info">Info</a></li>
        <li><a href="#Where_we_are">Where are we?</a></li>
        <li class="small-logo"><a href="#header"><img src="img/small-logo.png" alt="" width="45" class="fa-spin"></a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="http://exsperocoin.ddns.net:3001" target="_blank">Block Explorer</a></li>
        <li><a href="#downloads">Downloads</a></li>
      </ul>
      <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
  </nav>
  <!--main-nav-end-->



  <section class="main-section" id="info">
    <!--main-section-start-->
    <div class="container">
      <h2>Information</h2>
      <h6>See below for technical information about Spero.</h6>

      <div class="row visible-md visible-lg">
          <div class="col-sm-12 visible-md visible-lg">
          <div class="embed-responsive embed-responsive-16by9">
              <center><iframe class="embed-responsive-item" width="420" height="315" src="https://www.youtube.com/embed/9owZGSFnSOo?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></center>
          </div>
          </div>
      </div>

      <div class="row">
        <div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
          <div class="service-list">
            <div class="service-list-col1">
              <i class="fa fa-cubes"></i>
            </div>
            <div class="service-list-col2">
              <h3>Algorithm X13</h3>
              <p>This algorithm uses 13 rounds of hashing with 13 different hash-functions (blake, bmw, groestl, jh, keccak, skein, luffa, cubehash, etc.), which makes it one of most reliable in a modern cryptocurrencies world.</p>
            </div>
          </div>
          <div class="service-list">
            <div class="service-list-col1">
              <i class="fa fa-code-fork"></i>
            </div>
            <div class="service-list-col2">
              <h3>Hybrid mining PoW and PoS</h3>
              <p>With Spero you mining with proof of work(PoW[ASIC, GPU, CPU, etc]) and also mining just leaving your wallet with active balance online, open and unlocked, the well-known proof of stake(PoS).</p>
            </div>
          </div>
          <div class="service-list">
            <div class="service-list-col1">
              <i class="fa fa-database"></i>
            </div>
            <div class="service-list-col2">
              <h3>total coins</h3>
              <p>There are 7 million coins total, and were pre-mined 100,000 for application in several areas of the project.</p>
            </div>
          </div>
          <div class="service-list">
            <div class="service-list-col1">
              <i class="fa fa-comments-o"></i>
            </div>
            <div class="service-list-col2">
              <h3>Encrypted Message (E2M)</h3>
              <p>With Spero you can send encrypted messages to other users, having in hand only the address and the public key of the recipient.</p>
            </div>
          </div>
            <div class="service-list">
            <div class="service-list-col1">
              <i class="fa fa-check-square-o"></i>
            </div>
            <div class="service-list-col2">
              <h3>other information</h3>
              <p><b>Confirmations:</b><br>
                Mining: 05<br>
                Transactions: 03<br>
                <b>Block time:</b> 60 seconds<br>
                <b>Difficulty reset to each block</b><br>
                <b>Return PoS:</b> 25% per year<br>

              </p>
            </div>
          </div>

        </div>
        <figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
          <img src="img/macbook-pro.png" alt="">
          <img src="https://coinsmarkets.com/api-229-SPERO-BTC.png" alt="" style="padding-right:20%">
        </figure>

      </div>
    </div>
  </section>
  <!--main-section-end-->

<!-- TIMELINE -->
<div class="container">
  <div class="page-header">
    <h2 id="timeline">Timeline</h2>
  </div>
  <ul class="timeline">
    <li>
      <div class="timeline-badge"><i class="fa fa-code"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">2017/09/25</h4>
        </div>
        <div class="timeline-body">
          <p>→ Creation of the project using the MarteX crypto<br>
→ Generation of Merkle<br>
const char* pszTimestamp: "A esperanca eh a ultima que morre.";<br>
block.nTime: 1506335848;<br>
block.nNonce: 44360;<br>
Generation of GenesisBlock<br>
→ Launching on BitcoinTalk<br>
→ Upload files to <a href="https://github.com/sperocoin/sperocoin">Github</a><br>
→ Pool Partnership: pickaxe.online<br>
→ Hope closing project</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge warning"><i class="fa fa-code-fork"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">2017/09/26</h4>
        </div>
        <div class="timeline-body">
          <p>→Project Fork on GitHub by DigitalCoin<br>
→ Resubmission of files to GitHub</p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge danger"><i class="fa fa-code"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">2017/10/01</h4>
        </div>
        <div class="timeline-body">
          <p>→ Code update: SperoCoin-qt.pro file has been changed for
compilation in the Linux environment<br>
→ Official team shutdown Hope technical assistance in the project<br>
→ Creation of the official <a href="mailto:sperocoin@gmail.com">E-mail</a><br>
→ Temporary <a href="https://superocoin.wixsite.com/sperocoin">website</a> creation</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted"></i>
      <div class="timeline-badge warning"><i class="fa fa-file-code-o"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">2017/10/02</h4>
        </div>
        <div class="timeline-body">
          <p>→ Topic opening at: <a href="https://cryptocurrencytalk.com/topic/88487-ann-sperocoin-x13-hybrid-powpos/">Cryptocurrencytalk</a><br>
→ Start voting to add currency in Exchange <a href="https://tradesatoshi.com/Vote">TradeSatoshi</a></p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge info"><i class="fa fa-code"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">2017/10/04</h4>
        </div>
        <div class="timeline-body">
          <p>→ Block Crawler / Explorer creation</p>
          <hr>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge info"><i class="fa fa-code"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">2017/10/06​</h4>
        </div>
        <div class="timeline-body">
          <p>→ Added file in patch "src / leveldb / Makefile"
​</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge success"><i class="fa fa-code"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">2017/10/08​</h4>
        </div>
        <div class="timeline-body">
          <p>→ Update infos about end phase of PoW and start phase PoS;<br>
→ Update font of qt wallet;<br>
→ Update version;<br>
→ Update Protocol Others general's updates<br>
​</p>
        </div>
      </div>
    </li>
        <li>
      <div class="timeline-badge danger"><i class="fa fa-code"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">2017/10/10</h4>
        </div>
        <div class="timeline-body">
          <p>→ Added option of cleaning of orphans blocks;<br>
→ Added display option "STAKE" in the "type" column inside the "Transactions" tab;<br>
→ Added "setban" node "" add | remove "(bantime)" / "listbanned" and "clearbanned" in the RPC console;</p>
        </div>
      </div>
    </li>
        <li class="timeline-inverted">
      <div class="timeline-badge warning"><i class="fa fa-code"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">2017/10/11</h4>
        </div>
        <div class="timeline-body">
          <p>→ Ban Forked Peers who are stuck in a Getblocks Loop.
​</p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge success"><i class="fa fa-database"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">2017/10/12</h4>
        </div>
        <div class="timeline-body">
          <p>→ Listed right now at <a href="https://coinsmarkets.com/trade-BTC-SPERO.htm">Coins Markets</a></p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge danger"><i class="fa fa-cubes"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">2017/10/21</h4>
        </div>
        <div class="timeline-body">
          <p>→ <a href="http://sperocoin.ddns.net:3001/">Oficial Block Explorer</a>
​</p>
        </div>
      </div>
    </li>
        <li>
      <div class="timeline-badge info"><i class="fa fa-code"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">2017/10/22</h4>
        </div>
        <div class="timeline-body">
          <p>→ Update of strings names;<br>
→ Updating information in README.md<br>
→ Update Stake Info in QT Wallet</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge success"><i class="fa fa-database"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">2017/10/24</h4>
        </div>
        <div class="timeline-body">
          <p>→ <a href=" https://sperocoin.ddns.net/faucet">Faucet Official</a></p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge danger"><i class="fa fa-code"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">2017/11/01</h4>
        </div>
        <div class="timeline-body">
          <p>→ Channel created using <a href="httsp://sperocoin.slack.com">Slack</a></p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge warning"><i class="fa fa-file-code-o"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">2017/11/04</h4>
        </div>
        <div class="timeline-body">
          <p>→ Start voting to add currency in <a href="https://c-cex.com/?id=vote&coin=spero">C-CEX</a></p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge warning"><i class="fa fa-file-code-o"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">2017/11/11</h4>
        </div>
        <div class="timeline-body">
          <p>→ Partnership with the CURSAGRAM channel in the TELEGRAM application with SPERO as the main sponsor.</p>
        </div>
      </div>
    </li>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge warning"><i class="fa fa-file-code-o"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">2017/11/12</h4>
        </div>
        <div class="timeline-body">
          <p>→ Forum Modification Bitcointalk: Jr. Member</p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge success"><i class="fa fa-database"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">2018/01/24</h4>
        </div>
        <div class="timeline-body">
          <p>→ Official release of the Android application based on Webwallet.</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge success"><i class="fa fa-database"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">2018/03/26</h4>
        </div>
        <div class="timeline-body">
          <p>→ Register seller profile on the brazilian site <a href="https://p2brasil.com/produto/sperocoin/" target="_blank">P2Brasil</a><br>
              → Currency register on the Brazilian site <a href="https://catalogop2p.com.br/sperocoin" target="_blank">Catálogo P2P</a><br>
              → Register seller profile on the brazilian site <a href="https://catalogop2p.com.br/sperocoin" target="_blank">Catálogo P2P</a></p>
        </div>
      </div>
    </li>
  </ul>
</div>

<!-- TIMELINE -->

<!--ROADMAP -->

<div class="container">
  <div class="page-header">
    <h2 id="timeline">ROADMAP - 2018<br></h2>
      <h4 id="timeline"><center>
        Subtitle:<br>
        <i class="fa fa-star"></i> - Task Executed<br>
        <i class="fa fa-star-half-o"></i> - Task In Progress<br>
        <i class="fa fa-star-o"></i> - Task Proposal<br>
      </center></h4>
  </div>
  <ul class="timeline">
    <li>
      <div class="timeline-badge success"><i class="fa fa-tasks
"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">January</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star"></i> Official Android Application Launch </p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge danger"><i class="fa fa-tasks
"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">February</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star-half-o"></i> Official Cloud Mining Website</p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge danger"><i class="fa fa-tasks
"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">March</h4>
        </div>
        <div class="timeline-body">
          <p>
            <i class="fa fa-star-half-o"></i> Official Cloud Mining Website - Testing phase Started<br>
            <i class="fa fa-star"></i> Register seller profile on the brazilian site P2Brasil<br>
            <i class="fa fa-star"></i> Currency register on the Brazilian site Catálogo P2P<br>
            <i class="fa fa-star"></i> Register seller profile on the brazilian site Catálogo P2P<br>
            <i class="fa fa-star-o"></i> Release of cellular recharging system at the official exchange office<br>
            <i class="fa fa-star-o"></i> Participation in social projects within the community of the city of Belo Horizonte<br>
            <i class="fa fa-star-o"></i> Expansion of the Social Market and Spero Social Bank</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge danger"><i class="fa fa-tasks"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">April</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star-o"></i> Release of withdrawals in Reais (BRL) at the official exchange office</p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge danger"><i class="fa fa-tasks
"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">May</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star-o"></i> Larger Currency Entry, preferably Yobit</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge danger"><i class="fa fa-tasks
"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">June</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star-o"></i> </p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge danger"><i class="fa fa-tasks
"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">July</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star-o"></i> </p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge danger"><i class="fa fa-tasks
"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">August</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star-o"></i> Payment of Bank Tickets at the Official Exchange Office</p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge danger"><i class="fa fa-tasks
"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">September</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star-o"></i> </p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge danger"><i class="fa fa-tasks
"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Octuber</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star-o"></i> </p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge danger"><i class="fa fa-tasks
"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">November</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star-o"></i> </p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge danger"><i class="fa fa-tasks
"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">December</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star-o"></i> </p>
        </div>
      </div>
    </li>
  </ul>
</div>


<!--ROADMAP -->
  <section class="main-section alabaster">
    <!--main-section alabaster-start-->
    <div class="container">
      <div class="row">
        <figure class="col-lg-5 col-sm-4 wow fadeInLeft">
          <img src="img/mining.png" alt="">
        </figure>
        <div class="col-lg-7 col-sm-8 featured-work">
          <h2>mining</h2>
          <P class="padding-b">Get to know more about the two types of mining at Spero.</P>
          <div class="featured-box">
            <div class="featured-box-col1 wow fadeInRight delay-02s">
              <i class="fa fa-flash"></i>
            </div>
            <div class="featured-box-col2 wow fadeInRight delay-02s">
              <h3>Proof of Work(PoW)</h3>
              <p>Proof of work is a protocol that has the main goal of deterring cyber-attacks such as a distributed denial-of-service attack (DDoS) which has the purpose of exhausting the resources of a computer system by sending multiple fake requests.
<br>
The Proof of work concept existed even before bitcoin, but Satoshi Nakamoto applied this technique to his/her – we still don’t know who Nakamoto really is – digital currency revolutionizing the way traditional transactions are set.
<br>
In fact, PoW idea was originally published by Cynthia Dwork and Moni Naor back in 1993, but the term “proof of work” was coined by Markus Jakobsson and Ari Juels in a document published in 1999.
<br>
But, returning to date, Proof of work is maybe the biggest idea behind the Nakamoto’s Bitcoin white paper – published back in 2008 – because it allows trustless and distributed consensus.</p>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <figure class="col-lg-5 col-sm-4 wow fadeInLeft">
          <img src="img/energy.svg" alt="">
        </figure>
          <div class="featured-box">
            <div class="featured-box-col1 wow fadeInRight delay-04s">
              <i class="fa fa-flask"></i>
            </div>
            <div class="featured-box-col2 wow fadeInRight delay-04s">
              <h3>Proof of Stake(PoS)</h3>
              <p>Proof of stake is a different way to validate transactions based and achieve the distributed consensus.
<br>
It is still an algorithm, and the purpose is the same of the proof of work, but the process to reach the goal is quite different.
<br>
Proof of stake first idea was suggested on the bitcointalk forum back in 2011, but the first digital currency to use this method was Peercoin in 2012, together with ShadowCash, Nxt, BlackCoin, NuShares/NuBits, Qora and Nav Coin.
<br>
Unlike the proof-of-Work, where the algorithm rewards miners who solve mathematical problems with the goal of validating transactions and creating new blocks, with the proof of stake, the creator of a new block is chosen in a deterministic way, depending on its wealth, also defined as stake.
<br>
No block reward
<br>
Also, all the digital currencies are previously created in the beginning, and their number never changes.
<br>
This means that in the PoS system there is no block reward, so, the miners take the transaction fees.
</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!--main-section alabaster-end-->



  <section class="main-section paddind" id="Where_we_are">
    <!--main-section-start-->
    <div class="container">
      <h2>Where we are?</h2>
      <h6>Find here our partners and service providers who use Sperocoin, or who keep this project standing:</h6>
      <div class="portfolioFilter">
        <ul class="Portfolio-nav wow fadeIn delay-02s">
          <li><a href="#" data-filter="*" class="current">All</a></li>
          <li><a href="#" data-filter=".exchanges">Exchanges</a></li>
          <li><a href="#" data-filter=".pool">Pool</a></li>
          <li><a href="#" data-filter=".topics">Topics in forums</a></li>
          <li><a href="#" data-filter=".git">GitHub</a></li>
          <li><a href="#" data-filter=".official">Official SPERO</a></li>
        </ul>
      </div>

    </div>
    <div class="portfolioContainer wow fadeInUp delay-04s">
      <div class=" Portfolio-box topics">
        <a href="https://cryptocurrencytalk.com/topic/88487-ann-sperocoin-x13-hybrid-powpos/" target="_blank"><img src="img/cryptocurrencytalk.jpg" alt=""></a>
        <h3>CryptoCurrency Talk</h3>
        <p>Topics in forums</p>
      </div>
      <!-- <div class="Portfolio-box pool">
        <a href="http://pickaxe.online/" target="_blank"><img src="img/pickaxeonline.jpg" alt=""></a>
        <h3>PickAxe Online</h3>
        <p>Pool PoW</p>
      </div> -->
      <div class=" Portfolio-box exchanges">
        <a href="https://coinsmarkets.com/trade-BTC-SPERO.htm" target="_blank"><img src="img/coinsmarkets.jpg" alt=""></a>
        <h3>Coins Market</h3>
        <p>Exchanges</p>
      </div>
      <div class=" Portfolio-box topics">
        <a href="https://bitcointalk.org/index.php?topic=2260985.20" target="_blank"><img src="img/btctalk.jpg" alt=""></a>
        <h3>Bitcoin Talk</h3>
        <p>Topics in forums</p>
      </div>
      <!-- <div class=" Portfolio-box exchanges">
        <a href="https://tradesatoshi.com/Vote" target="_blank"><img src="img/tradesatoshi.jpg" alt=""></a>
        <h3>TradeSatoshi(In Voting)</h3>
        <p>Exchanges</p>
      </div> -->
      <div class=" Portfolio-box exchanges">
        <a href="https://c-cex.com/?id=vote&coin=spero" target="_blank"><img src="img/ccex-logo.png" alt="" width="255px"></a>
        <h3>C-CEX(In Voting)</h3>
        <p>Exchanges</p>
      </div>
       <div class=" Portfolio-box git">
        <a href="https://github.com/DigitalCoin1/DigitalCoinBRL" target="_blank"><img src="img/github.jpg" alt=""></a>
        <h3>Source</h3>
        <p>GitHub</p>
      </div>
      <div class=" Portfolio-box official">
        <a href="/faucet" target="_blank"><img src="img/logo.png" alt="" width="255px"></a>
        <h3>Faucet</h3>
        <p>Official</p>
      </div>
      <div class=" Portfolio-box official">
        <a href="/webwallet" target="_blank"><img src="img/logo.png" alt="" width="255px"></a>
        <h3>WebWallet</h3>
        <p>Official</p>
      </div>
      <div class=" Portfolio-box official">
        <a href="/forum" target="_blank"><img src="img/logo.png" alt="" width="255px"></a>
        <h3>Forum</h3>
        <p>Official</p>
      </div>
      <div class=" Portfolio-box official">
        <a href="https://www.youtube.com/channel/UCQQjsoCjR_THbZ4AmalzPPg/" target="_blank"><img src="img/logo.png" alt="" width="255px"></a>
        <h3>Youtube Channel</h3>
        <p>Official</p>
      </div>
      <div class=" Portfolio-box official">
        <a href="http://exsperocoin.ddns.net:3001/network" target="_blank"><img src="img/logo.png" alt="" width="255px"></a>
        <h3>Block Explorer - USA</h3>
        <p>Official</p>
      </div>
      <div class=" Portfolio-box official">
        <a href="http://sperocoin.ddns.net:3001/network" target="_blank"><img src="img/logo.png" alt="" width="255px"></a>
        <h3>Block Explorer - BR</h3>
        <p>Official</p>
      </div>
      <div class=" Portfolio-box exchanges">
        <a href="https://catalogop2p.com.br/sperocoin" target="_blank"><img src="https://p2brasil.com/wp-content/uploads/2018/02/catalogo-p2p-parceria-300x178.png" alt="" width="400px"></a>
        <h3>Catálogo P2P</h3>
        <p>Exchange P2P</p>
      </div>
      <div class=" Portfolio-box exchanges">
        <a href="https://p2brasil.com/produto/sperocoin/" target="_blank"><img src="https://p2brasil.com/wp-content/uploads/2018/02/P2B-1.png" alt="" width="400px"></a>
        <h3>P2Brasil</h3>
        <p>Exchange P2P</p>
      </div>
    </div>
  </section>
  <!--main-section-end-->


  <section class="main-section client-part" id="contact">
    <!--main-section client-part-start-->
    <div class="container">
      <b class="quote-right wow fadeInDown delay-03"><i class="fa-quote-right"></i></b>
      <div class="row">
        <div class="col-lg-12">
          <p class="client-part-haead wow fadeInDown delay-05">Want to stay inside even more? Access our social networks below and see how the development of our project is progressing:</p>
        </div>
      </div>
      <ul class="client wow fadeIn delay-05s">
        <li>
              <img src="img/logo.png" alt="" width="300px">
</li>
      </ul>
    </div>
  </section>
  <!--main-section client-part-end-->
  <div class="c-logo-part">
    <!--c-logo-part-start-->
    <div class="container">
      <ul>
        <li><a href="https://www.facebook.com/Sperocoin-492498071117211/" target="_blank"><img src="img/c-liogo1.png" alt=""></a></li>
        <li><a href="https://telegram.me/joinchat/sperocoin" target="_blank"><img src="img/c-liogo2.png" alt=""></a></li>
        <li><a href="mailto:sperocoin@gmail.com" target="_blank"><img src="img/c-liogo3.png" alt=""></a></li>
         <li><a href="https://sperocoin.slack.com" target="_blank"><img src="img/c-liogo4.png" alt="" width="130px"></a></li>
        <!-- <li><a href="#" target="_blank"><img src="img/c-liogo5.png" alt=""></a></li> -->
      </ul>
    </div>
  </div>
   <!--c-logo-part-end-->
  <!-- TEAM
  <section class="main-section team" id="team">
    main-section team-start
    <div class="container">
      <h2>team</h2>
      <h6>Take a closer look into our amazing team. We won’t bite.</h6>
      <div class="team-leader-block clearfix">
        <div class="team-leader-box">
          <div class="team-leader wow fadeInDown delay-03s">
            <div class="team-leader-shadow"><a href="#"></a></div>
            <img src="img/team-leader-pic1.jpg" alt="">
            <ul>
              <li><a href="#" class="fa-twitter"></a></li>
              <li><a href="#" class="fa-facebook"></a></li>
              <li><a href="#" class="fa-pinterest"></a></li>
              <li><a href="#" class="fa-google-plus"></a></li>
            </ul>
          </div>
          <h3 class="wow fadeInDown delay-03s">Walter White</h3>
          <span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
          <p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
        </div>
        <div class="team-leader-box">
          <div class="team-leader  wow fadeInDown delay-06s">
            <div class="team-leader-shadow"><a href="#"></a></div>
            <img src="img/team-leader-pic2.jpg" alt="">
            <ul>
              <li><a href="#" class="fa-twitter"></a></li>
              <li><a href="#" class="fa-facebook"></a></li>
              <li><a href="#" class="fa-pinterest"></a></li>
              <li><a href="#" class="fa-google-plus"></a></li>
            </ul>
          </div>
          <h3 class="wow fadeInDown delay-06s">Jesse Pinkman</h3>
          <span class="wow fadeInDown delay-06s">Product Manager</span>
          <p class="wow fadeInDown delay-06s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
        </div>
        <div class="team-leader-box">
          <div class="team-leader wow fadeInDown delay-09s">
            <div class="team-leader-shadow"><a href="#"></a></div>
            <img src="img/team-leader-pic3.jpg" alt="">
            <ul>
              <li><a href="#" class="fa-twitter"></a></li>
              <li><a href="#" class="fa-facebook"></a></li>
              <li><a href="#" class="fa-pinterest"></a></li>
              <li><a href="#" class="fa-google-plus"></a></li>
            </ul>
          </div>
          <h3 class="wow fadeInDown delay-09s">Skyler white</h3>
          <span class="wow fadeInDown delay-09s">Accountant</span>
          <p class="wow fadeInDown delay-09s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
        </div>
      </div>
    </div>
  </section>
  main-section team-end
 TEAM-->

<!-- CONTACT
  <section class="business-talking">
    business-talking-start
    <div class="container">
      <h2>Let’s Talk Business.</h2>
    </div>
  </section>
  business-talking-end
  <div class="container">
    <section class="main-section contact" id="contact">

      <div class="row">
        <div class="col-lg-6 col-sm-7 wow fadeInLeft">
          <div class="contact-info-box address clearfix">
            <h3><i class=" icon-map-marker"></i>Address:</h3>
            <span>308 Negra Arroyo Lane<br>Albuquerque, New Mexico, 87111.</span>
          </div>
          <div class="contact-info-box phone clearfix">
            <h3><i class="fa-phone"></i>Phone:</h3>
            <span>1-800-BOO-YAHH</span>
          </div>
          <div class="contact-info-box email clearfix">
            <h3><i class="fa-pencil"></i>email:</h3>
            <span>hello@knightstudios.com</span>
          </div>
          <div class="contact-info-box hours clearfix">
            <h3><i class="fa-clock-o"></i>Hours:</h3>
            <span><strong>Monday - Thursday:</strong> 10am - 6pm<br><strong>Friday:</strong> People work on Fridays now?<br><strong>Saturday - Sunday:</strong> Best not to ask.</span>
          </div>
          <ul class="social-link">
            <li class="twitter"><a href="#"><i class="fa-twitter"></i></a></li>
            <li class="facebook"><a href="#"><i class="fa-facebook"></i></a></li>
            <li class="pinterest"><a href="#"><i class="fa-pinterest"></i></a></li>
            <li class="gplus"><a href="#"><i class="fa-google-plus"></i></a></li>
            <li class="dribbble"><a href="#"><i class="fa-dribbble"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
          <div class="form">

            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control input-text" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control input-text" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control input-text" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control input-text text-area" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

              <div class="text-center"><button type="submit" class="input-btn">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div> CONTACT -->
  <section class="main-section" id="downloads">
    <!--main-section-start-->
    <div class="container">
      <h2>DOWNLOADS</h2>
      <h6>Download here the files needed to start at Spero.</h6>
      <div class="row">
        <div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
          <div class="service-list">
            <div class="service-list-col1">
              <i class="fa fa-hdd-o"></i>
            </div>
            <div class="service-list-col2">
              <a href="/files/SperoCoin-v1.1BETA.apk" target="_blank"><h3>Apk Android - V.1.1BETA</h3>
              <p>Wallet Android. It works as web viewer system of web wallet. Use the same web account in the app! Practicality and speed in your hands.</p></a>
            </div>
          </div>
          <div class="service-list">
            <div class="service-list-col1">
              <i class="fa fa-hdd-o"></i>
            </div>
            <div class="service-list-col2">
              <a href="/files/SperoCoin-v.2.6.4.3.zip" target="_blank"><h3>Windows QT - V.2.6.4.3 - 28/03/2018</h3>
              <p>Wallet with graphic design. Model for those who seek comfort and convenience to check their balance, send and receive coins in a practical and fast.</p></a>
            </div>
          </div>
          <div class="service-list">
            <div class="service-list-col1">
              <i class="fa fa-hdd-o"></i>
            </div>
            <div class="service-list-col2">
              <a href="/files/SperoCoind-v.2.6.4.3" target="_blank"><h3>Daemon Windows - V.2.6.4.3 - 28/03/2018</h3>
              <p>Wallet without graphic design. Model for those who seek practicality and less consumption of resources.</p></a>
            </div>
          </div>
          <div class="service-list">
            <div class="service-list-col1">
              <i class="fa fa-hdd-o"></i>
            </div>
            <div class="service-list-col2">
              <a href="/files/SperoCoin-v.2.6.4.3" target="_blank"><h3>Linux QT</h3>
              <p>Wallet with graphic design. Model for those who seek comfort and convenience to check their balance, send and receive coins in a practical and fast.</p></a>
            </div>
          </div>
          <div class="row">
          <div class="col-lg-12 col-sm-12 wow fadeInLeft delay-05s">
          <div class="service-list">
            <div class="service-list-col1">
              <i class="fa fa-comments-o"></i>
            </div>
            <div class="service-list-col2 col12">
              <a href="#" data-toggle="modal" data-target="#linuxcomp"><h3>Compilation Linux Wallet</h3>
            <p>Compile Yourself Spero Code.</a></p>
            </div>
            </div>
          </div>
          <!-- BOOTSTRAP -->
          <div class="col-lg-12 col-sm-12 wow fadeInLeft delay-05s">
          <div class="service-list">
            <div class="service-list-col1">
              <i class="fa fa-hdd-o"></i>
            </div>
            <div class="service-list-col2 col12">
              <a href="https://sperocoin.ddns.net/files/bootstrap.dat"><h3>BOOTSTRAP - Updated daily</h3>
            <p>Download the last block chain.</a></p>
            </div>
            </div>
          </div>
          <!-- DATA FOLDER -->
          <div class="col-lg-12 col-sm-12 wow fadeInLeft delay-05s">
          <div class="service-list">
            <div class="service-list-col1">
              <i class="fa fa-hdd-o"></i>
            </div>
            <div class="service-list-col2 col12">
              <a href="https://sperocoin.ddns.net/files/SperoCoin.zip"><h3>DATA FOLDER - 28/03/2018</h3>
            <p>Download the complete data folder that must be placed in the data folder of your user. Example:<br>
Windows =% APPDATA% / SperoCoin<br>
Linux: /home/user./SperoCoin</a></p>
            </div>
            </div>
          </div>

          </div>
        </div>
        <figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
          <img src="img/wallet.png" alt="" width="524">
        </figure>

      </div>
    </div>
  </section>
  <!--main-section-end-->

                  <!-- Modal -->
  <div class="modal fade" id="linuxcomp" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Compilation Linux Wallet</h4>
        </div>
        <div class="modal-body">
          <p><b><i class="fa fa-code"></i> Download and install the dependencies:</b><br>
              sudo apt-get install build-essential libboost-all-dev libcurl4-openssl-dev libdb5.3-dev libdb5.3++-dev qt-sdk libminiupnpc-dev qrencode libqrencode-dev git libtool automake autotools-dev autoconf pkg-config libssl-dev libgmp3-dev libevent-dev bsdmainutils<br><br>
      <b><i class="fa fa-code"></i> Clone the github source code for the local machine:</b><br>
              git clone https://github.com/DigitalCoin1/DigitalCoinBRL
      <br><br>
      <b><i class="fa fa-code"></i> Compile the daemon in the DigitalCoinBRL/src directory:</b><br>
              cd DigitalCoinBRL/src<br><br>
              make -f makefile.unix USE_UPNP=- USE_IPV6=1
      <br><br>
      <b><i class="fa fa-code"></i> Run daemon in the DigitalCoinBRL/src directory:</b><br>
              ./SperoCoind
      <br><br>
      <b><i class="fa fa-code"></i> [OPTIONAL]Compile the QT in the DigitalCoinBRL directory:</b><br>
              sudo apt-get install libqt5gui5 libqt5core5a libqt5dbus5 qttools5-dev qttools5-dev-tools libprotobuf-dev protobuf-compiler libqrencode-dev<br><br>
              qmake SperoCoin-qt.pro "USE_UPNP=-" "USE_QRCODE=1"<br><br>
              make -f Makefile</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

  <footer class="footer">
    <div class="container">
      <div class="footer-logo"><img src="img/footer-logo.png" alt=""></div>
      <span class="copyright">&copy; SperoCoin - 2017<br> All Rights Reserved</span>
    </div>
  </footer>


  <script type="text/javascript">
    $(document).ready(function(e) {
      $('#test').scrollToFixed();
      $('.res-nav_click').click(function() {
        $('.main-nav').slideToggle();
        return false

      });

    });
  </script>

  <script>
    wow = new WOW({
      animateClass: 'animated',
      offset: 100
    });
    wow.init();
  </script>


  <script type="text/javascript">
    $(window).load(function() {

      $('.main-nav li a, .servicelink').bind('click', function(event) {
        var $anchor = $(this);

        $('html, body').stop().animate({
          scrollTop: $($anchor.attr('href')).offset().top - 102
        }, 1500, 'easeInOutExpo');
        /*
        if you don't want to use the easing effects:
        $('html, body').stop().animate({
          scrollTop: $($anchor.attr('href')).offset().top
        }, 1000);
        */
        if ($(window).width() < 768) {
          $('.main-nav').hide();
        }
        event.preventDefault();
      });
    })
  </script>

  <script type="text/javascript">
    $(window).load(function() {


      var $container = $('.portfolioContainer'),
        $body = $('body'),
        colW = 375,
        columns = null;


      $container.isotope({
        // disable window resizing
        resizable: true,
        masonry: {
          columnWidth: colW
        }
      });

      $(window).smartresize(function() {
        // check if columns has changed
        var currentColumns = Math.floor(($body.width() - 30) / colW);
        if (currentColumns !== columns) {
          // set new column count
          columns = currentColumns;
          // apply width to container manually, then trigger relayout
          $container.width(columns * colW)
            .isotope('reLayout');
        }

      }).smartresize(); // trigger resize to set container width
      $('.portfolioFilter a').click(function() {
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');

        var selector = $(this).attr('data-filter');
        $container.isotope({

          filter: selector,
        });
        return false;
      });

    });
  </script>

</body>

</html>