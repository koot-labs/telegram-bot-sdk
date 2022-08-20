<?php declare(strict_types=1);

namespace Telegram\Bot\Events;

use League\Event\AbstractEvent;
use Telegram\Bot\Api;
use Telegram\Bot\Objects\Message;

final class MessageSentEvent extends AbstractEvent
{
    /** @var \Telegram\Bot\Api */
    public $telegram;

    /** @var \Telegram\Bot\Objects\Message */
    public $message;

    public function __construct(Api $telegram, Message $message)
    {
        $this->telegram = $telegram;
        $this->message = $message;
    }
}
