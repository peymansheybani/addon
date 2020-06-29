<?php

use greenweb\addon\Addon;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

require_once __DIR__.DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php";
$config = config('config');
new Addon($config);


function is_pami_config() {
    return [
        "name"        => "is pami",
        "description" => "<div style='direction: rtl;color:#48ffff'>مدیریت pami</div>",
        "version"     => "0.1",
        "author"      => "pami sheybani",
    ];
}

function is_pami_output($vars) {
    $action = Addon::$instance->request::get('action', 'user/list');

    echo Addon::$instance->routing::route($action, $vars);
}

function is_pami_clientarea($vars) {
    $action = Addon::$instance->request::get('action', 'user/list');
    Addon::$instance->routing::route($action, $vars);
}

function is_pami_activate() {
    if(!Capsule::schema()->hasTable('green_permission')) {
        Capsule::schema()->create('green_permission', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('role_id');
            $table->json('permissions');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }
}