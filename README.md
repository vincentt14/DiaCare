[Hosted App using Hostinger (Expires 26 June 2023)](https://diacare.site/ )
# Basic Setup
- Write in terminal composer install
- Make a copy from .env.example into .env (File .env not included).
- Configure file .env according to database requirements.
- Write in terminal php artisan key:generate
- Write in terminal php artisan migrate:fresh --seed
- After table in database already filled.
- Write on terminal php artisan serve to open in the browser.
- Write on terminal npm run dev to start the vite (run tailwind css).
- Go back to browser.

Jika ingin menggunakan database hasil dari export Hostinger (user asli, hasil diagnosa asli, jumlah user asli)
- download diacare.sql in root directory
- go to phpmyadmin
- import database
- choose diacare.sql
- done
