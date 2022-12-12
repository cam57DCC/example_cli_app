<?php

namespace App;

use App\Commands\PrintInputCommand;
use Cam57\Framework\App\Kernel\Kernel;

class AppKernel extends Kernel
{
    protected array $commands = [
        PrintInputCommand::class,
    ];
}