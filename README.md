# CRUD_Basics_StudioWeb
 CRUD code example using MAMP PHP and MySQLi

 This project is demonstrating CRUD (Create, Read, Update, and Delete) Basics

The software I am using for this project are MAMP 4.2.0.23973 / PHP 7.4.1 / APACHE 2.2.31 / MySQLI 7.4.1

I am taking this class at school.studioweb.com

These files are installed at C:\MAMP\htdocs\CRUD_Basics_StudioWeb on my machine.  I am running a Windows PC using Microsoft Windows Professional 64 Bit.

As of today 11/28/2020 I am stuck as I am getting an error which I am unable to correct.

Here are the errors being generated:

When connect-db.php is run from http://localhost//CRUD_Basics_StudioWeb/connect-db.php
    
    Warning: mysqli::__construct(): The server requested authentication method unknown to the client [caching_sha2_password] in C:\MAMP\htdocs\CRUD_Basics_StudioWeb\connect-db.php on line 15

    Warning: mysqli::__construct(): (HY000/2054): The server requested authentication method unknown to the client in C:\MAMP\htdocs\CRUD_Basics_StudioWeb\connect-db.php on line 15

When view.php is run from http://localhost//CRUD_Basics_StudioWeb/view.php

    View Records

    Warning: mysqli::__construct(): The server requested authentication method unknown to the client [caching_sha2_password] in C:\MAMP\htdocs\CRUD_Basics_StudioWeb\connect-db.php on line 15

    Warning: mysqli::__construct(): (HY000/2054): The server requested authentication method unknown to the client in C:\MAMP\htdocs\CRUD_Basics_StudioWeb\connect-db.php on line 15

    Warning: mysqli::query(): Couldn't fetch mysqli in C:\MAMP\htdocs\CRUD_Basics_StudioWeb\view.php on line 17

    Warning: main(): Couldn't fetch mysqli in C:\MAMP\htdocs\CRUD_Basics_StudioWeb\view.php on line 41
    Error:
    Warning: mysqli::close(): Couldn't fetch mysqli in C:\MAMP\htdocs\CRUD_Basics_StudioWeb\view.php on line 47

Any help would be appreciated.




