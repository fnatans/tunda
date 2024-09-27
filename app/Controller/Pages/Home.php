<?php

namespace App\Controller\Pages;
use \App\Utils\View;
use \App\Model\Entity\Organization;


Class Home extends Page{

    public static function getHome(){
        
        $org = New Organization;        
        $content = View::render('pages/home' , [
            'appName' => $org->name , 
            'appDescription' => $org->description
        ]);

        return parent::getPage('Tunda' ,  $content);
    }

}