pada pertemuan harii ini khusus nya jam 9 sampai jam 11 saya belajar tentang bootstrap
lalu membua navbar dengan template dari bootstrap
setelah itu saya mengikuti step step yang di lakukan dosen dengan membuat profile,about me,skills,dan sosial linked

setelah istirahat:
disini saya membuat projek dengan template yang sudah di berikan oleh dosen
pertama tama saya meng copy folder yang di butuhkan untuk menjalankan projek
lalu saya build docker dengan konfigurasi yang sudah tertera di template dengan command "docker compose up -d --build"
setelah container nya sudah nyala,saya masuk kedalam docker nya dengan command "docker exec -it pemweb bash"
setelah masuk kedalam docker,saya membuat projek nya dengan command "composer create-project --prefer-dist raugadh/fila-starter ."
chown -R www-data:www-data storage/*
edit env

php artisan storage:link
php artisan migrate
php artisan migarte:fresh
php artisan db:Seed --force
php artisan shield:generate --all
php artisan project:init
chmod 777 -R storage/* && chmod 777 -R bootstrap/*

buka localhost di browser
username :admin@admin.com
pw : password

