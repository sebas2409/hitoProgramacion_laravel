<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function getId(){
        return $this->attributes['id'];
    }
    public function setId($id){
        $this->attributes['id']=$id;
    }
    public function getUsers(){
        return $this->attributes['users'];
    }
    public function setUsers($user){
        $this->attributes['users']=$user;
    }
    public function getEmail(){
        return $this->attributes['email'];
    }
    public function setEmail($email){
        $this->attributes['email']=$email;
    }
    public function getPass(){
        return $this->attributes['password'];
    }
    public function setPass($pass){
        $this->attributes['password']=$pass;
    }
    public function getLink(){
        return $this->attributes['link'];
    }
    public function setLink($link){
        $this->attributes['link']=$link;
    }
    public function getCreatedAt(){
        return $this->attributes['created_at'];
    }
    public function setCreatedAt($created){
        $this->attributes['created_at']=$created;
    }
    public function getUpdate(){
        return $this->attributes['updated_at'];
    }
    public function setUpdate($update){
        $this->attributes['updated_at']=$update;
    }

}
