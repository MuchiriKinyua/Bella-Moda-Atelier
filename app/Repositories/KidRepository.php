<?php

namespace App\Repositories;

use App\Models\Kid;
use App\Repositories\BaseRepository;

class KidRepository extends BaseRepository
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
        return Kid::class;
    }
}
