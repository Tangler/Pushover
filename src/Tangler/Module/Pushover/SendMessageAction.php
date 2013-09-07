<?php

namespace Tangler\Module\Pushover;

use Tangler\Core\Interfaces\ActionInterface;
use Tangler\Core\AbstractAction;
use LinkORB\Pushover\Message;

class SendMessageAction extends AbstractAction implements ActionInterface
{
    public function Init()
    {
        $this->setKey('new_message');
        $this->setLabel('New message action');
        $this->setDescription('This action sends a new pushover message');

        $this->parameter->defineParameter('token', 'string', 'App token');
        $this->parameter->defineParameter('userkey', 'string', 'User key');
        $this->parameter->defineParameter('message', 'string', 'Message contents');
    }

    public function Run($input)
    {
        $token = $this->resolveParameter('token', $input);
        $userkey = $this->resolveParameter('userkey', $input);
        $message = $this->resolveParameter('message', $input);

        echo "\n### SendMessageAction: " . $message . "\n";
        $message = new Message(
            $token, 
            $userkey, 
            $message);
        $message->send();
    }
}
