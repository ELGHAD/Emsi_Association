# 🎓 EMSI Association — Plateforme de Gestion de la Vie Associative

> Une application web moderne centralisant la gestion des clubs, événements et actualités étudiantes de l'EMSI Rabat, avec une interface sécurisée et responsive pour étudiants et administrateurs.

<p align="left">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white" alt="PHP" />
  <img src="https://img.shields.io/badge/Laravel-FF2D20?style=flat&logo=laravel&logoColor=white" alt="Laravel" />
  <img src="https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=flat&logo=tailwind-css&logoColor=white" alt="Tailwind CSS" />
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=flat&logo=mysql&logoColor=white" alt="MySQL" />
  <img src="https://img.shields.io/badge/Vite-646CFF?style=flat&logo=vite&logoColor=white" alt="Vite" />
  <img src="https://img.shields.io/badge/Laravel_Sanctum-Auth-FF2D20?style=flat" alt="Sanctum" />
  <img src="https://img.shields.io/badge/status-active-success" alt="Status" />
</p>

---

## 📖 Aperçu du projet

Au sein d'une école d'ingénieurs comme l'EMSI Rabat, la vie associative (clubs, événements, actualités) est souvent gérée de manière dispersée, via des outils non centralisés (groupes WhatsApp, fichiers Excel, affichages papier). **EMSI Association** répond à ce problème en proposant une plateforme web unique où étudiants et administrateurs peuvent gérer l'ensemble du cycle de vie associatif : création de clubs, adhésion des membres, organisation d'événements et diffusion d'actualités.

Le projet s'adresse principalement aux **étudiants** souhaitant s'impliquer dans la vie associative de leur école, ainsi qu'aux **administrateurs/responsables de clubs** ayant besoin d'outils de gestion et de suivi simples.

---

## 🖼️ Aperçu visuel

<!--
  Ajoute tes captures d'écran dans un dossier docs/screenshots/ à la racine du projet,
  puis remplace les chemins ci-dessous par les noms de tes fichiers.
  Exemple : docs/screenshots/dashboard.png
-->
<p align="center">
  <img src="docs/screenshots/home.jfif" alt="Home page" width="45%" />
  <img src="docs/screenshots/login.jfif" alt="Page de connexion" width="45%" />
</p>
<p align="center">
  <img src="docs/screenshots/dashboard.jfif" alt="Tableau de bord d'ADMIN" width="45%" />
  <img src="docs/screenshots/dashboaard.jfif" alt="Tableau de bord d'ETUDIANT" width="45%" />
  <img src="docs/screenshots/users.jfif" alt="Users Page" width="45%" />
  <img src="docs/screenshots/evenements.jfif" alt="Gestion des clubs" width="45%" />
</p>


---

## 🚀 Fonctionnalités clés

- 👤 **Gestion des utilisateurs** — inscription, connexion et gestion des rôles (étudiant, administrateur)
- 🎭 **Clubs étudiants** — création de clubs, adhésion des membres, gestion des effectifs
- 📅 **Événements** — organisation d'événements, inscription et suivi des participations
- 📰 **Actualités** — publication et consultation d'articles liés à la vie associative
- 🔐 **Sécurité** — authentification via **Laravel Sanctum** et gestion fine des permissions par rôle
- 📊 **Tableaux de bord** — interfaces dédiées et différenciées pour les étudiants et les administrateurs

---

## 🏗️ Architecture & Stack technique

Le projet suit l'architecture **MVC (Modèle-Vue-Contrôleur)** native de Laravel, avec un couplage frontend/backend via des vues **Blade** enrichies en JavaScript, et une conception préalable modélisée en **UML** (StarUML).

| Catégorie | Technologies |
|---|---|
| **Backend** | Laravel (PHP), Eloquent ORM, architecture MVC |
| **Frontend** | Blade Templates, Tailwind CSS, JavaScript |
| **Base de données** | MySQL |
| **Authentification** | Laravel Sanctum |
| **Build & Outils** | Vite, Composer, NPM |
| **Conception** | StarUML (modélisation UML) |
| **Tests** | PHPUnit (configuré via `phpunit.xml`) |

---

## ⚙️ Guide d'installation & Démarrage rapide

### Prérequis

- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL

### 1. Cloner le projet

```bash
git clone https://github.com/ELGHAD/Emsi_Association.git
cd Emsi_Association
```

### 2. Installer les dépendances

```bash
composer install
npm install
```

### 3. Configurer l'environnement

```bash
cp .env.example .env
```

Renseigner ensuite les identifiants de connexion à la base de données **MySQL** dans le fichier `.env` (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`), puis générer la clé d'application et exécuter les migrations :

```bash
php artisan key:generate
php artisan migrate --seed
```

### 4. Lancer le serveur de développement

```bash
php artisan serve
npm run dev
```

L'application est accessible à l'adresse : **http://localhost:8000**

---

## 📂 Structure du projet (simplifiée)

```
Emsi_Association/
├── app/                # Logique métier (Modèles, Contrôleurs, Middleware)
├── assets/images/       # Ressources visuelles
├── bootstrap/           # Fichiers de démarrage de l'application
├── config/              # Fichiers de configuration Laravel
├── database/            # Migrations, seeders, factories
├── public/              # Point d'entrée public de l'application
├── resources/           # Vues Blade, assets front (CSS/JS)
├── routes/               # Définition des routes (web/api)
├── tests/                # Tests unitaires et fonctionnels (PHPUnit)
├── composer.json         # Dépendances PHP
├── package.json           # Dépendances front-end
└── vite.config.js        # Configuration du build Vite
```

---

## 🔒 Sécurité & bonnes pratiques

- **Authentification sécurisée** via Laravel Sanctum
- **Gestion des rôles et permissions** pour distinguer les accès étudiants / administrateurs
- **ORM Eloquent** pour des requêtes structurées et protégées contre les injections SQL
- **Validation des données** côté serveur sur les formulaires (inscription, création de clubs/événements)
- **Séparation des responsabilités** grâce à l'architecture MVC de Laravel

---

## 📚 Références

- [Documentation Laravel](https://laravel.com/docs)
- [Documentation Tailwind CSS](https://tailwindcss.com/docs)
- [Documentation MySQL](https://dev.mysql.com/doc/)
- [Documentation Vite](https://vitejs.dev/)

---

<p align="center">⭐ N'hésitez pas à mettre une étoile si ce projet vous a été utile !</p>
