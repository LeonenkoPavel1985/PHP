CREATE DATABASE PhpWorkersDb;
SELECT * FROM sys.databases;

USE PhpWorkersDb;
CREATE TABLE workers
(
	id INT NOT NULL PRIMARY KEY IDENTITY,
	name NVARCHAR (100) NOT NULL,
	age INT NOT NULL,
	salary INT NOT NULL,
)

SELECT * FROM INFORMATION_SCHEMA.TABLES;

USE PhpWorkersDb;
INSERT dbo.workers(name, age, salary)
VALUES(N'Дима', N'23', N'400')
INSERT dbo.workers(name, age, salary)
VALUES(N'Петя', N'25', N'500')
INSERT dbo.workers(name, age, salary)
VALUES(N'Вася', N'23', N'500')
INSERT dbo.workers(name, age, salary)
VALUES(N'Коля', N'30', N'1000')
INSERT dbo.workers(name, age, salary)
VALUES(N'Иван', N'27', N'500')
INSERT dbo.workers(name, age, salary)
VALUES(N'Кирилл', N'28', N'1000')

SELECT * FROM dbo.workers;