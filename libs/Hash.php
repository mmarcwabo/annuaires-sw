<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Created to secure password strings

class Hash {
    
    /**
     * 
     * @param string $algo The hashing algorithm
     * @param string $data The data to encode
     * @param string $salt 
     * @return string
     */
    public static function create($algo, $data, $salt){
        $context = hash_init($algo, HASH_HMAC, $salt);
        hash_update($context, $data);
        
        return hash_final($context);
    }

}
