cd /var/www/html
# Lancement des composer install
/usr/local/bin/composer install
/usr/local/bin/composer dump-autoload

# Lancement de apache
apache2-foreground