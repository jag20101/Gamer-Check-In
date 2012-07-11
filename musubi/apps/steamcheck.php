<?php
		//$username = $_GET["username"];
		$username = "furby559";
		$user_xml = file_get_contents("http://www.steamcommunity.com/id/" . $username . "/?xml=1");

		$xml = simplexml_load_string($user_xml);
		$steamId = $xml->steamID64[0];

		$key = "E22671BF0F254C6A176C159000114CC8";
		$current_xml = file_get_contents("http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $key . "&steamids=" . $steamId . "&format=xml");

		$xml = simplexml_load_string($current_xml);
		$player = $xml->players->player;

		$name = $player->personaname[0];

		if(isset($player->realname[0])) {
		    $name = $player->realname[0];
		}

		$gamextrainfo = "";
		if(isset($player->gameextrainfo[0])) {
		  $gameextrainfo = $player->gameextrainfo[0];
		}

		echo $name . "\n" . $gameextrainfo;
?>