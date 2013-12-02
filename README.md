github-api-data
===============

Using CakePHP 2.x to build a web app to do data extraction on GitHub API


To run the data extraction in your localhost
============================================

 1. Please setup your own local webserver and mysql database
   - a good choice is to install xampp if you have no idea how to go about doing it in Windows
   - another good choice is mamp in macbook os x
 2. You can either use git to download the source code or download the zip file.
   - if you use git clone:
     ```
     git clone git@github.com:simkimsia/github-api-data.git
     ```
   - if you want to download the zip file:
   Go to https://github.com/simkimsia/github-api-data and download the zip file.
 3. Create a `database.php` inside `app/Config/database.php` by copying from database.php.default. Change the login and password accordingly
 4. Do the same for `github.php` in the same folder. Once again, please change your login and password accordingly.
 5. Restore the database from the .sql file inside the `data` folder
 6. Visit the relative url path from your domain `/searches/store/1`. This will download all the repositories that are relevant to the searched keyword `php` and use the language `php`. The code is in the `app/Model/Search`.
 7. Visit the relative url path from your domain `/repositories/store_contributors`. **You need to run this several times and each time change the number in line 15 of the app/Controller/RepositoryController**. This is because you may get timed out trying to retrieve so many information. Each time you re-run, just look at the `contributors` datatable and re-start from the largest `repository_id` your app stops at.


To assemble the edges table
===========================

Inside your favorite MySQL editor, just run the 2 stored procedures

    call update_repository_count();
    call create_undirected_edges();

This is assuming that you have at least completed the data extraction part from above.

To prepare the csv file
===========================

 1. Inside your favorite MySQL editor, just export the two tables repositories and undirected_edges one at a time to csv file format.
 2. Open the csv files using MS Excel and remove any columns. In my case, I only keep the id and full_name columns inside repositories.csv and rename the column header of full_name to Label
 3. As for undirected_edges.csv, I only keep the source and target columns.

This is assuming that you have at least completed the data extraction and assembly part from above.

To simply use the extracted data in Gephi
=========================================

 1. Inside the data folder, I have the .sql file and the 2 .csv files
 2. You can directly use the repositories.csv as the nodes table.
 3. You can load the undirected_edges.csv as the edges table.

You can choose the complete the above parts or use the data I have already prepared for you in the `data` folder.