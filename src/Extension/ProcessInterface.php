<?php
namespace Codeception\Extension;

interface ProcessInterface
{
    public function open();

    public function close();

    public function terminate();
}