bingo_timer
===========

timer, for calculate execution time

install
==========

todo...

usage
===========

calculate timer
---------------

```php
<?php
Bingo_Timer::start('usleep');
usleep(50000);
Bingo_Timer::end('usleep');
?>
```
tostring
--------

```php
<?php
Bingo_Timer::toString();//echo:799 usleep:50488
?>
```


get now time
--------------------------------------


```php
<?php
Bingo_Timer::getNowTime()
?>
```
