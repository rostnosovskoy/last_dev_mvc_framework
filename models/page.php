<?php
/**
 * Created by PhpStorm.
 * User: Ростислав
 * Date: 18.03.2018
 * Time: 15:09
 */

class page extends Model
{
    public function getList($only_published = false)
    {
        $sql = "select * from pages WHERE 1";
        if ($only_published){
            $sql .= "and is_published = 1";
        }
        return $this->db->query($sql);
    }

    public function getByAlias($alias)
    {
        $alias = $this->db->escape($alias);
        $sql = "select * from pages WHERE alias = '{$alias}' limit 1";
        $result = $this->db->query($sql);
        return isset($result[0]) ? $result[0] : null;
    }

    public function getById($id)
    {
        $id = (int)$id;
        $sql = "select * from pages WHERE alias = '{$id}' limit 1";
        $result = $this->db->query($sql);
        return isset($result[0]) ? $result[0] : null;
    }
}