# 🌍 Travel Journal Web Application

A personal **Travel Journal** web application that allows users to capture, manage, and relive their travel experiences through notes, images, and videos — all in one place.

---

## ✨ Features

- 🧳 User authentication (Login & Register)
- 📖 Create and manage travel journal entries
- 🖼️ Image & video media support
- 🎞️ Media carousel with navigation buttons
- 📍 Destination, travel dates & travel mode tracking
- 🏨 Hotel details with external booking links
- 🗺️ “Places I Loved” section
- 📱 Responsive and user-friendly UI
- 🔐 Secure handling of user data

---

## 🛠️ Tech Stack

- **Frontend:** HTML, CSS, Bootstrap, JavaScript  
- **Backend:** PHP  
- **Database:** MySQL  
- **Server:** Apache (XAMPP)  
- **Version Control:** Git & GitHub  

---

## 📂 Project Structure

p11/
│
├── assets/
├── css/
├── js/
├── uploads/ # User uploaded media (ignored in Git)
│
├── index.php
├── home.php
├── login.php
├── register.php
├── dashboard.php
├── dashboard1.php
├── display.php
├── display1.php
├── display2.php
├── display3.php
├── view-list.php

Place the folder inside:
C:\xampp\htdocs\

Database Setup

1.Open phpMyAdmin
2.Create a database
3.Import your .sql file

Update your database credentials in the PHP config file:
$host = "localhost";
$user = "root";
$pass = "";
$db   = "database_name";


Start Apache & MySQL in XAMPP
open http://localhost/p11


🎥 Media Carousel

Supports images and videos

Auto-sliding carousel

Left / right navigation buttons

Videos autoplay when active and pause when inactive

Fully responsive across devices

🔒 Security & Best Practices

User inputs sanitized using htmlspecialchars

Uploaded media excluded from version control

.gitignore used for dynamic files

🌟 Future Enhancements

Fullscreen media viewer

Place-wise image galleries

Map-based travel visualization

Export journal as PDF

Cloud storage support

👩‍💻 Author

Dharini Thakkar
Travel Journal Project

📜 License

This project is intended for educational purposes.
