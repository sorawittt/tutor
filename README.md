# ขั้นตอนการติดตั้ง
1. Clone repository
2. ย้ายโฟล์เดอร์ที่ Clone ไปยังโฟล์เดอร์ www ของ laragon
3. ทำการ composer install ใน folder
4. สร้าง Database tutor
5. ใช้คำสั่ง cp .env.example .env เพื่อคัดลอกไฟล์
6. เปิดไฟล์ .env แล้วทำการตั้งค่า
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tutor
DB_USERNAME=your_username
DB_PASSWORD=your_password
```
7. ใช้คำสั่ง php artisan migrate --seed
8. ใช้คำสั่ง php artisan serve

# การเข้าใช้งาน
```
Email: admin@tutor.com
Password: admin
```
