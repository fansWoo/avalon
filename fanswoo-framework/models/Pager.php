<?php

class Pager extends ObjDbBase {

    public $pagerid_Num = 0;
    public $uid_Num = 0;
    public $username_Str = '';
    public $title_Str = '';
    public $slug_Str = '';
    public $href_Str = '';
    public $target_Num = 0;
    public $class_ClassMetaList;
    public $viewnum_Num = 0;
    public $prioritynum_Num = 0;
    public $updatetime_DateTime = 0;
    public $status_Num = 1;
    public $db_name_Str = 'pager';//填寫物件聯繫資料庫之名稱
    public $db_uniqueid_Str = 'pagerid';//填寫物件聯繫資料庫之唯一ID
    public $db_field_Arr = array(//填寫資料庫欄位與本物件屬性之關係，前者為資料庫欄位，後者為屬性
        'pagerid' => 'pagerid_Num',
        'uid' => 'uid_Num',
        'username' => 'username_Str',
        'title' => 'title_Str',
        'slug' => 'slug_Str',
        'href' => 'href_Str',
        'target' => 'target_Num',
        'classids' => array('class_ClassMetaList', 'uniqueids_Str'),
        'viewnum' => 'viewnum_Num',
        'prioritynum' => 'prioritynum_Num',
        'updatetime' => array('updatetime_DateTime', 'datetime_Str'),
        'status' => 'status_Num'
    );
	
	public function construct($arg)
	{
        //引入引數並將空值的變數給予空值
        reset_null_arr($arg, ['pagerid_Num', 'uid_Num', 'username_Str', 'title_Str', 'slug_Str', 'href_Str', 'target_Num', 'classids_Str', 'classids_Arr', 'prioritynum_Num', 'viewnum_Num', 'updatetime_Str', 'updatetime_inputtime_date_Str', 'updatetime_inputtime_time_Str', 'status_Num']);
        foreach($arg as $key => $value) ${$key} = $arg[$key];
        
        //將引數設為物件屬性，或將引數作為物件型屬性的建構值
        $this->set('pagerid_Num', $pagerid_Num);
        $this->set('uid_Num', $uid_Num);
        $this->set('username_Str', $username_Str);
        $this->set('title_Str', $title_Str);
        $this->set('href_Str', $href_Str);
        $this->set('target_Num', $target_Num);
        $this->set('viewnum_Num', $viewnum_Num);
        $this->set('prioritynum_Num', $prioritynum_Num);
        $this->set('class_ClassMetaList', [
            'classids_Str' => $classids_Str,
            'classids_Arr' => $classids_Arr
        ], 'ClassMetaList');
        $this->set('updatetime_DateTime', [
            'datetime_Str' => $updatetime_Str,
            'inputtime_date_Str' => $updatetime_inputtime_date_Str,
            'inputtime_time_Str' => $updatetime_inputtime_time_Str
        ], 'DateTimeObj');
        $this->set__slug_Str(['slug_Str' => $slug_Str]);
        $this->set__status_Num(['status_Num' => $status_Num]);
        $this->set__uid_Num(['uid_Num' => $uid_Num]);
        
        return TRUE;
    }
	
}