
47.Правильная организация 
баз данных
Задача 1. 

Товар (название, цена, количество), категория товара.

--товары
CREATE TABLE goods(
   id INT,
   idcat INT, --номер категории
   name VARCHAR(255), --название
   qty INT, --количество
   price INT, --цена
   primary key (id)
);

--категории
CREATE TABLE cat(
   id INT,
   name VARCHAR(255),
   primary key (id)
);

1. достать товары вместе с категориями:
SELECT * FROM goods JOIN cat ON goods.idcat = cat.id

2. достать товары из категории 'Овощи':
SELECT * FROM goods JOIN cat ON goods.idcat = cat.id WHERE cat.name = "Овощи"

3. достать товары из категорий 'Овощи', 'Мясо', 'Морепродукты':
SELECT * FROM goods JOIN cat ON goods.idcat = cat.id WHERE cat.name IN ('Овощи', 'Мясо', 'Морепродукты')

4. достать все категории (без товаров, только названия категорий):
SELECT name FROM cat

5. достать все категории, в которых есть товары (без товаров, только названия категорий, без дублей):
SELECT DISTINCT name FROM cat JOIN goods ON cat.id = goods.idcat


Задача 2.

Товар (название, цена, количество), подкатегория товара, категория товара. Товар принадлежит подкатегории, подкатегория — категории. Пример: помидорки черри (товар), помидоры (подкатегория), овощи (категория). Запросы: (1) достать товары вместе с подкатегориями и категориями, (2) достать товары из подкатегории 'Помидоры', (3) достать все подкатегории категории 'Овощи'.

--товары
CREATE TABLE goods(
   id INT,
   idsubcat INT, --номер подкатегории
   name VARCHAR(255), --название
   qty INT, --количество
   price INT, --цена
   primary key (id)
);

--категории
CREATE TABLE cat(
   id INT,
   name VARCHAR(255),
   primary key (id)
);

--подкатегории
CREATE TABLE subcat(
   id INT,
   idcat INT, --номер категории  
   name VARCHAR(255),
   primary key (id)
);

1. достать товары вместе с подкатегориями и категориями:

SELECT * FROM goods JOIN cat ON goods.idcat = cat.id JOIN subcat ON cat.idsubcat = subcat.id

2. достать товары из подкатегории 'Помидоры':

SELECT * FROM goods JOIN cat ON goods.idcat = cat.id JOIN subcat ON cat.idsubcat = subcat.id WHERE subcat.name = 'Помидоры'

3. достать все подкатегории категории 'Овощи', 'Мясо', 'Морепродукты':

SELECT * FROM goods JOIN cat ON goods.idcat = cat.id JOIN subcat ON cat.idsubcat = subcat.id WHERE cat.name IN ('Овощи', 'Мясо', 'Морепродукты')


Задача 3.

Товар, категория, склад, брэнд. Товар принадлежит категории, складу и бренду.

--товары
CREATE TABLE goods(
   id INT,
   idcat INT, --номер категории
   idstock INT, --номер подкатегории
   idbrand INT, --номер подкатегории
   name VARCHAR(255), --название
   qty INT, --количество
   price INT, --цена
   primary key (id)
);

--категории
CREATE TABLE cat(
   id INT,
   name VARCHAR(255),
   primary key (id)
);

--склады
CREATE TABLE stock(
   id INT,
   name VARCHAR(255),
   primary key (id)
);

--бренды
CREATE TABLE brand(
   id INT,
   name VARCHAR(255),
   primary key (id)
);

1. достать товары с их категорией, складом и брэндом:

SELECT * FROM goods JOIN cat ON goods.idcat = cat.id JOIN stock ON goods.idstock = stock.id JOIN brand ON goods.idbrand = brand.id

2. достать все склады:
SELECT * FROM stock


Задача 4.

Товар, подкатегория, категория, склад, брэнд. Последние 3 никак не связаны, подкатегория принадлежит категории (например, помидоры овощам).

--товары
CREATE TABLE goods(
   id INT,
   idsubcat INT, --номер категории
   idstock INT, --номер подкатегории
   idbrand INT, --номер подкатегории
   name VARCHAR(255), --название
   qty INT, --количество
   price INT, --цена
   primary key (id)
);

--категории
CREATE TABLE cat(
   id INT,
   idsubcat INT;
   name VARCHAR(255),
   primary key (id)
);

--подкатегории
CREATE TABLE subcat(
   id INT,
   idcat INT, --номер категории  
   name VARCHAR(255),
   primary key (id)
);

--склады
CREATE TABLE stock(
   id INT,
   name VARCHAR(255),
   primary key (id)
);

--бренды
CREATE TABLE brand(
   id INT,
   name VARCHAR(255),
   primary key (id)
);

1. достать товары с их подкатегорией и категорией, складом и брэндом

SELECT * FROM goods JOIN subcat ON goods.idsubcat = subcat.id JOIN cat ON subcat.idcat = cat.id JOIN stock ON goods.idstock = stock.id JOIN brand ON goods.idbrand = brand.id


Задача 5.

Пользователь, его город. 

--пользователи
CREATE TABLE users(
   id INT NOT NULL AUTO_INCREMENT,
   idcity INT,
   name VARCHAR(255),
   primary key (id)
);

--города
CREATE TABLE city(
   id INT NOT NULL AUTO_INCREMENT,
   name VARCHAR(255),
   primary key (id)
);

1. достать пользователей вместе с их городом:
SELECT users.id, users.name, city.id, city.name FROM users JOIN city ON users.idcity = city.id

2. достать все города:
SELECT name FROM city

3. достать всех пользователей из города Минск:
SELECT users.id, users.name FROM users JOIN city ON users.idcity = city.id WHERE city.name = "Минск"

4. достать все города, в которых есть пользователи
SELECT DISTINCT city.name FROM city LEFT JOIN users ON users.idcity = city.id WHERE users.id IS NOT NULL

5. достать все города, в которых нет пользователей
SELECT DISTINCT city.name FROM city LEFT JOIN users ON users.idcity = city.id WHERE users.id IS NULL 

6. вывести список городов с количеством пользователей в них:
SELECT city.name, COUNT(users.id) AS qtyuser FROM city LEFT JOIN users ON city.id = users.idcity GROUP BY city.id 

7. вывести список городов, в которых количество пользователей больше трех:
SELECT city.name, COUNT(users.id) FROM city LEFT JOIN users ON city.id = users.idcity GROUP BY city.id HAVING COUNT(users.id) > 3


Задача 6.

Пользователь, его город, страна. 

--пользователи
CREATE TABLE users(
   id INT NOT NULL AUTO_INCREMENT,
   idcity INT,
   name VARCHAR(255),
   primary key (id)
);

--города
CREATE TABLE country(
   id INT NOT NULL AUTO_INCREMENT,
   idcountry INT,
   name VARCHAR(255),
   primary key (id)
);

--страны
CREATE TABLE city(
   id INT NOT NULL AUTO_INCREMENT,
   name VARCHAR(255),
   primary key (id)
);

1. достать всех пользователей вместе с их городом и страной:
SELECT users.name, city.name, country.name FROM users LEFT JOIN city ON users.idcity = city.id LEFT JOIN country ON city.idcountry = country.id

2. достать все города с их странами:
SELECT city.name, country.name FROM city LEFT JOIN country ON city.idcountry = country.id

3. достать всех пользователей из страны Беларусь (без городов):
SELECT users.name FROM users LEFT JOIN city ON users.idcity = city.id LEFT JOIN country ON city.idcountry = country.id WHERE country="Беларусь"

4. достать всех пользователей из города Минск (без страны):
SELECT users.name FROM users LEFT JOIN city ON users.idcity = city.id WHERE city="Минск"

5. вывести список стран с количеством пользователей в них:
SELECT country.name, COUNT(user.id) AS qtyusers FROM country JOIN city ON country.id = city.idcountry JOIN user ON city.id = user.idcity


Задача 7.

У отца всегда только один сын. Сыновья в свою очередь также могут быть отцами. 

--пользователи
CREATE TABLE users(
   id INT NOT NULL AUTO_INCREMENT,
   name VARCHAR(255),
   idson INT,
   primary key (id)
);

1. получить пользователя вместе с его отцом и сыном:
SELECT users.name, sons.name FROM users LEFT JOIN users AS sons ON users.idson = sons.id 

2. получить дедушку пользователя:
SELECT users.name, grandfather.name FROM users LEFT JOIN users AS father ON father.idson = user.id LEFT JOIN users AS grandfather ON father.id = grandfather.idson

3. получить прадедушку пользователя: 
SELECT users.name, greatfather.name  FROM users LEFT JOIN users AS father ON father.idson = users.id  LEFT JOIN users AS grandfather ON 
grandfather.idson = father.id LEFT JOIN users AS greatfather ON greatfather.idson = grandfather.id


Задача 8.

Есть мужья и жены, а также неженатые/незамужние. Для всех указывается имя, фамилия, возраст, адрес. Муж с женой имеют одну фамилию и живут по одному адресу. 

CREATE TABLE users(
   id INT NOT NULL AUTO_INCREMENT,
   name VARCHAR(255),
   surname VARCHAR(255),
   age INT,
   address VARCHAR(255),
   idfamily INT,
   primary key (id)
);

1. получить мужей с женами и наоборот:
SELECT users.name, relations.name FROM users JOIN users AS relations ON users.id = relations.idfamily

2. получить холостых:
SELECT users.name FROM users WHERE idfamily IS NULL

3. получить семьи (муж+жена), семьи не должны дублироваться (пара должна быть только 1 раз):
SELECT DISTINCT users.name, relations.name FROM users JOIN users AS relations ON users.id = relations.idfamily WHERE users.id > relations.id


Задача 9.

Товар, который может принадлежать нескольким категориям одновременно.

-- товары
CREATE TABLE goods(
   id INT NOT NULL AUTO_INCREMENT,
   name VARCHAR(255),
   idrel INT,
   primary key (id)
);

-- отношения товаров и категорий
CREATE TABLE relations(
   id INT NOT NULL AUTO_INCREMENT,
   idrel INT,
   idcat INT,
   primary key (id)
);

-- категории
CREATE TABLE category(
   id INT NOT NULL AUTO_INCREMENT,
   name VARCHAR(255),
   primary key (id)
);

1. достать все товары вместе с их категориями:
SELECT * FROM goods LEFT JOIN relations ON goods.idrel = relations.idrel LEFT JOIN category ON relations.idcat = category.id

2. достать товар 'Огурец' вместе с его категориями:
SELECT * FROM goods LEFT JOIN relations ON goods.idrel = relations.idrel LEFT JOIN category ON relations.idcat = category.id WHERE goods.name = "Огурец"

3 достать все товары из категории 'Овощи':
SELECT * FROM goods LEFT JOIN relations ON goods.idrel = relations.idrel LEFT JOIN category ON relations.idcat = category.id WHERE category.name = "Овощи"

4. достать все товары, которые принадлежат более чем одной категории:
SELECT * FROM goods LEFT JOIN relations ON goods.idrel = relations.idrel LEFT JOIN category ON relations.idcat = category.id GROUP BY goods.id HAVING COUNT(goods.id) > 1


Задача 10.

Пользователь и его интересы (могут быть одинаковыми у разных пользователей).

-- пользователи
CREATE TABLE users(
   id INT NOT NULL AUTO_INCREMENT,
   name VARCHAR(255),
   idrel INT,
   primary key (id)
);

-- отношения пользователей и интересов
CREATE TABLE relations(
   id INT NOT NULL AUTO_INCREMENT,
   idrel INT,
   idinterests INT,
   primary key (id)
);

-- интересы
CREATE TABLE interests(
   id INT NOT NULL AUTO_INCREMENT,
   name VARCHAR(255),
   primary key (id)
);

1. достать интересы пользователя:
SELECT users.name, intrests.name FROM users LEFT JOIN relations ON users.idrel = relations.idrel LEFT JOIN interests ON reletions.idinterests = interest.id WHERE users.id = 10

2. достать всех пользователей с данным интересом:
SELECT users.name, intrests.name FROM users LEFT JOIN relations ON users.idrel = relations.idrel LEFT JOIN interests ON reletions.idinterests = interest.id WHERE intrests.id = 10

Задача 11.

Пользователь, товары, покупки пользователей. У товара есть цена, пользователь может купить не один экземпляр товара, а одновременно несколько.

-- покупки
CREATE TABLE purchase(
   id INT NOT NULL AUTO_INCREMENT,
   iduser INT,
   idgood INT,
   date DATE,
   primary key (id)
);

-- пользователи
CREATE TABLE users(
   id INT NOT NULL AUTO_INCREMENT,
   name VARCHAR(255),
   primary key (id)
);

-- товары
CREATE TABLE goods(
   id INT NOT NULL AUTO_INCREMENT,
   name VARCHAR(255),
   price REAL,
   primary key (id)
);

1. вывести пользователей вместе с их покупками:
SELECT goods.name, goods.price, users.name FROM goods JOIN purchase ON goods.id = purchase.idgood JOIN users ON purchase.iduser = users.id
 
2. вывести пользователей вместе с суммами всех их покупок:
SELECT goods.name, goods.price, users.name, SUM(price) FROM goods JOIN purchase ON goods.id = purchase.idgood JOIN users ON purchase.iduser = users.id 

3. найти суммарные покупки на сайте за определенный месяц:
SELECT SUM(price) FROM goods JOIN purchase ON goods.id = purchase.idgood JOIN users ON purchase.iduser = users.id  WHERE MONTH(date) = 2
 
4. найти суммарные покупки на сайте помесячно:
SELECT SUM(price) AS summa, DATE_FORMAT(date, '%m-%Y') users.name FROM goods JOIN purchase ON goods.id = purchase.idgood JOIN users ON purchase.iduser = users.id
 

Задача 12.

Есть отцы и сыновья. У отца может быть много сыновей.

--пользователи
CREATE TABLE users(
   id INT NOT NULL AUTO_INCREMENT,
   name VARCHAR(255),
   primary key (id)
);

--родственные отношения
CREATE TABLE relations(
   id INT NOT NULL AUTO_INCREMENT,
   iduser INT,
   idson INT,
   primary key (id)
);

1. получить всех сыновей пользователя:
SELECT sons.name FROM users JOIN relations ON users.iduser = relations.iduser JOIN users AS sons ON relations.idson = sons.id WHERE users.id = 10 

2. получить отца пользователя :
SELECT father.name FROM users JOIN relations ON users.iduser = relations.idson JOIN users AS fathers ON relations.idusers = fathers.id WHERE users.id = 10 

3. получить дедушку пользователя :
SELECT grandfather.name FROM users JOIN relations ON users.iduser = relations.idson JOIN users AS fathers ON relations.idusers = fathers.id JOIN users AS grandfathers ON relations.idusers = grandfathers.id WHERE users.id = 10

Задача 13.

Море, реки, притоки (притоки делятся на правые и левые). Реки могут быть притоками других рек или впадать прямо в море. 

-- реки
CREATE TABLE rivers(
   id INT NOT NULL AUTO_INCREMENT,
   name VARCHAR(255),
   primary key (id)
);

-- притоки
CREATE TABLE tributarys(
   id INT NOT NULL AUTO_INCREMENT,
   name VARCHAR(255),
   idriver INT,
   idsea INT,
   primary key (id)
);

-- моря
CREATE TABLE seas(
   id INT NOT NULL AUTO_INCREMENT,
   name VARCHAR(255),
   primary key (id)
);

1. получить все реки Черного Моря:
SELECT rivers.name FROM river JOIN tributarys ON river.id = tributarys.idriver JOIN seas ON tributarys.idsea = sea.id WHERE seas.name = "Черное Море"
 
2. получить все реки Черного Моря вместе с притоками:
SELECT rivers.name, tributarys.name FROM rivers JOIN tributaries ON rivers.id = tributarys.id JOIN seas ON tributaires.idsea = sea.id WHERE seas.name = "Черное Море"

3. получить все притоки реки Днепр:
SELECT tributaries.name FROM rivers JOIN tributaries ON rivers.id = tributaries.idriver WHERE rivers.name = "Днепр"

4. получить куда впадает данная река (в какую реку или в какое море):
SELECT rivers.name, seas.name FROM rivers JOIN tributaries ON rivers.id = tributaries.idrivers JOIN seas ON tributaires.idsea = seas.id WHERE rivers.id = 1

Задача 14.

Пользователь, обмен сообщениями между пользователями (в личку). Сообщение можно пометить как прочитанное (это может только получатель сообщения).

CREATE TABLE messages(
   id INT NOT NULL AUTO_INCREMENT,
   idreader INT,
   idauthor INT,
   status BOOLEAN,
   message VARCHAR(255),
   primary key (id)
);

SELECT * FROM massages JOIN messages AS tomessage ON massages.idreader = tomessage.idauthor  WHERE status = 1


Задача 15 - 16.

Есть сайт с датами футбольных игр. В каждой игре нужно выводить дату игры, первую команду и вторую команду. После того, как игра прошла — нужно выводить еще и счет.

CREATE TABLE games(
   id INT NOT NULL AUTO_INCREMENT,
   idteam1 INT,
   idteam2 INT,
   dategame DATE,
   gamecity VARCHAR(255),
   status BOOLEAN,
   primary key (id)
);

CREATE TABLE teams(
   id INT NOT NULL AUTO_INCREMENT,
   name VARCHAR(255),
   primary key (id)
);

CREATE TABLE players(
   id INT NOT NULL AUTO_INCREMENT,
   name VARCHAR(255),
   idteam INT,
   primary key (id)
);

1. получить все игры вместе с командами:
SELECT * FROM games JOIN teams ON games.idteam1 = teams.id UNION SELECT * FROM games JOIN teams ON games.idteam2 = teams.id

2. получить все игры с командами за текущий месяц:
SELECT * FROM games JOIN teams ON games.idteam1 = teams.id UNION SELECT * FROM games JOIN teams ON games.idteam2 = teams.id WHERE MONTH(date) = MONTH(NOW())

3. получить все игры с командами за предыдущий месяц:
SELECT * FROM games JOIN teams ON games.idteam1 = teams.id UNION SELECT * FROM games JOIN teams ON games.idteam2 = teams.id WHERE MONTH(date) = MONTH(DATE_ADD(), INTERVAL -1 MONTH)

4. получить все сыгранные игры:
SELECT * FROM games JOIN teams ON games.idteam1 = teams.id UNION SELECT * FROM games JOIN teams ON games.idteam2 = teams.id WHERE status IS NOT NULL

5. получить все несыгранные игры:
SELECT * FROM games JOIN teams ON games.idteam1 = teams.id UNION SELECT * FROM games JOIN teams ON games.idteam2 = teams.id WHERE status IS NULL

6. получить все командами c городами:
SELECT *, teams.city FROM games JOIN teams ON games.idteam1 = teams.id UNION SELECT * FROM game JOIN teams ON games.idteam2 = teams.id

7. получить всех играков команды:
SELECT * FROM player JOIN teams ON players.idteam = team.id


Задача 17.

Пользователь, страницы, категории страниц. Пользователи пишут посты в гостевой книге к определенной странице.

CREATE TABLE users(
   id INT NOT NULL AUTO_INCREMENT,
   name VARCHAR(255),
   idpage INT,
   primary key (id)
);

CREATE TABLE pages(
   id INT NOT NULL AUTO_INCREMENT,
   text TEXT,
   idcategory INT,
   primary key (id)
);

CREATE TABLE categories(
   id INT NOT NULL AUTO_INCREMENT,
   name VARCHAR(255),
   idteam INT,
   primary key (id)
);

1. получить все комментарии к данной странице:
SELECT * FROM users JOIN pages ON users.idpade = pages.id JOIN categories ON pages.idcategory = categories.id

2. получить все комментарии данного пользователя:
SELECT * FROM users JOIN pages ON users.idpade = pages.id JOIN categories ON pages.idcategory = categories.id WHERE users.id = 1