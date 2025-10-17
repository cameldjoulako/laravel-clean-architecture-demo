<?php

namespace App\Src\Domain\Truck\Repositories;

use App\Src\Domain\Truck\Entities\Truck;

interface TruckRepository
{
    public function findByCode(string $code): ?Truck;
}
