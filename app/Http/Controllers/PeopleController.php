<?php

namespace App\Http\Controllers;

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
        return $this->peopleRepository->find($id) ?? 'Pusto :/';
    }
}
