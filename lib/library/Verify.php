<?php
class Verify{
     public static function verifys()
     {
        
         return verifyImage();
     }
     public static function getverifys()
    {
         return getSessions("verify");
    }
}
