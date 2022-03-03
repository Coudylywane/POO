<?php 
  namespace App\Core;
  class Validator{
      private  array $erreurs=[];

        public  function isVide(string $field,string $key){
            if(empty($field)){
                $this->erreurs[$key] ="Ce Champ est Obligatoire";
            }
        }
/* 
        public  function isEmail(string $field,string $key){
            if(empty($field)){
            $this->erreurs[$key] ="Ce Champ est Obligatoire";
            }
        } */

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


        public function valide_telephone(string $field , string $key):void{
            if(empty($field)){
                $this->erreurs[$key] ="Ce Champ est Obligatoire";
            }elseif (!$this->validation_telephone($field)) {
                $this->erreurs[$key] ="le telephone n'est pas valide ";

            }
        }

    
        public function validation_telephone($field):bool{
            if (preg_match(PATTERN_TELEPHONE,$field)) {
            return true;
            }
            return false ;
        }
  }