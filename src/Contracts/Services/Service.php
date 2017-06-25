<?php

namespace App\Contracts\Services;

use App\Contracts\Repositories\Repository;

/**
 * Interface Service
 * @package App\Contracts\Services
 */
interface Service
{
    function __construct(Repository $repository);

    /**
     * @return Repository
     */
    function getRepository();
}