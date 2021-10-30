<?php

include_once "Interficie.php";
include_once "Item.php";
include_once "Expandible.php";
include_once "Food.php";
include_once "Drink.php";
include_once "Medicine.php";
include_once "Tool.php";
include_once "Inventory.php";
include_once "Player.php";


$manolo = new Player(50, 25, 25, 2, 2, new Tool("pico", 1, 70), new Drink("water", 1, 2, 20, 50, 1));
$antonio = new Player(50, 25, 25, 8, 5, new Tool("espada", 1, 100), new Food("meat", 1, 2, 20, 50, 1));
$pepe = new Player(50, 25, 25, 8, 5, new Tool("hacha", 1, 70), new Medicine("First aid kit", 1, 2, 100));

$antonio->eat();
echo 'Antonio food level = ' . $antonio->getFoodLevel();
echo '<br>';
$manolo->drink();
echo 'Manolo drink level = ' .  $manolo->getDrinkLevel();
echo '<br>';
$pepe->takeMedicine();
echo '<br>';

echo $inventarioPepe->__toString();
$inventarioPepe->add(new Food("meat", 1, 2, 20, 50, 1));
$pepe->moveToInventory(true);
echo $inventarioPepe->__toString();
$pepeHacha = $inventarioPepe->getMatriuItem(0, 1);
echo $pepe->searchInventory("meat");
$inventarioPepe->remove($pepeHacha);
echo $inventarioPepe->__toString();
$inventarioPepe->add(new Food("meat", 1, 2, 20, 50, 1));
$inventarioPepe->add(new Food("meat", 1, 2, 20, 50, 1));
$inventarioPepe->add(new Food("meat", 1, 2, 20, 50, 1));
$inventarioPepe->add(new Food("meat", 1, 2, 20, 50, 1));
$inventarioPepe->add(new Food("meat", 1, 2, 20, 50, 1));
$inventarioPepe->add(new Food("meat", 1, 2, 20, 50, 1));
$inventarioPepe->add(new Food("meat", 1, 2, 20, 50, 1));
$inventarioPepe->add(new Food("meat", 1, 2, 20, 50, 1));
$inventarioPepe->add(new Food("meat", 1, 2, 20, 50, 1));
$inventarioPepe->add(new Food("meat", 1, 2, 20, 50, 1));
$inventarioPepe->add(new Food("meat", 1, 2, 20, 50, 1));
$inventarioPepe->add(new Food("meat", 1, 2, 20, 50, 1));
$inventarioPepe->add(new Food("meat", 1, 2, 20, 50, 1));
echo $inventarioPepe->__toString();
echo $pepe->searchInventory("meat");
$inventarioPepe->reordenar();
echo $inventarioPepe->__toString();


?>