<?php declare(strict_types = 1);

namespace Room11\StackChat\Event;

class ReplyMessage extends MessageEvent
{
    const TYPE_ID = EventType::MESSAGE_REPLY;
}
