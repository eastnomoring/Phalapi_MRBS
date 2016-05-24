<?php
class Domain_Room {

    /**
     * 获取用户详情
     */
    public function getroominfo($roomname) {

        $Model_Room = new Model_Room();
        $roomname      = $Model_Room->getInfoByRoomName($roomname);
        if (!$roomname) {
            throw new PhalApi_Exception_BadRequest(T("No RoomInfo"), -1);
        }
        return $roomname;
    }

    /**
     * 获取用户列表
     */
    public function getroomlist() {

        $Model_Room = new Model_Room();
        $roomList   = $Model_Room->getRoomList();
        if (!$roomList) {
            throw new PhalApi_Exception_BadRequest(T("No UserList"), -1);
        }
        return $roomList;
    }


}