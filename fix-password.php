Options -Indexes
RewriteEngine On

# Block direct access to sensitive files
<FilesMatch "^(config\.php|schema\.sql|fix-password\.php|\.env)$">
    Order allow,deny
    Deny from all
</FilesMatch>

# Block access to hidden files (.git, .gitignore, etc.)
<FilesMatch "^\.">
    Order allow,deny
    Deny from all
</FilesMatch>

# Security headers
<IfModule mod_headers.c>
    Header always set X-Content-Type-Options "nosniff"
    Header always set X-Frame-Options "SAMEORIGIN"
    Header always set X-XSS-Protection "1; mode=block"
    Header always set Referrer-Policy "strict-origin-when-cross-origin"
</IfModule>

# PHP settings
<IfModule mod_php.c>
    php_flag display_errors Off
    php_flag log_errors On
</IfModule>
