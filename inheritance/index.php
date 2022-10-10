<?php
namespace LearnPHP;

require_once ("UserInterface.php");
require_once ("MemberInterface.php");
require_once ("Guest.php");
require_once ("User.php");
require_once ("Teacher.php");
require_once ("HrManager.php");

$guest = new Guest();
echo "Is Guest? -> {$guest->isGuest()}<br>";

$user = new User(1, "Leonardo", "Cory");
echo "Is Guest? -> {$user->isGuest()}<br>";

$teacher = new Teacher(2, "Dalton", "Willton");
$hr = new HrManager(3, "Russel", "Randal");

echo "canScanUserList? -> {$hr->canScanUserList()}";