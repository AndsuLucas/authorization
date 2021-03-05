<?php

namespace App\Domain\Service\Permission;
use \App\Domain\Model\Actions\ActionsInterface;
use \App\Domain\Service\Permission\PermissionInterface;


class Permission implements PermissionInterface
{
    public function __construct(private int $permissionValue = 0){}

    /**
     * {@inheritdoc}
     */
    public function addPermissionTo(ActionsInterface $action): void
    {
        $this->permissionValue += $action->getValue();
    }

    /**
     * {@inheritdoc}
     */
    public function hasPermissionTo(ActionsInterface $action): bool
    {
        $matchPermission = $this->permissionValue & $action->getValue();
        return $matchPermission == $action->getValue();
    }

    /**
     * {@inheritdoc}
     */
    public function getTotalPermissionValue(): int
    {
        return $this->permissionValue;
    }
}