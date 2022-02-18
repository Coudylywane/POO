<?php 
  namespace App\Core;
  class Validator{
      private  array $erreurs=[];

      public  function  isVide(string $field,string $key){
           if(empty($field)){
              $this->erreurs[$key] ="Ce Champ est Obligatoire";
           }
      }
      /**
       * Get the value of erreurs
       */ 
      public function getErreurs()
      {
            return $this->erreurs;
      }

      public function valid():bool{
          return count($this->erreurs)==0;
      }
  }