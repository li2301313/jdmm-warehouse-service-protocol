<?php declare(strict_types=1);

namespace Jdmm\Warehouse\Protocol;

/**
 * Interface LogisticsInterface
 * @package Jdmm\Warehouse\Protocol
 */
interface LogisticsInterface
{
    /**
     * @author wangc
     * @param $page
     * @param $pageSize
     * @param $name
     * @return array
     */
    public function list():array ;

    public function add($name):bool ;
}

