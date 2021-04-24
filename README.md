## Проценты

Пакет для работы с процентами. Нахождение процента от числа, сложение и вычитание процента числа, получение разницы двух цен в процентах.

## Установка

````
$ composer require unetway/percent
````

## Использование


### Нахождение процента от числа

Например: 30% от числа 100

````
<?php

use Unetway\Percent\Percent;

$percent = new Percent();
echo $percent->getPercentNumber(100, 30);

````


### Увеличить цену

Например: прибавить 30% к 100

````
<?php

use Unetway\Percent\Percent;

$percent = new Percent();
echo $percent->getIncreasePrice(100, 30);

````


### Уменьшить цену

Например: отнять 30% от 100

````
<?php

use Unetway\Percent\Percent;

$percent = new Percent();
echo $percent->getReducePrice(100, 30);

````



### Получить разницу в процентах

Например: получить % скидки от старой и новой цены

````
<?php

use Unetway\Percent\Percent;

$percent = new Percent();
echo $percent->getPercentageDiff(100, 70);

````

