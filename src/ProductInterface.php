<?php declare(strict_types=1);

namespace Jdmm\Warehouse\Protocol;

/**
 * Interface ProductInterface
 * @package Jdmm\Warehouse\Protocol
 */
interface ProductInterface
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

