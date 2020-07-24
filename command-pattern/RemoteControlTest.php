<?php

include 'Command.php';

class RemoteControlTest
{
    public function __construct()
    {
        $remote = new SimpleRemoteControl();
        $light = new Light();
        $lightOn = new LightOnCommand($light);

        $remote->setCommand($lightOn);
        $remote->buttonWasPressed();
    }
}

$test = new RemoteControlTest();