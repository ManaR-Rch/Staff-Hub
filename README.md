# STAFF-HUB – Application de gestion RH

HRManager est une application web développée avec Laravel, Blade et JavaScript, permettant une gestion simple et efficace des ressources humaines pour les PME.

## 🚀 Fonctionnalités

- 👥 Gestion des employés (CRUD)
- 🏖️ Demande et validation des congés
- 🤒 Déclaration d’absences avec justificatifs
- 📁 Upload de documents par profil
- ⏱️ Suivi du temps de travail
- 📄 Génération de fiches de paie
- 📬 Envois d’e-mails internes automatiques
- ✅ Attribution et suivi de tâches RH

## 🧰 Technologies

- Laravel 11+
- Blade (Vue serveur)
- JavaScript (AJAX / Axios)
- PGSQL

## 🏗️ Installation

```bash
git clone https://github.com/ManaR-Rch/STAFF-HUB.git
cd STAFF-HUB
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
npm install && npm run dev
php artisan serve
