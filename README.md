# ☁️ CloudNotes - Cloud Based Notes Management System

## 📌 Project Overview

CloudNotes is a cloud-based notes management application that allows users to securely create, view, edit, and delete personal notes.

The application is deployed on **AWS Cloud Infrastructure** using **Amazon EC2** as a web server and **Amazon RDS MySQL** as a cloud database.

This project demonstrates complete cloud deployment, server configuration, and database integration.

---

## 🚀 Features

### User Features

- User Registration
- User Login
- Create Notes
- View Notes Dashboard
- Edit Existing Notes
- Delete Notes
- Manage User Profile

### Cloud Features

- Cloud-based database storage
- Application hosted on AWS EC2
- Database hosted on AWS RDS
- Remote database connectivity
- Linux server deployment

---

## 🛠️ Technology Stack

### Frontend

- HTML
- CSS
- JavaScript

### Backend

- PHP

### Database

- MySQL
- Amazon RDS MySQL

### Cloud Services

- Amazon EC2
- Amazon RDS
- AWS Security Groups

### Web Server

- Apache HTTP Server

### Operating System

- Amazon Linux

---

## ☁️ AWS Cloud Deployment

### Amazon EC2

Used as an application server for hosting the PHP website.

Deployment steps:

1. Created an EC2 Linux instance
2. Installed Apache Web Server
3. Installed PHP environment
4. Uploaded application files
5. Configured security group rules
6. Hosted the application using EC2 public IP

---

### Amazon RDS MySQL

Used as a cloud database for storing application data.

Database Configuration:

- Database Engine: MySQL
- Database Name: cloudnotes
- Port: 3306

---

## 🏗️ Project Architecture

```
              User Browser
                   |
                   |
                   v
          AWS EC2 Instance
       (Apache + PHP Application)
                   |
                   |
                   v
          AWS RDS MySQL Database
          (Cloud Database Storage)
```

---

## 📂 Project Structure

```
CloudNotes/

│
├── index.php          # Home Page
├── register.php       # User Registration
├── login.php          # User Login
├── logout.php         # Logout
│
├── dashboard.php      # Notes Dashboard
├── add_note.php       # Create Note
├── edit_note.php      # Update Note
├── delete_note.php    # Delete Note
├── view_note.php      # View Note
│
├── profile.php        # User Profile
├── config.php         # Database Connection
│
├── style.css          # Website Styling
└── script.js          # JavaScript Functions
```

---

## 🔐 Security Configuration

AWS Security Groups configured for:

| Service | Port |
|---------|------|
| SSH | 22 |
| HTTP | 80 |
| MySQL | 3306 |

Security implementation:

- Controlled EC2 access
- Restricted database connectivity
- Managed cloud firewall rules

---

## 🎯 Learning Outcomes

Through this project, I learned:

- AWS EC2 deployment
- AWS RDS database configuration
- Linux server management
- Apache web server setup
- PHP and MySQL integration
- Cloud application deployment
- Basic AWS security practices

---

## 🔮 Future Enhancements

- Add AWS S3 file storage
- Implement HTTPS using SSL certificate
- Add email verification
- Add Docker deployment
- Add CI/CD pipeline using GitHub Actions

---

## 👩‍💻 Author

**Pallavi Chaure**

Computer Engineering Student

GitHub:  
https://github.com/pallavichaure

---

## ⭐ Project Status

✅ Completed  
✅ Deployed on AWS EC2  
✅ Connected with AWS RDS MySQL  
✅ Source Code Available on GitHub
