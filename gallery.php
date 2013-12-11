<table>

<?php

$c = $_GET["c"];

if($c == "comics")
{
$v = array(/*
    0 => "unhenged",
	1 => "ostenspieler2",
    2 => "singularity0",
    3 => "ostenspieler1",
	4 => "ostenspieler0",
	5 => "machines",
	6 => "commodoreglobe",
    7 => "retrofit",
    8 => "thefoolsays",
	9 => "4jurassic4park");*/

	
	0=> "cameraseye",
	1=> "acidexia0",
	2=> "singularity0",
	3=> "machines",
	4=> "commodoreglobe",
	5=> "retrofit",
	6=> "4jurassic4park"
	
	);
}

if($c == "web")
{
$v = array(
	0 => "arizonacreativewriting",
	1 => "1000yearkingdom",
	2 => "dlh",
	3 => "gidp2008",
	4 => "zacharyfinger-org-2007",
	5 => "igrissom",
    6 => "gidp2006",
    7 => "zacharyfinger-org",
	8 => "cdocw9");
}

if($c == "info")
{
$v = array(
	0 => "contact",
	1 => "bio"/*,
	2 => "resume"*/);	
}

for($i=0; $i < sizeof($v); ++$i)
{
echo'
<tr><td height=10></td><td></td></tr>
      <tr>
        <td align=center valign=top>';
		
if($c != "info")
	echo '<a href='.$c.'/'.$v[$i].'>';

echo '<img src='.$c.'/'.$v[$i].'/cover.png border=0></a> </td>
        <td valign=top>';

if($c != "info"){
	echo '<img src='.$c.'/'.$v[$i].'/title.png>';
	if($v[$i] == "acidexia0")
		echo '<br><br><div align=center><a href=http://www.amazon.com/Acidexia-No-0-ebook/dp/B00ARN9OAW/
		target=_blank class=inevitablelink>
		Now available in the <br> Kindle Store for $2.99!</a></div>';	
	if($v[$i] == "thefoolsays")
		echo '<br><br><div align=center><a href='.$c.'/'.$v[$i].'/'.$v[$i].'.pdf 
		target=_blank class=inevitablelink>
		Print-ready PDF for local<br>
		distribution!</a></div>';
	if($v[$i] == "singularity0")
		echo '<br><br><div align=center><a href=http://www.amazon.com/Singularity-No-0-ebook/dp/B0087VGWBK/
		target=_blank class=inevitablelink>
		Now available in the <br> Kindle Store for $2.99!</a></div>';
	if($v[$i] == "retrofit")
		echo '<br><br><div align=center><a href=http://www.amazon.com/Retrofit-ebook/dp/B004PYDLDU/
		target=_blank class=inevitablelink>
		Now available in the <br> Kindle Store for $2.99!</a></div>';
	}
else
    include $c.'/'.$v[$i].'/index.php';

echo	'</td>
      </tr>';
}

?>
</table>