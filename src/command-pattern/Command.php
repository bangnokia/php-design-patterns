<?php

interface Command
{
    public function execute();
}

class Light
{
    public function on()
    {
        echo 'Light is on';
    }

    public function off()
    {
        echo 'Light is off';
    }
}

class LightOnCommand implements Command
{
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->on();
    }
}

class GarageDoor
{
    public function up()
    {
        echo 'Garagedoor is up';
    }
    public function down()
    {
        echo 'Garagedoor is down';
    }
    public function stop()
    {
        echo 'Garagedoor is stop';
    }
    public function lightOn()
    {
        echo 'Garagedoor is lightOn';
    }
    public function lightOff()
    {
        echo 'Garagedoor is lightOff';
    }
}

class SimpleRemoteControl
{
    private $slot;

    public function __construct()
    {
    }

    public function setCommand(Command $command)
    {
       $this->slot = $command;
    }

    public function buttonWasPressed()
    {
        $this->slot->execute();
    }
}