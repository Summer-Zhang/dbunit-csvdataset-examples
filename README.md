### phpunit/dbunit CsvDataSet Examples

Examples showing differences between version 2.0 and 3.0 of dbunit in importing CSV files as initial data sets. ~~And explaining why you get `Error: Class 'PHPUnit_Extensions_Database_DataSet_CsvDataSet' not found`, even if you exactly copied phpunit manual example~~. [ed. 2017-04-04] This last sentence is no longer valid as phpunit documentation (for ver. 6.\*), was [updated](https://github.com/sebastianbergmann/phpunit-documentation/pull/428) with new working examples. The point is not to use class names from dbunit 2.\* (phpunit 5.\*) in dbunit 3.\* (phpunit 6.\*) based tests.

dbunit in version 3.0 switched to using namespaces and that allowed for much shorter class names, but this ~~is~~ was [(until 2017-04-04)](https://github.com/sebastianbergmann/phpunit-documentation/pull/428) not well documented in official phpunit documentation. ~~Official manual of phpunit for version >6 in *Chapter 8. Database Testing* still shows examples partially based on dbunit 2.0 what makes them broken and useless.~~

Trying to install dbunit 2.0 with phpunit >=6 will result in broken dependencies. So either you stick to old phpunit 5.7 or switch to ~~not so well documented~~ dbunit 3.0

To run examples download and run composer in each `dbTest2` and `dbTest3` folder separately and then run tests. There is also test database dump included. It will work for both examples. Experiment by copying `composer.json` file from `dbTest3` to `dbTest2`, updating composer configuration and runing test again.

However CSV is not best data set choice but its simplicity makes it perfect for learning purposes. I hope with this examples no one get stuck as I did on this issue.
