<?php

namespace App\Repositories;

use App\Models\Lingerie;
use App\Repositories\BaseRepository;

class LingerieRepository extends BaseRepository
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
        return Lingerie::class;
    }
}
