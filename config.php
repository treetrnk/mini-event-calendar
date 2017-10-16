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
  Enter any $_GET variables that you would like to have included in all <A HREF> links.
  Do NOT end the string with a '&' to accommadate additional variables already in place.
  For example, if your website is set up to navigate using PHP, you may
  want to add something like "page=$page".
  Again, like the above variable, here is an example of how it will be called:
  echo "<a href='?date=$date&$getvars'>Example</a>";
  */
  $getvars = "";

  /*
  If you click on a date that has an event on it, it will bring you to the destination of the variable
  below and append one $_GET variable to it. So if the string below is set to something like 
  "www.example.com/event.php" make sure it ends with a ? ("www.example.com/event.php?") to accomodate 
  the variable that will be appended to it. Additionally, if you place variables after the url 
  ("www.example.com/index.php?page=event"), end the string with a &.
   */
  $event_page = "";

///////////////////////////////
//    COLOR VARIABLES    //
///////////////////////////////

/**
 * This would be much better served by dynamically setting this to different classes and having CSS handle the different colors, but to fix
 * the requested ask by the creator, we can set the color here
 */

$calendarHeaderColor = '#72aaff';
$calendarDayColor = '#aaccff';
?>
