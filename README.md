Internal Communication and Marketing Platform
=============================================
![Newsletter](https://github.com/Youcode-Classe-E-2023-2024/Benfill_Newsletter/assets/109225791/d89c38f1-3b6f-42b4-9c8f-d688ea6c6f90)


Overview
--------

Our client, a rapidly growing company in the communication and marketing sector, recognized the increasing need to centralize and streamline its online operations. To address this, the company decided to develop an internal web platform with advanced features to enhance communication, information management, and team collaboration.

Features
--------

### 1\. Newsletter Management (Spatie)

The platform allows the company to send regular newsletters to clients and partners. The integration of the Spatie Newsletter package is crucial for easy creation, sending, and tracking of newsletter campaigns. Intuitive and user-friendly subscription and mailing list management functionalities are implemented.

### 2\. Authentication with Role Management (Policies and Guards)

Security and data privacy are paramount. The platform incorporates a robust authentication system with role-based management using Laravel's policies and guards. Three distinct roles are defined: Administrator, Editor, and Member, each with specific permissions to access and modify designated parts of the platform.

### 3\. Forgot Password and Remember Me Features

To ensure a seamless user experience, the platform includes "forgot password" functionality for users to reset their passwords and "remember me" functionality for automatic login.

### 4\. Media Library (Spatie)

Media management is a key element of the platform. Spatie Media Library is utilized to enable users to upload, organize, and share multimedia files such as images, videos, and documents. Each media item is associated with a specific user or project.

### 5\. Soft Delete

To prevent accidental data loss, the platform implements the "soft delete" feature. Records are not physically deleted from the database but rather marked as deleted, providing the option to restore them if necessary.

### 6\. Middleware

Middleware is employed to manage role-specific permissions, ensuring that each user has access only to the features authorized based on their role.

### 7\. PDF Generation

The platform can generate PDF files from specific data sets. For example, it can produce a monthly report aggregating newsletter campaign performances or a summary of uploaded media over a given period.

### 8\. Database Modeling with 3 Roles

The database is structured to support the three defined roles (Administrator, Editor, Member). Each role has specific tables and relationships, ensuring a clear separation of data and responsibilities within the platform.
