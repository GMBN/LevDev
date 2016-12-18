<?php

$e->on(\e::preRender, function() use ($e){
    $e->trigger('view.addJs',['/levdev/assets/dev.js']);
    $e->trigger('view.addCss',['/levdev/assets/dev.css']);
},1);

$e->on('db.query',function($sql){
    $dbug = sm::getInstance()->get('debugDB');
    $dbug->addSql($sql);
});

$e->on('appFinish',function() use ($e){
    $dbug = sm::getInstance()->get('debugDB');
    $sql = $dbug->getSql();

    new \LevDev\Service\Render($sql, $e);
    
});