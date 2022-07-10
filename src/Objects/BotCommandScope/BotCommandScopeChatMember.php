<?php

namespace Telegram\Bot\Objects\BotCommandScope;

/**
 * Represents the scope of bot commands, covering a specific member of a group or supergroup chat.
 *
 * @link https://core.telegram.org/bots/api#botcommandscopechatmember
 *
 * @method $this chatId(int|string $chat_id):(int|string)   Required. Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
 * @method $this userId(int $user_id):int                   Required. Unique identifier of the target user
 */
class BotCommandScopeChatMember extends BotCommandScope
{
    protected $type = 'chat_member';
}
