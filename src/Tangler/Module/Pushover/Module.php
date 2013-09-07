<?php

namespace Tangler\Module\Pushover;

use Tangler\Core\AbstractModule;
use Tangler\Core\Interfaces\ModuleInterface;

class Module extends AbstractModule implements ModuleInterface
{
    public function Init()
    {
        $this->setKey('pushover');
        $this->setLabel('Pushover module');
        $this->setDescription('Send push messages to your iOS and Android devices through pushover.net');
        $this->setImageUrl('http://cdn.androidpolice.com/wp-content/uploads/2013/08/nexusae0_Pushover-Thumb.png');

        // No triggers
        $this->setTriggers(array());

        $this->setActions(array(
            new \Tangler\Module\Pushover\SendMessageAction()
        ));
    }
}
