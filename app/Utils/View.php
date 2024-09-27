<?php

namespace App\Utils;

Class View{

    /**
     * Método responsável por retornar o conteúdo de uma view
     * @param string $view
     * @return string
     */
    private static function getContentView($view){
        $sfile = __DIR__ . '/../../resources/view/'.$view.'.html';
        return file_exists($sfile) ? file_get_contents($sfile) : '';
    }

    /**
    * Método responsávlel por retornar o conteúdo de uma view
    * @param string $view
    * @return string 
    **/
    public static function render($view ,  $args = []){
        
        //CONTEUDO DA VIEW
        $contentView = self::getContentView($view);
        $keys = array_keys($args);
        $keys = array_map(function($item){
            return '{{'.$item.'}}';
        }, $keys);

        return  str_replace($keys , array_values($args) , $contentView);
    }

}
