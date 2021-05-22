<?php

namespace Sleep;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\player\PlayerBedEnterEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class Sleep extends PluginBase implements Listener{

    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
    }

    public function onSleep(PlayerBedEnterEvent $ev)
    {
        $p = $ev->getPlayer();
        $p->getLevel()->setTime(0);
    }
}