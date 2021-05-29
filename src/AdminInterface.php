<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * Desc:
 * User: ffx
 * Date: 2020/3/17
 * Time: 14:25
 */

namespace Jdmm\Warehouse\Protocol;

/**
 * Interface AdminInterface
 * @package Jdmm\Warehouse\Protocol
 */
interface AdminInterface
{
    /**
     * 查询管理员信息
     * @param array $where
     * @param string $field
     * @return array
     * @author ffx
     */
    public function adminInfo(array $where, string $field = '*'): array ;
}
