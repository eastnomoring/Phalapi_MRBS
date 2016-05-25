<?php
/**
 * 这是一个BOOK模块
 */
class Api_Book extends PhalApi_Api
{
    public function getRules()
    {
        return array(
            //新增预约记录
            'bookadd' => array(
                'roomid' => array('name' => 'roomid', 'type' => 'int', 'min' => 1,  'require' => true, 'desc' => '会议室ID'),
                'userid' => array('name' => 'userid', 'type' => 'int', 'min' => 1,  'require' => true, 'desc' => '用户ID'),
                'year' => array('name' => 'year', 'type' => 'int', 'min' => 1000, 'max' => 9999, 'require' => true, 'desc' => '预约年'),
                'month' => array('name' => 'month', 'type' => 'int', 'min' => 1, 'max' => 12, 'require' => true, 'desc' => '预约月'),
                'day' => array('name' => 'day', 'type' => 'int', 'min' =>1, 'max' => 31, 'require' => true, 'desc' => '预约天'),
                'hour_start' => array('name' => 'hour_start', 'type' => 'int', 'min' => 0, 'max' => 23, 'require' => true, 'desc' => '预约开始小时'),
                'minute_start' => array('name' => 'minute_start', 'type' => 'int', 'min' => 0, 'max' => 59, 'require' => true, 'desc' => '预约开始分钟'),
                'hour_end' => array('name' => 'hour_end', 'type' => 'int', 'min' => 0, 'max' => 23, 'require' => true, 'desc' => '预约结束小时'),
                'minute_end' => array('name' => 'minute_end', 'type' => 'int', 'min' => 0, 'max' => 59, 'require' => true, 'desc' => '预约结束分钟'),
                'phone' => array('name' => 'phone', 'type' => 'string', 'min' => 11, 'max' => 11, 'require' => false, 'desc' => '用户预约手机号'),
                'email' => array('name' => 'email', 'type' => 'string', 'min' => 4, 'max' => 50, 'require' => false, 'desc' => '用户预约Email'),
                'roomnote' => array('name' => 'roomnote', 'type' => 'string', 'min' => 0, 'max' => 500, 'require' => false, 'desc' => '会议内容'),
            ),
        );
    }

    /**
     * 新增预约记录
     */
    public function bookadd()
    {
        $Domain_Book = new  Domain_Book();
        //验证是否重复预约，即会议室ID、用户ID、预约起止时间完全相同的情况
        $Domain_Book->checkBookAdd($this);
        //创建用户的信息
        return $Domain_Book->bookadd($this);
    }





}