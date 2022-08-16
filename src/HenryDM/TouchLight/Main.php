<?php

declare(strict_types = 1);

namespace HenryDM\TouchLight;

use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\block\Block;

class Main extends PluginBase implements Listener {

    public function onEnable() : void 
	{
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onPlayerInteract(PlayerInteractEvent $event){
        $block = $event->getBlock();
        if($event->getAction() === PlayerInteractEvent::RIGHT_CLICK_BLOCK){
            switch($block->getId()){
                case 123:
                    $block->getWorld()->setBlock($block->asVector3(), Block::get(124));
                break;
                case 124:
                    $block->getWorld()->setBlock($block->asVector3(), Block::get(123));
                break;
            }
        }
    }

}








