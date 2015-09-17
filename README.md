# mini-event-calendar
A simple PHP calendar capable of highlighting days containing events. 

![](http://i.imgur.com/s2zlu3w.png)



###Follow these steps to implement into your website:

1. In the PHP file that you want the calendar to appear on, add the following between the `<head>` `</head>` tags.
```html
  <link rel="stylesheet" href="cal-style.css">
```
2. Then add the following line where you want the calendar to appear (must be inside `<?php` `?>` tags).
```php
include('calendar.php')
```
