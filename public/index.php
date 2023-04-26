<?php

declare(strict_types=1);
/**
 * index.php - Foo
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P8One
 * @package P8One
 * @version 0.1
 * @since 2023-04-26
 */

require_once 'src/P8One/Autoload.php';
use SchrodtSven\P8One\Internal\MalePerson;

foreach (MalePerson::cases() as $case) {
    printf("['%s', '%s'],", $case->value, $case->label());
    echo  PHP_EOL;
}


