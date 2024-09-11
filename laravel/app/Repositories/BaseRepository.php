<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository
{
    protected $model;

    protected $allowedSorts;

    public $isLoggingActive = true;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }
}
