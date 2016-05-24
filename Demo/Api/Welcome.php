<?php
/**
 * Created by PhpStorm.
 * User: ZhiYuan
 * Date: 2016/5/23
 * Time: 20:46
 */

class Api_Welcome extends PhalApi_Api {

    public function say() {
        $rs = array();
        $rs['title'] = 'Hello World!';
        return $rs;
    }
}