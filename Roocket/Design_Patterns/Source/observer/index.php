<?php

require_once  "./vendor/autoload.php";
use App\Service;

use  App\Publisher;

$notify=new Publisher();

$email = new Service('MailObserver',30);
$clock=new Service('ClockObserver',50);
$desktop=new Service('DesktopObserver',40);
$icon=new Service('IconObserver',10);

$notify->register($email);
$notify->register($clock);
$notify->register($desktop);
$notify->register($icon);
$notify->setEvent('do something ...');
$notify->unregister($email);
$notify->setEvent('something else...');
