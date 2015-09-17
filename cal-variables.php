<?php
  
  /*
  Replace my_table with the tabel that will be checked for events
  */
  $table = "my_table"; 

  /*
  Enter your URL in the string below. 
  Note that this variable is placed at the beginning of <A HREF> link destinations in calendar.php.
  It should only contain the URL and should not contain any $_GET variables.
  To be clear, here is an example of how it will be called:
  echo "<a href='$url?date=$date'>Example</a>";
  */
  $url = "";

  /*
  Enter any $_GET variables that you would like to have included in all URLs.
  Do not end the string with a '&' to accommadate additional variables already in place.
  For example, if your website is set up to navigate using PHP, you may
  want to add something like "page=$page".
  Again, like the above variable, here is an example of how it will be called:
  echo "<a href='$url?$getvars&date=$date'>Example</a>";
  */
  
  $getvars = "";

?>
