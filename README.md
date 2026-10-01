# BD VulnSite

Учебный сайт с намеренными уязвимостями для изучения веб-безопасности.

## ВНИМАНИЕ

Проект содержит намеренные уязвимости и предназначен **только для локального обучения** в изолированной среде. Не выкладывайте его в публичный доступ и не запускайте на серверах, доступных из интернета. Автор не несёт ответственности за любой ущерб, вызванный использованием этого кода.

## Уязвимости

| Уязвимость | Файл | Параметр |
|---|---|---|
| SQL Injection (обход аутентификации) | login.php | username, password |
| SQL Injection (UNION) | comments.php | search |
| Reflected XSS | comments.php | search |
| Stored XSS | comments.php | name, comment |
| Command Injection | monitor.php | type |
| Local File Inclusion (LFI) | monitor.php | page |
| CSRF | comments.php | POST |
| Раскрытие данных | login.php | сообщения об ошибках |

## Требования

- Docker
- Docker Compose

Для запуска без Docker:

- Apache
- PHP 8.0+ с расширением mysqli
- MySQL 5.7+ или MariaDB 10.3+

## Быстрый старт (Docker)

1. Клонировать репозиторий:
