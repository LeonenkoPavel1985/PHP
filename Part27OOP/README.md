﻿# Part 27 OOP.

ОБЪЕКТНО - ОРИЕНТИРОВАННОЕ ПРОГРАММИРОВАНИЕ.

Работа с классами.

1. Сделайте класс Power, который возводит число в нужную степень (не используя стандартную функцию pow). Класс должен иметь следующие методы: 2, 3, 4, 5 степени (DONE).
2. Сделайте класс-калькулятор. Класс должен иметь следующие методы: сложение, вычитание, умножение, деление. Каждый метод должен принимать параметром два числа (DONE).
3. Сделайте класс Sqrt, который извлекает из числа корень нужной степени (используя pow: pow(4, 0.5) – это квадратный корень). Класс должен иметь следующие методы: корни 2, 3, 4, 5 степени (DONE).
4. Сделайте класс-оболочку над $_SERVER. Класс должен иметь следующие методы: REQUEST_URI, SERVER_ADDR, DOCUMENT_ROOT, HTTP_HOST, HTTP_USER_AGENT', QUERY_STRING (DONE).

Private и public.

5. Напишите класс-сумматор. Класс должен иметь следующие методы: сумма двух чисел, сумма квадратов двух чисел, сумма кубов двух чисел и так далее до 5-той степени. Класс должен иметь private методы возведения в степень (без pow) и
   public методы суммирования (DONE).
6. Напишите класс-оболочку над cookie. Оболочка должна представлять собой набор функций: сохранение куки, удаление куки, редактирование куки, считывание куки. По умолчанию кука должна устанавливаться на 1 год (DONE).
7. Сделайте класс-геометрический-калькулятор. Класс должен иметь следующие методы: площадь квадрата, площадь прямоугольника, объем куба, объем параллелепипеда, длина окружности через радиус, 
   площадь круга, объем шара. Класс должен иметь private свойство — число пи (DONE).

__construct.

8. Напишите оболочку над сессиями. Оболочка должна представлять собой набор функций: сохранение в сессию, считывание из сессии, удаление всех переменных сессии. Сессия должна стартовать в функции __construct (DONE).

На наследование и использование других классов.

9. Напишите класс-сумматор. Класс должен иметь следующие методы: сумма двух чисел, сумма квадратов двух чисел, сумма кубов двух чисел и так далее до 5-той степени. Класс должен наследовать 
	методы возведения в степень от класса Power и иметь public методы суммирования (DONE).
