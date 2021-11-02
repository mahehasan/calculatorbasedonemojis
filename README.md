Before jump into into the tutorial ,let me clear few things first.

    I am using a Windows 10 machine with Xampp Server installed.
    You need to install Composer- It is a Dependency Manager for PHP. You have to install it in your xampp path.

So if you have already install all the required step up correctly, then start run this Laravel Project.

- Pull project from git provider. https://github.com/mahehasan/calculatorbasedonemojis.git
- Open the console and cd your project root directory
- Run `composer install`
- Run `php artisan serve`

## About calculator based on emojis

#### Summary of requirements
For our public facing application, we want to build a calculator based on emojis. As a proof 
of concept, you need to build the app to support the initial set of calculations:
- 👽 Addition (Alien U+1F47D)
- 💀 Subtraction (Skull U+1F480)
- 👻 Multiplication (Ghost U+1F47B)
- 😱 Division (Scream U+1F631)

#### Acceptance criteria
##### When I view the website
- And I want to calculate 1 - Alien - 1
- Then I should receive the response 2 
##### When I view the website
- And I want to calculate 10 - Skull - 5
- Then I should receive the response 5
##### When I view the website
- And I want to calculate 2 – Ghost - 2
- Then I should receive the response 4
##### When I view the website
- And I want to calculate 2 – Scream - 2
- Then I should receive the response 1
