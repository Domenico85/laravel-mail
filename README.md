<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Laravel Email Sending Project

This is a Laravel-based project that allows sending both static and dynamic emails using **Mailtrap**. It includes:

-   A **contact form** for email submissions.
-   Integration with **Mailtrap** for testing email sending.
-   Use of Laravel's **named routes, controllers, components, and Vite**.
-   Bootstrap for styling.

---

## 🚀 Installation & Setup

### **1️⃣ Clone the Repository**

```bash
git clone https://github.com/your-username/your-repository.git
cd your-repository
```

### **2️⃣ Install Dependencies**

```bash
composer install
npm install
```

### **3️⃣ Set Up Environment**

Copy the `.env.example` file and update it:

```bash
cp .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

### **4️⃣ Configure Mailtrap for Email Testing**

Update the `.env` file with your **Mailtrap SMTP credentials**:

```ini
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_mailtrap_username
MAIL_PASSWORD=your_mailtrap_password
MAIL_FROM_ADDRESS="no-reply@yourdomain.com"
MAIL_FROM_NAME="Laravel Mailer"
```

### **5️⃣ Run Migrations**

```bash
php artisan migrate
```

### **6️⃣ Start the Development Server**

```bash
php artisan serve
```

### **7️⃣ Run Vite for Frontend Assets**

```bash
npm run dev
```

---

## 📩 Sending Emails

### **Static Email**

-   The application includes a static email template that can be sent using a simple route.

### **Dynamic Email**

-   The contact form sends user-submitted data via email.

---

## 🛠 Project Structure

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── ContactController.php  # Handles contact form submissions
│
├── Mail/
│   ├── ContactMail.php  # Defines the email content
│
resources/
├── views/
│   ├── emails/
│   │   ├── contact.blade.php  # Email template
│   ├── layouts/
│   │   ├── app.blade.php  # Main layout with Bootstrap & Vite
│   ├── contact.blade.php  # Contact page
│
public/
├── favicon.ico  # Favicon for the site
```

---

## 📝 License

This project is licensed under the **MIT License** (https://opensource.org/licenses/MIT).

---

## 🎯 Author

Developed by **DomDev**. Feel free to contribute or suggest improvements!
