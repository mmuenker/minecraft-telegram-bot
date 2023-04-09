<?php
$config = [
  "bot_token" => getenv("BOT_TOKEN") ?: throw new Exception("BOT_TOKEN environment variable not set"), // The token of your Telegram bot - this is provided by @BotFather after creating the bot
  "server_url" => getenv("SERVER_URL") ?: throw new Exception("SERVER_URL environment variable not set"), // URL of your Minecraft server. Leave localhost in here if it's running on the same server as this script
  "server_port" => getenv("SERVER_PORT") ?: throw new Exception("SERVER_PORT environment variable not set"), // Minecraft server port (not the rcon or query port!), default is 25565
  "chat_id" => getenv("CHAT_ID") ?: throw new Exception("CHAT_ID environment variable not set"), // Starts with a dash
  "lang" => getenv("LANG") ?: throw new Exception("LANG environment variable not set"), // The language your bot should speak – German (de), Russian (ru), Polish (pl) and of course English (en) are supported
];
?>
