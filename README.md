
![rebel-interactive-logo-red-300x150](https://billiemead.com/files/rebel-interactive-logo-red-300x150.png)
# Rebel Interactive Group
[rebelinteractivegroup.com](https://rebelinteractivegroup.com/)

#### Developer Candidate: Billie Mead


> 1) Configure local development environment for Roots project

> 2) Create a new Trellis project for local, staging, and production. All passwords vault encrypted

> 3) Add Yoast SEO and Disable Comments to Bedrock using Composer

> 4) Create a new theme using Sage as a starter and then make some changes to the Sage theme (colors, sizes, fonts, etc) and build the project.

> 5) Create a new GitHub repository and commit the whole Trellis project with its Sage theme

> 6) Send a link to the GitHub repository to Rebel for reference and review

#### Install Instructions

1. Clone Githib repo...
2. The vault decrypt password is `rebel`; against normal procedure it has been commited to repo...
3. Run `composer install` in the `/site` folder for the WordPress core install and the plugins you requested to be installed...
4. Then in the `/site/web/app/themes/rebeltheme/` folder `rebeltheme` run `composer install`...
5. Also in the `/site/web/app/themes/rebeltheme/` folder, run `yarn` to install all npm dependencies...
6. Run `yarn build` to build all SCSS partials, js, etc.
7. From `/trellis` run `vagrant up`
8. Finally from `/trellis` run `trellis provision development`
9. Then from browser please visit: http://rebelinteractive.localdev