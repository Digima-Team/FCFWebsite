#!/bin/sh

echo "🎬 entrypoint.sh: [$(whoami)] [PHP $(php -r 'echo phpversion();')]"

composer dump-autoload --no-interaction --no-dev --optimize

echo "🎬 artisan commands"

# cp /srv/app/env/.env /srv/app/.env

# 💡 Group into a custom command e.g. php artisan app:on-deploy
# php artisan optimize
php artisan migrate --no-interaction --force
php artisan config:clear
php artisan config:cache
php artisan route:cache
php artisan event:cache
php artisan view:clear
# php artisan opcache:compile --force

echo "🎬 add aliases"
alias ..="cd .."
alias ...="cd ../.."
alias ll="ls -alF"

echo "🎬 start supervisord"

supervisord -c $LARAVEL_PATH/.deploy/config/supervisor.conf
