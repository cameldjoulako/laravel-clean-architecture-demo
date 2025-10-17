<?php

namespace App\Src\Domain\Site\Repositories;

use App\Src\Domain\Site\Entities\Site;

interface SiteRepository
{
    public function findByCode(string $code): ?Site;
}
