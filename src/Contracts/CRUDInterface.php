<?php

namespace Pyntax\Contracts;

/**
 * Interface CRUDInterface
 * @package Pyntax\Contracts
 */
interface CRUDInterface
{
    /**
     * @param $id
     * @return mixed
     */
    function get($id);

    /**
     * @param array $where
     * @param int $page
     * @param int $size
     * @return mixed
     */
    function find(array $where, $page = 0, $size = 25);

    /**
     * @param array $data
     * @return mixed
     */
    function save(array $data);

    /**
     * @param $id
     * @param array $data
     * @return mixed
     */
    function update($id, array $data);
}