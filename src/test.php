<?php

function test(): string
{
    return sprintf("<center>I'm test display from: <strong>%s</strong></center><hr>", __FILE__);
}


function mariadb()
{
    new PDO('mysql:host=mariadb;dbname=test;port=3306', 'testuser', 'testpass');
    return "<center>MariaDB connection OK</center><hr>";
}

function postgres()
{
    new PDO('pgsql:host=postgres;dbname=test;port=5432', 'testuser', 'testpass');
    return "<center>PostgreSQL connection OK</center><hr>";
}
