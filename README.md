Read CSV file and write data to sqlite DB  
========================

Followed by https://www.codereviewvideos.com/course/how-to-import-a-csv-in-symfony tutorial

  * [**How To Import A CSV in Symfony**][1] - Adds several enhancements, including
    template and routing annotation capability

What's inside?
--------------
* sqlite data storage
* Symfony command line application
* Uses league/csv library from http://csv.thephpleague.com/ 
(
composer require league/csv
use League\Csv\Reader;
)


The Symfony Standard Edition is configured with the following defaults:

1. php bin/console doctrine:database:drop --force 
&& php bin/console doctrine:database:create 
&& php bin/console doctrine:schema:update --force
2. php bin/console csv:import

  * [**How To Import A CSV in Symfony**][1] - Code Review Videos

