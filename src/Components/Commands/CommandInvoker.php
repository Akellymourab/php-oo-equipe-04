<?php
declare(strict_types=1);

namespace App\Components\Commands;
class CommandInvoker
{
    private array $commands = [];

    public function addCommand($commandName, $commandInstance): void
    {
        $this->commands[$commandName] = $commandInstance;
    }

    public function runCommand($commandName): void
    {
        if (isset($this->commands[$commandName])) {
            $commandInstance = $this->commands[$commandName];
            $commandInstance->execute();
        } else {
            echo "Comando não encontrado.\n";
        }
    }
}
