# How to setup locally
1. Install packages
```powershell
composer install
```

2. Create a database called `student-information` in MariaDB

3. Create `.env` file from `.env.example` and replace these fields with these values
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=student-information
DB_USERNAME=root
DB_PASSWORD=
```

4. Run `migrate`

⚠️ Make sure you have started your MySQL and Apache web server in XAMPP before running the command below.
```powershell
php artisan migrate
```

5. Run the application
```powershell
php artisan serve
```
```powershell
npm run dev
```
