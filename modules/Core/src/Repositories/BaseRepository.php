<?php

namespace Core\Repositories;

use Core\Models\BaseModel;

class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    public function __construct(BaseModel $baseModel)
    {
        $this->model = $baseModel;
    }

    public function find($id)
    {
        return $this->model->find($id);
    }
}
