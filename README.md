# sample-xampp-project

sample project on xampp

## Make project accessible on same network

...

## Database setup

Set Up the Database in phpMyAdmin

1. Open phpMyAdmin: Go to http://localhost/phpmyadmin/.
2. Create a new database:
   - Click on New in the left sidebar.
   - Enter the database name (e.g., counter_db) and click Create.
3. Create a new table:
   - Select the counter_db database.
   - Click on Create table.
   - Enter the table name (e.g., counter) and number of columns (e.g., 2), then click Go.
   - Define the columns:
     - id (INT, primary key, auto_increment)
     - count (INT)
   - Click Save.

## Errors from Event Viewer

### Got error 176 when reading table '.\mysql\db'

https://stackoverflow.com/questions/60864367/1030-got-error-176-read-page-with-wrong-checksum-from-storage-engine-aria
