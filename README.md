# usedPhones-Project

---

## 📖 Table of Contents  

- [📌 Overview](#-overview)  
- [🚀 Features](#-features)  
- [🛠️ Technologies Used](#-technologies-used)  
- [⚙️ Installation](#-installation)  
  - [1️⃣ Install Required Software](#1️⃣-install-required-software)  
  - [2️⃣ Configure MySQL & Import Database](#2️⃣-configure-mysql--import-database)  
  - [3️⃣ Configure MySQL User](#3️⃣-configure-mysql-user)  
  - [4️⃣ Clone the Project & Run Locally](#4️⃣-clone-the-project--run-locally)  
  - [🔄 Alternative Setup Using PHP Server in VS Code](#🔄-alternative-setup-using-php-server-in-vs-code)  
- [🗄️ Database Schema](#-database-schema)  
- [📝 License](#-license)  

---

## 📌 Overview  
This project was developed as part of a university course at the **University of Thessaly**. It is an application designed for listing and managing used phones. The project was created strictly for educational purposes and is not intended for professional use.  

While it does not follow best coding practices and is not fully developed to professional standards, it served as a valuable learning experience. Through this project, I gained foundational skills in **PHP** and focused primarily on achieving a good academic grade rather than refining it for real-world deployment.

---

## 🚀 Features  
The application provides the following functionalities:  

- ✅ **User Registration & Authentication**: Users can create an account and complete a simulated email verification process.  
- ✅ **Login System**: Users can log into their accounts after registration.  
- ✅ **Post a Used Phone**: Users can create listings for used phones (currently, image uploads are not supported).  
- ✅ **Edit or Delete Listings**: Users can modify or remove their phone listings as needed.  

Although the application lacks certain advanced features, it fulfills the basic requirements of a used phone listing system.

---


## 🛠️ Technologies Used  
The project was built using the following technologies and tools:  

- **Frontend:** HTML, CSS, JavaScript  
- **Backend:** PHP (with PDO connection)  
- **Database:** MySQL, MySQL Workbench  
- **Development Environment:** XAMPP, Visual Studio Code  
- **Version Control:** Git  

---

## ⚙️ Installation  

Follow these steps to set up and run the project on your local machine:  

### **1️⃣ Install Required Software**  
Download and install the following tools:  

- 🔗 [XAMPP](https://www.apachefriends.org/index.html) (Includes Apache & MySQL)  
- 🔗 [MySQL Workbench](https://www.mysql.com/products/workbench/)  
- 🔗 [Visual Studio Code](https://code.visualstudio.com/)  

### **2️⃣ Configure MySQL & Import Database**  
1. Open **XAMPP** and activate **Apache** and **MySQL**.  
2. Open **MySQL Workbench** and create a new database connection with a name of your choice.  
3. Import the database schema:  
   - Open MySQL Workbench and load `usedphones_schema.mwb`.  
   - Inside the schema, import the SQL files:  
     - `usedphones_phones.sql`  
     - `usedphones_users.sql`  
   - Run the SQL code to apply the structure and data.  
4. (Optional) Verify data by executing:  
   ```sql
   SELECT * FROM users;
   SELECT * FROM phones;
This step ensures that sample users and phones are available for testing.  

### **3️⃣ Configure MySQL User**  
1. Click the **Admin** button next to MySQL in XAMPP to open **phpMyAdmin**.  
2. Navigate to the **usedphones** database.  
3. Go to the **Privileges** tab and create a new user:  
   - **Username:** `usedPhonesUser`  
   - **Password:** `123`  
   - **Grant all privileges** to this user.  


### **4️⃣ Clone the Project & Run Locally**  
1. Navigate to the XAMPP `htdocs` folder:  
   ```sh
   cd /path/to/xampp/htdocs
2. Open your browser and visit:
   ```sh
   http://localhost/USEDPHONES/usedPhones/
   
---

   ### **🔄 Alternative Setup Using PHP Server in VS Code**  
Instead of using XAMPP, you can run the project directly in **Visual Studio Code**:  

1. Install the **PHP Server** extension in VS Code.  
2. Follow **Step 3** above to configure MySQL and create the database user.  
3. Run the **PHP Server** plugin from VS Code to start the project.  

---

## 🗄️ Database Schema  
The project uses a **MySQL database** with the following structure:  

- **Users Table:** Stores user account details.  
- **Phones Table:** Stores phone listings posted by users.  

The database schema can be found in the `usedphones_schema.mwb` file.  

---

## License
This project is licensed under the MIT License. See the LICENSE file for details.

---

