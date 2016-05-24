<?php

/**
 * 这是一个ROOM模块
 * Class Api_Room
 */
class Api_Room extends PhalApi_Api
{
    public function getRules()
    {
        return array(
            
            //获取会议室详情
            'getroominfo' => array(
                'roomname' => array('name' => 'roomname', 'type' => 'string', 'min' => 7, 'max' => 7, 'require' => true, 'desc' => '会议室名称'),
            ),
            //获取会议室列表
            'getroomlist' => array(),
        );
    }

    /**
     * 获取单个会议室信息
     */
    public function getroominfo()
    {
        $Domain_Room = new  Domain_Room();
        return $Domain_Room->getroominfo($this->roomname);
    }

    /**
     * 获取所有会议室列表
     */
    public function getroomlist()
    {
        $Domain_Room = new  Domain_Room();
        return $Domain_Room->getroomlist();
    }

}