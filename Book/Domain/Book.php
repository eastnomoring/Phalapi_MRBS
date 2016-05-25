<?php
class Domain_Book{
    /**
     * 新增预约记录
     */
    public function bookadd($data)
    {
        $Model_Book = new Model_Book();
        $bookaddtime =  $Model_Book-> bookadd ($data);
        if (!$bookaddtime) {
            throw new PhalApi_Exception_BadRequest("Error BookTime", -1);
        }
        return $bookaddtime;

    }
    /**
     * 验证是否重复预约
     */
    public function checkBookAdd($data) {
        $Model_Book = new Model_Book();
        $bookinfo   = $Model_Book->getInfoByKey($data);
        if ($bookinfo) {
            throw new PhalApi_Exception_BadRequest("您曾使用相同的 时间段 申请过此会议室", -1);
        }
    }
}