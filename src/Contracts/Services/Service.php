<?php

namespace App\Contracts\Services;

use App\Contracts\Repositories\Repository;
use Pyntax\Contracts\CRUDInterface;

/**
 * Interface Service
 * @package App\Contracts\Services
 */
interface Service extends CRUDInterface
{
    function __construct(Repository $repository);

    /**
     * @return Repository
     */
    function getRepository();
}