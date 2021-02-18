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

<?PHP
  //So we create a list of groups, in this list we use Uppercase in first letter for displaying
  //Later we can convert back to lowercase

  /*
  *
  * If you need to add a new group just add a comma , and 'Group'
  * Then create the file in directory_name
  *
  */

  //groups names used for printing and when we need them for file just strtolower($groups[$i]);
  $groups = array('Latex','Satanic','Phantasy','Pacific','Boozombies','Planet Jazz','Chiperia','Insane','Whelpz','Traktor','Other');

  //Directory path(if would be something like folder/folder2 maybe will require some tweak)
  //it just works "work_amiga_pixel/test/test";
  $directory_name = "work_amiga_pixel";
  $file_format = ".txt";

  ?>

  <h2>Amiga Pixel Art</h2>

  </td></tr>
  <tr><td valign=top width=35%>

  <b>&nbsp;Logos&nbsp;</b><ul>


  <?php
  /*
  * Menu
  * This little thing just takes data from the list of groups
  * and just outputs/prints the menu list automatically
  *
  */

  //It reads for every $index in our list do stuff
  //count is the total count of indexes
  for ($i=0; $i < count($groups); $i++) : ?>

  <li><a href=?img=<?php echo preg_replace('/\s+/', '', strtolower($groups[$i])); //group name in lowercase is our filename ?>><?php echo $groups[$i] //group name with uppercase?></a>

  <?php
  //would be something like ?img=latex(lowercase)
  endfor;
  //So u dont have to add a link everytime u add new group and texfile
  /*
  *
  * End of menu
  *
  */


  //fix fullscreen
  ?>
  </ul>

  <a href=?img=fullscreen>Fullscreen</a>

    </td><td valign=top>

  <?PHP

  /*
  *
  * Script for Data and Directory validation
  * features:
  * Sanitize user input on url
  * Check if files exists on data structure and directory
  * https://github.com/thekorko
  * www.quartex.net
  * Code is gplv2, distribute freely, but give credits please
  *
  */

  //We get a variable which could be manipulated by user
  if(isset($_GET['img'])) {

    //we asume our GET is dirty
    $dirty_variable = $_GET['img'];

    //We clean the variable
    //preg_replace only:
    //[^a-z\-] alphabetic lowercase and allow -
    //[^A-Za-z\-] alphabetic lower and uppercase, allow -
    //[^A-Za-z0-9\-] alphanumeric lower and uppercase allow -
    //trim is for removing spaces
    $clean_variable = preg_replace('/[^a-z\-]/', '', trim($dirty_variable));
    //debugging echo "The GET variable is" . $clean_variable;

    //another way of doing it
    //$clean_Variable = htmlspecialchars($clean_Variable, ENT_QUOTES);

    //we check if that filename exists in our data structure(array of textfiles)
    if (in_array(ucwords($clean_variable), $groups) or ($clean_variable == 'fullscreen')) {

      //we build a filepath structure
      $filepath = $directory_name . "/" . $clean_variable . $file_format;

      //we check if the file exists
      if (file_exists($filepath)) {
        //we require said filepath
        require($filepath); //we use require instead of include because nowadays its better
      } else {
        //file not found
        echo " 404 Not found";
      }
    } else {
      //data not found
      echo " 404 Not found";
    }
  }

/*
* End of
* Script for data validation
*
*/

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
