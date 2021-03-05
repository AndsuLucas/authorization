<?php

namespace App\Domain\Model\Actions;
use \App\Domain\Model\Actions\ActionsInterface;

abstract class AbstractAction implements ActionsInterface
{
    /**
     * Return the binary value that represents the action
     * @return int
     */
    public function getValue(): int
    {
        $this->validateActionValue();
        return $this->value;
    }

    /**
     * Validate if the action value is setted and if he is
     * a binary number
     * @return void
     */
    private function validateActionValue(): void
    {
        if (!$this->value) {
            throw new \DomainException('Please, declare the action value');
        }

        $isBinary = $this->value == 1 || $this->value % 2 == 0;
        if (!$isBinary) {
            throw new \DomainException('Invalid value number. Please, insert a binary number.');			
        }
    }

    public function __toString()
    {
        return $this->name;
    }
}