<?php
define('ROOT_PATH' , dirname(__FILE__));
error_reporting(E_ALL);
$strBingoLibPath = ROOT_PATH . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'libs';
set_include_path(get_include_path() . PATH_SEPARATOR . $strBingoLibPath);

require_once 'Bingo/Timer.php';
Bingo_Timer::start('usleep');
usleep(50000);
Bingo_Timer::end('usleep');

Bingo_Timer::start('echo');
echo 'hello...........' . "\n";
Bingo_Timer::end('echo');

echo Bingo_Timer::calculate('echo') . "\n";//799
echo Bingo_Timer::toString();//echo:799 usleep:50488