<?php

declare(strict_types=1);
require_once __DIR__ . '/../vendor/autoload.php';


use \App\Domain\Model\Actions\Read;
use \App\Domain\Model\Actions\Write;
use \App\Domain\Model\Actions\Delete;
use \App\Domain\Model\Actions\Execute;
use \App\Domain\Service\Permission\Permission;


$read = new Read();
$write = new Write();
$delete = new Delete();
$execute = new Execute();

$permission = new Permission();
$permission->addPermissionTo($read);
$permission->addPermissionTo($write);
$permission->addPermissionTo($delete);	
$permission->addPermissionTo($execute);

$user = [
    'permissions' => $permission->getTotalPermissionValue()
];

$permission2 = new Permission($user['permissions']);
dump($permission2->hasPermissionTo($execute), true);

