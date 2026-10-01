<?php
// BD VulnSite
// ==============
// Тестовый сайт с уязвимостями:
// SQL Injection
// Cross-Site Scripting (XSS)
// Command Injection
// Local File Include (LFI)
// раскрытие данных
// Сross Site Request Forgery (CSRF)
//
// Тестирование на проникновение - это просто.
// https://BlackDiver.Net
//
// ВНИМАНИЕ: этот файл содержит намеренно небезопасные настройки.
// Проект предназначен ТОЛЬКО для локального обучения.
//
// ***Настройки базы данных***
// Значения читаются из переменных окружения (Docker),
// с fallback на локальные значения для запуска без Docker.

$db_server   = getenv('DB_HOST')     ?: '127.0.0.1';
$db_user     = getenv('DB_USER')     ?: 'admin';
$db_password = getenv('DB_PASSWORD') ?: 'MegaPassword1!';
$db_db       = getenv('DB_NAME')     ?: 'portal';

// В PHP 8.1+ mysqli по умолчанию кидает исключения при ошибках.
// Для учебного проекта с намеренными уязвимостями это мешает:
// SQL-инъекция должна приводить к ошибке SQL, а не к фаталу PHP.
mysqli_report(MYSQLI_REPORT_OFF);
?>