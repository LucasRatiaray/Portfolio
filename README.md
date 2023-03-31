# Lucas RATIARAY PORTFOLIO

## Environnement de développement

### Pré-requis

* PHP 8.2.4
* Composer
* Symfony CLI
* Docker
* Docker compose

### Installation

```bash
composer install
```

### Lancer l'environement de développement

```bash
docker-compose down
docker-compose up -d
symfony server:start -d
```

## Lancer des tests

```bash
php bin/phpunit --testdox
```

### Pour les utilisateurs macOS

```bash
find . -name ".DS_Store" -delete
```
