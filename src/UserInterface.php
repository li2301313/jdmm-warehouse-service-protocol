<?php
/**
 * Created by PhpStorm.
 * Desc:
 * User: ffx
 * Date: 2020/3/17
 * Time: 14:26
 */

namespace Jdmm\Warehouse\Protocol;

/**
 * Interface UserInterface
 * @package Jdmm\Warehouse\Protocol
 */
interface UserInterface
{
    /**
     * @param array $where
     * @param string $field
     * @return array
     * @author ffx
     */
    public function userInfo(array $where, string $field):array ;

    /**
     * 新增用户
     * @param array $data
     * @return array
     * @author ffx
     */
    public function add(array $data):array ;

    /**
     * 编辑用户
     * @param array $where
     * @param array $data
     * @return array
     * @author ffx
     */
    public function update(array $where, array $data):array ;

    /**
     * 用户列表
     * @param array $where
     * @param int $pageNum
     * @param int $pageSize
     * @return array
     * @author ffx
     */
    public function userList(string $field = '*', int $pageNum = 1, int $pageSize = 10, array $where = []):array ;

}

