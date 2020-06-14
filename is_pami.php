<?php

use greenweb\addon\request\Request;
use greenweb\addon\routing\Routing;

require_once __DIR__.DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php";

function is_pami_config() {
    return [
        "name"        => "is pami",
        "description" => "<div style='direction: rtl;color:#ff484a'>مدیریت pami</div>",
        "version"     => "0.1",
        "author"      => "pami sheybani",
    ];
}

function is_pami_output($vars) {
    $action = Request::get('action', 'child/index');
    echo Routing::admin($action, $vars);
}

function is_pami_clientarea($vars) {
    $action = Request::get('action', 'child/index');
    echo Routing::client($action, $vars);
}