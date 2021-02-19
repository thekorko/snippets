<html>
<head>
<title>Amiga Pixel Art @ Lunix Home</title>
<meta http-equiv=Content-Type content=text/html; charset=iso-8859-1>
<meta name="description" content="Amiga pixel art by Lunix" />
<meta name="keywords" content="pixel, deluxe paint, amiga, scene, demoscene, lunix" />
<meta name="rating" content="general" />
<meta name="expires" content="never">
<meta name="distribution" content="global" />
<meta name="robots" content="index" />
<meta name="viewport" content="user-scalable=yes, width=device-width" />
<LINK REL=stylesheet HREF="styles.css">
</head>
<?php include("_site_body.inc"); ?>
<?php include("_site_logo.inc"); ?>
<?php include("work_menu.inc"); ?>
<?php include("_comments.php"); ?>

<?php include("_site_main_table_start.inc"); ?><tr><td colspan=2>

<h2>Amiga Pixel Art</h2>

</td></tr>
<tr><td valign=top width=35%>

<b>&nbsp;Logos&nbsp;</b><ul>

<li><a href=?img=work_amiga_pixel/latex.txt>Latex</a>

<li><a href=?img=work_amiga_pixel/satanic.txt>Satanic</a>

<li><a href=?img=work_amiga_pixel/phantasy.txt>Phantasy</a>
 
<li><a href=?img=work_amiga_pixel/pacific.txt>Pacific</a>

<li><a href=?img=work_amiga_pixel/boozombies.txt>Boozombies</a>

<li><a href=?img=work_amiga_pixel/planet_jazz.txt>Planet Jazz</a>

<li><a href=?img=work_amiga_pixel/chiperia.txt>Chiperia</a>

<li><a href=?img=work_amiga_pixel/insane.txt>Insane</a>

<li><a href=?img=work_amiga_pixel/whelpz.txt>Whelpz</a>

<li><a href=?img=work_amiga_pixel/traktor.txt>Traktor</a>

<li><a href=?img=work_amiga_pixel/other.txt>Other</a>

  
</ul>

<a href=?img=work_amiga_pixel/fullscreen.txt>Fullscreen</a>

  </td><td valign=top>
<?PHP 
	if(isset($_GET['img'])){
		if(substr($_GET['img'], -3) == "txt"){
			include($_GET['img']);
		}else{
			echo "<img border=1 src='".$_GET['img']."' />";
		}
	}			
echo "<br />". $comment[$_GET['img']];

// cat commando, korta ner adresserna?

		?>
</td></tr>
<tr><td colspan=2>

<p><br></p>

<hr>

<a href=work.php title="Work Main" class=back>&nbsp;&lt;&lt; Back&nbsp;</a>

<p><br></p>

</td></tr></table>



</body>
</html>
