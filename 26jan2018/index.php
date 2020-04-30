<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"/>
<?php
/*
?>
<meta property="og:type" content="26 जनवरी  2018 गणतंत्र दिवस की हार्दिक शुभकामनाएं" />
<meta property="og:title" content="आप सभी को भारत के 69वे गणतंत्र दिवस की शुभकामनाएं" />
<meta property="og:url" content="http://my-wow.xyz/hi">
<meta property="og:description" content="अपनी खुद की ग्रीटिंग बनाने के लिए यहां क्लिक करें!" >
<meta property="og:site_name" content="26 जनवरी  2018 गणतंत्र दिवस की हार्दिक शुभकामनाएं" />
<meta property="og:image" content="imgs/Happy-Republic-Day.jpg"> 
<?php 
*/
?>
<title>26 जनवरी 2018 गणतंत्र दिवस की हार्दिक शुभकामनाएं</title>
<link href="assets/css/normalize.min.css" rel="stylesheet">
<link href="assets/css/layout.css" rel="stylesheet">
<script language="javascript" src="assets/js/jquery.min.js"></script>
<script language="javascript" src="assets/js/script.js"></script>
<?php
$name = "your name";

if(isset($_GET['n']) && !empty($_GET['n']))
{
  $name = trim($_GET['n']);
}
?>
<style type="text/css">.layer:after{content:'<?php echo $name; ?>';}</style>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111542487-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-111542487-2');
</script>


</head>
<body>
<div class="main-container">
<div class="container">
<p id="timer"></p>
  <?php
  /*  
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <!-- 26th Jan Hi - 320x100 -->
  <ins class="adsbygoogle"
       style="display:inline-block;width:320px;height:100px"
       data-ad-client="ca-pub-2378520977269641"
       data-ad-slot="9496935479"></ins>
  <script>
  (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
  */
  ?>
	<div class="content-box">
   <div class="stage">
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
      <div class="layer"></div>
    </div>
    </div><!--/content-box-->
    
 <p class="lines">

की तरफ से आप सभी को <br/>

    </p>
    <div class="raw-text" style="width:100%; height:100px; background:url('assets/images/orange_label.png') no-repeat;background-size:100%;color:#fff;font-size: 36px;padding:0;">गणतंत्र दिवस</div>
    <p class="raw-text" style="font-size: 32px">की</p>
    <div class="raw-text" style="width:100%;height:100px;background:url('assets/images/green_label.png') no-repeat;background-size:100%;color:#fff;font-size: 36px;padding:0;">हार्दिक शुभकामनाएं</div>
    <img src="assets/images/26jan2018.gif" alt="Happy Republic Day - 26 January 2018" width="100%" />
    <p class="lines">

वतन हमारा ऐसे ना छोड़ पाए कोई,<br/>
रिश्ता हमारा ऐसे ना तोड़ पाए कोई,<br/>
दिल हमारा एक है एक है हमारी जान.<br/>
हिन्दुस्तान हमारा है हम है इसकी शान…<br/>
आप सभी को  <br/>
26 जनवरी, गणतंत्र दिवस की हार्दिक शुभकामनायें!<br/>

    </p>
</div>
</div>
    <?php
    if(!isset($_POST['name']) || empty($_POST['name']))
    {
      ?>
   		<div class="form-container">    
    		<form method="post" action="/26jan2018/">
    			<input name="name" type="text" placeholder="अपना नाम लिखें">
    			<input type="submit" value="GO">
    		</form>
  		</div>
      <?php
    }
    else
    {
      ?>
      <a class="share-btn" href="whatsapp://send?text=<?php echo $_POST['name']; ?> ने पूरे गर्व से आपको एक मैसेज भेजा है  %0A संदेश पढ़ने के लिए इस नीली रेखा को क्लिक करें %0A👉 codersden.in/26jan2018/?n=<?php echo str_replace(' ','+',$_POST['name']); ?>" title="share on whatsapp"><img src="assets/images/whats-app-icon.svg" width="20px"> Share on Whatsapp <img src="assets/images/whats-app-icon.svg" width="20px"></a>
      <?php
    }
    ?>
</body>
</html>