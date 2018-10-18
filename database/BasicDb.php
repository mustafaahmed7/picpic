<?php
/**
 * Created by PhpStorm.
 * User: Mustafa
 * Date: 16.10.2018 г.
 * Time: 21:28
 */

namespace database;


class BasicDb extends \PDO
{
    private $table;
    private $connect;
    private $find;
    private $array_execute;
    private $where;
    private $order_by;
    private $delete;
    private $limit;
    private $insert, $insert_colum, $insert_value;
    private $update;

    public function __construct()
    {
        $this->connect = new \PDO("mysql:host=localhost;dbname=pictagram;charset=utf8","root","");
        $this->table = static::$table;
    }

    public function find($id){
        $this->find = $this->connect->prepare("select * from ".$this->table." where id=".$id);
        $this->find->bindParam("id",$id);
        $this->find->execute();
        return $this->find->fetch(\PDO::FETCH_ASSOC);
    }
    public function get(){
        $this->find = $this->connect->prepare("select * from $this->table $this->where $this->order_by $this->limit" );
        $this->find->execute($this->array_execute);
        return $this->find->fetchAll();
    }

    public function where($colum_name,$colum_value){
        if(!$this->where){
            $this->where = " where ".$colum_name."=? ";
            $this->array_execute[] = $colum_value;
        }else{
            $this->where .= " and $colum_name"."=?";
            $this->array_execute[] = $colum_value;
        }
        return $this;
    }

    public function order_by_asc($colum = "id"){
        $this->order_by = " order by $colum asc ";
        return $this;
    }
    public function order_by_desc($colum = "id"){
        $this->order_by = " order by $colum desc ";
        return $this;
    }

    public function delete(){
        $this->delete = $this->connect->prepare("delete from $this->table $this->where");
        return $this->delete->execute($this->array_execute);
    }

    public function insert(array $insert){
        $this->insert_colum = implode(',', array_keys($insert));
        $this->insert_value = implode(',', array_fill(0, count($insert), '?'));
        $this->insert = $this->connect->prepare("INSERT INTO ".$this->table." ($this->insert_colum) VALUES ($this->insert_value)");
        return  $this->insert->execute(array_values($insert));
    }

    public function limit($start,$finish){
        $this->limit = " limit $start,$finish ";
        return $this;
    }

    public function update(array $update){
        foreach($update as $item=>$value){
            $this->update.=$item."=".$value.",";
        }
        $this->update = substr($this->update,0,-1);
        return $this->connect->exec("update ".$this->table." set ".$this->update.$this->where);
    }

}