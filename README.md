- Project deployed in yandex.cloud on http://84.201.142.17/

Test project on Laravel realize CRUD-User model.
- Auth user can edit, delete and register profile.
- Also Auth user can modify all other profiles: it means that every user is SU (this functionality need to rewrite: need to add ROLES (admin-user))
- Unauth user can SignUp or see main page with the list of users.


Used:
- laravel8
- PHP8
- Nginx
- Blade
- Bootstrap
- Yandex.Cloud


Below are some links i used to find info:
# Structure
https://getcomposer.org/download/
https://sourceforge.net/projects/xampp/

# DatetimePicker
https://itchief.ru/bootstrap/datetimepicker

# Problems
https://stackoverflow.com/questions/24850136/composer-error-php-extension-fileinfo-is-missing-from-your-system
https://qna.habr.com/q/531707

# Deploy
https://serverspace.ru/support/help/how-to-deploy-laravel-app-at-ubuntu/?utm_source=yandex.ru&utm_medium=organic&utm_campaign=yandex.ru&utm_referrer=yandex.ru
https://ilavista.by/blog/razvertyvanie-laravel-proekta-na-servere-ubuntu-2004#server-pre-configuration

# remove ip from hosts
ssh-keygen -f "/home/zerg959/.ssh/known_hosts" -R "84.201.142.17"

# field types of laravel
https://laravel.ru/docs/v4/schema
