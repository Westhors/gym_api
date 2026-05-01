<?php

namespace App\Repositories;

use App\Interfaces\ResultRepositoryInterface;

use App\Models\Result;
use Illuminate\Database\Eloquent\Model;

class ResultRepository extends CrudRepository implements ResultRepositoryInterface
{
    protected Model $model;

    public function __construct(Result $model)
    {
        $this->model = $model;
    }
}
