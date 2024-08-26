PHP developer úloha
=================== 

Úlohou je vytvorenie aplikácie (v Nette), ktorá bude umožňovať:

- jednoduchú správu zvieratiek v obchode s domácimi miláčikmi
- ku každému zvieratku budú evidované informácie ako meno, kategória, obrázok, status
- cez webové rozhranie (pomocou API volaní definovaných na https://petstore3.swagger.io) bude možné pridávať, editovať, vypisovať zoznam podľa statusu a mazať zvieratko
- všetky dáta o zvieratkách budú uložené v XML súbore, ktorého štruktúru si musíte navrhnúť
- pri programovaní využite OOP
- všetko ostatné, čo použijete je na Vás

Ďalšie podúlohy, ktoré kandidátom určite pomôžu:

- aplikáciu napíšte tak, aby bola čo najjednoduchšie rozšíriteľná o ďalšie atribúty evidovné pri zvieratkách (napríklad vek zvieratka) - k vypracovaniu napíšte krátky popis ako a kde v aplikácií je potrebné urobiť zmeny, aby bolo možné pridať nový atribút
- nie je nutné, aby aplikácia obsahovala nejakú premyslenú grafiku
- k úlohe priložte sprievodný text s jednoduchým popisom riešenia - ako a prečo ste sa rozhodli spraviť veci tak, ako ste ich spravili

===================

Nette Web Project
=================

Welcome to the Nette Web Project! This is a basic skeleton application built using
[Nette](https://nette.org), ideal for kick-starting your new web projects.

Nette is a renowned PHP web development framework, celebrated for its user-friendliness,
robust security, and outstanding performance. It's among the safest choices
for PHP frameworks out there.

If Nette helps you, consider supporting it by [making a donation](https://nette.org/donate).
Thank you for your generosity!


Requirements
------------

This Web Project is compatible with Nette 3.2 and requires PHP 8.1.


Installation
------------

To install the Web Project, Composer is the recommended tool. If you're new to Composer,
follow [these instructions](https://doc.nette.org/composer). Then, run:

	composer create-project nette/web-project path/to/install
	cd path/to/install

Ensure the `temp/` and `log/` directories are writable.


Web Server Setup
----------------

To quickly dive in, use PHP's built-in server:

	php -S localhost:8000 -t www

Then, open `http://localhost:8000` in your browser to view the welcome page.

For Apache or Nginx users, configure a virtual host pointing to your project's `www/` directory.

**Important Note:** Ensure `app/`, `config/`, `log/`, and `temp/` directories are not web-accessible.
Refer to [security warning](https://nette.org/security-warning) for more details.


Minimal Skeleton
----------------

For demonstrating issues or similar tasks, rather than starting a new project, use
this [minimal skeleton](https://github.com/nette/web-project/tree/minimal).
