<?php
require_once 'Classes/Product.php';
require_once 'Classes/Book.php';
require_once 'Classes/HardDrive.php';
require_once 'Classes/Company.php';
require_once 'Classes/User.php';
require_once 'Classes/Seller.php';
require_once 'Functions/displayUserName.php';
require_once 'Functions/displayToolTip.php';
require_once 'Functions/displayFullPrice.php';

$user1= new User('John', 'john@doe.mail');
$company= new Company('SARL L.Dupont','30 business street ' );
$seller1= new Seller('Laure', 'laure@dupont.mail', $company);

displayUserName($user1);
echo '<br>';
displayUserName($seller1);
echo '<br>';
displayToolTip($company);
echo '<br>';
displayToolTip($user1);
echo '<br>';
displayToolTip($seller1);
echo '<br>';
$hardDrive= new HardDrive('SuperFast', 120.00, 1, 'SuperTechno');
echo $hardDrive->name.' by '.$hardDrive->brand.' cost '.$hardDrive->price.'€';
echo '<br>';

displayFullPrice($hardDrive);