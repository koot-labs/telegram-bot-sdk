<?php

namespace Telegram\Bot\Objects\BotCommandScope;

/**
 * Represents the scope of bot commands, covering all private chats.
 *
 * @link https://core.telegram.org/bots/api#botcommandscopeallprivatechats
 */
class BotCommandScopeAllPrivateChats extends BotCommandScope
{
    protected $type = 'all_private_chats';
}
