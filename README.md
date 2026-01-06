# 🌍 Travel Journal Web Application

A personal **Travel Journal** web application that allows users to capture, manage, and relive their travel experiences through notes, images, and videos — all in one place.

---
<img width="1898" height="497" alt="t5" src="https://github.com/user-attachments/assets/e5a74e1a-13eb-4fe6-9dde-0339c03f2539" />
<img width="1892" height="537" alt="t4" src="https://github.com/user-attachments/assets/2585266f-e3fa-400c-8c11-98dda5efa499" />
<img width="657" height="908" alt="t3" src="https://github.com/user-attachments/assets/f69e6525-f16c-4e2c-83b2-2133750b1485" />
<img width="1893" height="796" alt="t2" src="https://github.com/user-attachments/assets/aa6f4645-6ef9-407d-aaff-021abe914317" />


https://github.com/user-attachments/assets/0125ad4a-932a-484d-bec3-68e8edc2d89a

<img width="1795" height="577" alt="t11" src="https://github.com/user-attachments/assets/16cfd91b-f256-4119-8e84-d22aa82f74ad" />
<img width="1681" height="812" alt="t10" src="https://github.com/user-attachments/assets/0040e5e0-ce7d-4285-9633-60ef54c3ad16" />
<img width="1425" height="886" alt="t9" src="https://github.com/user-attachments/assets/fe17f0a8-1110-41ac-b2ff-a3039ca88a0d" />
<img width="1380" height="831" alt="t8" src="https://github.com/user-attachments/assets/017ab062-bc47-4ece-a800-7be71f66297a" />
<img width="1298" height="797" alt="t7" src="https://github.com/user-attachments/assets/04d87f40-4870-4d0c-be73-4503bbbbf6d3" />
<img width="1352" height="888" alt="t6" src="https://github.com/user-attachments/assets/573ebd28-3dbb-4035-aec2-5444facff6d8" />

Previews:


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

##Place the folder inside:
C:\xampp\htdocs\

##Database Setup

1.Open phpMyAdmin
2.Create a database
3.Import your .sql file

##Update your database credentials in the PHP config file:
$host = "localhost";
$user = "root";
$pass = "";
$db   = "database_name";


##Start Apache & MySQL in XAMPP
open http://localhost/p11


##🎥 Media Carousel

Supports images and videos
Auto-sliding carousel
Left / right navigation buttons
Videos autoplay when active and pause when inactive
Fully responsive across devices

##🔒 Security & Best Practices

User inputs sanitized using htmlspecialchars
Uploaded media excluded from version control
.gitignore used for dynamic files

##🌟 Future Enhancements

Fullscreen media viewer
Place-wise image galleries
Map-based travel visualization
Export journal as PDF
Cloud storage support

##👩‍💻 Author

Dharini Thakkar
Travel Journal Project

📜 License

This project is intended for educational purposes.
