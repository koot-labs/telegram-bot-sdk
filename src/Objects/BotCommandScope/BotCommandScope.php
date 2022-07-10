<?php

namespace Telegram\Bot\Objects\BotCommandScope;

use Telegram\Bot\Objects\AbstractCreateObject;

/**
 * This object represents the scope to which bot commands are applied.
 */
abstract class BotCommandScope extends AbstractCreateObject
{
    /** @var string Scope type. Should be set in child classes. */
    protected $type;

    /**
     * Create a new object.
     *
     * @param array $fields
     */
    public function __construct(array $fields = [])
    {
        $fields['type'] = $this->type;

        parent::__construct($fields);
    }

    /** @deprecated Will be removed in SDK v4 */
    public function relations(): array
    {
        // it added just to simplify migration to SDK v4
        throw new \BadMethodCallException('Scopes should not have relations.');
    }
}
