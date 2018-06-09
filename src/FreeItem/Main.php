<?php

namespace FreeItem;

#เพิ่มระบบชื่อไอเทมสำหรับเวอร์ชั่นใหม่!
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandExecutor;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\item\Item;
#ปลั้กอินทำโดย HumYaiJang 
#Made By HumYaiJang

Class Main extends PluginBase{

    public function onEnable(){
        $this->getLogger()->info("FreeItem Plugin Enable");
    }
    
    public function onDisable(){
        $this->getLogger()->info("FreeItem Plugin disable");
    }
    
    public function onCommand(CommandSender $sender, Command $command, String $label, array $args) : bool {
        switch($command->getName()){
            case "freeitem";
            $sender->sendMessage("§a[§bFreeItem§a] §eYou get free item from server!");
            $sender->addTitle("  [§eFreeItem§r] \n§aYou get free item!");
            $item = Item::get(17,0,64);
            $item->setCustomName("[§eFreeItem§r] \n OakWood");
            $inv = $sender->getInventory();
            $inv->addItem($item);
            $item = Item::get(1,0,16);
            $item->setCustomName("[§eFreeItem§r] \n Stone");
            $inv = $sender->getInventory();
            $inv->addItem($item);
            $item = Item::get(297,0,32);
            $item->setCustomName("[§eFreeItem§r] \n Bread");
            $inv = $sender->getInventory();
            $inv->addItem($item);
            $item = Item::get(303,0,1);
            $item->setCustomName("[§eFreeItem§r] \n ChainPlet");
            $inv = $sender->getInventory();
            $inv->addItem($item);
            $item = Item::get(302,0,1);
            $item->setCustomName("[§eFreeItem§r] \n Helmet");
            $inv = $sender->getInventory();
            $inv->addItem($item);
            $item = Item::get(312,0,1);
            $item->setCustomName("[§eFreeItem§r] \n Legging");
            $inv = $sender->getInventory();
            $inv->addItem($item);
            $item = Item::get(301,0,1);
            $item->setCustomName("[§eFreeItem§r] \n Boot");
            $inv = $sender->getInventory();
            $inv->addItem($item);
            $item = Item::get(267,0,1);
            $item->setCustomName("[§eFreeItem§r] \n IronSword");
            $inv = $sender->getInventory();
            $inv->addItem($item);
            return true;
        }
    }
}
