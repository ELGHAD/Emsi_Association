Une plateforme web moderne développée avec Laravel, Tailwind CSS et MySQL, destinée à la gestion de la vie associative des étudiants de l’EMSI Rabat.
Elle centralise la gestion des clubs, événements et actualités, tout en offrant une interface intuitive, responsive et sécurisée pour les étudiants et les administrateurs.

🚀 Fonctionnalités principales

👤 Gestion des utilisateurs : inscription, connexion, rôles (étudiant, administrateur).

🎭 Clubs étudiants : création, adhésion, gestion des membres.

📅 Événements : organisation, participation, suivi des activités.

📰 Actualités : publication et consultation d’articles.

🔐 Sécurité : authentification avec Laravel Sanctum, gestion des permissions.

📊 Tableaux de bord : interfaces dédiées aux étudiants et administrateurs.

🛠️ Technologies utilisées

Backend : Laravel
 (PHP, MVC, Eloquent ORM)

Frontend : Tailwind CSS
, Blade Templates, JavaScript

Base de données : MySQL

Outils & Environnement : Vite (build tool), StarUML (conception UML)

⚙️ Installation & Exécution
1. Cloner le projet
git clone https://github.com/votre-utilisateur/Emsi-Association.git
cd Emsi-Association

2. Installer les dépendances
composer install
npm install

3. Configurer l’environnement

Copier le fichier .env.example en .env

Configurer la base de données MySQL

php artisan key:generate
php artisan migrate --seed

4. Lancer le serveur de développement
php artisan serve
npm run dev


Accéder à l’application : http://localhost:8000

👨‍💻 Équipe

Elrhadiouini Hamza

Naami Mohamed

Encadré par M. El Hassani Mouhcine

📚 Références

Laravel Documentation

Tailwind CSS Documentation

MySQL Docs

Vite