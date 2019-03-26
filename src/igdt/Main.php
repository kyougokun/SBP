<?php

namespace igdt;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents(new Event(), $this);
	}
}