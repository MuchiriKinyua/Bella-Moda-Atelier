<?php

namespace App\Repositories;

use App\Models\Jewellery;
use App\Repositories\BaseRepository;

class JewelleryRepository extends BaseRepository
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
        return Jewellery::class;
    }
}
