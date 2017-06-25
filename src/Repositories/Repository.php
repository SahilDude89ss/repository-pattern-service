<?php

namespace Pyntax\Repositories;

use Pyntax\Contracts\Repositories\Repository as RepositoryContract;

/**
 * Class Repository
 * @package Pyntax\Repositories
 */
class Repository implements RepositoryContract
{
    protected $model;

    /**
     * Repository constructor.
     * @param $model
     */
    public function __construct($model)
    {
        $this->model = app($model);
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getTable()
    {
        return $this->model->getTable();
    }

    /**
     * @param $id
     * @return mixed
     */
    function get($id)
    {
        $staticModel = $this->model;
        return $staticModel::find($id);
    }

    /**
     * @param array $where
     * @param int $page
     * @param int $size
     * @return mixed
     */
    function find(array $where, $page = 0, $size = 25)
    {
        $staticModel = $this->model;
        return $staticModel::where($where)->take($size)->skip(0)->get();
    }

    function save(array $data)
    {
        $staticModel = $this->model;
        return $staticModel::save($data);
    }

    /**
     * @param $id
     * @param array $data
     * @return bool
     */
    function update($id, array $data)
    {
        // Lets find the Model
        $record = $this->get($id);

        if (!empty($record)) {
            return $record->fill($data)->save();
        }

        return false;
    }
}