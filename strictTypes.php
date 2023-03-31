<?php
    declare(strict_types=1);

    $date = new DateTime();
    
    function sum(DateTime $date,float $b)
    {
        return $date;
    }

    var_dump(sum($date, 2));
    var_dump(sum($date, 2.5));
?>