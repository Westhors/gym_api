<?php

namespace App\Repositories;

use App\Interfaces\TrainingRepositoryInterface;
use App\Models\Training;
use Illuminate\Database\Eloquent\Model;

class TrainingRepository extends CrudRepository implements TrainingRepositoryInterface
{
    protected Model $model;

    public function __construct(Training $model)
    {
        $this->model = $model;
    }
}
