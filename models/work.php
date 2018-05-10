<?php
class Work
{
  public $id;
  public $work_name;
  public $start_date;
  public $end_date;
  public $status;

  function __construct($id, $work_name, $start_date, $end_date, $status)
  {
    $this->id         = $id;
    $this->work_name  = $work_name;
    $this->start_date = $start_date;
    $this->end_date   = $end_date;
    $this->status     = $status;
  }

  static function all()
  {
    $list = [];
    $db   = DB::getInstance();
    $req  = $db->query('SELECT * FROM tb_works');

    foreach ($req->fetchAll() as $item) {
      $list[] = new Work($item['id'], $item['work_name'], $item['start_date'], $item['end_date'], $item['status']);
    }

    return $list;
  }

  static function find($id)
  {
    $db   = DB::getInstance();
    $req  = $db->prepare('SELECT * FROM tb_works WHERE id = :id');
    $req->execute(array('id' => $id));

    $item = $req->fetch();
    if (isset($item['id'])) {
      return new Work($item['id'], $item['work_name'], $item['start_date'], $item['end_date'], $item['status']);
    }
    
    return null;
  }

  static function create($data)
  {
    $db   = DB::getInstance();
    $sql  = "INSERT INTO tb_works (work_name, start_date, end_date, status) VALUES (:work_name, :start_date, :end_date, :status)";
    $req  = $db->prepare($sql);
    $req->execute($data);
    
    return null;
  }

  static function delete($id)
  {
    $db   = DB::getInstance();
    $sql  = "DELETE FROM tb_works WHERE id = :id";
    $req  = $db->prepare($sql);
    $req->execute(['id' =>  $id]);
    
    return null;
  }
}