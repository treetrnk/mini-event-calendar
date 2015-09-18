# mini-event-calendar
A simple PHP calendar capable of highlighting days containing events. 

![](http://i.imgur.com/s2zlu3w.png)



###Follow these steps to implement into your website:

* Download and extract zip file to root of your website.
* In the PHP file that you want the calendar to appear on, add the following between the `<head>` `</head>` tags.
```html
  <link rel="stylesheet" href="mini-event-calendar-master/cal-style.css">
```
* Then add the following line where you want the calendar to appear (must be inside `<?php` `?>` tags).
```php
  include('mini-event-calendar-master/calendar.php')
```
* Edit `config.php` and change variables to desired values. Note that some can be left blank.

* For a very basic example how this should be implemented into a page, see `/example.php` below.

```php
  <html>
    <head>
      <title></title>
        <link rel="stylesheet" href="mini-event-calendar-master/cal-style.css">
    </head>
    <body>
      <?php 
        include('mini-event-calendar-master/calendar.php') 
      ?>
    </body>
  </html>
```
