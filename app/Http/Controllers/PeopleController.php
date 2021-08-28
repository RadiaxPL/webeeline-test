<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Repositories\Interfaces\IPeopleRepository;

class PeopleController extends Controller
{
    public function __construct(private IPeopleRepository $peopleRepository)
    {}

    public function index(): string
    {
        return $this->peopleRepository->all();
    }

    public function show(int $id): string
    {
        $people = $this->peopleRepository->find($id);

        // Można by również rzucać 404 z poziomu repoztorium ( findOrFail() na modelu )
        if (!$people) {
            abort(404);
        }

        return $this->getPeopleName($people) ?? 'Pusto :/';
    }

    public function getPeopleName(People $people): string
    {
        return join(' ', [$people->name, $people->surname]);
    }
}
