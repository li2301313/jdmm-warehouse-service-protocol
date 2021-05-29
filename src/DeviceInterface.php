<?php declare(strict_types=1);

namespace Jdmm\Warehouse\Protocol;

/**
 * Interface DeviceInterface
 * @package Jdmm\Warehouse\Protocol
 */
interface DeviceInterface
{

    /**
     * 设备列表
     * @author wangc
     * @param $pageSize
     * @param $pageNum
     * @param string $mac
     * @param string $sn
     * @return array
     */
    public function deviceList($pageSize, $pageNum, $mac = '', $sn = ''): array;


    /**
     * 设备出库
     * @author wangc
     * @param $data
     * @return mixed
     */
    public function deviceOut($data,$salesData): bool;

    /**
     * 设备出库到iot
     * @author wangc
     * @param $data
     * @return mixed
     */
    public function deviceOutToIot($data): bool;

    /**
     * 根据sn获取mac等信息
     * @author wangc
     * @param $sn
     * @return array
     */
    public function getMAC($sn): array;

    /**
     * 已出库设备列表
     * @author wangc
     * @param $pageSize
     * @param $pageNum
     * @param string $name
     * @return array
     */
    public function outList($pageSize, $pageNum, $name = ''): array;

    /**
     * 已出库列表设备详情
     * @author wangc
     * @param $id
     * @return array
     */
    public function outDetail($id): array;

    /**
     * 从excel 表格获取设备信息
     * @author wangc
     * @param $url
     * @return array
     */
    public function getDataFormExcel($url): array;
    
}

