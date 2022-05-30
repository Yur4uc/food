<?php
$_POST = json_decode(file_get_contents("php://input"), true);
echo var_dump($_POST); // команда бере інформацію яка приходить від клієнта та перетворює у строку