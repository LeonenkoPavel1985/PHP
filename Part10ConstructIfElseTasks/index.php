<?php

// 22. Переменная $lang может принимать два значения: 'ru' и 'en'. Если она имеет значение 'ru', то в переменную $arr запишем массив дней недели на русском языке, а если имеет значение 'en' – то на английском(DONE).

$lang = 'ru';
$lang = 'en';

if ($lang == 'ru') {
    $arr = array('Понедельник', 'Втоник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье');
    echo 'Дни недели на русском языке: ' . implode(', ', $arr) . '.';
} else if ($lang == 'en') {
    $arr = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    echo 'Дни недели на английском языке: ' . implode(', ', $arr) . '.';
}

// 23. В переменной $day лежит число от 1 до 31. Определите в какую декаду месяца попадает это число (в первую, вторую или третью)(DONE).

$day = 28; // Для теста меняем дату.

if ($day >= 1 and $day <= 10) {
    echo 'Первая декада месяца.';
} else if ($day >= 11 and $day <= 20) {
    echo 'Вторая декада месяца.';
} else if ($day >= 21 and $day <= 30) {
    echo 'Третья декада месяца.';
}

// 24. В переменной $month лежит число от 1 до 12. Определите в какую пору года попадает этот месяц (зима, лето, весна, осень)(DONE).

$month = 9; // Для теста меняем месяц.

if ($month == 12 or $month == 1 or $month == 2) {
    echo 'Зима!';
} else if ($month > 2 and $month <= 5) {
    echo 'Весна!';
} else if ($month > 5 and $month <= 8) {
    echo 'Лето!';
} else if ($month > 8 and $month <= 10) {
    echo 'Осень!';
}

/* 25. Переменная $lang может принимать два значения: 'ru' и 'en'. Переменная $day принимает значение от одного до 7-ми. Если $lang имеет значение 'ru', то в
переменную $result запишем название дня недели на русском языке в соответствии со значением переменной $day (1 — понедельник, 2 — вторник и т.д.). Если же $lang имеет значение
'en' – то поступим аналогично, но день недели будет на английском(DONE).*/

$lang = 'ru';
$lang = 'en';

$day = 7; // Для теста значение от 1 до 7.

if ($lang == 'ru') {
    if ($day == 1) {
        echo $result = 'Понедельник.';
    } else if ($day == 2) {
        echo $result = 'Вторник.';
    } else if ($day == 3) {
        echo $result = 'Среда.';
    } else if ($day == 4) {
        echo $result = 'Четверг.';
    } else if ($day == 5) {
        echo $result = 'Пятница.';
    } else if ($day == 6) {
        echo $result = 'Суббота.';
    } else if ($day == 7) {
        echo $result = 'Воскресенье.';
    }
} else if ($lang == 'en') {
    if ($day == 1) {
        echo $result = 'Monday.';
    } else if ($day == 2) {
        echo $result = 'Tuesday.';
    } else if ($day == 3) {
        echo $result = 'Wednesday.';
    } else if ($day == 4) {
        echo $result = 'Thursday.';
    } else if ($day == 5) {
        echo $result = 'Friday.';
    } else if ($day == 6) {
        echo $result = 'Saturday.';
    } else if ($day == 7) {
        echo $result = 'Sunday.';
    }
}

/* 26. Переменная $lang может принимать два значения: 'ru' и 'en'. Переменная $month принимает значение от одного до 12-ти. Если $lang имеет значение 'ru', то в
переменную $result запишем название месяца на русском языке в соответствии со значением переменной $month (1 — январь, 2 — февраль и т.д.). Если же $langимеет значение 'en' –
то поступим аналогично, но месяц будет на английском(DONE).*/

$lang = 'ru';
$lang = 'en';

$month = 8; // для тестирования меняем месяц от 1 до 12.

if ($lang == 'ru') {
    if ($month == 1) {
        echo 'Январь.';
    } else if ($month == 2) {
        echo 'Февраль.';
    } else if ($month == 3) {
        echo 'Март.';
    } else if ($month == 4) {
        echo 'Апрель.';
    } else if ($month == 5) {
        echo 'Май.';
    } else if ($month == 6) {
        echo 'Июнь.';
    } else if ($month == 7) {
        echo 'Июль.';
    } else if ($month == 8) {
        echo 'Август.';
    } else if ($month == 9) {
        echo 'Сентябрь.';
    } else if ($month == 10) {
        echo 'Октябрь.';
    } else if ($month == 11) {
        echo 'Ноябрь.';
    } else if ($month == 12) {
        echo 'Декабрь.';
    }
} else if ($lang == 'en') {
    if ($month == 1) {
        echo 'January.';
    } else if ($month == 2) {
        echo 'February.';
    } else if ($month == 3) {
        echo 'March.';
    } else if ($month == 4) {
        echo 'April.';
    } else if ($month == 5) {
        echo 'May.';
    } else if ($month == 6) {
        echo 'June.';
    } else if ($month == 7) {
        echo 'July.';
    } else if ($month == 8) {
        echo 'August.';
    } else if ($month == 9) {
        echo 'September.';
    } else if ($month == 10) {
        echo 'October.';
    } else if ($month == 11) {
        echo 'November.';
    } else if ($month == 12) {
        echo 'December.';
    }
}

/* 27. Если вы вкладываете деньги под проценты в банк, то он начислет вам 10% годовых, если начальная сумма более 1000$ и 7% годовых, если начальная сумма меньше 1000$. Найдите сумму,
    которая будет на счету у вкладчика через 1 год, 2 года... 10 лет(DONE).*/

$depositAmount = 1000; // Начисляет 10%.
$depositAmount = 500; // Начисляет 7%.

$yearCount = 2; // Срок вклада(для теста меняем).
$startYear = 1; // Начальный срок вклада.

if ($yearCount > $startYear) {
    if ($depositAmount < 1000) {
        $result = $depositAmount + ($depositAmount * 7 / 100) * $yearCount;
        echo 'Сумма вклада за ' . $yearCount . ' года при ставке 7% годовых составит: ' . $result . ' $.';
        $yearCount++;
    } else if ($depositAmount >= 1000) {
        $result = $depositAmount + ($depositAmount * 10 / 100) * $yearCount;
        echo 'Сумма вклада за ' . $yearCount . ' года при ставке 10% годовых составит: ' . $result . ' $.';
    }
} else {
    echo 'Срок вклада указан не верно!';
}

/*28. Вы взяли кредит на сумму $summ. Каждый месяц вы выплачиваете банку 10% от начальной суммы кредита и каждый месяц банк начисляет 7% на остаток по кредиту. Найдите за сколько месяцев
вы выплатите кредит в 400$ и сколько составит переплата(DONE).*/

$summ = 400; // Сумма кредите 400$.
$summ0 = 400; // Начальная сумма.
$paymentPercent = 0.10; // Ежемесячный платеж в %.
$accruesPercent = 0.07; // Ежемесячные начисления в %.
$countMonth = 0; // Счетчик срока в месяцах.
$fullSumm = 0; // Полная сумма.

$payment = $summ * $paymentPercent; // Сумма переплаты.

while (true) {
    $countMonth++;
    if ($payment >= $summ) {
        $fullSumm += $summ;
        break;
    } else {
        $fullSumm += $payment;
        $summ -= $payment; // Оплатили за месяц.
        $summ = $summ * (1 + $accruesPercent); // Начислили проценты на остаток после платежа.
    }
}

echo 'Срок кредита составит: ' . $countMonth . ' месяцев.' . '</br>';
echo 'Переплата составит: ' . round($fullSumm - $summ0, 2) . ' процентов.'; // round() - округление. Первый аргумент число и второй до скольки округлять.

// PHP Part10 Construct If Else Tasks (DONE).

?>
