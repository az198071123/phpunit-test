<?php
namespace App;

class Calculator
{
    public function add($x, $y)
    {
        return $x + $y;
    }

    public function sub($x, $y)
    {
        // 相減
        return $x - $y;
    }

    public function sum(array $items)
    {
        $total = 0;
        // 加總
        foreach ($items as $item) {
            $total += $item;
        }
        return $total;
    }
}
