<?php

declare(strict_types = 1);

namespace HenryDM\TouchLight;

use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\block\Block;
use pocketmine\block\BlockFactory;

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
                    $block->setBlock($block->getPosition()->asVector3(), BlockFactory::getInstance()->get(124, 0));
                break;
                case 124:
                    $block->setBlock($block->getPosition()->asVector3(), BlockFactory::getInstance()->get(123, 0));
                break;
            }
        }
    }
}
