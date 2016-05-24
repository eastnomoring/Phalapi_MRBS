<?php

/**
 * 这是一个USER模块
 */
class Api_User extends PhalApi_Api
{
    public function getRules()
    {
        return array(
            //用户注册
            'useradd' => array(
                'username' => array('name' => 'username', 'type' => 'string', 'min' => 6, 'max' => 25, 'require' => true, 'desc' => '用户登录名'),
                'userpass' => array('name' => 'userpass', 'type' => 'string', 'min' => 6, 'max' => 25, 'require' => true, 'desc' => '用户登录密码'),
                'phone' => array('name' => 'phone', 'type' => 'string', 'min' => 11, 'max' => 11, 'require' => true, 'desc' => '用户登录密码'),

            ),
            //用户登录
            'userlogin' => array(
                'username' => array('name' => 'username', 'type' => 'string', 'min' => 6, 'max' => 25, 'require' => true, 'desc' => '用户登录名'),
                'userpass' => array('name' => 'userpass', 'type' => 'string', 'min' => 6, 'max' => 25, 'require' => true, 'desc' => '用户登录密码'),
            ),
            //获取用户详情
            'getuserinfo' => array(
                'userid' => array('name' => 'userid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
            ),
            //获取用户列表
            'getuserlist' => array(),
        );
    }

    /**
     * 用户注册
     */
    public function useradd()
    {
        $Domain_User = new  Domain_User();
        //验证用户名称是否已经存在
        $Domain_User->checkUserName($this->username);
        //创建用户的信息
        return $Domain_User->useradd($this);

    }

    /**
     * 用户登录
     */
    public function userlogin() {

        $Domain_User = new  Domain_User();
        return $Domain_User->Userlogin($this);
    }

    /**
     * 获取用户详情
     */
    public function getuserinfo() {

        $Domain_User = new  Domain_User();
        return $Domain_User->getuserinfo($this->userid);
    }

    /**
     * 或去用户列表
     */
    public function getuserlist() {
        $Domain_User = new  Domain_User();
        return $Domain_User->getuserlist();
    }

}