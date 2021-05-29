<?php declare(strict_types=1);

namespace Jdmm\Warehouse\Protocol;

/**
 * Interface UserInterface
 * @package Jdmm\Warehouse\Protocol
 */
interface CustomerInterface
{
    /**
     * @author wangc
     * @param $page
     * @param $pageSize
     * @param $name
     * @return array
     */
    public function list($page,$pageSize,$name):array ;
}

