<?php

namespace App\Controller\Pages;
use \App\Utils\View;

Class Page{


    public static function getHeader(){
        return View::render('pages/header');
    }

    public static function getFooter(){
        return View::render('pages/footer');
    }
    public static function getPage($title, $content){
        return  View::render('pages/page' , [
            'appTitle' => $title , 
            'header' => self::getHeader() ,
            'content' => $content , 
            'footer' => self::getFooter()
        ]);
    }

}