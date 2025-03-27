# Assignment One - U2254417

## Introduction
The scenario chosen for this assignment is in effect a timetable of which bands are set to perform at Download Festival in 2024. The database is seeded with the final 3 bands, of each stage, which have played each day over the duration of the festival. The database contains attributes for the band name, the date, the stage they will be performing on, the start time and the end time. 

## Functionality
### CRUD and use of Laravel framework
The project contains full CRUD functionality. A user can successfully create, read, update and delete a band from the site. Basic components of the Laravel framework were used and are reflected in the file structure of the project. This project used a single table database which was in 1NF. In `create.blade.php` and `edit.blade.php`, HTML input types were used.

### Search
A search facility was implemented on the homepage of the site, to allow a user to search for a specific band. This was placed above the list of bands in order to be easily accessible. The input box is in `index.blade.php` and the query for the search is in `BandController.php`. In the latter file, if the search request is empty (i.e. there is no search) then all the bands will be send to the view, whereas if there is a search request then only those that meet the request will be returned. The search box and button are formatted generally as input and button in `style.css`. 

### Pagination
In order to better present the data output on the homepage, pagination was implemented in order to split the list into multiple pages. This is done by using Laravel's built-in `simplePaginate()` function which can limit the amount of values returned in the SQL function when retrieving data from the table. SimplePaginate was used as opposed to Paginate as there are only a certain number of bands which will ever play. The size of the dataset will only ever be so big, and with the inclusion of filters in the next assignment this is even more relevant. It is also more efficient.

### CSS
Basic CSS formatting was included in order to improve readability and organisation. A navbar was included at the top of the page to allow for easy switching between pages. The navbar is retained regardless of which page the user is on. A colour scheme was added and is consistent through the site. The sizes of the input fields were amended and aligned, as well as colour added. Hyperlink attributes were slightly changed, and the colour of buttons when hovering over them. 

### Migrations and Seeders
A migration for creating the bands table is included and is complemented by a seeder which features 36 rows that will be inserted into the table. Eloquent sets the primary key as id, which makes rows (bands) easily findable. A band name could also not be used as the primary key as there is the possibility that they may play more than once.