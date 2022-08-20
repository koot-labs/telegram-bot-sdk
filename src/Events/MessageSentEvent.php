<?php declare(strict_types=1);

namespace Telegram\Bot\Events;

use League\Event\AbstractEvent;
use Telegram\Bot\Api;
use Telegram\Bot\Objects\Message;

final class MessageSentEvent extends AbstractEvent
{
    /** @var \Telegram\Bot\Api */
    public $api;

    /** @var \Telegram\Bot\Objects\Message */
    public $message;

    public function __construct(Api $bot, Message $message)
    {
        $this->api = $bot;
        $this->message = $message;
    }
}
