<?php

namespace App\Src\Domain\Site\Entities;

final class Site
{
    public function __construct(
        public int $id,
        public string $code,
        public string $name,
    ) {}
}
