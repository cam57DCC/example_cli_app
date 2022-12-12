<?php

namespace App\Commands;

use Cam57\Framework\Command\Command;

class PrintInputCommand extends Command
{
    protected string $name = 'print_input';
    protected string $description = 'Print input args and params';
    protected string $help = 'help';

    public function handle($verbose, $overwrite, $unlimited, $log)
    {
        print "Called command: print_input\n\n";
        print "Arguments:\n";
        print sprintf("\t- %s\n", $verbose);
        print sprintf("\t- %s\n", $overwrite);
        print sprintf("\t- %s\n", $unlimited);
        print sprintf("\t- %s\n", $log);
        print "\n";
        print "Options:\n";
        foreach ($this->params->getParams() as $name => $value) {
            if (!is_array($value)) {
                print sprintf("\t- %s = %s\n", $name, $value);
            } else {
                print sprintf("\t- %s:\n", $name);
                foreach ($value as $v){
                    print sprintf("\t\t- %s\n", $v);
                }
            }
        }
    }
}