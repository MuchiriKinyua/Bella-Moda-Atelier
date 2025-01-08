<?php

namespace App\Repositories;

use App\Models\Fabric;
use App\Repositories\BaseRepository;

class FabricRepository extends BaseRepository
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
        return Fabric::class;
    }
}
