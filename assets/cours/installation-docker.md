# Installer l'application en utilisant docker

Avant d'installer l'application assurez vous d'avoir installé l'outil
suivant :

1. [docker](https://www.docker.com/)
2. [Git](https://git-scm.com/download/win)

## 1. Cloné le projet

Dans un terminal bash (remplacer `<nomDuDossier>` par le nom de votre choix) lancer
les commandes suivantes

```bash
git clone -b session-projet/07-11-22/10-11-22 https://github.com/Djeg/formation-php-poo.git <nomDuDossier>
cd <nomDuDossier>
code .
```

## 2. Démaré l'application

```bash
bin/start
```

## 3. Afficher le contenue du server php

```bash
bin/server
```

## 4. Stopper l'application

```bash
bin/stop
```
