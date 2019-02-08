
46.Задачи на продвинутые SQL запросы
На IN
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: IN.

1. Выберите из таблицы workers записи с id равным 1, 2, 3, 5, 14.

SELECT * FROM workers WHERE id IN(1, 2, 3, 5, 14)

2. Выберите из таблицы workers записи с login равным 'eee', 'bbb', 'zzz'.

SELECT * FROM workers WHERE login IN("eee", "bbb", "zzz")

3. Выберите из таблицы workers записи с id равным 1, 2, 3, 7, 9, и логином, равным 'user', 'admin', 'ivan' и зарплатой больше 300.

SELECT * FROM workers WHERE id IN(1, 2, 3, 7, 9) AND login IN("user","admin","ivan") AND salary>300

На BETWEEN
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: BETWEEN.

4. Выберите из таблицы workers записи c зарплатой от 100 до 1000.

SELECT * FROM workers WHERE salary BETWEEN 100 AND 1000

5. Выберите из таблицы workers записи c id от 3 до 10 и зарплатой от 300 до 500.

SELECT * FROM workers WHERE id BETWEEN 3 AND 10 AND salary BETWEEN 300 AND 500 

На AS
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: AS.

6. Выберите из таблицы workers все записи так, чтобы вместо id было userId, вместо login – userLogin, вместо salary - userSalary.

SELECT id AS useriD, login AS userLogin, salary AS userSalary FROM workers

На DISTINCT
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: DISTINCT.

7. Выберите из таблицы workers все записи так, чтобы туда попали только записи с разной зарплатой (без дублей).

SELECT DISTINCT salary FROM workers

8. Получите SQL запросом все возрасты без дублирования.

SELECT DISTINCT age FROM workers

На MIN и MAX
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: MIN, MAX.

9. Найдите в таблице workers минимальную зарплату.

SELECT MIN(salary) FROM workers

10. Найдите в таблице workers максимальную зарплату.

SELECT MAX(salary) FROM workers

На SUM
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: SUM.

11. Найдите в таблице workers суммарную зарплату.

SELECT SUM(salary) FROM workers

12. Найдите в таблице workers суммарную зарплату для людей в возрасте от 21 до 25.

SELECT SUM(salary) FROM workers WHERE age BETWEEN 21 AND 25

13. Найдите в таблице workers суммарную зарплату для id, равного 1, 2, 3 и 5.

SELECT SUM(salary) FROM workers WHERE id IN(1, 2, 3, 5)

На AVG
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: AVG.

14. Найдите в таблице workers среднюю зарплату.

SELECT AVG(salary) FROM workers

15. Найдите в таблице workers средний возраст.

SELECT AVG(age) FROM workers

На NOW, CURRENT_DATE, CURRENT_TIME
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: NOW, CURRENT_DATE, CURRENT_TIME.

16. Выберите из таблицы workers все записи, у которых дата больше текущей.

SELECT * FROM workers WHERE date>CURRENT_DATE()

17. Вставьте в таблицу workers запись с полем date с текущим моментом времени в формате 'год-месяц-день часы:минуты:секунды'.

INSERT INTO workers ('name', 'date') VALUES ('Вася', NOW())

18. Вставьте в таблицу workers запись с полем date с текущей датой в формате 'год-месяц-день'.

INSERT INTO workers ('name', 'date') VALUES ('Вася', CURRENT_DATE())

19. Вставьте в таблицу workers запись с полем time с текущим моментом времени в формате 'часы:минуты:секунды'.

INSERT INTO workers ('name', 'date') VALUES ('Вася', CURRENT_TIME())

На работу с частью даты
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: SECOND, MINUTE, HOUR, DAY, MONTH, YEAR, DAYOFWEEK, WEEKDAY.

20. Выберите из таблицы workers все записи за 2016 год.

SELECT * FROM workers WHERE YEAR(date)=2016

21. Выберите из таблицы workers все записи за март любого года.

SELECT * FROM workers WHERE MONTH(date)=3

22. Выберите из таблицы workers все записи за третий день месяца.

SELECT * FROM workers WHERE DAY(date)=3

23. Выберите из таблицы workers все записи за пятый день апреля любого года.

SELECT * FROM workers WHERE MONTH(date)=4 AND DAY(date)=5

24. Выберите из таблицы workers все записи за следующие дни любого месяца: 1, 7, 11, 12, 15, 19, 21, 29.

SELECT * FROM workers WHERE DAY(date) IN(1, 7, 11, 12, 15, 19, 21, 29)

25. Выберите из таблицы workers все записи за вторник.

SELECT * FROM workers WHERE DAYOFWEEK(date)=3

26. Выберите из таблицы workers все записи за первую декаду любого месяца 2016 года.

SELECT * FROM workers WHERE DAY(date)<=10 AND YEAR(date)=2016

27. Выберите из таблицы workers все записи, в которых день меньше месяца.

SELECT * FROM workers WHERE DAY(date)<MONTH(date)

28. При выборке из таблицы workers запишите день, месяц и год в отдельные поля.

SELECT DAY(date) AS fieldday MONTH(date) AS fieldmonth YEAR(date) AS fieldyear FROM workers

29. При выборке из таблицы workers создайте новое поле today, в котором будет номер текущего дня недели.

SELECT WEEKDAY(NOW()) AS today FROM workers

На EXTRACT, DATE
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: EXTRACT, DATE.

30. При выборке из таблицы workers запишите год, месяц и день в отдельные поля с помощью EXTRACT.

SELECT EXTRACT(YEAR FROM date) AS year, EXTRACT(MONTH FROM date) AS month, EXTRACT(DAY FROM date) AS day FROM workers

31. При выборке из таблицы workers запишите день, месяц и год в отдельное поле с помощью DATE в формате 'год-месяц-день'.

SELECT DATE(date) FROM workers

На DATE_FORMAT
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: DATE_FORMAT.

32. При выборке из таблицы workers выведите дату в формате '31.12.2025'.

SELECT DATE_FORMAT(date, '%d.%m.%Y') FROM workers

33. При выборке из таблицы workers выведите дату в формате '2025% 31.12'.

SELECT DATE_FORMAT(date, '%Y%% %d.%m') FROM workers

На INTERVAL, DATE_ADD, DATE_SUB
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: INTERVAL, DATE_ADD, DATE_SUB.

34. При выборке из таблицы workers прибавьте к дате 1 день.

SELECT DATE_ADD(date, INTERVAL 1 DAY) FROM workers

35. При выборке из таблицы workers отнимите от даты 1 день.

SELECT DATE_ADD(date, INTERVAL -1 DAY) FROM workers

36. При выборке из таблицы workers прибавьте к дате 1 день, 2 часа.

SELECT DATE_ADD(date, INTERVAL "1:2" DAY_HOUR) FROM workers

37. При выборке из таблицы workers прибавьте к дате 1 год, 2 месяца.

SELECT DATE_ADD(date, INTERVAL "1:2" YEAR_MONTH) FROM workers

38. При выборке из таблицы workers прибавьте к дате 1 день, 2 часа, 3 минуты.

SELECT DATE_ADD(date, INTERVAL "1 2:3" DAY_SECOND) FROM workers

39. При выборке из таблицы workers прибавьте к дате 1 день, 2 часа, 3 минуты, 5 секунд.

SELECT DATE_ADD(date, INTERVAL "1 2:3:5" DAY_SECOND) FROM workers

40. При выборке из таблицы workers прибавьте к дате 2 часа, 3 минуты, 5 секунд.

SELECT DATE_ADD(date, INTERVAL "2:2:5" HOUR_SECOND) FROM workers

41. При выборке из таблицы workers прибавьте к дате 1 день и отнимите 2 часа.

SELECT DATE_ADD(date, INTERVAL "1 -2" DAY_HOUR) FROM workers

42. При выборке из таблицы workers прибавьте к дате 1 день и отнимите 2 часа, 3 минуты.

SELECT DATE_ADD(date, INTERVAL "1 -2:-3" DAY_MINUTE) FROM workers

На математические операции

43. При выборке из таблицы workers создайте новое поле res, в котором будет число 3.

SELECT 3 AS res FROM workers

44. При выборке из таблицы workers создайте новое поле res, в котором будет строка 'eee'.

SELECT 'eee' AS res FROM workers

45. При выборке из таблицы workers создайте новое поле 3, в котором будет число 3.

SELECT 3 AS 3 FROM workers

46. При выборке из таблицы workers создайте новое поле res, в котором будет лежать сумма зарплаты и возраста.

SELECT (salary + age) AS res FROM workers

47. При выборке из таблицы workers создайте новое поле res, в котором будет лежать разность зарплаты и возраста.

SELECT (salary - age) AS res FROM workers

48. При выборке из таблицы workers создайте новое поле res, в котором будет лежать произведение зарплаты и возраста.

SELECT (salary * age) AS res FROM workers

49. При выборке из таблицы workers создайте новое поле res, в котором будет лежать среднее арифметическое зарплаты и возраста.

SELECT ((salary * age)/2) AS res FROM workers

50. Выберите из таблицы workers все записи, в которых сумма дня и месяца меньше 10-ти.

SELECT * FROM workers WHERE (MONTH(date) + DAY(date))<10

На LEFT, RIGHT, SUBSTRING
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: LEFT, RIGHT, SUBSTRING.

51. При выборке из таблицы workers получите первые 5 символов поля description.

SELECT LEFT(description, 5) FROM workers

52. При выборке из таблицы workers получите последние 5 символов поля description.

SELECT RIGHT(description, 5) FROM workers

53. При выборке из таблицы workers получите из поля description символы со второго по десятый.

SELECT SUBSTRING(description, 2, 10) FROM workers

На UNION
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: UNION.

54. Даны две таблицы: таблица category и таблица sub_category с полями id и name. Достаньте одним запросом названия категорий и подкатегорий.

SELECT id, name FROM workers UNION SELECT id, name FROM sub_category

На CONCAT, CONCAT_WS
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: CONCAT, CONCAT_WS.

55. При выборке из таблицы workers создайте новое поле res, в котором будут лежать одновременно зарплата и возраст (слитно).

SELECT CONCAT(salary, age) AS res FROM workers

56. При выборке из таблицы workers создайте новое поле res, в котором будут лежать одновременно зарплата и возраст (слитно), а после возраста будут идти три знака '!'.

SELECT CONCAT(salary, age, "!!!") AS res FROM workers

57. При выборке из таблицы workers создайте новое поле res, в котором будут лежать одновременно зарплата и возраст через дефис.

SELECT CONCAT(salary, "-", age) AS res FROM workers

58. При выборке из таблицы workers получите первые 5 символов логина и добавьте троеточие.

SELECT CONCAT(LEFT(login, 5), "...") AS res FROM workers

На GROUP BY
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: GROUP BY.

59. Найдите самые маленькие зарплаты по группам возрастов (для каждого возраста свою минимальную зарплату).

SELECT MIN(salary) FROM workers GROUP BY age

60. Найдите самый большой возраст по группам зарплат (для каждой зарплаты свой максимальный возраст).

SELECT MAX(age) FROM workers GROUP BY salary

На GROUP_CONCAT
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: GROUP_CONCAT.

61. Выберите из таблицы workers уникальные возраста так, чтобы для каждого возраста было поле res, в котором будут лежать через дефис id записей с таким возрастом.

SELECT DISTINCT age (SELECT GROUP_CONCAT(id SEPARATOR "-")) AS res FROM workers

На подзапросы

62. Выберите из таблицы workers все записи, зарплата в которых больше средней зарплаты.

SELECT * FROM workers WHERE salary>(SELECT AVG(salary) FROM workers)

63. Выберите из таблицы workers все записи, возраст в которых меньше среднего возраста, деленного на 2 и умноженного на 3.

SELECT * FROM workers WHERE age<(SELECT (AVG(age)/2)*3 FROM workers)

64. Выберите из таблицы workers записи с минимальной зарплатой.

SELECT * FROM workers WHERE salary=(SELECT MIN(salary) FROM workers)

65. Выберите из таблицы workers записи с максимальной зарплатой.

SELECT * FROM workers WHERE salary=(SELECT MAX(salary) FROM workers)

66. При выборке из таблицы workers создайте новое поле max, в котором будет лежать максимальное значение зарплаты для возраста 25 лет.

SELECT MAX(salary) AS `max` FROM workers WHERE age=25

67. При выборке из таблицы workers создайте новое поле avg, в котором будет лежать деленная на 2 разница между максимальным значением возраста и минимальным значением возраста в во всей таблице.

SELECT (MAX(age) - MIN(age))/2 AS `avg` FROM workers

68. При выборке из таблицы workers создайте новое поле avg, в котором будет лежать деленная на 2 разница между максимальным значением зарплаты и минимальным значением зарплаты для возраста 25 лет.

SELECT (MAX(salary) - MIN(salary))/2 AS `avg` FROM workers WHERE age=25

На JOIN
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: JOIN.

69. Даны две таблицы: таблица category с полями id и name и таблица page с полями id, name и category_id. Достаньте одним запросом все страницы вместе с их категориями.

SELECT * FROM page LEFT JOIN category ON  page.catogory_id = category.id 

70. Даны 3 таблицы: таблица category с полями id и name, таблица sub_category с полями id и name и таблица page с полями id, name и sub_category_id. Достаньте одним запросом все страницы вместе с их подкатегориями и категориями.

SELECT * FROM page LEFT JOIN category ON page.catogory_id = category.id LEFT JOIN sub_category ON category.id = sub_category.category_id 

На работу с полями
Задачи данного блока следует решать SQL запросами, а не через PhpMyAdmin.

71. Создайте базы данных test1 и test2.

CREATE DATABASE test1
CREATE DATABASE test2

72. Удалите базу данных test2.

DROP DATABASE test2

73. Создайте в базе данных test1 таблицы table1 и table2 с полями id, login, salary, age, date.

CREATE TABLE table1(
   id INT,
   login VARCHAR(255),
   salary INT,
   age INT,
   date DATE NOT NULL
   primary key (id)
);

CREATE TABLE table2(
   id INT,
   login VARCHAR(255),
   salary INT,
   age INT,
   date DATE NOT NULL
   primary key (id)
);

74. Переименуйте таблицу table2 в table3.

RENAME TABLE table2 TO table3

75. Удалите таблицу table3.

DROP TABLE table3

76. Добавьте в таблицу table1 поле status.

ALTER TABLE table1 ADD COLUMN status

77. Удалите из таблицы table1 поле age.

ALTER TABLE table1 DROP COLUMN age  

78. Переименуйте поле login на user_login.

RENAME COLUMN login TO user_login

79. Смените типа поля salary с int на varchar(255).

ALTER TABLE table1 CHANGE salary salary VARCHAR(255)

80. Очистите таблицу table1.

DELETE FROM table1

81. Очистите все таблицы базы данных test1.

TRUNCATE test1