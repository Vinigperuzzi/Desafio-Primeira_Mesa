# Contact List (Desafio-Primeira_Mesa)
Desafio feito pela empresa Primeira Mesa para seleção de estagiário em novembro de 2023

---

##How to run:


You must have an PHP environment such as Laragon, or Xammp, or even up some container with Docker.<br>

Since you already have this environment, you have to configure your database connections with these information:

Create a database with the name: contact_list
And set the collate as utf8mb4_unicode_ci


Then you have to clone this repo to any folder you like, and then just run the command

>php artisan migrate

This command will create the table of contacts in your database.

With these steps already done, you just have to access the user interface of application that is at the local host in:

>http://localhost/Contact-List/public/contacts

And then is just navigate between the screens of the system.


---

Please, consider that the time for doing this software was very strict, and the css may not be the most beautiful, or the layout may not be the most delightful, but the folder organization, the follow of the conventions of MVC, and the structure of the project was taken seriously.

You may have some issues in trying to run this project in your local machine, cause it may have a lot of config the came together with the project creation with composer, such as
Operating system, file management and other stuff like that. But here i compromise to refactor this code to a docker container, so it will be much more easy to run and experiment in your own system.