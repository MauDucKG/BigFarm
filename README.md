See more here: http://bigfarm.ezyro.com

## Project Name
BigFarm is an e-commerce website that sells a wide range of clothing products. We offer high-quality clothing items for men, women, and children. Our website provides customers with an easy-to-use platform to browse and purchase clothing items from the comfort of their own homes.

## File Structure
Describe the file structure of your project here.

project/
├── controllers/
├── models/
├── views/
├── assets/
├── connection.php
├── routes.php
└── index.php

## Installation and Usage
To install and use the BigFarm project, please follow these instructions:

### 1. Install XAMPP on your computer if you haven't already done so.

### 2. Clone the repository by running the following command in your terminal:

git clone https://github.com/MauDucKG/BigFarm.git

### 3. Move the cloned folder to the "htdocs" folder of your XAMPP installation directory. This folder is typically located in "C:\xampp\htdocs" on Windows or "/opt/lampp/htdocs" on Linux.

### 4. Start Apache and MySQL from the XAMPP control panel.

### 5. Open a web browser and navigate to "http://localhost/BigFarm" to access the project.

### 6. To connect to a MySQL database, you can use the provided PHP code to establish a connection to your database. Modify the database credentials in the code to match your database details.

### 7. Once connected to the database, you can interact with it using SQL queries and the appropriate PHP functions.

## MVC Model
Explain the MVC model used in your project here.

MVC stands for Model-View-Controller, which is a design pattern commonly used in web development. In this pattern, the application is divided into three interconnected components:

Model: Represents the data and the business logic of the application.
View: Represents the presentation layer of the application.
Controller: Acts as an intermediary between the Model and the View, and handles user input and updates the Model and View accordingly.
In our project, we have implemented the MVC model as follows:

Model: Contains the data and the business logic of the application. It is located in the models/ directory.
View: Contains the presentation layer of the application. It is located in the views/ directory.
Controller: Acts as an intermediary between the Model and the View, and handles user input and updates the Model and View accordingly. It is located in the controllers/ directory.
The routes/ directory contains the routes that map to the different actions that the user can perform in the application. The app.js file is the main file of the application, and it sets up the server and the middleware. The package.json file contains the dependencies and scripts used in the project.

