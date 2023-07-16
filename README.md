# Laravel Portfolio Generator

This repository contains a generator that can be used to create a static website for creating a CV. It is easy to use and can be customized according to your needs.

## Requirements

1. Install `wampserver` or `XAMPP`
```markdown
https://www.wampserver.com/en/download-wampserver-64bits/
```


2. Install composer

Follow this video if you haven't composer on your computer
```markdown
https://getcomposer.org/download/
```

3. Add PHP to System envirement variables

## How to clone and install the necessary tools

1. Download the repository and unzip it:  
```markdown
https://github.com/CHERIEF-Dz/Laravel-Portfolio-Generator
```

2. Go to the project directory and install the dependencies using the following command:  
```markdown
composer install
```

3. Open `.env` file and update the database and personal information.

4. Run the migrations using the following command:  
```markdown
php artisan migrate
```

5. Open a cmd command line in the directory and switch on the server:
```markdown
php artisan serve
```

6. Go to `127.0.0.1:8000` to view the results

7. You can add, remove and update the elements of the index by going to `127.0.0.1:8000/admin`

## How to generate the static website

1. Open new cmd in the directory and switch on the server:
```markdown
php artisan serve
```

2. Open other cmd and run the following command to generate the static website:  
```markdown
php artisan generate:static
```


3. The static website will be generated in the `static` directory.

4. In `public`, Copy `assets` and `img` folders and put them in the `static` folder.

Congrats!! Now you can deploy your personal website any where in any webhost.

## Remarks

- You should have at least basic knowledge of HTML, CSS to do the customization.
- This repository is intended to be used as a starting point for creating your own static website.
- Feel free to contribute to the project by submitting pull requests or reporting issues & share it with your friends.

## Whatch this vedio to understand how to all of this
<video src='https://youtu.be/VU_bmMyF6xM' width=180/>
[![Final video of fixing issues in your code in VS Code]
(https://img.youtube.com/vi/VU_bmMyF6xM/maxresdefault.jpg)]
(https://youtu.be/VU_bmMyF6xM)
