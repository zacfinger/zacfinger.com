<?php

$i = $_GET["i"];

?>

<table cellspacing=0 cellpadding=0>
		
        <tr>
    	<td>
        
			<?php
                if ($i==comics)
                  echo "<a href=http://zacfinger.com/comics><img border=0 src=http://zacfinger.com/comics-arrow.png></a></td><td><img src=http://zacfinger.com/arrow-tip.png>";
                else
                  echo "<a href=http://zacfinger.com/comics><img src=http://zacfinger.com/comics-black.png border=0></a></td><td>";
            ?>
        
        </td>
		</tr>
		
        
        <tr>
        <td>
        
			<?php
                if ($i==web)
                  echo "<a href=http://zacfinger.com/web><img border=0 src=http://zacfinger.com/web-arrow.png></a></td><td><img src=http://zacfinger.com/arrow-tip.png>";
                else
                  echo "<a href=http://zacfinger.com/web><img src=http://zacfinger.com/web-black.png border=0></a></td><td>";
            ?>
        
        </td>
        </tr>
        
        <tr>
        <td>
        
			<?php
                if ($i==info)
                  echo "<a href=http://zacfinger.com/info><img border=0 src=http://zacfinger.com/info-arrow.png></a></td><td><img src=http://zacfinger.com/arrow-tip.png>";
                else
                  echo "<a href=http://zacfinger.com/info><img src=http://zacfinger.com/info-black.png border=0></a></td><td>";
            ?>
        
        </td>
        </tr>
        
        
</table>