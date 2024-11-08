<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About the Project
The Laravel Library is an example project that demonstrates how to develop applications using the Laravel 11 framework.

## Models
Based on today practice, the models are:

- **Books**: Consists of `title`, `author`, `publisher`, and `publicationYear` attributes.
- **Journals**: Consists of `title`, `author`, `publisher`, and `publicationYear` attributes.
- **CDs**: Consists of `title`, `producer`, `genre`, `year`, `duration`, and `studio` attributes.
- **FinalYearProjects**: Consists of `title`, `author`, `student_id`, `department`, `year`, `abstract`, `status`, and `grade` attributes.
- **NewsPapers**: Consists of `title`, `publisher`, `publicationDate`, `editor`, `language`, and `pageCount` attributes.

## View
- **Catalogue**: Displays all available catalog items with category filters and sorting options in ascending or descending order.
- **Books Table**: Displays all books in a tabular format.
- **CDs Table**: Displays all CDs in a tabular format.
- **Final Year Projects Table**: Displays all final year projects in a tabular format.
- **Journals Table**: Displays all journals in a tabular format.
- **Newspapers Table**: Displays all newspapers in a tabular format.

## Controller
- **CatalogueController**: Manages the display of all catalog items, applies category filters, and handles sorting in ascending or descending order.
- **BooksController**: Manages the retrieval and display of all books in a table format.
- **CDsController**: Manages the retrieval and display of all CDs in a table format.
- **FinalYearProjectsController**: Manages the retrieval and display of all final year projects in a table format.
- **JournalsController**: Manages the retrieval and display of all journals in a table format.
- **NewspapersController**: Manages the retrieval and display of all newspapers in a table format.

## Seeder
In this project, a seeder is used to populate the database with dummy data for testing and development. The seeder utilizes the `Faker` library to generate random data, such as titles, authors, publishers, and publication years, allowing the database to be quickly filled with sample entries. This helps simulate a real-world dataset for easier testing and development without the need for manually inputting data.


## Contact
If you have any questions or issues with this project, please contact Aaron Kongdoh at abenedict01@student.ciputra.ac.id.
