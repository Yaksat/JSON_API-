Задача: 
Необходимо разработать сервис JSON API для передачи данных и приема данных о сотрудниках компании
API методы:
1.	Метод записи данных(ниже список данных): 
a.	email 
b.	ФИО
c.	Возраст
d.	Стаж работы
e.	Фото
f.	средняя з/п
	Метод получении информации о сотруднике(все данные)
	Метод получения информации обо всех сотрудниках

В процессе работы сервис должен уметь через веб форму записывать данные по методу 1. По нажатию на кнопку получить все данные о сотрудниках, вывести списком. При клике на одного из сотрудников из списка, получить всю информацию о сотруднике


Laravel Framework 9.27.0
PHP 8.1.5
MySQL
Картинки только формата png (можно сделать и другие форматы)
Без авторизации, т.к. в задании не было.

web:
http://127.0.0.1:8000/ - главная
http://127.0.0.1:8000/workers - список всех сотрудников
http://127.0.0.1:8000/workers/create - форма создания нового сотрудника
http://127.0.0.1:8000/workers/{worker} - показать данные одного сотрудника

api (тестировал через PostMan):
http://127.0.0.1:8000/api/workers - получение списка всех сотрудников/запись нового)
http://127.0.0.1:8000/api/workers/{worker} - получение данных одного сотрудника
