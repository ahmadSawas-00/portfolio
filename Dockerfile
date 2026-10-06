FROM php:8.2-cli

# تثبيت الحزم الأساسية لنظام التشغيل وامتدادات PHP المطلوبة لـ Laravel
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql mbstring

# جلب Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# تحديد مجلد العمل داخل الـ Container
WORKDIR /app

# نسخ ملفات المشروع
COPY . .

# تثبيت حزم الاعتمادات لـ Production
RUN composer install --no-dev --optimize-autoloader

# إعطاء صلاحيات المجلدات المقتطعة
RUN chmod -R 777 storage bootstrap/cache

# تحديد المنفذ وأمر التشغيل
EXPOSE 10000
CMD php artisan serve --host=0.0.0.0 --port=10000