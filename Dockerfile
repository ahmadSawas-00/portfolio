# استخدام نسخة PHP CLI خفيفة (إصدار 8.2 مناسب جداً لأحدث إصدارات لارافيل)
FROM php:8.3-cli

# تثبيت الحزم الأساسية ومكتبات نظام التشغيل المطلوبة لـ SQLite
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    sqlite3 \
    libsqlite3-dev

# تثبيت إضافات PHP الضرورية للارافيل وللاتصال بـ SQLite
RUN docker-php-ext-install pdo pdo_sqlite mbstring exif pcntl bcmath gd

# تثبيت مدير الحزم Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# تحديد مجلد العمل داخل الحاوية
WORKDIR /app

# نسخ جميع ملفات المشروع إلى الحاوية
COPY . .

# تثبيت مكتبات لارافيل (بدون التفاعل مع المستخدم لعدم توقف البناء)
RUN COMPOSER_MEMORY_LIMIT=-1 composer install --no-interaction --prefer-dist --optimize-autoloader --ignore-platform-reqs
# إنشاء ملف قاعدة البيانات (في حال لم يتم نسخه) وإعطاء الصلاحيات الكاملة
# SQLite تحتاج إلى صلاحيات كتابة على الملف والمجلد الذي يحتويه لتعمل بنجاح
RUN mkdir -p database && touch database/database.sqlite
RUN chmod -R 777 database storage bootstrap/cache

# المنفذ الافتراضي الذي تتعرف عليه Render
EXPOSE 10000

# تشغيل التهجير (لإنشاء الجداول) ثم تشغيل سيرفر لارافيل فور إقلاع الحاوية
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=${PORT:-10000}