<?php

namespace LevDev\Service;

class Render {

    public function __construct($sql, $e) {
        $config = \sm::getInstance()->get('config');
        echo '<div id="levdev"><pre>';
        print_r($sql);
        echo '<hr/>';
//        print_r($e->debug());
        echo '<hr/>';
//        print_r($e->listeners());
        echo '<hr/>';
//        print_r($config);
        echo '</pre></div>';
    }

}
