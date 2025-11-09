# WordPress Plugin CI/CD Setup – WPCS & PHPUnit Workflows

This repository contains the **Under Construction Maintenance Mode** WordPress plugin configured with **GitHub Actions** workflows for automated testing and coding standards checks.

## 🚀 Objective

Set up automated CI workflows to:
1. Check WordPress Coding Standards (WPCS)
2. Run PHPUnit tests for plugin activation, deactivation, and functionality

---

## 🧩 Task 1: WordPress Coding Standards (WPCS)

### 🎯 Goal
Ensure the plugin follows official **WordPress PHP coding standards** using **WPCS** via GitHub Actions.

### ⚙️ Implementation Steps
1. Created a public GitHub repository named:
2. Installed and configured **WordPress Coding Standards (WPCS)** using Composer.
3. Added `.github/workflows/wpcs.yml` workflow file to automatically run WPCS checks on every **push** and **pull request**.
4. Workflow uses:
- `shivammathur/setup-php` to set up PHP
- `composer` to install dependencies
- `wpcs` to run coding standards check

### ✅ Expected Result
- Workflow runs automatically on every push.
- WPCS check results appear in the **Actions** tab on GitHub.

---

## 🧪 Task 2: PHPUnit Testing Workflow

### 🎯 Goal
Evaluate automated testing and CI integration skills using PHPUnit and WordPress testing environment.

### 🧱 Test Cases Implemented

#### 1️⃣ Plugin Activation & Deactivation
- Ensures the plugin activates and deactivates without errors.
- Confirms that required settings are correctly added to `wp_options` upon activation.

#### 2️⃣ Maintenance Mode Page Rendering
- Verifies non-logged-in users see the **maintenance mode page** when enabled.
- Ensures logged-in admins can still access the site normally.

### ⚙️ Implementation Steps
1. Created a new workflow file `.github/workflows/phpunit.yml`.
2. Configured it to run automatically on every **push** and **pull request**.
3. Used the custom GitHub Action:
4. Set up **MySQL service** and **WordPress testing environment**.
5. Added test files:
- `tests/bootstrap.php`
- `tests/test-activation-&-deactivation.php`
- `tests/test-maintenance-mode.php`

### ✅ Expected Result

- Workflow runs automatically.
- PHPUnit results are displayed in the Actions tab.

Tests confirm plugin stability and correct maintenance mode behavior.

---

## 🧰 Tools & Technologies Used

| Tool / Framework | Purpose |
|------------------|----------|
| **GitHub Actions** | CI/CD automation |
| **WPCS (WordPress Coding Standards)** | Code quality & standard compliance |
| **PHPUnit** | Unit testing framework |
| **WordPress Testing Framework** | WordPress-specific test environment |
| **PHP 8.2** | Primary runtime |
| **MySQL 5.7** | Database for testing environment |

---

## 📸 Submission Details

- **Repository:** [https://github.com/muhammadusman349/wpcs-check-usman]  
- **Workflows Included:**  
- ✅ `wpcs.yml` – WordPress Coding Standards Check  
- ✅ `phpunit.yml` – PHPUnit Test Workflow  
- **Results:**  
Successful workflow runs verified in **GitHub Actions** tab.

---

## 👨‍💻 Author

**Muhammad Usman**  
[GitHub Profile](https://github.com/muhammadusman349)  
