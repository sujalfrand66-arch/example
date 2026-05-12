# Premium Single-Page Laravel Website

This is a complete, production-ready Laravel single-page website with a built-in admin panel for dynamic gallery management. It's designed with a premium, modern UI and is fully compatible with Render hosting.

## Features

- **Modern UI**: Built with Tailwind CSS, Alpine.js, and AOS for smooth animations.
- **Dynamic Gallery**: Admin panel allows uploading, editing, and deleting gallery images.
- **Lightbox**: Image lightbox popup on the frontend gallery section.
- **Responsive**: Fully responsive and mobile-friendly design.
- **Admin Panel**: Secure login with simple dashboard for image management.
- **Deployment Ready**: Included `render.yaml` for instant deployment on Render.

## Local Development

### Requirements

- PHP >= 8.2
- Composer
- Node.js & NPM
- SQLite / MySQL / PostgreSQL

### Setup

1. **Clone the repository**:
    ```bash
    git clone <your-repo-url>
    cd <repo-name>
    ```

2. **Install dependencies**:
    ```bash
    composer install
    npm install
    npm run build
    ```

3. **Configure Environment**:
    ```bash
    cp .env.example .env
    ```
    Set your database connection in `.env` (defaults to SQLite, you can use MySQL).

4. **Generate App Key**:
    ```bash
    php artisan key:generate
    ```

5. **Run Migrations & Seed Admin User**:
    ```bash
    php artisan migrate --seed --seeder=AdminSeeder
    ```
    *This creates the necessary tables and inserts the default admin credentials.*

6. **Create Storage Link**:
    ```bash
    php artisan storage:link
    ```
    *Required to display uploaded images.*

7. **Start the Development Server**:
    ```bash
    php artisan serve
    ```

### Admin Login

Access the admin panel at `/admin/login`

- **Username**: `123445`
- **Password**: `123445`

## Deployment (Render)

This project is configured to be deployed easily on [Render](https://render.com/).

### Steps:

1. Push your code to a GitHub/GitLab repository.
2. Log in to Render and select **Blueprints** -> **New Blueprint Instance**.
3. Connect your repository.
4. Render will automatically detect the `render.yaml` file.
5. Apply the blueprint. It will automatically:
   - Create a PostgreSQL database.
   - Deploy the web service.
   - Run `composer install`, `npm install`, and `npm run build`.
   - Run migrations and generate keys.
6. **Note**: For persistent storage of uploaded images on Render, it's recommended to configure an external disk like AWS S3 or use a persistent Render disk in the render.yaml file, as ephemeral disks are wiped on deployment. The current `render.yaml` provides the foundation, you might just need to attach a disk for the `/var/www/html/storage/app/public` or `/opt/render/project/src/storage/app/public` path depending on the deployment setup, or configure S3 in your `.env`.

---
Built with Laravel and ❤️
