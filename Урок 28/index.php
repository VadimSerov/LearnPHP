<!DOCTYPE html>
<html lang="ru">
 <head>
  <title>PHP-скрипт 28</title>
  <meta charset="utf-8">
 </head>
 <body>
<?php
//кодировки utf8
$str = 'html css';
echo $str[0] . '<br>' ;
echo "\u{0404}" . '<br>' ;

echo "{$str[5]}" . '<br>' ;
$str2 = "Привет ";
echo  '<br>' ;
// mbstring - в файле php_ini_development раскоментировать строку extension=mbstring 
// и строку extension_dir = "ext"

/*
mb_check_encoding — Проверяет, что кодировка строк выбрана верно
mb_chr — Возвращает символ по значению кодовой точки Unicode
mb_convert_case — Производит смену регистра символов в строке
mb_convert_encoding — Преобразует кодировку символов
mb_convert_kana — Преобразование кодировок "kana" из одной в другую ("zen-kaku", "han-kaku" и другие)
mb_convert_variables — Преобразует символы в переменной(-ых) из одной кодировки в другую
mb_decode_mimeheader — Декодирует строку в MIME-заголовке
mb_decode_numericentity — Декодирует ссылку на числовую строку HTML в символ
mb_detect_encoding — Определение кодировки символов
mb_detect_order — Установка/получение списка кодировок для механизмов определения кодировки
mb_encode_mimeheader — Кодирует строку для MIME-заголовка
mb_encode_numericentity — Кодирует символ в числовую HTML-ссылку
mb_encoding_aliases — Получает псевдонимы известного типа кодировки
mb_ereg_match — Совпадение с регулярным выражением для многобайтовой строки
mb_ereg_replace_callback — Выполняет поиск и замену по регулярному выражению с поддержкой многобайтовых кодировок используя callback-функцию
mb_ereg_replace — Осуществляет замену по регулярному выражению с поддержкой многобайтовых кодировок
mb_ereg_search_getpos — Возвращает начальную позицию следующего совпадения с регулярным выражением
mb_ereg_search_getregs — Выводит результат последнего сравнения с регулярным выражением
mb_ereg_search_init — Инициализация поиска соответствий регулярному выражению многобайтовой строкой и текстом регулярного выражения
mb_ereg_search_pos — Возвращает позицию и длину совпавшего с регулярным выражением участка многобайтовой строки
mb_ereg_search_regs — Возвращает совпавшую с регулярным выражением часть строки
mb_ereg_search_setpos — Задаёт начальную позицию в строке, с которой начнётся поиск соответствий регулярному выражению
mb_ereg_search — Поиск соответствий регулярному выражению для строк в многобайтовых кодировках
mb_ereg — Совпадение с регулярным выражением с поддержкой многобайтовых кодировок
mb_eregi_replace — Осуществляет замену по регулярному выражению с поддержкой многобайтовых символов без учёта регистра
mb_eregi — Поиск соответствий регулярному выражению с поддержкой многобайтовых символов без учёта регистра
mb_get_info — Получает внутренние настройки mbstring
mb_http_input — Определение кодировки символов входных данных HTTP-запроса
mb_http_output — Установка/получение кодировки символов вывода HTTP
mb_internal_encoding — Установка/получение внутренней кодировки скрипта
mb_language — Устанавливает/получает текущий язык
mb_list_encodings — Возвращает массив всех поддерживаемых кодировок
mb_ord — Получает кодовую точку символа Unicode
mb_output_handler — Callback-функция, преобразующая кодировку символов в выходном буфере
mb_parse_str — Разбор данных запросов GET/POST/COOKIE и установка значений глобальных переменных
mb_preferred_mime_name — Получение набора символов MIME
mb_regex_encoding — Устанавливает/получает текущую кодировку для многобайтового регулярного выражения
mb_regex_set_options — Установка/получение значений по умолчанию для настроек функций mbregex
mb_scrub — Описание
mb_send_mail — Отправка закодированного сообщения
mb_split — Разделение строк в многобайтных кодировках, используя регулярное выражение
mb_str_split — Если задана многобайтовая строка возвращает массив символов
mb_strcut — Получение части строки
mb_strimwidth — Получение строки, обрезанной до заданного размера
mb_stripos — Регистронезависимый поиск позиции первого вхождения одной строки в другую
mb_stristr — Находит первое вхождение подстроки в строке без учёта регистра
mb_strlen — Получает длину строки
mb_strpos — Поиск позиции первого вхождения одной строки в другую
mb_strrchr — Поиск последнего вхождения одной строки в другую
mb_strrichr — Поиск последнего вхождения одной строки в другую, нечувствительный к регистру
mb_strripos — Поиск последнего вхождения одной строки в другую, нечувствительный к регистру
mb_strrpos — Поиск позиции последнего вхождения одной строки в другую
mb_strstr — Находит первое вхождение подстроки в строке
mb_strtolower — Приведение строки к нижнему регистру
mb_strtoupper — Приведение строки к верхнему регистру
mb_strwidth — Возвращает ширину строки
mb_substitute_character — Установить/получить символ замены
mb_substr_count — Возвращает количество вхождений подстроки
mb_substr — Возвращает часть строки

*/
?>
 </body>
</html>
