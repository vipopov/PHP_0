<?php
include 'config.php';
// test url is crawler.salomoon.info
//include 'engine/curl.php';
/*
* Встановити графік, якого має дотримуватися робот. Графік погодинний
* Робот викликається через крон, при успішному відвідуванні сайту записується
* відповідна графа.
* Якщо кількість виконаних завдань за поточний чень і годину співпадає чи
* більше - то більше відвідування не виконується
*
* Таблиця _timesheet
* id / project / hour / visits_requested
*
* hours can be: 0 = 00-01 AM, ... , 23 = 23-00 PM
*
* Таблиця _urls
* id / project / project_url
*
* Таблиця _visits
* id / project / hour / visits_done / date
*/
