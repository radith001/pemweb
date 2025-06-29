# **Catatan Pertemuan 2 - Pengenalan Pemrograman Web & Website**

## **1. Pembahasan Pertemuan Kedua**  
- Pengenalan mengenai pemrograman web dan website.  
- **Website memiliki address** (misalnya `facebook.com`), yang berfungsi sebagai identitas di internet.  
- **Proyek sebelum UTS**: Membuat **Company Profile**.  
- **Proyek akhir**: Sesuai dengan studi kasus masing-masing.  

---

## **2. Pembelajaran Pertemuan Kedua**  
Pada pertemuan ini, saya belajar mengenai **HTML & Web Development**.  

### **2.1 Struktur Folder**  
Saya membuat folder utama dengan nama **"coding"**, yang digunakan untuk menyimpan seluruh file dan program HTML yang telah dipelajari.  

1. **Membuat file `.env`**  
   - **Fungsi**: Menyimpan variabel lingkungan yang digunakan oleh aplikasi atau tools seperti Docker.  
   - **Isi file `.env`**:  
     ```plaintext
     COMPOSE_PROJECT_NAME=esgul  # Menentukan nama proyek Docker Compose.
     REPOSITORY_NAME=pemweb       # Menyimpan nama repository atau proyek.
     IMAGE_TAG=latest             # Menentukan tag image Docker.
     ```

2. **Membuat file `docker-compose.yml`**  
   - **Fungsi**: Mengatur dan menjalankan beberapa container Docker sekaligus dengan satu perintah.  
   - **Isi file `docker-compose.yml`**:  
     ```yaml
     version: '3'  # Versi Docker Compose yang digunakan.
     services:
       web:
         image: nginx:latest   # Menggunakan image NGINX sebagai web server.
         ports:
           - 80:80             # Memetakan port 80 di host ke port 80 di container.
         volumes:
           - ./nginx/nginx.conf:/etc/nginx/conf.d/default.conf  # Menggunakan file konfigurasi NGINX dari folder lokal.
           - ./src:/usr/share/nginx/html  # Sinkronisasi folder proyek dengan container.
     ```

3. **Membuat folder `nginx` dan file `nginx.conf`**  
   - **Fungsi `nginx.conf`**:  
     - File konfigurasi utama untuk NGINX.  
     - Mengatur bagaimana NGINX menangani permintaan web seperti routing, port, dan lokasi file.  
   - **Isi file `nginx.conf`**:  
     ```nginx
     server {
         listen 80;
         server_name localhost;
         location / {
             root /usr/share/nginx/html;
             index index.html;
         }
     }
     ```

4. **Membuat folder `src` dan file `index.html` serta `div.html`**  
   - **`index.html`**: File utama yang dimuat pertama kali saat website diakses.  
   - **`div.html`**: File tambahan yang digunakan untuk halaman lain dalam website, seperti halaman profil atau kontak.  

---


## 🌐 Tag HTML Dasar

1. **`<p>` (Paragraph)**  
   - Fungsi: Membuat paragraf.  
   - Contoh:  
     ```html
     <p>Ini adalah paragraf pertama saya di HTML.</p>
     ```

2. **`<u>` (Underline)**  
   - Fungsi: Memberikan garis bawah pada teks.  
   - Contoh:  
     ```html
     <p><u>Teks ini digarisbawahi.</u></p>
     ```

3. **`<i>` (Italic)**  
   - Fungsi: Membuat teks menjadi miring.  
   - Contoh:  
     ```html
     <p><i>Teks ini dibuat miring.</i></p>
     ```

4. **`<b>` (Bold)**  
   - Fungsi: Membuat teks menjadi tebal.  
   - Contoh:  
     ```html
     <p><b>Teks ini dicetak tebal.</b></p>
     ```

5. **`<a>` (Anchor/Link)**  
   - Fungsi: Membuat hyperlink untuk menghubungkan halaman lain atau situs eksternal.  
   - Contoh:  
     ```html
     <a href="https://www.google.com">Kunjungi Google</a>
     ```

---

## 📅 Rencana Pembelajaran

1. **Pertemuan 1:** Pengenalan **HTML Dasar**.  
2. **Pertemuan 2:** Belajar **CSS** untuk mempercantik tampilan.  
3. **Pertemuan 3:** **Inisialisasi Proyek** dengan struktur folder dan alat bantu.  
4. **Pertemuan 4:** Membuat **Database** untuk menyimpan data.  
5. **Pertemuan 5:** Membuat **Model** dan **Controller** di backend.  
6. **Pertemuan 6:** Menyatukan semuanya menjadi **Proyek Utuh**.  
7. **Pertemuan 7:** **Pengumpulan Proyek** dan evaluasi.  

---




