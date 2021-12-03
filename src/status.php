<?php

namespace MyGreeter;

use MyCLabs\Enum\Enum;

class Status extends Enum
{
    private const MORNING = 'Good morning';
    private const AFTERNOON = 'Good afternoon';
    private const EVENING = 'Good evening';
}
