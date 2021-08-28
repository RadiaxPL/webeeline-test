<?php

namespace App\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface IPeopleRepository
{
    public function all(): Collection;

    public function find(int $id): ?Model;
}
