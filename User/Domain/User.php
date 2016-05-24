<?php

class Domain_User {
    /**
     * 用户注册
     */
    public function useradd($data)
    {
        $Model_User = new Model_User();
        $userid =  $Model_User-> useradd ($data);
        if (!$userid) {
            throw new PhalApi_Exception_BadRequest("Error UserAdd", -1);

        }
        return $userid['id'];

    }
    /**
     * 验证用户名称是否存在
     */
    public function checkUserName($username) {

        $Model_User = new Model_User();
        $userinfo   = $Model_User->getInfoByUserName($username);
        if ($userinfo) {
            throw new PhalApi_Exception_BadRequest(T("userName existing"), -1);
        }
    }

    /**
     * 用户登录
     */
    public function Userlogin($data) {

        $Model_User = new Model_User();
        $userid        = $Model_User->Userlogin($data);
        if (!$userid) {
            throw new PhalApi_Exception_BadRequest(T("No UserInfo"), -1);
        }
        return $userid;
    }

    /**
     * 获取用户详情
     */
    public function getuserinfo($userid) {

        $Model_User = new Model_User();
        $userid        = $Model_User->getInfoByuId($userid);
        if (!$userid) {
            throw new PhalApi_Exception_BadRequest(T("No UserInfo"), -1);
        }
        return $userid;
    }

    /**
     * 获取用户列表
     */
    public function getuserlist() {

        $Model_User = new Model_User();
        $userList   = $Model_User->getUserList();
        if (!$userList) {
            throw new PhalApi_Exception_BadRequest(T("No UserList"), -1);
        }
        return $userList;
    }
    /**
     * 更新用户签名
     */
    public function setusersign($userid,$sign) {
        $Model_User = new Model_User();
        $sign        = $Model_User->setSignByuId($userid,$sign);
        return $sign;

    }

}