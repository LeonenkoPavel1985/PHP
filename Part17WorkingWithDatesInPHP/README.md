﻿# Part 17 Working With Dates In PHP.
 
РАБОТА С ДАТАМИ В PHP.

Timestamp: time и mktime.

1. Выведите текущее время в формате timestamp (DONE).
2. Выведите 1 января 2025 года в формате timestamp (DONE).
3. Выведите 31 декабря текущего года в формате timestamp. Скрипт должен работать независимо от года, в котором он запущен (DONE).
4. Найдите количество секунд, прошедших с 13:12:59 15-го марта 2000 года до настоящего момента (DONE).
5. Найдите количество секунд $sec, прошедших с 7:23:48 1-го числа текущего месяца до настоящего момента. Найдите количество минут, часов и дней, содержащихся в $sec (не одновременно, а последовательно: сначала минуты, потом    часы и т.д.) (DONE).

Функция date.

6. Выведите на экран текущий год, день, месяц, час, минуту, секунду (DONE).
7. Выведите текущую дату-время в форматах '2023-12-31', '31.12.2023', '31.12.23', '12:59:59' (DONE). 
8. С помощью функций mktime и date выведите 13 февраля 2015 года в формате '31.12.2023' (DONE).
9. Создайте массив дней недели $week. Выведите на экран название текущего дня недели с помощью массива $week и функции date. Узнайте какой день недели был 06.06.2006, в ваш день рождения (DONE).
10. Создайте массив месяцев $month. Выведите на экран название текущего месяца с помощью массива $month и функции date (DONE). 
11. Найдите номер текущего дня от начала месяца (DONE).
12. Найдите количество дней в текущем месяце. Скрипт должен работать независимо от месяца, в котором он запущен (DONE).
13. Сделайте поле ввода, в которое пользователь вводит год (4 цифры), а скрипт определяет високосный ли год (DONE).
14. Сделайте форму, которая спрашивает дату в формате '31.12.2023'. С помощью функций explode и mktime переведите эту дату в формат timestamp. Узнайте день недели (словом) за введенную дату (DONE).
15. Сделайте форму, которая спрашивает дату в формате '2023-12-31'. С помощью функций explode и mktime переведите эту дату в формат timestamp. Узнайте месяц (словом) за введенную дату (DONE).
16. Сделайте форму, которая спрашивает дату-время в формате '2025-12-31T12:13:59'. С помощью функции strtotime и функции date преобразуйте ее в формат '12:13:59 31.12.2025' (DONE).

Сравнение дат.

17. Сделайте форму, которая спрашивает две даты в формате '2023-12-31'. Первую дату запишите в переменную $date1, а вторую в $date2. Сравните, какая из введенных дат больше. Выведите ее на экран (DONE).

На strtotime.

18. Дана дата в формате '2023-12-31'. С помощью функции strtotime преобразуйте ее в формат '31-12-2023' (DONE).
19. Сделайте форму, которая спрашивает дату-время в формате '2023-12-31T12:13:59'. С помощью функции strtotime преобразуйте ее в формат '12:13:59 31.12.2023' (DONE).

Прибавление и отнимание от дат.

20. Прибавьте к дате 31.12.2023 один день. Результат выведите в том же формате (DONE).
21. В переменной $date лежит дата в формате '2023-12-31'. Прибавьте к этой дате 2 дня, 1 месяц и 3 дня, 1 год. Отнимите от этой даты 3 дня (DONE).

