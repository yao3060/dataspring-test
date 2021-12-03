<?php

namespace MyGreeter;

class Client
{
    public function getGreeting(): string
    {
        $hour = date('h');
        try {
            return match ((int)$hour) {
                6, 11 => Status::MORNING(),
                12, 17 => Status::AFTERNOON(),
            };
        } catch (\UnhandledMatchError $e) {
            return Status::EVENING();
        }
    }
}
