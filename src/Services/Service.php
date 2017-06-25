<?php

namespace Pyntax\Services;

use App\Contracts\Repositories\Repository;
use App\Contracts\Services\Service as ServiceContract;

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
}