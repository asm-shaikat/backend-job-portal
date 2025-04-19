# Laravel Job Application API

A simple Laravel API to handle job applications. Users can:

- Submit job applications
- View submitted applications
- Download individual applications as PDF

---

## 📦 Installation

```bash
# Clone the repository
git clone https://github.com/asm-shaikat/backend-job-portal.git

# Move into the project directory
cd your-repo-name

# Install PHP dependencies
composer install

# Copy environment file
cp .env.example .env

# Generate app key
php artisan key:generate

# Set up your database credentials in the .env file
# Then run migrations
php artisan migrate

# Serve the application
php artisan serve
