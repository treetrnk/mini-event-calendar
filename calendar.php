<?php

  include('config.php');

  echo "
    <br />
    $_SERVER[HTTP_HOST] <br />
    $_SERVER[REQUEST_URI] <br />
  ";
  
  // Accommodate additional variables already in URLs
  if ( $getvars != "" ){
    $getvars_plus = "$getvars&";
  } else {
    $getvars_plus = "";
  }
  
  if (isset($_GET['m']) && isset($_GET['y'])) {
    $m = $_GET['m'];
    $y = $_GET['y'];
    $caldate = $y . '-' . $m . '-01';
    $caldate = strtotime($caldate);
  } else {
    $m = date('n', time());
    $y = date('Y', time());
    $caldate = $y . '-' . $m . '-01';
    $caldate = strtotime($caldate);
  }

  $month = date('F', $caldate);
  $total_days = date('t', $caldate);
  $nextdate = $caldate + 32 * $dateunits['day'];
  $nextm = date('n', $nextdate);
  $nexty = date('Y', $nextdate);
  $prevdate = $caldate - 10 * $dateunits['day'];
  $prevm = date('n', $prevdate);
  $prevy = date('Y', $prevdate);

  echo "
    <table width=100% cellspacing='0' class='calendar'>
      <tr bgcolor=#72aaff>
        <td>
          <a style='text-decoration:none;color:#000000;' href='?m=$prevm&y=$prevy&$getvars'>&#9668;</a>
        </td>
        <td colspan='5' align='center'>
          <a style='text-decoration:none;color:#000000;' href='?$getvars'><b>$month $y</b>
        </td>
        <td align='right'>
          <a style='text-decoration:none;color:#000000;' href='?m=$nextm&y=$nexty&$getvars'>&#9658;</a>
        </td>
      </tr>
      <tr style='border-top: 1px solid #999999;' bgcolor=#aaccff>
        <th>Su</th>
        <th>Mo</th>
        <th>Tu</th>
        <th>We</th>
        <th>Th</th>
        <th>Fr</th>
        <th>Sa</th>
      </tr>
      <tr>
  ";
    
      $dayofweek = date('w', $caldate);
      $dayofmonth = 1;
      while ($dayofmonth <= $total_days) {          //START FILLING DAYS
        if ($dayofweek == 7) {
          $dayofweek = 0;
          echo "
      </tr>
      <tr>
          ";
        }

        if ($dayofmonth == 1) {                                       //PREVIOUS MONTH DAYS
          $prevtotal = date('t', $prevdate);
          $daysbefore = $dayofweek;
          while ($daysbefore > 0) {
            $tempday = $prevtotal - $daysbefore + 1;
            $prevdate = date('Y-m-d', strtotime($prevy . '-' . $prevm . '-' . $tempday));
            //$sql = "SELECT * FROM $table WHERE $additional_sql AND $datecol BETWEEN '$prevdate 00:00:00' AND '$prevdate 23:59:59'";
            echo "<td class='cal-other' align='center'>$tempday</td>";
            $daysbefore--; 
          } 
        }  
        $caldate = strtotime($y . '-' . $m . '-' . $dayofmonth . ' 00:00:00');           //CURRENT MONTH DAYS
        $endofday = $caldate + $dateunits['day'] - 1;           
        $formatted = date('Y-m-d', $caldate);
        $today = date('Y-m-d', time());
        
        if ( $check_events == "yes") {      // HIGHLIGHT DAYS WITH EVENTS - CIRCLE IF CURRENT DAY
          $sql = "SELECT * FROM $table WHERE $additional_sql AND $date_col BETWEEN '$caldate' AND '$endofday'";
          $result = mysql_query($sql); 
          if (mysql_num_rows($result) > 0) { 
            echo "<td class='cal-event' align='center'>";
            echo "<a href='?date=$formatted&$getvars'"; 
            if ($formatted == $today) { echo "style='border: 1px solid #454545;border-radius: 3px;'"; }
            echo ">$dayofmonth</a>";
          } else {
            echo '<td class="cal-normal" align="center">';
            if ($formatted == $today) { echo "<span style='border: 1px solid #454545;border-radius: 3px;'>"; }
            echo $dayofmonth;
            if ($formatted == $today) { echo "</span>"; }
          }
        } else {
          echo '<td class="cal-normal" align="center">';
          if ($formatted == $today) { echo "<span style='border: 1px solid #454545;border-radius: 3px;'>"; }
          echo $dayofmonth;
          if ($formatted == $today) { echo "</span>"; }
        }
        
        echo "</td>"; 

        $dayofmonth++;
        $dayofweek++;
      }  
      $tempday = 1;
      while ($dayofweek < 7) {                                                          //NEXT MONTH DAYS
        echo "<td class='cal-other' align='center'>$tempday</td>";
        $dayofweek++;
        $tempday++;
      }
    
  echo "
      </tr>
    </table>
  ";


?>
