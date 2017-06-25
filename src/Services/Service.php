<?php

namespace Pyntax\Services;

use Pyntax\Contracts\Repositories\Repository;
use Pyntax\Contracts\Services\Service as ServiceContract;

/**
 * Class Service
 * @package Pyntax\Services
 */
class Service implements ServiceContract
{
    /**
     * @var Repository
     */
    protected $repository;

    /**
     * Service constructor.
     * @param Repository $repository
     */
    public function __construct(Repository $repository)
    {
        parent::__construct($repository);
    }

    /**
     * @return Repository
     */
    function getRepository()
    {
        return $this->repository;
    }

    /**
     * @param $id
     * @return mixed
     */
    function get($id)
    {
        return $this->getRepository()->get($id);
    }

    /**
     * @param array $where
     * @param int $page
     * @param int $size
     * @return mixed
     */
    function find(array $where, $page = 0, $size = 25)
    {
        return $this->getRepository()->find($where, $page, $size);
    }

    /**
     * @param array $data
     * @return mixed
     */
    function save(array $data)
    {
        return $this->getRepository()->save($data);
    }

    /**
     * @param $id
     * @param array $data
     * @return mixed
     */
    function update($id, array $data)
    {
        return $this->getRepository()->update($id, $data);
    }
}