<?php 
namespace App\Core;
class Role{
  const KEY_SESSION_USER="user_connect";
  const COLUMN_USER_ROLE="role";
  const ROLE_USER_1="ROLE_RESPONSABLE";
   public static function isConnected(){
       return Session::keyExist(self::KEY_SESSION_USER);
   }
   public static function isRP():bool{
    return Role::isConnected() && Session::getSession(self::KEY_SESSION_USER)[self::COLUMN_USER_ROLE]==self::ROLE_USER_1;
}
}