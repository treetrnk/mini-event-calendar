<?php

    ///////////////////////////
   //    MYSQL VAIRABLES    //
  ///////////////////////////
  
  /*
  This variable determines whether or not the calendar checks for events. The options 
  are "yes" or "no".
  */
  $check_events = "no";
  
  /*
  Enter the table that will be checked for events
  */
  $table = ""; 
  
  /*
  Enter the table's collumn that is checked for an event date. If the date is on a day
  being displayed by the calendar, it will highlight it and make it a link. Can only
  be left blank if $check_events above is set to no.
  */
  $date_col = "";
  
  /*
  This variable is for additional delimiters/conditions in the SQL statement. It comes
  after the WHERE keyword, meaning that it should contain conditions only. This can be 
  left blank.
  */
  $additional_sql = "";
  
  
  
    ///////////////////////////////
   //    HYPERLINK VARIABLES    //
  ///////////////////////////////
  
  // NOTE: THESE CAN BE LEFT BLANK
  
  /*
  Enter your URL in the string below. 
  Note that this variable is placed at the beginning of <A HREF> link destinations in calendar.php.
  It should only contain the URL and should not contain any $_GET variables.
  To be clear, here is an example of how it will be called:
  echo "<a href='$url?date=$date'>Example</a>";
  */
  $url = "";

  /*
  Enter any $_GET variables that you would like to have included in all <A HREF> links.

  Do NOT end the string with a '&' to accommadate additional variables already in place.
  For example, if your website is set up to navigate using PHP, you may
  want to add something like "page=$page".
  Again, like the above variable, here is an example of how it will be called:
  echo "<a href='$url?$getvars&date=$date'>Example</a>";
  */
  $getvars = "";

?>
