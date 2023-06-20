<?php
// Modules/Counter/Services/EloquentCounterService.php

namespace Modules\Counter\Services;

use Modules\Counter\Repositories\CounterRepositoryInterface;

class EloquentCounterService implements CounterServiceInterface
{
    private $counterRepository;

    public function __construct(CounterRepositoryInterface $counterRepository)
    {
        $this->counterRepository = $counterRepository;
    }

    public function getCount()
    {
        return $this->counterRepository->getCount();
    }

    public function increment()
    {
        return $this->counterRepository->increment();
    }

    public function decrement()
    {
        return $this->counterRepository->decrement();
    }
}
