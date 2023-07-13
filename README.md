# Laravel Portfolio Generator

This repository contains a generator that can be used to create a static website for creating a CV. It is easy to use and can be customized according to your needs.

## How to clone and install the necessary tools

1. Download the repository and unzip it:  
`https://github.com/CHERIEF-Dz/Laravel-Portfolio-Generator`

2. Go to the project directory and install the dependencies using the following command:  
`composer install`


3. Open `.env` file and update the database and personal information.

4. Run the migrations using the following command:  
`php artisan migrate`


## How to generate the static website

1. Run the following command to generate the static website:  
`php artisan generate:portfolio`


2. The static website will be generated in the `public` directory.

## Remarks
- You should have at least basic knowledge of HTML, CSS to do customization.
- You should install composer first.
- This repository is intended to be used as a starting point for creating your own static website.
- Feel free to contribute to the project by submitting pull requests or reporting issues.
