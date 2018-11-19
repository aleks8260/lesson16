<?php

/*
1. http://php.net/manual/ru/language.operators.type.php
2. http://php.net/manual/ru/language.oop5.magic.php
3. http://php.net/manual/ru/language.oop5.cloning.php
4. http://php.net/manual/ru/language.oop5.overloading.php
5. http://php.net/manual/ru/language.exceptions.php
6. http://php.net/manual/ru/language.oop5.interfaces.php
7. http://php.net/manual/ru/language.namespaces.php
8. https://slides.com/alex_novikov/php-16#/

Задача 1.
В класс User добавить магические методы __get, __set для закрытых свойств, которые будут возвращать / присваивать соответствующие значения.

Задача 2.
Создать интерфейс для класса User. Реализовать интерфейс с классом User

Задача 3.
Создать класс от которого нельзя унаследоваться.

Задача 4.
Создать класс, у которого есть свойства имени и фамилии, идентификатор (покупатель).
При инициализации, создавался новый объект с именем и фамилией, и идентификатором.
Создать методы установки и получения имени и фамилии, идентификатор.
вывести на экран информации о созданном объекте. Создать три экземпляра класса.

Задача 4.1
То же что и в задаче 4, но через self

Задача 5*.
Создайте класс Form - оболочку для создания форм. Он должен иметь методы input, submit, password, textarea, open, close. Каждый метод принимает массив атрибутов.
Пример:
echo $form->input(['type'=>'text', 'value'=>'!!!']);
//Код выше выведет <input type="text" value="!!!">
echo $form->open(['action'=>'index.php', 'method'=>'POST']);
//Код выше выведет <form action="index.php" method="POST">
echo $form->close();
//Код выше выведет </form>

Задача 6*.
Создать класс со статическим свойством, которое будет содержать значение количества созданных экземпляров (использовать self)

Задача 7*.
 Создайте класс Session - оболочку над сессиями.
Он должен иметь следующие методы: создать переменную сессии,
получить переменную, удалить переменную сессии, проверить наличие переменной сессии.
*/


?>