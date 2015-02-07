# STARTER WORDPRESS
Theme wordpress de base

## Instalation
Pour faire fonctionner le theme, il faut bien évidement le cloner dans le dossier `theme` de Worpdress:
    
    $ git clone git@github.com:francoiscoron/Starter-Wordpress.git nom-du-theme

Il faut également avoir Node.js d'installer et gulp.js. 
    
* [gulp.js](http://gulpjs.com/)
* [node.js](http://nodejs.org/)

    
Il suffit ensuite de lancer les commandes suivantes
    
    $ npm i -D

*Permet d'installer les packages se trouvant dans le fichier `package.json`.*
    
    $ gulp server

*Lance un serveur et écoutes les changements.*

## Tâches

* **gulp sass** : Compilation des fichiers `.scss` avec LibSass et ajout des préfixes pour les navigateurs avec *gulp-autoprefixer* 

* **gulp server** : Permet la mise en place rapide d'un serveur avec *BrowserSync*, accesible depuis un proxy sur tous les devices connectés au même réseaux.

* **gulp sprite** : Récupére les images placer dans le dossier `asssets -> icons -> @2x` et les transformes en deux sprites distinc. Le premier `sprite.png` pour les écrans normanux et le second `sprite@2x.png` pour les écrans retina.

* **gulp image** : Parcours le dossier `img` qui se trouve dans `assets` et optimise les images.
**ImageMagick doit être installer sur la machine**

5.  **gulp script** : Minifie les fichiers `.js` et les regroupes dans un fichier `.min.js`
