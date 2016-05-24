<?php

class Model_User extends PhalApi_Model_NotORM
{

    protected function getTableName($id)
    {
        return 'user';
    }

    /**
     * 用户注册
     * @param $data
     * @return mixed
     */
    public function useradd($data)
    {

        return $this ->getORM() ->insert(array(
            'username' => $data->username,
            'userpass' => $data->userpass,
            'phone' => $data->phone,
            'useraddtime' => time()
        ));
    }
    /**
     * 通过用户名称获取信息
     */
    public function getInfoByUserName($username) {

        return $this->getORM()->where("username", $username)->fetch();
    }

    /**
     * 用户登录接口
     */
    public function Userlogin($data) {

        return $this->getORM()->select("userid")->where("username", $data->username)->where("userpass", $data->userpass)->fetch();
    }

    /**
     * 通过用户ID获取详情
     */
    public function getInfoByuId($userid) {

        return $this->getORM()->where("userid", $userid)->fetch();
    }

    /**
     * 获取用户列表
     */
    public function getUserList() {

        return $this->getORM()->order("useraddtime desc")->fetchAll();
    }
    /**
     * 通过用户ID更新签名
     */
    public function setSignByuId($userid,$sign) {

//        return $this->getORM()->where("userid", $userid);
        $rs = $this->getORM()->where('userid', $userid)->update(array(
            'sign' => $sign
        ));
        if ($rs >= 1) {
            //成功
            return $rs;
        } else if ($rs === 0) {
            //相同数据，无更新
            return $rs;
        } else if ($rs === false) {
            //更新失败
            return $rs;
        }

    }
}
