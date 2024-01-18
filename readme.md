Gestion des étudiants 


L'application de gestion des étudiants est une plateforme destinée aux administrateurs pour faciliter la gestion des informations relatives aux étudiants, aux enseignants, aux modules, et bien plus encore.
Fonctionnalités Principales

    Gestion des Étudiants : Ajoutez, modifiez et consultez les informations détaillées sur les étudiants, y compris leurs notes, leurs filières, et leur statut académique.

    Gestion des Modules : Créez de nouveaux modules, actualisez les informations existantes, et attribuez des enseignants responsables.

    Gestion des Enseignants : Ajoutez de nouveaux enseignants, mettez à jour leurs informations, et attribuez-leur des modules à enseigner.

    Gestion des Utilisateurs : En tant qu'administrateur, vous pouvez créer de nouveaux utilisateurs et leur attribuer des rôles spécifiques dans l'application.



Voici quelque instructions pour l'installation de l'application : 

- Cloner le projet GitHub sur sa machine en local 
- Crée le fichier .env.local : et rajouter la variable DATABASE_URL
- Crée la base de données : php bin/console doctrine:database:create

Cette commande est utilisée pour créer la base de données. Elle prend les paramètres de connexion à la base de données à partir de votre configuration Symfony.

Ensuite effectuer un -symfony console cache:clear pour effacer le cache de l'application Symfony.
Cette commande est souvent exécutée lors du déploiement de l'application ou lors de modifications importantes.


POur finir taper la commande - yarn run build cette commande va traiter les fichiers source, les compiler et les regrouper selon la configuration définie dans votre fichier webpack.config.js