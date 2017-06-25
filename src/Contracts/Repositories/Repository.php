<?php

namespace App\Contracts\Repositories;

/**
 * Interface Repository
 * @package App\Contracts\Repositories
 */
interface Repository
{
    /**
     * Repository constructor.
     * @param $model
     */
    public function __construct($model);

    /**
     * @return mixed
     */
    public function getModel();

    /**
     * @return mixed
     */
    public function getTable();
}