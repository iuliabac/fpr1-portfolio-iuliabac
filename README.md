![Logo of the project](https://avatars3.githubusercontent.com/u/40756580?s=200&v=4)

# Project-name

Laravel Skeleton App. Base project for all HZ-HBO-ICT Laravel projects.

## Features

This repository contains the following features
* Holds the 'this is the version we work with for this year'
* Customized `.gitignore` that ignores files and folders specific for our supported IDEs
* Custom PHPCodeSniffer rules relevant for our Laravel based courses and exams. 
* Custom GitHub workflow action based on PHPCodeSniffer.
* Removed all references to Tailwind
* Customizable Bulma integration
* Font-awesome integration

## Usage

The intended use of this project is to fork it. Forked projects can develop specific features. Before the start of each
course instance, this project can be updated with the latest Laravel version. When this is done, the forked projects
can pull these updates into their own codebase.

## Developing

### Upgrade to the latest Laravel version

The simplest way that ensures all the files are as close to a fresh installation as possible is:

1. Create a fresh Laravel installation; remember the Laravel version.
2. Clone this repository alongside the new app.
3. Create and checkout a new branch. Run the command `git branch -b update-to-laravel-##.##` (##.## should equal the 
   laravel version in question).
4. Then migrate the correct sections like features and config from the cloned repo into the new app. See the sections below.
5. Empty the cloned repo folder (leave the `.git` folder of course)
6. Copy the content of the new app into the repository folder
7. Commit with a message: `Replaced with fresh Laravel ##.## installation` (##.## should equal the laravel version in question) and push

#### Update README.md
- Copy the content of README.md from the cloned repo and replace its content in the new app. You might review the content.

#### Update gitignore
- Copy the content of `.gitignore` and paste it above the original content in the new app. 
- Check the original content and remove the duplicate declarations. 
- Move the remaining declarations to a version specific section under 'Laravel', i.e. `# Laravel 12 specific`.

#### Integrate PHPCodeSniffer
- Copy the `phpcs.xml` file.
- Run the command `composer require --dev squizlabs/php_codesniffer`.
- Test the installation by running `./vendor/bin/phpcs`.
- Copy the `.github` folder to migrate the GH workflow.

#### Switch from Tailwind to Bulma and Font Awesome
- Remove the Tailwind reference: `npm uninstall tailwindcss`.
- Remove `tailwind.config.js` file.
- Remove the tailwindcss plugin from `postcss.config.js`.
- Add the required packages by running the following command: `npm install sass bulma 
  @fortawesome/fontawesome-free`
- Remove all content from `resources/css/app.css`.
- Copy the folder `resources/sass`.
- Update `vite.config.js` to replace the app.js with the sass folder content.

#### Copy the main view
- Copy the content of `resourses/views/welcome.blade.php`.
- Update the `'/'` route in `routes/web.php`.
- Run the app to test if everything is working.


## Authors

* **Daan de Waard** - *Initial work* - [dwaard](https://github.com/dwaard)

See also the list of [contributors](https://github.com/HZ-HBO-ICT/laravel-skeleton-app/graphs/contributors) who
participated in this project.

## Acknowledgements

The layout of this app is heavily inspired by the [Bulma clean theme](http://www.csrhymes.com/bulma-clean-theme/). We
thank the author [C.S. Rhymes](https://www.csrhymes.com/) for this.

The installation instructions in this file are based on [DevMarketers](https://devmarketer.io/learn/author/devmarketer/)
outstanding article [How to Setup a Laravel Project You Cloned from Github.com](https://devmarketer.io/learn/setup-laravel-project-cloned-github-com/)

## Licensing

The code in this project is licensed under MIT license.
