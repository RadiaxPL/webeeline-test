<?php

namespace App\Repositories\Implementations;

use App\Models\People;
use App\Repositories\Interfaces\IPeopleRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class PeopleRepository implements IPeopleRepository
{
    public function __construct(private People $people)
    {}

    public function all(): Collection
    {
        return $this->people->all();
    }

    public function find(int $id): ?Model
    {
        return $this->people->find($id);
    }
}
