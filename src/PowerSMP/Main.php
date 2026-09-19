<?php

namespace PowerSMP;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

    public function onEnable(): void{
        $this->getLogger()->info("PowerSMP Enabled!");
    }
}
