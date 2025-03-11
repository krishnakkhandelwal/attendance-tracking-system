# Attendance Tracking System (ATS)

A web-based attendance management system developed for MIT World Peace University's School of Computer Engineering and Technology. This system provides an efficient way to track, manage, and visualize student attendance data.

## Features

- **User Login**
  - PRN (Permanent Registration Number) based login

- **Dashboard**
  - Real-time attendance statistics
  - Visual representations using circular progress indicators
  - Quick access to subject-wise attendance breakdowns
  - Graphical attendance trend analysis

- **Attendance Management**
  - Subject-wise attendance tracking
  - Period-wise attendance recording (8 periods per day)
  - Historical attendance data viewing
  - Attendance modification requests

## Prerequisites

- PHP 7.4 or higher
- MySQL 5.7 or higher
- XAMPP/LAMP/MAMP server
- Web browser (Chrome/Firefox/Safari recommended)

## Installation

1. Clone the repository or download the source code
2. Place the project folder in your web server's root directory: `htdocs/`


3. Import the database:
   - Open MySQL Workbench or phpMyAdmin
   - Create a new database
   - Import the provided SQL file

4. Configure the database connection:
   ```php
   // Edit config.php
   define('DB_HOST', 'localhost');
   define('DB_USER', 'your_username');
   define('DB_PASS', 'your_password');
   define('DB_NAME', 'attendance_db');
   ```

## Project Structure

```
attendance-tracking-system/
├── authenticate.php     # Handles user authentication
├── config.php          # Database and system configuration
├── dashboard.php       # Main dashboard interface
├── dash.php           # Dashboard data processing
├── hash_password.php   # Password hashing utility
├── login.php          # Login interface
├── logout.php         # Session termination
├── request_change.php  # Attendance modification requests
├── subject_attendance.php # Subject-wise attendance view
├── tablebutton.php    # Table interface components
├── assets/            # CSS, JavaScript, and images
└── README.md          # Project documentation
```

## Core Components

### 1. Authentication System (`authenticate.php`, `login.php`)
- Handles user login verification
- Implements secure password checking
- Manages session creation

### 2. Configuration (`config.php`)
- Database connection settings
- System-wide constants
- Session configuration

### 3. Dashboard (`dashboard.php`, `dash.php`)
- Displays attendance statistics
- Generates visual representations
- Handles data processing for display

### 4. Attendance Management
- `subject_attendance.php`: Subject-wise view
- `request_change.php`: Modification requests
- `tablebutton.php`: Interface components

## Security Features

- Password hashing using PHP's native functions
- Prepared statements to prevent SQL injection
- Session-based authentication
- Input validation and sanitization
- Secure error handling

## Usage

1. Start your local server (XAMPP/WAMP/MAMP)
2. Open a web browser and navigate to:
   ```
   http://localhost/attendance-tracking-system/
   ```
3. Log in using your PRN and password
4. Access features based on your role (Teacher/Student)

## Development Tools Used

- VSCode - Code editor
- XAMPP Server - Local development environment
- MySQL Workbench - Database management
- Figma - UI/UX design
- Git - Version control

## Future Enhancements

- Mobile application integration
- Teacher role modifications
- ERP system integration

## Contributors

- Ayush Kadali (1032232229)
- Krishna Khandelwal (1032232078)
- Dvit Gohil (1032232208)
- Parth Tupe (1032231918)

## Project Supervisor
Dr. Akshita Chanchlani


## References

- [W3Schools HTML Tutorial](https://www.w3schools.com/html/)
- [W3Schools CSS Tutorial](https://www.w3schools.com/css/)
- [GeeksforGeeks PHP Tutorial](https://www.geeksforgeeks.org/php-tutorial/)
- [GeeksforGeeks JavaScript Tutorial](https://www.geeksforgeeks.org/javascript/)
