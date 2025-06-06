<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
</p>

<h1 align="center">FitLife Gym Management System</h1>

<p align="center">
  <img src="https://img.shields.io/github/actions/workflow/status/yourusername/FitLife-Gym/tests.yml?label=tests&style=flat-square" alt="Tests Passing">
  <img src="https://img.shields.io/badge/downloads-414M-success?style=flat-square" alt="Downloads">
  <img src="https://img.shields.io/badge/packagist-v12.10.2-blue?style=flat-square" alt="Packagist Version">
  <img src="https://img.shields.io/badge/license-MIT-success?style=flat-square" alt="License">
</p>

## 🏋️ About FitLife

FitLife is a comprehensive gym management system built with Laravel, designed to streamline operations for fitness centers and provide a seamless experience for gym members, trainers, and administrators.

### Key Features

- **User Management**
  - Role-based access control (Members, Trainers, Administrators)
  - Customizable user profiles with profile images
  - Secure authentication and authorization

- **Membership Management**
  - Multiple membership plans and pricing tiers
  - Subscription tracking and renewal notifications
  - Payment processing and invoice generation

- **Class Scheduling**
  - Interactive class calendar and booking system
  - Class capacity management
  - Automated waitlist functionality

- **Trainer Portal**
  - Class scheduling and management
  - Member progress tracking
  - Communication with assigned members

- **Member Dashboard**
  - Booking history and upcoming classes
  - Subscription status and details
  - Personalized workout recommendations

- **Administrative Tools**
  - Comprehensive reporting and analytics
  - Equipment inventory management
  - Staff scheduling and management

## 📋 Prerequisites

- PHP 8.1+
- Composer
- MySQL 5.7+ or PostgreSQL 9.6+
- Node.js and NPM
- Laravel requirements ([View Laravel Requirements](https://laravel.com/docs/installation))

## ⚙️ Installation

```bash
# Clone the repository
git clone https://github.com/yourusername/FitLife-Gym.git

# Navigate to the project directory
cd FitLife-Gym

# Install PHP dependencies
composer install

# Install JavaScript dependencies
npm install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Configure your database in .env file
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=fitlife
# DB_USERNAME=root
# DB_PASSWORD=

# Run migrations and seeders
php artisan migrate --seed

# Build frontend assets
npm run dev

# Start the server
php artisan serve
```

## 🚀 Usage

After installation, you can access the application at `http://localhost:8000`.

### Default Credentials

- **Admin:** admin@fitlife.com / password
- **Trainer:** trainer@fitlife.com / password
- **Member:** member@fitlife.com / password

## 📷 Screenshots

<p align="center">
  <img src="https://github.com/yourusername/FitLife-Gym/raw/main/screenshots/dashboard.png" width="45%" alt="Dashboard">
  <img src="https://github.com/yourusername/FitLife-Gym/raw/main/screenshots/class-schedule.png" width="45%" alt="Class Schedule">
</p>

## 🛠️ Technologies Used

- **Backend:** Laravel 10.x, PHP 8.1+
- **Frontend:** Bootstrap 5, Alpine.js, Livewire
- **Database:** MySQL/PostgreSQL
- **Authentication:** Laravel Fortify/Sanctum
- **Payment Processing:** Stripe/PayPal

## 🗺️ Roadmap

- [ ] Mobile application integration
- [ ] Nutrition planning module
- [ ] Fitness challenges and achievements
- [ ] Integration with fitness wearables
- [ ] Advanced performance analytics

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📝 License

The FitLife Gym Management System is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 📧 Contact

Project Link: [https://github.com/yourusername/FitLife-Gym](https://github.com/yourusername/FitLife-Gym)
#   F i t L i f e - G y m 
 
 