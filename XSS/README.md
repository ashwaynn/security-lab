# XSS Attack

## Application
Simple Create, Read, Update, Delete (CRUD) in PHP & MySQL
========
A simple and basic system to add and view student records using PHP and MySQL.
Import database.sql in the DB and edit database credentials in config.php

## XSS Attack
Inject Javascript in any input fields while adding new entry.
Example input for name: `<script type="text/javascript">alert('XSS!!');</script>`
