# Installer l'application en utilisant docker

Avant d'installer l'application assurez vous d'avoir installé l'outil
suivant :

1. [docker](https://www.docker.com/)
2. [Git](https://git-scm.com/download/win)

## 1. Lancer le projet !

Dans un terminal (remplacer `<nomDuDossier>` par le nom de votre choix) lancer
les commandes suivantes

```bash
git clone https://github.com/Djeg/formation-php-poo.git <nomDuDossier>
cd <nomDuDossier>
git fetch --all
git checkout session-projet/07-11-22/10-11-22
docker-compose up -d
docker-compose exec app bin/install
code .
```
