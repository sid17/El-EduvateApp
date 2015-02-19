<?php
session_start();
function confirm_logged_in ()
{

if (!(isset($_SESSION['user_id'])))
header("Location: login.php");
}
confirm_logged_in();
?>

<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="title" content="Translation Games for Kids from hindi to english and vice-versa" />
<meta name="language" content="en" />

<title>Interactive Translation Games for Kids</title>
<link rel="shortcut icon" href="favicon.ico" />
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="./js/jqfloat.min.js"></script>
<script type="text/javascript" src="./js/float.js"></script>

 
 
  
<!--script type="text/javascript" src="js/pkp.js@v=1.8.2.0"></script>
<script type="text/javascript" src="js/launcher.js@v=1.8.2.0"></script>
<script type="text/javascript" src="js/scriptaculous.js"></script>
<script type="text/javascript" src="js/validation.js"></script-->
<link rel="stylesheet" type="text/css" media="screen" href="css/normalize.css@v=1.8.2.0" />
<link rel="stylesheet" type="text/css" media="screen" href="css/pkp.css@v=1.8.2.0" />
<!--link rel="stylesheet" type="text/css" media="screen" href="css/classroomHome.css@v=1.8.2.0" /-->
<!--link rel="stylesheet" type="text/css" media="screen" href="pkpPromoPlugin/css/pkpArticle/aboutHome.css@v=1.8.2.0" /-->
<link rel="stylesheet" type="text/css" media="screen" href="css/header.css@v=1.8.2.0" />
<link rel="stylesheet" type="text/css" media="screen" href="css/footer.css@v=1.8.2.0" />
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap-theme.min.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/quiz.css" />



</head>
<body>



<a href="logout.php" style="position:fixed;margin-left:850px;margin-top:20px;width:110px;z-index:1000" class="btn btn-success">Log Out
</a>
<a href="galleryfromfolder/index.php" style="position:fixed;margin-left:1000px;margin-top:20px;width:110px;z-index:1000" class="btn btn-success">Pokemons
</a>
<a href="getrecord.php" style="position:fixed;margin-left:1150px;margin-top:20px;width:110px;z-index:1000" class="btn btn-success">Recordings
</a>


			
			<div id="planet-grass" style="z-index:30;">
  <div id="planet" style="z-index:30;">
    <div id="wrapper" style="z-index:30;">
      


<div id="header" class="component" style="z-index:30;">
	
	<div class="bg-logo-hmh-white" style="z-index:30;"></div>
	

	
			
			<div id="wooden-sign" style="z-index:30;">
	<!--p>
				Need support?				<span>Send us an email at: <a href="mailto:abc@eduvate.org">abc@eduvate.org</a></span>	</p-->
				<img src="./images/look_down.gif" alt="cartoon">
</div>		

    
	<a href="" class="exclusive-learning_classroom" tag_category="header" tag_action="click" tag_label = "classroom">
        Click here to go to main site!</a></div>      <div class="main-holder" style="z-index:30;">
        <!-- main-nav -->
                	                <!-- main block -->
          <div id="content" class="component" style="z-index:30;">
       
<div id="topmenu" style="z-index:30;">
                                                               <div class="product active">
            <a href="index.php"><img style="width:140px;" src="./images/icons/icon_home_access.png" alt="Science"title="Go to Home"></a>
         </div>
         <ul>
            <li class="science"><a href="pronoun.php"><img style="width:140px;" src="./images/icons/creativity-icon.png" alt="Science" title="Play Science"></a></li>
            <li class="games"><a href="maths.php"><img style="width:140px;" src="./images/icons/mathematics-icon.png" alt="Mathematics" title="Go to Maths"></a></li>
            <li class="maths"><a href="trans-game.php"><img style="width:140px;" src="./images/icons/literacy-icon.png" alt="Literacy" title="Go to Liter"></a></li>
            <li class="lang"><a href="record.php"><img style="width:140px;" src="./images/icons/languagedevelopment-icon.png" alt="LanguageDevelopment" title="Go to Lang"></a></li>
         </ul>
         </div>
    <!--<div class="inner-box-content"></div>-->
    <!--<div class="inner-box-repeat">-->
      
<style>
 #Q1{
 clear:both;
 padding:5px;
 font-size:35px;
 font-weight:300;
 }
</style>
<script>
/*var sample = new Array();
var x=new Object();
x.word="ball";
x.image="http://t2.gstatic.com/images?q=tbn:ANd9GcTvgxHHdDtjgtvesBksaL2c-r356PR_alnY8hn7_iAZ_gcalPqHwIFRhCYSzw";
x.photo="गेंद";
sample.push(x);
var x=new Object();
x.word="present";
x.image="http://t1.gstatic.com/images?q=tbn:ANd9GcR0OBCWcQ-a_0VpULadCHKmSD79ZNXTvle41QYZjgsxr3b2Nf46vxrcnQ8Q";
x.photo="वर्तमान";
sample.push(x);
var x=new Object();
x.word="scale";
x.image="http://t0.gstatic.com/images?q=tbn:ANd9GcQGovDKKKQxbW69zc8KlAXw0MNeZfOLpJNWGvB8PLwgryz2u3tRAEtG7rUO";
x.photo="पैमाना";
sample.push(x);
var x=new Object();
x.word="square";
x.image="http://t2.gstatic.com/images?q=tbn:ANd9GcQEe9WxRbZazaaKXyRocNoqBi1F1bRzQJr7c3MB3JfTIpushz63LRR89WM";
x.photo="वर्ग";
sample.push(x);
var x=new Object();
x.word="length";
x.image="http://t2.gstatic.com/images?q=tbn:ANd9GcSHZ11NjkzcHoYCSklY3X0anM7E7h2x9Ubc7cgjB_fS61nqs4eU7yGFTyw";
x.photo="लंबाई";
sample.push(x);
var x=new Object();
x.word="child";
x.image="http://t2.gstatic.com/images?q=tbn:ANd9GcSkE654gwnVCg7uae8MwUQh5vE5W01_z6j2deHVFW7knsEGmJdTlMIq1aM";
x.photo="बच्चा";
sample.push(x);
var x=new Object();
x.word="milk";
x.image="http://t3.gstatic.com/images?q=tbn:ANd9GcQ4Nv5egvSSSEVG5-tuM0D0tz-ULlCK60vOhHaN-dFaKpltNFvED8dSXz0";
x.photo="दूध";
sample.push(x);
var x=new Object();
x.word="egg";
x.image="http://t2.gstatic.com/images?q=tbn:ANd9GcRRk4jUWV7e2GiPwbtB68ONk_eGwM-shJ3ZoB02ypKPWZBOZRegQNlkdH0";
x.photo="अंडा";
sample.push(x);
var x=new Object();
x.word="forest";
x.image="http://t0.gstatic.com/images?q=tbn:ANd9GcRbXmOePxX74-te0FQHUTMPLioPxph8wn0_ejV5FLqWtLSCgRLRMnE-sc0";
x.photo="वन";
sample.push(x);
var x=new Object();
x.word="cloud";
x.image="http://t2.gstatic.com/images?q=tbn:ANd9GcSjfVE0GT5IlRttpRCqjGl1WCggr5YjefRrehv2KCKjSBHcywTSOBPGqyGV";
x.photo="बादल";
sample.push(x);
var x=new Object();
x.word="race";
x.image="http://t2.gstatic.com/images?q=tbn:ANd9GcQYuTwbVSl8KNHV3Zas0p8mUTMFGSfeUOq3uiHu2yG34oxSdVV2U064Ni3a";
x.photo="दौड़";
sample.push(x);
var x=new Object();
x.word="window";
x.image="http://t0.gstatic.com/images?q=tbn:ANd9GcRdMkcmsRrj3FN_PA8f0Qt1WPbw3Eanh6H9rFV1zVyrq7UvhrOCMZxd5EQ";
x.photo="खिड़की";
sample.push(x);
var x=new Object();
x.word="train";
x.image="http://t0.gstatic.com/images?q=tbn:ANd9GcTuYn-uNi09pBiwucLL9CP-XNYd7SVRgAG3kd7Ut_wSGjqg4gAvs0cnXTE";
x.photo="रेलगाड़ी";
sample.push(x);
var x=new Object();
x.word="stone";
x.image="http://t1.gstatic.com/images?q=tbn:ANd9GcSMEWjqwUldeMx1N1-qBVghZVmq_9KgVeGT8zWZ3-YDy1-emTP0Vn1wydVo8g";
x.photo="पत्थर";
sample.push(x);
var x=new Object();
x.word="experiment";
x.image="http://t0.gstatic.com/images?q=tbn:ANd9GcRtOozG01V0DTR2qDUciYfCBihvklpAz9nAg8pS4G6LVimqa_eK6bxJGg";
x.photo="प्रयोग";
sample.push(x);
var x=new Object();
x.word="wall";
x.image="http://t3.gstatic.com/images?q=tbn:ANd9GcTgJMeCJ0IbHpWHWhK7LrodLNs72C_5IBoCC029AZ2LLOt5QFssJvJzMU5s";
x.photo="दीवार";
sample.push(x);
var x=new Object();
x.word="office";
x.image="http://t1.gstatic.com/images?q=tbn:ANd9GcS0mvwnbaV7tb3P4EMqUXD541E2HfmShb2qROvn3AfQbI4HNqrlQO_V9TOV";
x.photo="कार्यालय";
sample.push(x);
var x=new Object();
x.word="winter";
x.image="http://t3.gstatic.com/images?q=tbn:ANd9GcQEzkoEZZ7Su20BnXWtsB_ZJ_lOCI1osuBjhiX2bZx6hO6ivx5YJGm8YPZt";
x.photo="सर्दी";
sample.push(x);
var x=new Object();
x.word="crease";
x.image="http://t3.gstatic.com/images?q=tbn:ANd9GcQlzsA3KKq5bO7iQXZgPyHWy2ApKjTuRD3Zahpb0rB8yIlTWv0WMFcBltCW";
x.photo="क्रीज़";
sample.push(x);
var x=new Object();
x.word="skin";
x.image="http://t3.gstatic.com/images?q=tbn:ANd9GcQt7Kae2RCU21e-OcwoFOEVfkRMyrt72_s4Fc_zZxX4jj7dKPkSlnletWE";
x.photo="त्वचा";
sample.push(x);
var x=new Object();
x.word="mouth";
x.image="http://t3.gstatic.com/images?q=tbn:ANd9GcSepGjcqmCgAFkJuGGPYJNWtNZDjSS5WkWkG89Jjfd2S-40tYeO_Qimc8A";
x.photo="मुंह";
sample.push(x);
var x=new Object();
x.word="cow";
x.image="http://t3.gstatic.com/images?q=tbn:ANd9GcTZAPwV8Cu7esCDnzl-6n4WAw4HEGWQcg3_4GqOfRxoAK8iEHmy0a4qAr8N";
x.photo="गाय";
sample.push(x);
var x=new Object();
x.word="bear";
x.image="http://t0.gstatic.com/images?q=tbn:ANd9GcQzSyazuPbxK7WVGrwRSjJzNJGg1YMHx9jvbnLQYUsTnUibzS41t1STbzE";
x.photo="भालू";
sample.push(x);
var x=new Object();
x.word="gas";
x.image="http://t0.gstatic.com/images?q=tbn:ANd9GcQQVaaSLC80kb8KlLFzX0ikP9I8_a9LuOz6APmuNcxfYhfd-xYukX15vavg";
x.photo="गैस";
sample.push(x);
var x=new Object();
x.word="wrote";
x.image="http://t2.gstatic.com/images?q=tbn:ANd9GcRDf66ocWj4-wmZt6-ticmbmKVYztNX-QKi_4LbfsVW_BThls3JA3NLFN3N";
x.photo="लिखा";
sample.push(x);
var x=new Object();
x.word="flower";
x.image="http://t1.gstatic.com/images?q=tbn:ANd9GcQBlEE9EpzIEalE6R-b1af02w_c3Vxw9wQx4e06zWcYoZg6iyVhfJIEXv_5";
x.photo="फूल";
sample.push(x);
var x=new Object();
x.word="blood";
x.image="http://t1.gstatic.com/images?q=tbn:ANd9GcSUnjECVQG0c1KIVBkK0WVoyB0smh2kJyMj038bQ_d5AaOD_s_wWaMpgMw";
x.photo="खून";
sample.push(x);
var x=new Object();
x.word="village";
x.image="http://t2.gstatic.com/images?q=tbn:ANd9GcRe7U1XliQhZ0hmqmPEZjBnNuMfHmHd_J0RhbuTIfC3jvTAPyPi4IFyvJg";
x.photo="गांव";
sample.push(x);
var x=new Object();
x.word="meet";
x.image="http://t1.gstatic.com/images?q=tbn:ANd9GcQbKPuMEV9EXBbjdYdfxYXbIeNQDkqCN8oqNU1YC92jW5dym2rh1Fl-EKfM";
x.photo="मिलने";
sample.push(x);
var x=new Object();
x.word="root";
x.image="http://t0.gstatic.com/images?q=tbn:ANd9GcSpR3yHGWelvNaLN1ppzXQ91nklhM4ueeIlRiN33QqwWe9Z16K2IJ7aU2p3";
x.photo="जड़";
sample.push(x);
var x=new Object();
x.word="metal";
x.image="http://t0.gstatic.com/images?q=tbn:ANd9GcQ7AQaJFN4E0B2Sz9giPK6fCkdtvxWxGSY6gY2DuhrSZldiKtSCOelL-gnO";
x.photo="धातु";
sample.push(x);
var x=new Object();
x.word="seven";
x.image="http://t2.gstatic.com/images?q=tbn:ANd9GcTZxIAnYXtv4hA9Tu7KBL2wJbGekjdpS3zYJ8MD2aYEg7uTA2ex0KJrI_0";
x.photo="सात";
sample.push(x);
var x=new Object();
x.word="cost";
x.image="http://t0.gstatic.com/images?q=tbn:ANd9GcT3gOYNJ92cBEhmFWW69eSXvzOD19Az1JqXQkCzejN_6WdB5QRDhwmbDbg";
x.photo="लागत";
sample.push(x);
var x=new Object();
x.word="garden";
x.image="http://t3.gstatic.com/images?q=tbn:ANd9GcQT7Ig8xaBs_QIGq-aea_CEjBpuuu-zJIAx2n6jt1n6qJNoZRNX4G7kg-u1";
x.photo="उद्यान";
sample.push(x);
var x=new Object();
x.word="wear";
x.image="http://t2.gstatic.com/images?q=tbn:ANd9GcSFWWypZrYp-R-7tqhM_fpzFDslnGE0np_M-8z3HEf1of44Z6bHCPnqeOL9";
x.photo="पहनना";
sample.push(x);
var x=new Object();
x.word="three";
x.image="http://t1.gstatic.com/images?q=tbn:ANd9GcQKMvv8coHNnr-thkNzvjbTIu9jiSTQnYQLVkKpMTOnLubQ_syy5Dk6yUw";
x.photo="तीन";
sample.push(x);
var x=new Object();
x.word="cook";
x.image="http://t2.gstatic.com/images?q=tbn:ANd9GcTHjYizOflldV0xElYW1YAPQD8PP_6m3-5qGsUybH6XdJ67bKsO6Xz9Bg8DiQ";
x.photo="कुक";
sample.push(x);
var x=new Object();
x.word="truck";
x.image="http://t1.gstatic.com/images?q=tbn:ANd9GcSmlXpUAOhsEqZxJNAowath8NTVA829TOb1GgdjMh7iVcG1rRPRSjc6ztM";
x.photo="ट्रक";
sample.push(x);
var x=new Object();
x.word="noon";
x.image="http://t2.gstatic.com/images?q=tbn:ANd9GcRkercJ8z8f7XsVkux8VYUeIEQXrvDxjc1OGt9SrQQg4J0gWMdi5UoHDw";
x.photo="दोपहर";
sample.push(x);
var x=new Object();
x.word="gray";
x.image="http://t3.gstatic.com/images?q=tbn:ANd9GcR7uZktARvtOgDnlnDpfveXTsUTZaJqB37H_iblTBNImwwKQcQsM-8xwP8O";
x.photo="ग्रे";
sample.push(x);
var x=new Object();
x.word="nose";
x.image="http://t0.gstatic.com/images?q=tbn:ANd9GcSgm0Adqy_1L3ZGug1JZ0rYzC0zYxBlXPcRZ1cqCT4rovXCup4O3H4BfiQ";
x.photo="नाक";
sample.push(x);
var x=new Object();
x.word="radio";
x.image="http://t2.gstatic.com/images?q=tbn:ANd9GcRdAeWmsdsssCGFnan8YztPbrQUl9e_pyqUVwTPHD7ZD_g2Ih8ZGrFxMac";
x.photo="रेडियो";
sample.push(x);
var x=new Object();
x.word="salt";
x.image="http://t1.gstatic.com/images?q=tbn:ANd9GcSiCCH0GFM_ZkCChYYlAeq-hX-fYZfzJBgoGd2kZdljR9IBkVylBpg9WwI";
x.photo="नमक";
sample.push(x);
var x=new Object();
x.word="silver";
x.image="http://t3.gstatic.com/images?q=tbn:ANd9GcQQzfqgbAu9yE206OLYlBrwYfgzw6fu9aA_ho7xDZzQautFjXezgFj9qrc";
x.photo="चांदी";
sample.push(x);
var x=new Object();
x.word="rail";
x.image="http://t2.gstatic.com/images?q=tbn:ANd9GcTaVzPZOu9o3ckFbpDiykHVjsF2lrujVmiTXCtUlbhBSmz63EVG8Is0wJE";
x.photo="रेल";
sample.push(x);
var x=new Object();
x.word="fruit";
x.image="http://t2.gstatic.com/images?q=tbn:ANd9GcSRJbQ-0dA8_cWrNKxIcBeuZaAg4gMWMcB3g-L04adlGAmbW7XKwGiPQmKFeQ";
x.photo="फल";
sample.push(x);
var x=new Object();
x.word="coat";
x.image="http://t3.gstatic.com/images?q=tbn:ANd9GcQs-lzafRgtVMQso-7rJOotooaMJJxRcn4gJhAbfXszywRSMNDhBiMCpR5G";
x.photo="कोट";
sample.push(x);
var x=new Object();
x.word="win";
x.image="http://t0.gstatic.com/images?q=tbn:ANd9GcTg7qNlpS9ZSon23FIKDkN8gUUztbpgGO1eybttRqzd3oHAIr3llWaR6HnJ";
x.photo="जीत";
sample.push(x);
var x=new Object();
x.word="crowd";
x.image="http://t3.gstatic.com/images?q=tbn:ANd9GcQLwlF4uSmKVemp0WETFvFFq8UlMG_0DTb0n5FbBrvdFo3rkTfi55I_awEE";
x.photo="भीड़";
sample.push(x);
var x=new Object();
x.word="tube";
x.image="http://t1.gstatic.com/images?q=tbn:ANd9GcSQ4N6f3xVZE00iRtI94jsxxtqzq6Yk_EVQaBDVnyWdB-sNJOo8iogVg5I";
x.photo="ट्यूब";
sample.push(x);
var x=new Object();
x.word="triangle";
x.image="http://t1.gstatic.com/images?q=tbn:ANd9GcRUszs_JQehS9L-t4Hon4LcWU_5PQjwpl-PdERqXwhmIc2WN_p3r9DfeSE4";
x.photo="त्रिकोण";
sample.push(x);
var x=new Object();
x.word="dollar";
x.image="http://t1.gstatic.com/images?q=tbn:ANd9GcRYv8BFKrvLYWALxa4t2_Z--rlVyGHNR-g8xgxA5F1S67EVVcLa_NqbV1HUzQ";
x.photo="डॉलर";
sample.push(x);
var x=new Object();
x.word="clock";
x.image="http://t2.gstatic.com/images?q=tbn:ANd9GcRrfqDhxMKiB2xnCVMkXMYXkI7rycTDyUiYxMexKsMLgCGBfuCSL3i_23cR";
x.photo="घड़ी";
sample.push(x);
var x=new Object();
x.word="bread";
x.image="http://t1.gstatic.com/images?q=tbn:ANd9GcTfXsAZvzQ62nNZPEKBwxngenabb-ANlPQhpEY4H-2XSKwfEx6JK5skJuk";
x.photo="रोटी";
sample.push(x);
var x=new Object();
x.word="sheet";
x.image="http://t3.gstatic.com/images?q=tbn:ANd9GcSILKrk1dW4ENJrqTCuXT-tnceeCTxUIUe1EFHtyNfRNJeHU4EfU4NhnzwT";
x.photo="चादर";
sample.push(x);
var x=new Object();
x.word="gun";
x.image="http://t3.gstatic.com/images?q=tbn:ANd9GcS0wiVKu012xkkOf65Da70bWcUN7yjc7w9e4VpY9wKp7urd9eguHrkUXg";
x.photo="बंदूक";
sample.push(x);
var x=new Object();
x.word="chick";
x.image="http://t0.gstatic.com/images?q=tbn:ANd9GcRi0TFLxR4CYKoulmO4BeGtcTuzLNsHX_kCqKcZ9bGdHlsAGt7buXniOzsl";
x.photo="चूजा";
sample.push(x);
var x=new Object();
x.word="market";
x.image="http://t3.gstatic.com/images?q=tbn:ANd9GcSyQuWmM1tUaBNji5LkQz0Us3cZpcKdpL_3adYlDdHE44GR1GLYSE-I0iw";
x.photo="बाजार";
sample.push(x);
var x=new Object();
x.word="hat";
x.image="http://t2.gstatic.com/images?q=tbn:ANd9GcRkQG5lmGNvM731iZ6kJlhvesQ6cPl0oVNqTtZ2xg1l-qkXRhEKp_-7jVg";
x.photo="टोपी";
sample.push(x);
var x=new Object();
x.word="duck";
x.image="http://t2.gstatic.com/images?q=tbn:ANd9GcRw-1Vf4LKteI5b06J34CuDjt2REDOEM6W45pa-Tg4xMkUm4cMjNAM72F7W";
x.photo="बतख";
sample.push(x);
var x=new Object();
x.word="cotton";
x.image="http://t0.gstatic.com/images?q=tbn:ANd9GcRiIILJ8wSFvjw-Rz-OAS2kZ5qaDILYcS8wZ5HfyrW8zmjymaL1_DxUkWIt";
x.photo="कपास";
sample.push(x);*/
var sample = new Array();
var x=new Object();
x.word="ball";
x.image="http://t2.gstatic.com/images?q=tbn:ANd9GcTvgxHHdDtjgtvesBksaL2c-r356PR_alnY8hn7_iAZ_gcalPqHwIFRhCYSzw";
x.photo="गेंद";
sample.push(x);
var x=new Object();
x.word="square";
x.image="http://t2.gstatic.com/images?q=tbn:ANd9GcQEe9WxRbZazaaKXyRocNoqBi1F1bRzQJr7c3MB3JfTIpushz63LRR89WM";
x.photo="वर्ग";
sample.push(x);
var x=new Object();
x.word="child";
x.image="http://t2.gstatic.com/images?q=tbn:ANd9GcSkE654gwnVCg7uae8MwUQh5vE5W01_z6j2deHVFW7knsEGmJdTlMIq1aM";
x.photo="बच्चा";
sample.push(x);
var x=new Object();
x.word="milk";
x.image="http://t3.gstatic.com/images?q=tbn:ANd9GcQ4Nv5egvSSSEVG5-tuM0D0tz-ULlCK60vOhHaN-dFaKpltNFvED8dSXz0";
x.photo="दूध";
sample.push(x);
var x=new Object();
x.word="egg";
x.image="http://t2.gstatic.com/images?q=tbn:ANd9GcRRk4jUWV7e2GiPwbtB68ONk_eGwM-shJ3ZoB02ypKPWZBOZRegQNlkdH0";
x.photo="अंडा";
sample.push(x);
var x=new Object();
x.word="forest";
x.image="http://t0.gstatic.com/images?q=tbn:ANd9GcRbXmOePxX74-te0FQHUTMPLioPxph8wn0_ejV5FLqWtLSCgRLRMnE-sc0";
x.photo="वन";
sample.push(x);
var x=new Object();
x.word="cloud";
x.image="http://t2.gstatic.com/images?q=tbn:ANd9GcSjfVE0GT5IlRttpRCqjGl1WCggr5YjefRrehv2KCKjSBHcywTSOBPGqyGV";
x.photo="बादल";
sample.push(x);
var x=new Object();
x.word="race";
x.image="http://t2.gstatic.com/images?q=tbn:ANd9GcQYuTwbVSl8KNHV3Zas0p8mUTMFGSfeUOq3uiHu2yG34oxSdVV2U064Ni3a";
x.photo="दौड़";
sample.push(x);
var x=new Object();
x.word="window";
x.image="http://t0.gstatic.com/images?q=tbn:ANd9GcRdMkcmsRrj3FN_PA8f0Qt1WPbw3Eanh6H9rFV1zVyrq7UvhrOCMZxd5EQ";
x.photo="खिड़की";
sample.push(x);
var x=new Object();
x.word="train";
x.image="http://t0.gstatic.com/images?q=tbn:ANd9GcTuYn-uNi09pBiwucLL9CP-XNYd7SVRgAG3kd7Ut_wSGjqg4gAvs0cnXTE";
x.photo="रेलगाड़ी";
sample.push(x);
var x=new Object();
x.word="stone";
x.image="http://t1.gstatic.com/images?q=tbn:ANd9GcSMEWjqwUldeMx1N1-qBVghZVmq_9KgVeGT8zWZ3-YDy1-emTP0Vn1wydVo8g";
x.photo="पत्थर";
sample.push(x);
var x=new Object();
x.word="experiment";
x.image="http://t0.gstatic.com/images?q=tbn:ANd9GcRtOozG01V0DTR2qDUciYfCBihvklpAz9nAg8pS4G6LVimqa_eK6bxJGg";
x.photo="प्रयोग";
sample.push(x);
var x=new Object();
x.word="wall";
x.image="http://t3.gstatic.com/images?q=tbn:ANd9GcTgJMeCJ0IbHpWHWhK7LrodLNs72C_5IBoCC029AZ2LLOt5QFssJvJzMU5s";
x.photo="दीवार";
sample.push(x);
var x=new Object();
x.word="office";
x.image="http://t1.gstatic.com/images?q=tbn:ANd9GcS0mvwnbaV7tb3P4EMqUXD541E2HfmShb2qROvn3AfQbI4HNqrlQO_V9TOV";
x.photo="कार्यालय";
sample.push(x);
var x=new Object();
x.word="winter";
x.image="http://t3.gstatic.com/images?q=tbn:ANd9GcQEzkoEZZ7Su20BnXWtsB_ZJ_lOCI1osuBjhiX2bZx6hO6ivx5YJGm8YPZt";
x.photo="सर्दी";
sample.push(x);
var x=new Object();
x.word="skin";
x.image="http://t3.gstatic.com/images?q=tbn:ANd9GcQt7Kae2RCU21e-OcwoFOEVfkRMyrt72_s4Fc_zZxX4jj7dKPkSlnletWE";
x.photo="त्वचा";
sample.push(x);
var x=new Object();
x.word="mouth";
x.image="http://t3.gstatic.com/images?q=tbn:ANd9GcSepGjcqmCgAFkJuGGPYJNWtNZDjSS5WkWkG89Jjfd2S-40tYeO_Qimc8A";
x.photo="मुंह";
sample.push(x);
var x=new Object();
x.word="cow";
x.image="http://t3.gstatic.com/images?q=tbn:ANd9GcTZAPwV8Cu7esCDnzl-6n4WAw4HEGWQcg3_4GqOfRxoAK8iEHmy0a4qAr8N";
x.photo="गाय";
sample.push(x);
var x=new Object();
x.word="bear";
x.image="http://t0.gstatic.com/images?q=tbn:ANd9GcQzSyazuPbxK7WVGrwRSjJzNJGg1YMHx9jvbnLQYUsTnUibzS41t1STbzE";
x.photo="भालू";
sample.push(x);
var x=new Object();
x.word="flower";
x.image="http://t1.gstatic.com/images?q=tbn:ANd9GcQBlEE9EpzIEalE6R-b1af02w_c3Vxw9wQx4e06zWcYoZg6iyVhfJIEXv_5";
x.photo="फूल";
sample.push(x);
var x=new Object();
x.word="village";
x.image="http://t2.gstatic.com/images?q=tbn:ANd9GcRe7U1XliQhZ0hmqmPEZjBnNuMfHmHd_J0RhbuTIfC3jvTAPyPi4IFyvJg";
x.photo="गांव";
sample.push(x);
var x=new Object();
x.word="root";
x.image="http://t0.gstatic.com/images?q=tbn:ANd9GcSpR3yHGWelvNaLN1ppzXQ91nklhM4ueeIlRiN33QqwWe9Z16K2IJ7aU2p3";
x.photo="जड़";
sample.push(x);
var x=new Object();
x.word="seven";
x.image="http://t2.gstatic.com/images?q=tbn:ANd9GcTZxIAnYXtv4hA9Tu7KBL2wJbGekjdpS3zYJ8MD2aYEg7uTA2ex0KJrI_0";
x.photo="सात";
sample.push(x);
var x=new Object();
x.word="garden";
x.image="http://t3.gstatic.com/images?q=tbn:ANd9GcQT7Ig8xaBs_QIGq-aea_CEjBpuuu-zJIAx2n6jt1n6qJNoZRNX4G7kg-u1";
x.photo="उद्यान";
sample.push(x);
var x=new Object();
x.word="three";
x.image="http://t1.gstatic.com/images?q=tbn:ANd9GcQKMvv8coHNnr-thkNzvjbTIu9jiSTQnYQLVkKpMTOnLubQ_syy5Dk6yUw";
x.photo="तीन";
sample.push(x);
var x=new Object();
x.word="truck";
x.image="http://thumbs.dreamstime.com/z/funny-truck-car-cartoon-illustration-lorry-vehicle-comic-mascot-character-31612271.jpg";
x.photo="ट्रक";
sample.push(x);
var x=new Object();
x.word="nose";
x.image="http://www.clker.com/cliparts/S/C/0/s/f/x/nose-hi.png";
x.photo="नाक";
sample.push(x);
var x=new Object();
x.word="radio";
x.image="http://cdn.graphicsfactory.com/clip-art/image_files/image/5/676795-Music019.gif";
x.photo="रेडियो";
sample.push(x);
var x=new Object();
x.word="fruit";
x.image="http://www.search-best-cartoon.com/cartoon-fruit/bowl-of-cartoon-fruit.jpg";
x.photo="फल";
sample.push(x);
var x=new Object();
x.word="coat";
x.image="http://cdn.toonvectors.com/images/10/6057/toonvectors-6057-940.jpg";
x.photo="कोट";
sample.push(x);
var x=new Object();
x.word="crowd";
x.image="http://0.static.wix.com/media/97d7a08a55e9ce5e231148d4673e0e9c.wix_mp_1024";
x.photo="भीड़";
sample.push(x);
var x=new Object();
x.word="tube";
x.image="http://www.clker.com/cliparts/9/6/2/8/11954291531006655589tube_hago_ziegler_01.svg.hi.png";
x.photo="ट्यूब";
sample.push(x);
var x=new Object();
x.word="triangle";
x.image="http://www.proprofs.com/quiz-school/upload/yuiupload/725008717.jpg";
x.photo="त्रिकोण";
sample.push(x);
var x=new Object();
x.word="dollar";
x.image="http://www.shapingyouth.org/wp-content/uploads/2008/11/dollar-sign.gif";
x.photo="डॉलर";
sample.push(x);
var x=new Object();
x.word="clock";
x.image="http://us.123rf.com/400wm/400/400/yayayoy/yayayoy1110/yayayoy111000002/10825786-cartoon-alarm-clock.jpg";
x.photo="घड़ी";
sample.push(x);
var x=new Object();
x.word="chapati";
x.image="http://www.fitjog.com/common/images/low-calorie-indian-food-roti.jpg";
x.photo="रोटी";
sample.push(x);
var x=new Object();
x.word="gun";
x.image="http://image.shutterstock.com/display_pic_with_logo/382936/382936,1250527794,1/stock-vector-pistol-cartoon-35413093.jpg";
x.photo="बंदूक";
sample.push(x);
var x=new Object();
x.word="chick";
x.image="http://upload.wikimedia.org/wikipedia/en/thumb/7/79/Tweety.png/200px-Tweety.png";
x.photo="चूजा";
sample.push(x);
var x=new Object();
x.word="market";
x.image="http://www.searchenginegenie.com/images/google-market.jpg";
x.photo="बाजार";
sample.push(x);
var x=new Object();
x.word="hat";
x.image="http://sweetclipart.com/multisite/sweetclipart/files/black_top_hat.png";
x.photo="टोपी";
sample.push(x);
var x=new Object();
x.word="duck";
x.image="http://www.drawingcoach.com/image-files/cartoon_ducks_st5.jpg";
x.photo="बतख";



</script>

<script>
function moveSign(){
document.getElementById("wooden-sign").style.left="520px";
}
moveSign();
</script>

<center>
<form name=Flash style="height:950px;">
<h1 style="size:35px;color:#999;margin-left:-30px;">Pronunciation</h1><br>
<!--table border=0.5 cellpadding=2 cellspacing=0 width=480 style="border-radius:10px;"-->
<div id="game" style="background: url(./images/baby55.jpg); background-size:850px 750px; width:850px; height:750px;z-index:30;">
    <!--center><th colspan=2 style="padding-bottom:15px;"><center>Choose difficulty<br>
    <select name="diff">
        <option value=10 setting="Easy">      Easy (0-10)
        <option value=20 setting="Medium">    Medium (0-20)
        <option value=50 setting="Hard">      Hard (0-50)
        <option value=100 setting="Expert">    Expert (0-100)
    </select></center>
    </th>
    <th colspan=2 style="padding-bottom:15px;"><center>Choose Math function<br>
    <select  name="func" onclick="if (gamestart){alert('Not during a game.  \nStop the game first.   ');}">
        <option  value="Add.">        Addition
        <option  value="Subt.">       Subtraction
        <option  value="Mult.">       Multiplication
		<option  value="Div."> 		  Divide
		<option  value="Rnd �">   Random (+  and -)
        <option  value="Rnd All"> Random all (+, -, x and /)
         
    </select></center>
    </th-->

<div class="TopMenu" >
    <input type=button id="new" value="New player" class="btn btn-primary" onclick="ResetGame();">
    <input type=button id="start" value="Start game" class="btn btn-primary" onclick="StartGame();">
    <input type=button id="stop" value="Stop game" class="btn btn-primary" onclick="StopGame();">
    <input type=button id="instruct" value="Instructions" class="btn btn-primary" onclick="window.location='#inst'">
</div>
<div id="Q1" class="Question"> </div>


    <div class="Answer"><h2 id="Ans1" ></h2><img id="img1" src=""></img> </div>
    <div class="Answer"> <h2 id="Ans2" ></h2><img id="img2" src=""></img> </div>
    <div class="Answer"> <h2 id="Ans3" ></h2><img id="img3" src=""></img> </div>
    <div class="Answer"> <h2 id="Ans4" ></h2><img id="img4" src=""></img> </div>
 

    <div id="buttonA"><input type=button value="Answer A" id="A1" class="btn btn-primary" guess="" onclick="guessThis(this.guess)"></div>
	<div id="buttonB"><input  type=button value="Answer B" id="A2" class="btn btn-primary" guess="" onclick="guessThis(this.guess)"></div>
    <div id="buttonC"><input  type=button value="Answer C" id="A3" class="btn btn-primary" guess="" onclick="guessThis(this.guess)"></div>
    <div id="buttonD"><input type=button value="Answer D" id="A4" class="btn btn-primary" guess="" onclick="guessThis(this.guess)"></div>

<div id="Response" style="font-size:30px;" class="Answer"> </div>
 
 


<!--/table-->
 </div>
 
<br><br><br><br><br><br><br><br><br><br><br><br>
 
<a name=inst></a>
 
<!--table width=490 cellpadding=10-->
<<div id="Instructions" style="display:none;">
<tr class="sect1"><td>
<center><h2>Instructions</h2></center>
 
Before you begin, be sure to select the difficulty setting and math function that you want.  
These options are at the top of the page and can only be changed after the game has stopped.  
The difficulty option shows the range of numbers that the problem can be constructed from, (0-10 means the problem can be from 0+0 to 10+10.
<br><br>
 
To start a session, click on the '<b>New Player</b>' button.  
Enter your name, then click on the '<b>Start game</b>' button to begin answering the problems.  
To answer a problem, just click on the button under the answer you want.
<br><br>
 
The game will track how many answers you get right and wrong and how long it takes you to get the correct answer (in seconds).  
You can stop the game at any time by clicking on the '<b>Stop game</b>' button.  
This will put your current score in the Highscores area at the bottom.
<br><br>
 
To switch players, click on the '<b>New Player</b>' button.  
As you switch players, the previous player's score will be added to the Highscores area.
<br><br>
 
<center><input type=button value="Back to the game" onclick="window.location='#top'">
<br><br>

 
</td></tr>
</div>
<!--/table-->
 
</form>
 
 

    
<!--</div>--repeat>
    </div>
  <!--div class="inner-box-bottom"></div>          </div-->
      </div>
           	
</div>
</div>

<div id="scroll" style="z-index:30;">
<div class="ScoreHead"><b><p style="font-size:20px;" class="text-success">Player scoring</p></b></div>


 <div class="ScoreName"><b><p style="font-size:15px;" class="text-success">Name:</p></b>
   <div id="Player" class="Answer"> </div></div>


    <div class="scoreC"><p class="text-danger">Correct:</p>
    <div id="Correct" class="Answer">0</div></div>


    <div class="score1"><p class="text-danger">Incorrect:</p>
    <div id="Missed" class="Answer">0</div></div>


    <div class="score"><p class="text-danger">Accuracy:</p>
    <div id="Accuracy" class="Answer">0%</div></div>


    <div class="score1"><p class="text-danger">Speed:</p>
    <div id="Speed" class="Answer">0 sec</div></div>

 </div>
 <div id="scrollH" style="z-index:30;">
 <div class="HighScores"> <p style="font-size:20px;" class="text-success">Highscores</p></div>

    <div id="HighName" class="High"><u><font color=#0099cc>Name</font></u><br></div>
    <!--<div id="HighDiff" class="High"><u><font color=#0099cc>Difficulty</font></u><br></div>-->
    <div id="HighAcc" class="High"><u><font color=#0099cc>Accuracy</font></u><br></div>
    <div id="HighSpeed" class="High"><u><font color=#0099cc>Speed</font></u><br></div>
</div>

<div id="footer" class="component ext-footer__classroom ext-footer__characterDt ext-footer__curiousGeorge">
	
	

<div id="bottom"></div>

 	      </div>

 <script>
 
function BadBrowser () {
alert("           * * * * * A T T E N T I O N * * * * * \n\nThis page will not work with your browser.  \n\nUse either Netscape 6x or Internet Explorer 5x or higher.    ");
}
 
//   ##############  SIMPLE  BROWSER SNIFFER
if (document.layers) {navigator.family = "nn4"; BadBrowser();}
if (window.navigator.userAgent.toLowerCase().indexOf('opera') != -1) {navigator.family = "opera"; BadBrowser();}
if (document.all) {navigator.family = "ie4"}
//if (window.navigator.userAgent.toLowerCase().indexOf('gecko') != -1) {navigator.family = "gecko";
  //  document.Flash.diff[0].setting = "Easy";
   // document.Flash.diff[1].setting = "Medium";
   // document.Flash.diff[2].setting = "Hard";
   // document.Flash.diff[3].setting = "Expert";
   // }
if (window.navigator.platform.toLowerCase().indexOf('mac') != -1) {navigator.OS = "mac";}
 
//farray = new Array("+","-","*","/","+ -","+ - * /");
//fSignarray = new Array();
gamestart=false;
named=false;
 
good = new Array("Correct!","You got that one right.","Another one right.","You're doing great!",
"You're going to the head of the class!","I knew you could get that one.","That was easy, wasn't it?",
"That's the right answer.","Good going!","");
 
bad = new Array("Oops, try again.","Better luck next time","Try a different answer.","Nope, not that one.",
"nope, that one was a little hard.","Hmmm, that is incorrect.","Nope, try again.");
 
function ResetGame() {
if(gamestart){
alert("1st stop the game and then try!");}
else{
name=prompt("Enter your name.","");
if (name == "") {alert("Please enter your name or click on 'Cancel'.   "); ResetGame();}
else if (name == "null") {return;}
 
WriteMessage("Player" , name);
WriteMessage("Correct" , "0");
WriteMessage("Missed" , "0");
WriteMessage("Accuracy" , "0%");
WriteMessage("Speed" , "0 sec");
Timer = new Array();
named=true;
WriteMessage("Response" , "<font color=#0000aa>Click on 'Start game' to begin.");
}
}
 
 
function StartGame() {
if (!named) {
    WriteMessage("Response" , "<font color=#0000aa>Click on 'New player' and enter your name first.");
    return;
    }
if (gamestart) {alert("1st stop the game and try again!");}
else{
WriteMessage("Correct" , "0");
WriteMessage("Missed" , "0");
WriteMessage("Accuracy" , "0%");
WriteMessage("Speed" , "0 sec");
document.getElementById("scroll").style.visibility="visible";
Timer = new Array();
gamestart=true;
WriteMessage("Response" , "<font color=#0000aa>Click on an answer button.");
document.getElementById("Q1").style.visibility="visible";
		document.getElementById("buttonA").style.visibility="visible";
		document.getElementById("buttonB").style.visibility="visible";
		document.getElementById("buttonC").style.visibility="visible";
		document.getElementById("buttonD").style.visibility="visible";
		document.getElementById("Ans1").style.visibility="visible";
		document.getElementById("Ans2").style.visibility="visible";
		document.getElementById("Ans3").style.visibility="visible";
		document.getElementById("Ans4").style.visibility="visible";
		document.getElementById("img1").style.visibility="visible";
		document.getElementById("img2").style.visibility="visible";
		document.getElementById("img3").style.visibility="visible";
		document.getElementById("img4").style.visibility="visible";
showProblem();
}
}
 
function StopGame(){
if (!gamestart) {return;}
else {  document.getElementById("scrollH").style.visibility="visible";
		document.getElementById("Q1").style.visibility="hidden";
		document.getElementById("buttonA").style.visibility="hidden";
		document.getElementById("buttonB").style.visibility="hidden";
		document.getElementById("buttonC").style.visibility="hidden";
		document.getElementById("buttonD").style.visibility="hidden";
		document.getElementById("Ans1").style.visibility="hidden";
		document.getElementById("Ans2").style.visibility="hidden";
		document.getElementById("Ans3").style.visibility="hidden";
		document.getElementById("Ans4").style.visibility="hidden";
		document.getElementById("img1").style.visibility="hidden";
		document.getElementById("img2").style.visibility="hidden";
		document.getElementById("img3").style.visibility="hidden";
		document.getElementById("img4").style.visibility="hidden";
if (window.navigator.userAgent.toLowerCase().indexOf('gecko') != -1) {navigator.family = "gecko";}
    if (navigator.family == "ie4") {
        WriteMessage("HighName" , Player.innerHTML +"<br>","add");
        //WriteMessage("HighDiff" , document.Flash.diff[document.Flash.diff.selectedIndex].setting+" "+ document.Flash.func[document.Flash.func.selectedIndex].value +"<br>","add");
        WriteMessage("HighAcc" , Accuracy.innerHTML +" ("+ Correct.innerHTML +"/"+ (Math.floor(Correct.innerHTML)+Math.floor(Missed.innerHTML)) +")<br>","add");
        WriteMessage("HighSpeed" , Speed.innerHTML +"<br>","add");
        WriteMessage("Response" , "<font color=#0000aa>Look at your Highscore!");
        gamestart=false;
var cor=document.getElementById('Correct').innerHTML;
var accu=document.getElementById('Accuracy').innerHTML;
var act=accu.substring(0,accu.length-1);
if (act>70 && cor>5)
{
Winasprite();
}
        }
    else if (navigator.family == "gecko") {
 
        WriteMessage("HighName" ,   document.getElementById("Player").innerHTML +"<br>","add");
       // WriteMessage("HighDiff" ,   document.Flash.diff[document.Flash.diff.selectedIndex].setting +" "+ document.Flash.func[document.Flash.func.selectedIndex].value +"<br>","add");
        WriteMessage("HighAcc" ,    document.getElementById("Accuracy").innerHTML +" ("+ document.getElementById("Correct").innerHTML +"/"+ (Math.floor(document.getElementById("Correct").innerHTML)+Math.floor(document.getElementById("Missed").innerHTML)) +")<br>","add");
        WriteMessage("HighSpeed" ,  document.getElementById("Speed").innerHTML +"<br>","add");
        WriteMessage("Response" ,   "<font color=#0000aa>Look at your Highscore!");  
        gamestart=false;
var cor=document.getElementById('Correct').innerHTML;
var accu=document.getElementById('Accuracy').innerHTML;
var act=accu.substring(0,accu.length-1);
if (act>70 && cor>5)
{
Winasprite();
}


        }
    }
}



function Winasprite()
{
var x=Math.floor(Math.random() * 649);
$.ajax
	({
		type: "POST",
		url: "updatesprites.php",
		data: { number:x}
	})
	.done(function(msg2) 
	{
		alert("Congratulations ! You have won a Pokemon Sprite");
	});


//document.getElementById('modimage').src="galleryfromfolder/images/"+x+".png";

}  
 
 function capitaliseFirst(string){
return string.charAt(0).toUpperCase() + string.slice(1);
}
 
 
 
function showProblem () {
StartTime = new Date().getTime();
//if (document.Flash.func.selectedIndex < 4) {
  //  MathSign = farray[document.Flash.func.selectedIndex];
   // }
//else {  RSign = farray[document.Flash.func.selectedIndex].split(" ");
 //   MathSign = RSign[Math.floor(Math.random() * RSign.length)];
  //  }
//num1 = Math.floor(Math.random() * document.Flash.diff[document.Flash.diff.selectedIndex].value);
//num2 = Math.floor(Math.random() * document.Flash.diff[document.Flash.diff.selectedIndex].value);

var x=Math.floor(Math.random() * sample.length);
var rand = sample[x];
WriteMessage("Q1" , capitaliseFirst(rand.word));
//alert(x);
//alert(rand.word);

CorrectAns = x;

fakie=",";
for (x=1;x<5;x++) {
    /*if (MathSign == "+")    {}
    if (MathSign == "-")    {fakeans = Math.floor(Math.random() * document.Flash.diff[document.Flash.diff.selectedIndex].value);}
    if (MathSign == "*")    {fakeans = Math.floor(Math.random() * document.Flash.diff[document.Flash.diff.selectedIndex].value) * Math.floor(Math.random() * document.Flash.diff[document.Flash.diff.selectedIndex].value);}
    if (MathSign == "/")    {fakeans = (Math.random() * document.Flash.diff[document.Flash.diff.selectedIndex].value) * (Math.random() * document.Flash.diff[document.Flash.diff.selectedIndex].value)/(10*document.Flash.diff[document.Flash.diff.selectedIndex].value);
								fakeans = fakeans.toFixed(3);}
								
								*/
fakeans = Math.floor(Math.random() * sample.length);
if (fakie.match(","+fakeans+",") || fakeans == CorrectAns) {x--;}
    else {  fakie += fakeans+",";
        //WriteMessage("Ans"+x , sample[fakeans].word);
        var tit=document.getElementById("Ans"+x);
        var img=document.getElementById("img"+x);
        tit.innerHTML=sample[fakeans].photo+"";//+sample[fakeans].word;
		tit.style.visibility="visible";
		img.style.visibility="visible";
        img.src=sample[fakeans].image;
        
        
        
        if (navigator.family == "ie4") {document.all["A"+x].guess = fakeans;}
        else if (navigator.family == "gecko") {document.getElementById("A"+x).guess = fakeans;}
        }
    }
 
CPick = Math.floor(Math.random() * 3)+1;
var tit=document.getElementById("Ans"+CPick);
var img=document.getElementById("img"+CPick);
tit.innerHTML=sample[CorrectAns].photo+"";//+sample[CorrectAns].word;;
img.src=sample[CorrectAns].image;

//WriteMessage("Ans"+CPick , sample[CorrectAns].word);
if (navigator.family == "ie4") {document.all["A"+CPick].guess = CorrectAns;}
else if (navigator.family == "gecko") {document.getElementById("A"+CPick).guess = CorrectAns;}
 
}
 
 
 
 
 
function guessThis (number) {
if (!gamestart) {
    WriteMessage("Response" , "<font color=#0000aa>Click 'Start game' first.");
    return;
    }
if (number == CorrectAns) {
    EndTime=new Date().getTime();
    Timer[Timer.length] = EndTime-StartTime;
    WriteMessage("Response" , "<font color=#00aa00>"+ good[Math.floor(Math.random() * (good.length-1))]);
    if (navigator.family == "ie4")      {WriteMessage("Correct" , Math.floor(Correct.innerHTML)+1);}
    else if (navigator.family == "gecko")   {WriteMessage("Correct" , Math.floor(document.getElementById("Correct").innerHTML)+1);}
    updateScore();
    showProblem();
    }
else {  WriteMessage("Response" , "<font color=#aa0000>"+ bad[ Math.floor(Math.random() * (bad.length-1))]);
    if (navigator.family == "ie4")      {WriteMessage("Missed" , Math.floor(Missed.innerHTML)+1);}
    else if (navigator.family == "gecko")   {WriteMessage("Missed" , Math.floor(document.getElementById("Missed").innerHTML)+1);}
    updateScore();
    }
}
 
 
 
 
 
function updateScore () {
if (navigator.family == "ie4")      {
    Perc = (Math.floor(Correct.innerHTML ) / (Math.floor(Missed.innerHTML )+ Math.floor(Correct.innerHTML))) * 100;
    }
else if (navigator.family == "gecko")   {
    Perc = (Math.floor(document.getElementById("Correct").innerHTML ) / (Math.floor(document.getElementById("Missed").innerHTML )+ Math.floor(document.getElementById("Correct").innerHTML))) * 100;
    }
WriteMessage("Accuracy" , Perc.toString().substring(0,4) +"%");
temptimer = 0;
for (x=0;x<Timer.length;x++) {
    temptimer += Math.floor(Timer[x]);
    }
 
newSpeed = (temptimer*.001/(Timer.length)).toString().substring(0,(temptimer*.001/(Timer.length)).toString().indexOf(".")+3);
if (newSpeed != "Na") {
    WriteMessage("Speed" , (temptimer*.001/(Timer.length)).toString().substring(0,(temptimer*.001/(Timer.length)).toString().indexOf(".")+3) +" sec");
    }
}
 
 
function WriteMessage(where,what,addto) {
if (window.navigator.userAgent.toLowerCase().indexOf('gecko') != -1) {navigator.family = "gecko";}
if (addto) {
    if (navigator.family == "ie4")      {document.all[where].innerHTML += what;}
    if (navigator.family == "gecko")    {document.getElementById(where).innerHTML += what;}
    }
else {
    if (navigator.family == "ie4")      {document.all[where].innerHTML = what;}
    if (navigator.family == "gecko")    {document.getElementById(where).innerHTML = what;}
    }
}
 
</script>


</body>
</html>

