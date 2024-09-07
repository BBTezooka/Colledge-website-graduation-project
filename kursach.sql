-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 07 2024 г., 17:39
-- Версия сервера: 5.7.39
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kursach`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Abiturient`
--

CREATE TABLE `Abiturient` (
  `ID_Abiturient` int(11) NOT NULL,
  `fio_a` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adres_a` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomer_a` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_a` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dop_a` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sr_bal` float NOT NULL,
  `fio_m` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adres_m` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesto_m` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dolzh_m` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomer_m` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_m` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fio_o` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adres_o` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesto_o` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dolzh_o` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomer_o` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_o` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_d` int(11) DEFAULT NULL,
  `ID_Specialnost` int(11) DEFAULT NULL,
  `data_podach` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Abiturient`
--

INSERT INTO `Abiturient` (`ID_Abiturient`, `fio_a`, `adres_a`, `nomer_a`, `email_a`, `dop_a`, `sr_bal`, `fio_m`, `adres_m`, `mesto_m`, `dolzh_m`, `nomer_m`, `email_m`, `fio_o`, `adres_o`, `mesto_o`, `dolzh_o`, `nomer_o`, `email_o`, `id_d`, `ID_Specialnost`, `data_podach`) VALUES
(33, 'Дмитрий Михайлович Позигун', 'Литовский Вал 43 кв.5', '+79210085050', 'dima_pozigun@mail.ru', 'гитара, дизайн', 4.65, 'Юлия Алексеевна Позигун', 'Литовский Вал 43 кв.5', 'Лазерная медицина', 'Админ', '+79212622022', 'test_mom@mail.ru', 'Михаил Алексеевич Позигун', 'Литовский Вал 43 кв.5', 'Юринад', 'Торговый агент', '+79210085050', 'test_dad@mail.ru', 1, 4, '2023-10-09 20:52:55'),
(39, 'Баженов Артем Сергеевич', 'Philipps st', '89953262034', 'artem2004bazhenov@mail.ru', 'теннис, игра на барабанах, дотка 2', 4.63, 'пример', 'Philipps st', 'пример', 'примерище', '88005553535', 'пример@mail.ru', 'пример', 'Philipps st', 'пример', 'пример', '88005553535', 'пример@gmail.com', 1, 4, '2024-03-04 11:58:33'),
(40, 'Топал Анна Александровна', 'Philipps st', '88005553535', 'topalgromko@mail.ru', 'зефир', 4.75, 'пример', 'Philipps st', 'пример', 'примерище', '88005553535', 'пример@mail.ru', 'пример', 'Philipps st', 'пример', 'пример', '88005553535', 'пример@mail.ru', 1, 4, '2024-03-05 12:31:23'),
(41, 'Алексеенко Евгений Михайлович', 'Суворова 43а', '89005613309', 'e.alekseenko@gmail.com', 'качок', 4.32, 'Пример', 'пример', 'пример', 'пример', 'пример', 'пример', 'пример', 'пример', 'пример', 'пример', '[value-18]', 'пример', 2, 1, '2024-05-02 21:00:00'),
(42, 'Жук Максим Викторович', 'Суворова 43а', '89005613309', 'e.alekseenko@gmail.com', 'качок', 4.61, 'Пример', 'пример', 'пример', 'пример', 'пример', 'пример', 'пример', 'пример', 'пример', 'пример', '[value-18]', 'пример', 1, 1, '2024-05-02 21:00:00'),
(43, 'Я Устал Тестить', 'Суворова 43а', '89005613309', 'e.alekseenko@gmail.com', 'качок', 4.2, 'Пример', 'пример', 'пример', 'пример', 'пример', 'пример', 'пример', 'пример', 'пример', 'пример', '[value-18]', 'пример', 2, 1, '2024-05-02 21:00:00'),
(44, 'Зубастик Егор Витальевич', 'Суворова 43а', '89005613309', 'e.alekseenko@gmail.com', 'рыбка буль буль', 3.78, 'Пример', 'пример', 'пример', 'пример', 'пример', 'пример', 'пример', 'пример', 'пример', 'пример', 'пример', 'пример', 2, 1, '2024-05-02 21:00:00'),
(45, 'Мороз Павел Сергеевич', 'Суворова 43а', '89005613309', 'e.alekseenko@gmail.com', 'Фортнайтер', 4.6, 'Пример', 'пример', 'пример', 'пример', 'пример', 'пример', 'пример', 'пример', 'пример', 'пример', 'пример', 'пример', 1, 1, '2024-05-02 21:00:00'),
(46, 'Шепелев Юрий Андреевич', 'улица мистера робота 2а', '89005553535', 'юрка228@gmail.com', 'стоять на зарядке', 4.94, 'пример', 'Philipps st', 'пример', 'примерище', '88005553535', 'пример@mail.ru', 'пример', 'Philipps st', 'пример', 'пример', '88005553535', 'пример@mail.ru', 1, 2, '2024-03-06 11:41:42'),
(47, 'Тестиков Тестикул Тестикувич', 'Philipps st', '89005553535', 'тест228@gmail.com', 'стоять на зарядке', 3.35, 'пример', 'Philipps st', 'пример', 'примерище', '88005553535', 'пример@mail.ru', 'пример', 'Philipps st', 'пример', 'пример', '88005553535', 'пример@mail.ru', 2, 2, '2024-03-06 12:01:38'),
(48, 'Шкенева Ульяна Александровна', 'пос. Романово', '88005553535', 'shkenyaa@bk.ru', 'играю на бас-гитаре', 5, 'пример', 'Philipps st', 'пример', 'примерище', '88005553535', 'пример@mail.ru', 'пример', 'Philipps st', 'пример', 'пример', '88005553535', 'пример@mail.ru', 1, 4, '2024-05-22 13:44:46'),
(49, 'Андрюха', 'Philipps st', '89953262034', 'тест228@gmail.com', 'стоять на зарядке', 4.63, 'пример', 'Philipps st', 'пример', 'примерище', '88005553535', 'пример@mail.ru', 'пример', 'Philipps st', 'пример', 'пример', '88005553535', 'пример@mail.ru', 1, 9, '2024-05-22 13:48:47');

-- --------------------------------------------------------

--
-- Структура таблицы `Departments`
--

CREATE TABLE `Departments` (
  `ID_Departments` int(11) NOT NULL,
  `Name_Departments` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Departments`
--

INSERT INTO `Departments` (`ID_Departments`, `Name_Departments`) VALUES
(1, 'Судоводительское отделение'),
(2, 'Судомеханическое отделение'),
(3, 'Радиотехническое отделение'),
(4, 'Отделение информационных технологий'),
(5, 'Механико-технологическое отделение'),
(6, 'Автомеханическое отделение');

-- --------------------------------------------------------

--
-- Структура таблицы `Dogovor`
--

CREATE TABLE `Dogovor` (
  `id_d` int(11) NOT NULL,
  `type_d` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Dogovor`
--

INSERT INTO `Dogovor` (`id_d`, `type_d`) VALUES
(1, 'Бюджет'),
(2, 'Коммерция');

-- --------------------------------------------------------

--
-- Структура таблицы `role`
--

CREATE TABLE `role` (
  `idRole` int(11) NOT NULL,
  `rolename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `role`
--

INSERT INTO `role` (`idRole`, `rolename`) VALUES
(1, 'Администратор'),
(2, 'Абитуриент'),
(3, 'Оператор');

-- --------------------------------------------------------

--
-- Структура таблицы `Specialnost`
--

CREATE TABLE `Specialnost` (
  `ID_Specialnost` int(11) NOT NULL,
  `Name_Specialnost` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ID_Departments` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Specialnost`
--

INSERT INTO `Specialnost` (`ID_Specialnost`, `Name_Specialnost`, `ID_Departments`) VALUES
(1, 'Судовождение', 1),
(2, 'Эксплуатация судовых энергетических установок', 2),
(3, 'Эксплуатация оборудования радиосвязи и электрорадионавигации судов', 3),
(4, 'Информационные системы (по отраслям)', 4),
(5, 'Монтаж и техническая эксплуатация промышленного оборудования (по отраслям)', 5),
(9, 'Администрирование баз данных', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `abit` varchar(255) NOT NULL,
  `idRole` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `abit`, `idRole`) VALUES
(1, 'admin', 'admin1', 'Петр Олегович', 1),
(2, 'test', 'test1', 'Тестовый чел', 1),
(6, 'aboba', 'abobus', 'Жмышенко Валерий Альбертович', 2),
(10, 'biba', 'boba', 'Бакулин Александр Игоревич', 2),
(8, 'Dehumanizer', 'ssss', 'Дмитрий Михайлович Позигун', 2),
(11, 'xxx', 'xxx', 'xxx', 2),
(12, 'user', 'user', 'Тестировщик', 2),
(13, 'lisa', 'lisichka', 'Шкенева Ульяна Александровна', 2),
(14, 'hoodwink', 'hoodwink', 'Баженов Артем Сергеевич', 3);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Abiturient`
--
ALTER TABLE `Abiturient`
  ADD PRIMARY KEY (`ID_Abiturient`),
  ADD KEY `abitdogovor_ibfk_1` (`id_d`),
  ADD KEY `abitdep_ibfk_1` (`ID_Specialnost`);

--
-- Индексы таблицы `Departments`
--
ALTER TABLE `Departments`
  ADD PRIMARY KEY (`ID_Departments`);

--
-- Индексы таблицы `Dogovor`
--
ALTER TABLE `Dogovor`
  ADD PRIMARY KEY (`id_d`);

--
-- Индексы таблицы `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idRole`);

--
-- Индексы таблицы `Specialnost`
--
ALTER TABLE `Specialnost`
  ADD PRIMARY KEY (`ID_Specialnost`),
  ADD KEY `Specialnost` (`ID_Departments`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `fk_role` (`idRole`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Abiturient`
--
ALTER TABLE `Abiturient`
  MODIFY `ID_Abiturient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT для таблицы `Departments`
--
ALTER TABLE `Departments`
  MODIFY `ID_Departments` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `Dogovor`
--
ALTER TABLE `Dogovor`
  MODIFY `id_d` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `role`
--
ALTER TABLE `role`
  MODIFY `idRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `Specialnost`
--
ALTER TABLE `Specialnost`
  MODIFY `ID_Specialnost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Abiturient`
--
ALTER TABLE `Abiturient`
  ADD CONSTRAINT `abitdep_ibfk_1` FOREIGN KEY (`ID_Specialnost`) REFERENCES `Specialnost` (`ID_Specialnost`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `abitdogovor_ibfk_1` FOREIGN KEY (`id_d`) REFERENCES `Dogovor` (`id_d`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `Specialnost`
--
ALTER TABLE `Specialnost`
  ADD CONSTRAINT `Specialnost` FOREIGN KEY (`ID_Departments`) REFERENCES `Departments` (`ID_Departments`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
