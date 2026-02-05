# CARS CRUD (Laravel CRUD)
---

## Installation Guide (For Team Members Na Malolopit)

**Prerequisites:**
Ensure you have the following installed on your machine:
* [XAMPP](https://www.apachefriends.org/) (for PHP & MySQL)
* [Composer](https://getcomposer.org/)
* [Git](https://git-scm.com/)

*I assume you all have these already*

### Step 1: Clone the Repository
Open your terminal (Git Bash or VS Code) and run:
```
git clone https://github.com/Shaiyon69/CRUD_LAB3.git
cd CRUD_LAB3
```

*OR*

#### Kung alala niyo parin yung steps ng pagcopy ng repo na tinuro ni sir Facun yung process nalang na yun

### Step 2: Install Dependencies

Download the required Laravel libraries (the `vendor` folder):

```
composer install
```

### Step 3: Configure Environment

1. Copy and paste `.env.example` file then rename the `.env.example(copy)` to `.env`:

```
cp .env.example .env
```

2. Generate your unique application security key:

```
php artisan key:generate
```

3. Open the `.env` file in VS Code and check your database settings:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crud_db   # <--- CRUD Database nalang para pareparehas
DB_USERNAME=root
DB_PASSWORD=
```

### Step 4: Setup Database

1. Open **XAMPP Control Panel** and start **Apache** and **MySQL**.
2. Go to `http://localhost/phpmyadmin` and create a new database named `crud_db`.
3. Run the migrations to create the tables:

```
php artisan migrate:fresh --seed
```

### Step 5: Run the Server

Start the application:

```
php artisan serve
```

Click the link to view the app: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 📋 Team Roles & Assignments

### *To be posted*
---

## 🤝 Git Workflow (How to Submit Work)

**⚠️ CRITICAL RULE:** The `main` branch is **PROTECTED**. You cannot push to it directly. You must use a Pull Request.

1. **Pull the latest code first:**
```bash
git checkout main
git pull origin main
```


2. **Create your own branch:**
```bash
git checkout -b feature-delete-car-logic   # (Change name based on your task)
```


3. **Do your work... then Save & Push:**
```bash
git add .
git commit -m "Finished the delete function"
git push origin feature-delete-car-logic
```


4. **Submit:**
* Go to GitHub.
* Click **"Compare & pull request"**.
* Wait for the Leader to approve and merge it.


*OR*

## You can search up how to do it in Source Control in VSCODE
## Meron na dun yung Pull, Push, And Fetch 
## Pero since need ng PULL REQUEST APPROVAL para di watak watak yung codespace

---
*For Cloud Computing subject*
