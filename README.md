# README

So bringst du es zum laufen:

- PHP composer wird benötigt https://getcomposer.org/
- lokale MySQL Datenbank starten
- neue DB anlegen
- in der `.env` folgende Einträge an die lokale DB anpassen:
```
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nadja
    DB_USERNAME=root
    DB_PASSWORD=
```
- `composer install` im Verzeichnis der App ausführen
- `php artisan migrate` im Verzeichnis der App ausführen (sollte das DB Schema in der lokalen DB aufsetzen)
- `php artisan serve` um die Applikation auf einem lokalen Server zu starten
- Im Browser http://127.0.0.1:8000/categories aufrufen 
- Viel Spass!

