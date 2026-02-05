
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

1. Copy the example environment file (then rename the .env.example(copy) to .env):

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
php artisan migrate
```

### Step 5: Run the Server

Start the application:

```
php artisan serve
```

Click the link to view the app: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 📋 Team Roles & Assignments

# *To be posted*

---

## 🤝 Git Workflow Rules

**⚠️ IMPORTANT:** To avoid destroying each other's code, follow these rules strictly.

1. **NEVER push directly to `main` without testing.**
2. **ALWAYS pull the latest changes before starting work:**

```bash
git checkout main
git pull origin main
```

3. **Create your own branch** for your specific feature:

```bash
git checkout -b feature-create-product  # Example for the "Create" branch
```

4. **Save and Upload your work:**

```bash
git add .
git commit -m "Added the form for adding products"
git push origin feature-create-product
```

5. **Merge:** Go to GitHub and open a **Pull Request**.


*OR*

## You can search up how to do it in Source Control in VSCODE
## Meron na dun yung Pull, Push, And Fetch

---
*For Cloud Computing subject*
