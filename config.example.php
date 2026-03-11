<?php
// ============================================================
//  EduQueue – Configuration Example
//  Copy this file to config.php and fill in your own values
// ============================================================

// ── DATABASE ─────────────────────────────────────────────────
define('DB_HOST', 'your_db_host');       // e.g. 127.0.0.1 or railway host
define('DB_PORT', '3306');               // 3306 for online hosts, 3307 for XAMPP
define('DB_NAME', 'your_db_name');       // e.g. eduqueue
define('DB_USER', 'your_db_user');       // e.g. root
define('DB_PASS', 'your_db_password');   // blank for XAMPP default

// ── APP ──────────────────────────────────────────────────────
define('BASE_URL',      'https://your-app-url.railway.app'); // no trailing slash
define('SCHOOL_NAME',   'Your School Name');
define('SCHOOL_DOMAIN', '@school.edu');  // only this email domain can register

// ── SMS (Semaphore – Philippine SMS Gateway) ─────────────────
// Get your API key from https://semaphore.co
define('SEMAPHORE_API_KEY',     '');     // paste your API key here
define('SEMAPHORE_SENDER_NAME', 'SCHOOLQ'); // max 11 chars

// ── reCAPTCHA v3 ─────────────────────────────────────────────
// Get your keys from https://www.google.com/recaptcha/admin
define('RECAPTCHA_SITE_KEY',   '');      // paste site key here
define('RECAPTCHA_SECRET_KEY', '');      // paste secret key here
define('RECAPTCHA_MIN_SCORE',  0.5);     // 0.0 to 1.0, lower = more lenient

// ── QUEUE SETTINGS ───────────────────────────────────────────
define('SMS_NOTIFY_THRESHOLD', 3);  // send SMS when this many people are ahead
define('MAX_CALL_ATTEMPTS',    3);  // auto-skip after this many missed calls

// ── RATE LIMITING ─────────────────────────────────────────────
define('RATE_LIMIT_ATTEMPTS', 3);   // max form submissions per window
define('RATE_LIMIT_MINUTES',  10);  // time window in minutes

// ── TIMEZONE ─────────────────────────────────────────────────
date_default_timezone_set('Asia/Manila');
```

---

That's it. You now have two files:
```
eduqueue/
├── config.php          ← your real config (never share or upload this)
└── config.example.php  ← safe to upload to GitHub (no real passwords)
```

And make sure your `.gitignore` file contains this so `config.php` never gets pushed to GitHub accidentally:
```
config.php