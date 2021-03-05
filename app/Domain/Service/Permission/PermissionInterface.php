<?php

namespace App\Domain\Service\Permission;
use \App\Domain\Model\Actions\ActionsInterface;

interface PermissionInterface
{
    /**
     * Add permission to specific action
     * @param ActionsInterface $action Action7
     * @return void 
     */
    public function addPermissionTo(ActionsInterface $action): void;

    /**
     * Verify if has permission to specific action
     * @param ActionsInterface $action 
     * @return boolean
     */
    public function hasPermissionTo(ActionsInterface $action): bool;

    /**
     * Return total of permission value as integer
     * @return int
     */
    public function getTotalPermissionValue(): int;
}