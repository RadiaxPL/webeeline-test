<?php

namespace App\Repositories\Interfaces;

use App\Models\People;
use Illuminate\Database\Eloquent\Collection;

interface IPeopleRepository
{
    public function all(): Collection;

    public function find(int $id): ?People;
}
