<?php
// Modules/Counter/Services/CounterServiceInterface.php

namespace Modules\Counter\Services;

interface CounterServiceInterface
{
    public function getCount();
    public function increment();
    public function decrement();
}
