<?php

namespace MyGreeter;

class Client
{
    public function getGreeting(): string
    {
        $hour = date('h');
        try {
            return match ((int)$hour) {
                6, 11 => 'Good morning',
                12, 17 => 'Good afternoon',
            };
        } catch (\UnhandledMatchError $e) {
            return 'Good evening';
        }
    }
}
