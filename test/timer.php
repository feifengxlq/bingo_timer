<?php
define('ROOT_PATH' , dirname(__FILE__));
error_reporting(E_ALL);
$strBingoLibPath = ROOT_PATH . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'libs';
set_include_path(get_include_path() . PATH_SEPARATOR . $strBingoLibPath);

echo '<pre>';
require_once 'Bingo/Timer.php';
echo "=================\n";
echo "test begin ...\n";

echo "usleep\n";
Bingo_Timer::start('usleep');
usleep(50000);
Bingo_Timer::end('usleep');

echo "echo \n";
Bingo_Timer::start('echo');
echo 'hello...........' . "\n";
Bingo_Timer::end('echo');

echo "get time: Bingo_Timer::getNowTime \n";
Bingo_Timer::start('get_time');
echo "Now Time : " . date('Y-m-d H:i:s', Bingo_Timer::getNowTime()) . "\n";
Bingo_Timer::end('get_time');


echo '=================' . "\n";
echo 'output: ' .  "\n";

echo 'echo timer: ' . Bingo_Timer::calculate('echo') . "\n";//799
echo 'Bingo_Timer::toString: ' .Bingo_Timer::toString();//echo:799 usleep:50488
echo '</pre>';