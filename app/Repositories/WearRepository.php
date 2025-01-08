<?php

namespace App\Repositories;

use App\Models\Wear;
use App\Repositories\BaseRepository;

class WearRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'description'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Wear::class;
    }
}
