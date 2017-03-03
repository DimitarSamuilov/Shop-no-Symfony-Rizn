<?php
namespace ViewEngine;

class Template
{
    const TEMPLATES_FOLDER= 'Templates';
    public static function render($templateName,$data=null)
    {
        include self::TEMPLATES_FOLDER.DIRECTORY_SEPARATOR.$templateName.'.php';
    }
}