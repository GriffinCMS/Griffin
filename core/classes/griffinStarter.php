<?php

class griffinStarter
{
    function __construct()
    {
        new errorReporter();
        new twigStarter();
    }
}