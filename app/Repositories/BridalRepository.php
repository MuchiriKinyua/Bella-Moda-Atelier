<?php

namespace App\Repositories;

use App\Models\Bridal;
use App\Repositories\BaseRepository;

class BridalRepository extends BaseRepository
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
        return Bridal::class;
    }
}
