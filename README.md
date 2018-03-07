# php-dmarc - A simple DMARC report parser for PHP

php-dmarc is a small PHP class to parse [DMARC](http://dmarc.org) aggregate reports and put the data in a MySQL database for easy analysis. The idea is that when recipients start supporting delivery of reports using HTTP, then this can form part of an endpoint that receives and automatically parses the reports.

## Usage

- Set up your database. `tables.sql` contains the SQL needed to set up the tables.
- Use the `src\DmarcParser` class to parse reports - see index.php
- You can load either XML files or ZIP files. It is assumed that each ZIP file contains only one report.

The `parse()` function returns `false` if it encounters any errors while parsing the data (`true` otherwise). To see what the errors were, use the `get_errors()` method, which will return an array of error messages.

Forked from http://packagist.org/packages/solaris/php-dmarc
