
        
        <?php
		
$c = $_GET["c"];
$v = $_GET["v"];
$ext = "png";

if($c=="web")
	echo '<html><head><meta HTTP-equiv="REFRESH" content="0; url='.$c.'/'.$v.'"></head></html>';
else
	echo '<table cellspacing=0 cellpadding=0 border=0><tr><td colspan=3 align=center>';

// $max is set to the last
// index in the image list

if($v == "cameraseye"){
	$val = "E75YEUC5RLFV4";
	$max = 31;
	//Alternative Press Expo, Oct 13-14 2013
}

if($v == "acidexia0"){
	$max = 9;
	$val = "XVNWMC2FET85A";
	//Extreme Futurist Festival, Dec 21 2012
	}

if($v == "unhenged"){
	$max = 10;
	//$val = "N33MJKQHS6ACQ";
	//Tucson Comic Con, Nov 3 2012
	}
if($v == "ostenspieler2"){
	$max = 42;
	//Phoenix Comic Con, May 25 2012
	}
if($v == "singularity0"){
	$max = 10;
	//$max = 21;
	//$val = "9NFTV9XFPXKE6";
	//Extreme Futurist Fest, Dec 17 2011
	}
if($v == "ostenspieler1"){
	$max = 27;
	//$val = "ZNVN3GEXXCBFL";
	//East Bay Alternative Press Book Fair,  Dec 10 2011
	}
if($v == "ostenspieler0"){
	$max = 23;
	//$val = "2QR9ME2Y9PNV2";
	//SF Zine Fest, Sept 3 2011
	}
if($v == "machines"){
	$max = 6;
	$val = "FP6RLCFLQW7HE";
	//Tucson Comic Con, Nov 6 2010
	}
if($v == "commodoreglobe"){
	$max = 9;
	//$val = "WGXNKJ5A8T75N";
	//Tucson Comic Con, Nov 6 2010
	}
if($v == "retrofit"){
	$max = 5;
	$val = "TQ28RKADGWER8";
	//Tucson Comic Con, Nov 6 2010
	}
if($v == "thefoolsays"){
	$max = 17;
	$ext = "jpg";
	}
if($v == "4jurassic4park"){
	$max = 39;
	$ext = "jpg";
}

// receives the page number
// as indicated by x via 
// index.php?page=x

$num = $_GET["page"];
$next = $num+1;

// if page is empty
// reassign to zero

if(empty($num))
	$num = 0; 

$zero = NULL;

if($num < 10 && $max > 9)
	$zero = 0;

if($num < $max){
	echo '<a href=index.php?c='.$c.'&v='.$v.'&page='.$next.'>';
}

if($v == "acidexia0"){
	if($num >= 2 && $num <= 6)
		$ext = "jpg";
	else
		$ext = "png";
}

echo '<img src='.$c.'/'.$v.'/'.$zero.$num.".".$ext.' border=0 alt="transcendence, rachel haywire, humanity+, natasha vita moore, singularity, roland emmerich, ray kurzweil, aubrey de grey, extreme futurist festival, transhuman, transhumanist, transhumanism, posthuman, h+, 2012, mayan calendar, end of the world, 2013, solar flare"><br><br>';

if($num < $max)
	echo "</a>";

?>
     </td></tr><tr><td align=left width=75>
<?php
if($num > 0){
    $prev = $num - 1;
    echo "<a href=index.php?c=$c&v=$v&page=$prev><img src=$c/arrow-left.png border=0></a>";
}
?>
</td><td align=center>

<?php if(!empty($val)){
echo '<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="'.$val.'">
<input type="image" src="buttons.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
</form>';
}
if($v=='thefoolsays')
	echo '<a href='.$c.'/'.$v.'/'.$v.'.pdf 
		target=_blank class=inevitablelink>
		Print-ready PDF for<br> 
		local distribution!</a>';
if($v=='singularity0')
	echo '<a href=http://www.amazon.com/Singularity-No-0-ebook/dp/B0087VGWBK/ 
		target=_blank class=inevitablelink>
		Available for $2.99<br> 
		in the Kindle Store!</a>';
if($v=='acidexia0')
	echo '<a href=http://www.amazon.com/Acidexia-No-0-ebook/dp/B00ARN9OAW/
		target=_blank class=inevitablelink>
		Available for $2.99<br> 
		in the Kindle Store!</a>';
?>
</td><td align=right width=75>
<?php
if($num < $max){
    echo "<a href=index.php?c=$c&v=$v&page=$next><img src=$c/arrow-right.png border=0></a>";
}
else{
	if($v=="retrofit" || $v=="acidexia0")
		echo "18 MORE PAGES!";
	if($v=="singularity0")
		echo "11 MORE PAGES!";
}
?></td>
</tr>
<tr><td colspan=3 align=center>
<?php
if($v=="4jurassic4park")
	include $c.'/'.$v.'/00.html'; ?>
</td>
</tr></table>