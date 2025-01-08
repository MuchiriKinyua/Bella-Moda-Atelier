<?php

namespace App\Repositories;

use App\Models\King;
use App\Repositories\BaseRepository;

class KingRepository extends BaseRepository
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
        return King::class;
    }
}
