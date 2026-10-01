# BD VulnSite

**ВНИМАНИЕ:** этот проект содержит намеренные уязвимости.
Запускайте только в изолированной среде. Автор не несёт ответственности
за любой ущерб.

## Уязвимости
| Уязвимость | Файл | Параметр |
|---|---|---|
| SQL Injection (auth bypass) | login.php | username/password |
| SQL Injection (union) | comments.php | search |
| XSS (reflected) | comments.php | search |
| XSS (stored) | comments.php | name/comment |
| Command Injection | monitor.php | type |
| LFI | monitor.php | page |
| CSRF | comments.php | POST |

## Быстрый старт (Docker)
```bash
docker compose up -d
# открыть http://localhost:8080

Создан для базового изучения Web уязвимостей.

Системные требования
--------------------
Для установки требуется:
Apache
PHP
MySQL/MariaDB

Установка
---------
1) Скопировать файлы в директорию Web сервера
2) Создать базу данных
3) Указать настройки базы данных в файле config.php
4) Выпонить скрипт install.php для заполнения базы данных

Что дальше
----------
Посетите наш сайт, посвященный обучению тестированию на проникновение.

Команда сайта BlackDiver.Net

[https://BlackDiver.Net](https://blackdiver.net)
