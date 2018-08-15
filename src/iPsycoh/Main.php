<?php

namespace iPsycoh;

//Plugin
use pocketmine\plugin\PluginBase;
//Listener
use pocketmine\event\Listener;
//akaso
use pocketmine\Server;
use pocketmine\item\Item;
//Player
use pocketmine\Player;
//EntityNEvent
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;

class Main extends PluginBase implements Listener{

public function onEnable(){

$this->getServer()->getPluginManager()->registerEvents($this, $this);
$this->getLogger()->info("§cPlugin Activated");
}

public function onDeath(PlayerDeathEvent  $event){

$player = $event->getPlayer();
$name = $event->getPlayer()->setName();

if($player instanceof Player){
$cause = $player->getLastDamageCause(); 
if($cause instanceof EntityDamageByEntityEvent){ 
$kill = $cause->getDamager();

$kill->sendMessage("§bHai ricevuto una gapple per aver killato $name");
$item1 = Item::get(Item::GOLDEN_APPLE, 0, 1);			
$kill->getInventory()->addItem($item1);		
                          }
                }
        }
}
