# phpunit/dbunit CsvDataSet Examples

Examples showing differences between version 2.0 and 3.0 of dbunit in importing CSV files as innitial data sets.

dbunit in version 3.0 switched to using namespaces and that allowed for much shorter class names, but this is not well documented in official phpunit documentation. Official manual of phpunit for version >6 in chapter 8. *Database Testing* still shows examples partially based on dbunit 2.0 what makes them broken and useless.

Trying to install dbunit 2.0 with phpunit >6 will result in broken dependencies. So either you stick to old phpunit 5.7 or switch to not so well documented dbunit 3.0

To run examples download and run composer in each `dbTest2` and `dbTest3` folder separately and then run tests. There is also test database dump included. It will work for both examples.

However CSV is not best data set choice but its simplicity makes it perfect for learning purposes. I hope with this examples no one get stuck as I did on this issue.
