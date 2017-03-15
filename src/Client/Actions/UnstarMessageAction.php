<?php declare(strict_types = 1);

namespace Room11\StackExchangeChatClient\Client\Actions;

use Room11\StackExchangeChatClient\Client\MessageEditFailureException;
use Room11\StackExchangeChatClient\Log\Level;

class UnstarMessageAction extends Action
{
    public function processResponse($response, int $attempt): int
    {
        if ($response === 'ok') {
            $this->succeed();
            return self::SUCCESS;
        }

        $errStr = 'A JSON response that I don\'t understand was received';
        $this->logger->log(Level::ERROR, $errStr, $response);
        $this->fail(new MessageEditFailureException($errStr));

        return self::FAILURE;
    }
}
