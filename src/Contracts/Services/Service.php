<?php

namespace Pyntax\Contracts\Services;

use Pyntax\Contracts\Repositories\Repository;
use Pyntax\Contracts\CRUDInterface;

/**
 * Interface Service
 * @package Pyntax\Contracts\Services
 */
interface Service extends CRUDInterface
{
    function __construct(Repository $repository);

    /**
     * @return Repository
     */
    function getRepository();
}