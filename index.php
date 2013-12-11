
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Zac Finger - comix</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="SHORTCUT ICON" href="favicon.png" />
<meta name=author content="Zac Finger" />
<meta name=copyright content="Zac Finger" />
<meta name=description content="Transhumanist and singularity comics and graphic novels" />
<meta name=keywords content="rachel haywire, humanity+ singularity, ray kurzweil, aubrey de grey, extreme futurist festival, transhuman, transhumanist, transhumanism, posthuman, h+" />
</head>
<body>
<?php

//
//
// $c This is the category value which is set to the media
//    type in view by the page. Either comics or web as of
//    1/10/11. 
//
// $v This is the item to be viewed in the view.php file,
//    such as a comic book title.
// 
// $p This is the current page number.
//
// $u URL of the site
//
// $t Returns true if 

$u = 'http://www.zacfinger.com/';
$isGallery = empty($_GET["v"]);

// defines category
// currently in view
$c = $_GET["c"];

if(empty($c)){
    // adjust featured category here.
	//
	$c = "comics";
	//
	// set value to
	// featured category
	// example:
	// $c = "webs";
	}

/* /// chase bug
// /// 	
if($c != 'comics' || $c != 'web' || $c != 'info'){
	
	if (headers_sent()){
      echo '<script type="text/javascript">window.location.href="' . $u . '";</script>';
    }else{
      header('Location: ' . $u);
      
      
	}
	
	exit();
	
}*/
	
?>
<center>
<table align=center cellspacing=0 cellpadding=0 border=0><tr><td>
<table align=center cellspacing=0 cellpadding=0 border=0 width=960>
      <tr>
        <td valign=top <?php if($isGallery){ echo 'rowspan=2'; } ?> width=192 align=right><img src=title.png><br>
          <br />
          
          <?php 
			include $u.'menu.php?i='.$c; ?>
        </td>
        <?php if(!$isGallery){
		echo '<td align=center>';
	    include $u.'view.php?c='.$c.'&v='.$_GET["v"].'&page='.$_GET["page"];
		echo '</td>';
	  }
	  ?>
	  <td align=right valign=top>
            
      <?php
	  if(!empty($_GET['t']))
      	echo '<table width=100% border=0 cellspacing=0 cellpadding=0><tr><td align=center>THANK YOU FOR YOUR SUPPORT!</td><td align=right width=192>';
      ?>
            
      <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----MIIG3QYJKoZIhvcNAQcEoIIGzjCCBsoCAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYBjLqlbryxqEHkfFK7NqoLNFvP4PcPTnzg0hAd0M/dlSDRT9UGFq7oGnQe/tdoJ1knzO8IbrRtXIY6GSioDppI/J92s1ysuNvgb6NTVHt05hVqz1FamS8iuc/6ltKJEUO1ebuYfYhCjo/hj/G7RW6DstsSYoSqH9XrGzHarww8+2jELMAkGBSsOAwIaBQAwWwYJKoZIhvcNAQcBMBQGCCqGSIb3DQMHBAjqNjZrZnKh1YA4egbRG5WaztUUg2qlG5MYbKXg3h58Z3PEaOUG1dsANofohsiFt8O1fEJEXayCmg+n5ghdteXxN2ugggOHMIIDgzCCAuygAwIBAgIBADANBgkqhkiG9w0BAQUFADCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20wHhcNMDQwMjEzMTAxMzE1WhcNMzUwMjEzMTAxMzE1WjCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20wgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAMFHTt38RMxLXJyO2SmS+Ndl72T7oKJ4u4uw+6awntALWh03PewmIJuzbALScsTS4sZoS1fKciBGoh11gIfHzylvkdNe/hJl66/RGqrj5rFb08sAABNTzDTiqqNpJeBsYs/c2aiGozptX2RlnBktH+SUNpAajW724Nv2Wvhif6sFAgMBAAGjge4wgeswHQYDVR0OBBYEFJaffLvGbxe9WT9S1wob7BDWZJRrMIG7BgNVHSMEgbMwgbCAFJaffLvGbxe9WT9S1wob7BDWZJRroYGUpIGRMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbYIBADAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEBBQUAA4GBAIFfOlaagFrl71+jq6OKidbWFSE+Q4FqROvdgIONth+8kSK//Y/4ihuE4Ymvzn5ceE3S/iBSQQMjyvb+s2TWbQYDwcp129OPIbD9epdr4tJOUNiSojw7BHwYRiPh58S1xGlFgHFXwrEBb3dgNbMUa+u4qectsMAXpVHnD9wIyfmHMYIBmjCCAZYCAQEwgZQwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tAgEAMAkGBSsOAwIaBQCgXTAYBgkqhkiG9w0BCQMxCwYJKoZIhvcNAQcBMBwGCSqGSIb3DQEJBTEPFw0xMTAxMTEwOTIwNTdaMCMGCSqGSIb3DQEJBDEWBBTXI2ZdSjK2QjbCdd41dANgDJ3Y1DANBgkqhkiG9w0BAQEFAASBgJOaubWz0qoHfHIV/bdrRBOwyTfJrBD7Elc/xEGd6eTmk5NcgRDc1zfPX/+/pHe72ZnVAOHKkYDauQ4Co8uw/813Ov+gvQVOScvjCKbljshHwNd6H1bvzuuNkuSieEkZwrRwbjwt50tFrDXP1cf7keadXCqJOtNwwscooE0VFT4C-----END PKCS7-----
">
<input type="image" src="view-cart.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
</form>
      <?php
      if(!empty($_GET['t']))
	  	echo '</td></tr></table>';
      ?>
      </td>
      
      <?php
	  if($isGallery){
	  
	  echo '</tr>
      <tr>
      <td>'; 
	  include $u.'gallery.php?c='.$c;}
     ?>
      </td>
      </tr>
    </table>
    <br />
<table align=center cellspacing=0 cellpadding=0 border=0>
<tr><td align=center>(C) 2006 - 
<script type="text/javascript">
<!--
	document.write(new Date().getFullYear())
//-->
</script>
ZAC FINGER<br><br></td></tr>
<tr><td align=center>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-8363314386117879";
/* Inevitable Banner */
google_ad_slot = "9663124603";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<br />
<br />
</td></tr></table>
</td></tr></table>
</center>
</body>
</html>
