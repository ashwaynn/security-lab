# XSS Attack

Get to know about XSS in this [blog post]().

## Application
Simple Create, Read in PHP & MySQL
========
A simple and basic system to add and view student records using PHP and MySQL.

## Run
Copy the files to htdocs.
Import database.sql in the DB and edit database credentials in config.php

This will create a small system to add and view student records.

## XSS Attack
Inject Javascript in any input fields while adding new entry.
Example input for name: `<script type="text/javascript">alert('XSS!!');</script>`
