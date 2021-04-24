<?php

namespace Unetway\Percent;

use Exception;

class Percent
{

    /**
     * Нахождение процента от числа. Например: 30% от числа 100
     * @param float $amount
     * @param int $percent
     * @return float|int
     */
    public function getPercentNumber(float $amount, int $percent)
    {
        return $amount * ($percent / 100);
    }

    /**
     * Увеличить цену. Например: прибавить 30% к 100
     * @param float $amount
     * @param int $percent
     * @return float|int
     */
    public function getIncreasePrice(float $amount, int $percent)
    {
        return $amount + ($amount * $percent / 100);
    }

    /**
     * Уменьшить цену. Например: отнять 30% от 100
     * @param float $amount
     * @param int $percent
     * @return float|int
     */
    public function getReducePrice(float $amount, int $percent)
    {
        return $amount - ($amount * ($percent / 100));
    }

    /**
     * Получить разницу в процентах. Например: получить % скидки от старой и новой цены
     * @param float $amount
     * @param int $sale
     * @param int $precision
     * @return float
     */
    public function getPercentageDiff(float $amount, int $sale, int $precision = 2): float
    {
        return round((($amount - $sale) * 100) / $amount, $precision);
    }
}