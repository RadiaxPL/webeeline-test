<?php

namespace App\Repositories\Implementations;

use App\Models\People;
use App\Repositories\Interfaces\IPeopleRepository;
use Illuminate\Database\Eloquent\Collection;

class PeopleRepository implements IPeopleRepository
{
    public function __construct(private People $people)
    {}

    public function all(): Collection
    {
        return $this->people->all();
    }

    public function find(int $id): ?People
    {
        return $this->people->find($id, ['name', 'surname']);
    }
}
