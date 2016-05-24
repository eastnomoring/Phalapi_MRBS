<?php
class Model_Room extends PhalApi_Model_NotORM
{

    protected function getTableName($id)
    {
        return 'room';
    }


    /**
     * 通过会议室ID获取详情
     */
    public function getInfoByRoomName($roomname) {

        return $this->getORM()->where("roomname", $roomname)->fetch();
    }

    /**
     * 获取所有会议室列表
     */
    public function getRoomList() {

        return $this->getORM()->order("roomid asc")->fetchAll();
    }

}
