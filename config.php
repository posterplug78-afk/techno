<?php
// ============================================================
//  EduQueue – Configuration
// ============================================================

// ── DATABASE ─────────────────────────────────────────────────
define('DB_HOST', '127.0.0.1');
define('DB_PORT', '3307');
define('DB_NAME', 'eduqueue');
define('DB_USER', 'root');
define('DB_PASS', '');

// ── APP ──────────────────────────────────────────────────────
define('BASE_URL',      'http://localhost/eduqueue');
define('SCHOOL_NAME',   'Your School Name');
define('SCHOOL_DOMAIN', '@school.edu');

// ── SMS (Semaphore) ───────────────────────────────────────────
define('SEMAPHORE_API_KEY',     'YOUR_SEMAPHORE_API_KEY');
define('SEMAPHORE_SENDER_NAME', 'SCHOOLQ');

// ── reCAPTCHA v3 ─────────────────────────────────────────────
define('RECAPTCHA_SITE_KEY',   'YOUR_RECAPTCHA_SITE_KEY');
define('RECAPTCHA_SECRET_KEY', 'YOUR_RECAPTCHA_SECRET_KEY');
define('RECAPTCHA_MIN_SCORE',  0.5);

// ── QUEUE SETTINGS ───────────────────────────────────────────
define('SMS_NOTIFY_THRESHOLD', 3);
define('MAX_CALL_ATTEMPTS',    3);

// ── RATE LIMITING ─────────────────────────────────────────────
define('RATE_LIMIT_ATTEMPTS', 3);
define('RATE_LIMIT_MINUTES',  10);

// ── TIMEZONE ─────────────────────────────────────────────────
date_default_timezone_set('Asia/Manila');