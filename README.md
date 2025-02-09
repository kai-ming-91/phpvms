# phpVMS <sup>7</sup>

[![Build](https://github.com/nabeelio/phpvms/workflows/Build/badge.svg?branch=dev)](https://github.com/nabeelio/phpvms/actions) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/d668bebb0a3c46bda381af16ce3d9450)](https://www.codacy.com/app/nabeelio/phpvms?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=nabeelio/phpvms&amp;utm_campaign=Badge_Grade) [![Latest Stable Version](https://poser.pugx.org/nabeel/phpvms/v/stable)](https://packagist.org/packages/nabeel/phpvms) ![StyleCI](https://github.styleci.io/repos/93688482/shield?branch=dev) [![License](https://poser.pugx.org/nabeel/phpvms/license)](https://packagist.org/packages/nabeel/phpvms)

The next phpvms version built on the laravel framework. work in progress. The latest documentation, with installation instructions is available [on the phpVMS documentation](https://docs.phpvms.net/) page.

## Installation

A full distribution, with all of the composer dependencies, is available at this 
[GitHub Releases](https://github.com/nabeelio/phpvms/releases) link. 

### Requirements

- PHP 8.0+, extensions:
  - cURL
  - JSON
  - mbstring
  - openssl
  - pdo
  - tokenizer
- Database:
  - MySQL 5.5+ (or MySQL variant, including MariaDB and Percona)

[View more details on requirements](https://docs.phpvms.net/requirements)

### Installer

1. Upload to your server
1. Visit the site, and follow the link to the installer

[View installation details](https://docs.phpvms.net/installation/installation)

## Development Environment with Docker

A full development environment can be brought up using Docker, without having to install composer/npm locally

```bash
make docker-test

```

Then go to `http://localhost`. If you're using dnsmasq, the `app` container is listening on `phpvms.test`, or you can add to your `/etc/hosts` file:

```
127.0.0.1   phpvms.test
```

### Accessing npm or composer with Docker

You can access to npm and composer by going into the Docker comtainer:

```
$ docker compose -f docker-compose.dev.yml exec -it app /bin/sh
/var/www #
```

Run `composer install` if this is your first bootup of the Docker environment


### Building JS/CSS assets

Install frontend dependencies:

```
npm install
```

Build all of the assets according to the webpack file:

```bash
make build-assets
```

