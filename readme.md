## Data entry app

This is simple application for data-entry. 

It is consisted of 3 sections where you fill our user data, appropriate validation is performed and the data is saved in a MySql database.

Please bear in mind that i didn't have any application installed on my pc to view the different layers in the .psd file (i assume there were a few) so i've only managed to have a look at the first section and proceeded with the rest following the example.

Tools used in this project:

- [Laravel](https://laravel.com)
- [Vue.js](https://vuejs.org/) and various plugins (validation)
- [Axios](https://www.npmjs.com/package/axios)
- [Tailwind](https://tailwindcss.com)

## Installation

- Clone the repo
- Run 'composer install'
- Run 'npm install'
- Change config data to match your environment (db credentials)
- Run 'php artisan migrate'
- Run 'php artisan serve'

## Improvements

While i am aware that this was a simple app i hope that this solution shows my Laravel, Vue.js and a bit of Tailwind knowledge. I have deliberately used a CSS framework and also mixed it up with css/scss in the Vue components as well to display different styles of styling.

Things I could have done better (wanted to send this back to you asap):

- The datepicker can be replaced with a plugin for better browser compatibility
- The transition i have used messed up the css a bit so the space below the 'Next' button appears