# STARTER WORDPRESS
Theme wordpress de base

## Instalation
Pour faire fonctionner le theme, il faut bien évidement le cloner dans le dossier `theme` de Worpdress, avoir Node.js d'installer et gulp.js. Il suffit ensuite de lancer les commanders suivantes
    
    $ npm i -D

Permet d'installer les packages se trouvant dans le fichier `package.json`.
    
    $ gulp server

Lance un serveur et écoutes les changements.

## Tâches

1. **gulp sass** : Compilation des fichiers `.scss` avec LibSass et ajout des préfixes pour les navigateurs avec *gulp-autoprefixer* 

2. **gulp server** : Permet la mise en place rapide d'un serveur avec *BrowserSync*, accesible depuis un proxy sur tous les devices connectés au même réseaux.

3. **gulp sprite** : Récupére les images placer dans le dossier `asssets -> icons -> @2x` et les transformes en deux sprites distinc. Le premier `sprite.png` pour les écrans normanux et le second `sprite@2x.png` pour les écrans retina.

4. **gulp image** : Parcours le dossier `img` qui se trouve dans `assets` et optimise les images.
**ImageMagick doit être installer sur la machine**

5.  **gulp script** : Minifie les fichiers `.js` et les regroupes dans un fichier `.min.js`
