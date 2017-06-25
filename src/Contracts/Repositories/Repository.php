<?php

namespace Pyntax\Contracts\Repositories;

use Pyntax\Contracts\CRUDInterface;

/**
 * Interface Repository
 * @package Pyntax\Contracts\Repositories
 */
interface Repository extends CRUDInterface
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