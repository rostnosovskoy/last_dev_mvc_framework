<?php
/**
 * Created by PhpStorm.
 * User: Ростислав
 * Date: 18.03.2018
 * Time: 17:01
 */

class Message extends Model
{
    public function save($data, $id = null)
    {
        if (!isset($data['name']) || !isset($data['email']) || !isset($data['message'])){
            return false;
        }

        $id = (int)$id;
        $name = $this->db->escape($data['name']);
        $email = $this->db->escape($data['email']);
        $message = $this->db->escape($data['message']);

        if (!$id){ // Add new record
            $sql = "
                insert into message 
                set name = '{$name}',        
                    name = '{$email}',        
                    name = '{$message}'        
            ";
        }else { // Update exist record
            $sql = "
                update message 
                set name = '{$name}',        
                    name = '{$email}',        
                    name = '{$message}'
                where id = {$id}        
            ";
        }
        return $this->db->query($sql);
    }
}