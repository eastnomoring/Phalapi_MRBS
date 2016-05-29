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
    /**
     * 获取用户预约详情列表
     */
    public function getuserinfo($userid) {

        $Model_Book = new Model_Book();
        $userid        = $Model_Book->getInfoByuId($userid);
        if (!$userid) {
            throw new PhalApi_Exception_BadRequest(T("此用户没有预约记录"), -1);
        }
        return $userid;
    }
    /**
     * 获取某会议室预约详情列表
     */
    public function getroominfo($roomid) {

        $Model_Book = new Model_Book();
        $roomid        = $Model_Book->getInfoByrId($roomid);
        if (!$roomid) {
            throw new PhalApi_Exception_BadRequest(T("此会议室根本没有预约记录"), -1);
        }
        return $roomid;
    }
    /**
     * 获取所有预约记录列表
     */
    public function getallbookinfo() {

        $Model_Book = new Model_Book();
        $bookList   = $Model_Book->getAllInfo();
        if (!$bookList) {
            throw new PhalApi_Exception_BadRequest(T("No List"), -1);
        }
        return $bookList;
    }
}