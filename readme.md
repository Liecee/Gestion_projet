Gestion des étudiants 


L'application de gestion des étudiants est une plateforme destinée aux administrateurs pour faciliter la gestion des informations relatives aux étudiants, aux enseignants, aux modules, et permet de regrouper les données des enseignants et des étudiants ainsi que des notes durant les trimestre de l'année.
Fonctionnalités Principales

    Gestion des Étudiants : Ajoutez, modifiez et consultez les informations détaillées sur les étudiants, y compris leurs notes, leurs filières, et leur statut académique.

    Gestion des Modules : Créez de nouveaux modules, actualisez les informations existantes, et attribuez des enseignants responsables.

    Gestion des Enseignants : Ajoutez de nouveaux enseignants, mettez à jour leurs informations, et attribuez-leur des modules à enseigner.

    Gestion des Utilisateurs : En tant qu'administrateur, vous pouvez créer de nouveaux utilisateurs et leur attribuer des rôles spécifiques dans l'application.



Voici quelque instructions pour l'installation de l'application : 

- Cloner le projet GitHub sur sa machine en local 
- Dans le fichier .env de la base de données et rajouter la variable DATABASE_URL (juste la ligne concerné ) et crée le nom de la base de données (ligne 25)
- Taper la commande : composer require symfony/runtime
- Crée la base de données et faire la migration : php bin/console d:d:c
                                                : php bin/console doctrine:migrations:diff
                                                : php bin/console doctrine:migrations:migrate
Cette commande est utilisée pour créer la base de données. Elle prend les paramètres de connexion à la base de données à partir de votre configuration Symfony.

Il faut installer ensuite yarn la commande est la suivante : yarn install. 

Ensuite effectuer un -symfony console cache:clear pour effacer le cache de l'application Symfony.
Cette commande est souvent exécutée lors du déploiement de l'application ou lors de modifications importantes.


POur finir taper la commande - yarn run build cette commande va traiter les fichiers source, les compiler et les regrouper selon la configuration définie dans le fichier webpack.config.js 

login : tiliouineliece@live.fr
mtp : 123456