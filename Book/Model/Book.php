<?php
class Model_Book extends PhalApi_Model_NotORM{
    protected function getTableName($id)
    {
        return 'book';
    }

    public function bookadd($data)
    {

        return $this ->getORM() ->insert(array(
            'roomid' => $data->roomid,
            'userid' => $data->userid,
            'year' => $data->year,
            'month' => $data->month,
            'day' => $data->day,
            'hour_start' => $data->hour_start,
            'minute_start' => $data->minute_start,
            'hour_end' => $data->hour_end,
            'minute_end' => $data->minute_end,
            'phone' => $data->phone,
            'email' => $data->email,
            'roomnote' => $data->roomnote,
            'status' => 0,
            'bookaddtime' => time(),
            'roomname' => $data->roomname,
        ));
    }
    /**
     * 通过用主键称获取预约信息
     */
    public function getInfoByKey($data) {
        return $this->getORM()
            ->where("roomid",$data->roomid)
            ->where("userid", $data->userid)
            ->where("year", $data->year)
            ->where("month", $data->month)
            ->where("day", $data->day)
            ->where("hour_start", $data->hour_start)
            ->where("minute_start", $data->minute_start)
            ->where("hour_end", $data->hour_end)
            ->where("minute_end", $data->minute_end)
            ->fetch();
    }
    /**
     * 通过用户ID获取预约详情列表
     */
    public function getInfoByuId($userid) {

        return $this->getORM()->where("userid", $userid)->order("bookaddtime desc")->fetchAll();
    }
    /**
     * 通过会议室ID获取预约详情列表
     */
    public function getInfoByrId($roomid) {

        return $this->getORM()->where("roomid", $roomid)->order("bookaddtime desc")->fetchAll();
    }
    /**
     * 获取所有预约详情列表
     */
    public function getAllInfo() {

        return $this->getORM()->order("bookaddtime desc")->fetchAll();
    }


}