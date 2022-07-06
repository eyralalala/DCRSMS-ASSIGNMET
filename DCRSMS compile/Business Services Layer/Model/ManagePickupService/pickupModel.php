<?php
require_once '../../libs/database.php';

class Index_Model extends Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function getAllrecords()
  {
    return $this->db->select("SELECT * FROM `customer` ORDER BY account_id DESC");
  }
  public function viewOnerecord($id)
  {
    return $this->db->select("SELECT * FROM `customer` WHERE account_id='".$account_id."' LIMIT 1");
  }
 