# Groupletter

<a href="https://assembly.com/groupletter/bounties?utm_campaign=assemblage&utm_source=groupletter&utm_medium=repo_badge"><img src="https://asm-badger.herokuapp.com/groupletter/badges/tasks.svg" height="24px" alt="Open Tasks" /></a>

## Start developing

### Install

- [Homestead](http://laravel.com/docs/5.0/homestead) and setup for this project
- [Node](http://nodejs.org/download/) (version 0.10.x)

### Run

- Setup [environment configuration](http://laravel.com/docs/5.0/configuration) file `.env`. See `.env.example`.

#### In dev environment in project root (Homestead):
- `composer install`
- `php artisan migrate`
- `php artisan db:seed`

#### On local machine in project root:

##### If starting development for the *first time*
- `sh setup` or `./setup`
- `gulp watch` (while developing)

##### If you have bower and gulp *already installed*
- `sh setup -u` or `./setup -u`
  - Both -u and --update work.
  - This option skips the gulp and bower base install, and just runs package installation.
- `gulp watch` (while developing)

You can now visit the site locally (depends on your Homestead settings) and login with admin@groupletter.io / admin

## Group curated newsletters.

This project is currently under development. To give you an idea of the concept visit: [First product update and rough idea](https://assembly.com/groupletter/posts/first-product-update-and-rough-idea)

This is a product being built by the Assembly community. You can help push this idea forward by visiting [https://assembly.com/groupletter](https://assembly.com/groupletter).

### How Assembly Works

Assembly products are like open-source and made with contributions from the community. Assembly handles the boring stuff like hosting, support, financing, legal, etc. Once the product launches we collect the revenue and split the profits amongst the contributors.

Visit [https://assembly.com](https://assembly.com) to learn more.
