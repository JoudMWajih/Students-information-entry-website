# Student Information Database Website

A simple web application for entering student information, storing it in a MySQL database, displaying all records in a table, and toggling the status value between `0` and `1`.

---

## Project Overview

This project was developed as a web development task using PHP and MySQL.

The website allows the user to enter a student's name and age, save the data into a database, display all records in a table, and update the status value using a Toggle button.

---

## Features

- Create a one-line form that includes:
  - Name input
  - Age input
  - Submit button
- Store submitted data in a MySQL database
- Display all records from the database in a table
- Show the following columns:
  - ID
  - Name
  - Age
  - Status
  - Action
- Add a Toggle button for each record
- Switch the status value between `0` and `1`
- Reflect the updated status immediately on the webpage after toggling

---

## Technologies Used

- HTML
- CSS
- JavaScript
- PHP
- MySQL
- phpMyAdmin
- InfinityFree Hosting
- GitHub

---

## Database Structure


### Table Name

students

### Table Columns

| Column | Type | Description |
| --- | --- | --- |
| id | INT | Primary key and auto increment |
| name | VARCHAR(100) | Student name |
| age | INT | Student age |
| status | TINYINT(1) | Status value, either 0 or 1 |

---

## SQL Code

The following SQL code was used to create the `students` table:

```sql
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    status TINYINT(1) DEFAULT 0
);
```

---
## File Description

### index.php

The main webpage of the project.

It contains the form, displays the student records in a table, and connects the page with the database.

---

### in.php

This file handles inserting student data into the database.

It receives the student's name and age, then stores them in the MySQL table.

---

### db.php

This file contains the database connection information.

It connects the PHP files to the MySQL database.

---

### toggle.php

This file updates the status value for each student.

If the status is `0`, it changes it to `1`.

If the status is `1`, it changes it back to `0`.

---

### script.js

This file contains the JavaScript code for the Toggle button.

It sends the selected student ID to `toggle.php` and updates the status value immediately on the webpage.

---

### style.css

This file contains the CSS styling for the webpage.

It styles the form, table, buttons, and page layout.

---

## How the Project Works

1. The user enters the student's name and age.
2. The user clicks the Submit button.
3. PHP sends the data to the MySQL database.
4. The student record is saved in the `students` table.
5. All records are displayed in a table on the webpage.
6. Each record has a Toggle button.
7. When the Toggle button is clicked, JavaScript sends the student ID to `toggle.php`.
8. PHP checks the current status value.
9. If the status is `0`, it changes to `1`.
10. If the status is `1`, it changes to `0`.
11. The new status value appears immediately on the webpage.

---

## Hosting

The project was hosted using InfinityFree.

### Hosting Steps

1. Create a free account on InfinityFree.
2. Create a free domain or subdomain.
3. Create a MySQL database.
4. Open phpMyAdmin.
5. Create the `students` table.
6. Upload all project files into the `htdocs` folder.
7. Open the website using the InfinityFree domain.
