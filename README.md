![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
![MySql](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)


- Project deployed in yandex.cloud on http://84.201.142.17/

Test project on Laravel realize CRUD-User model.
- Auth user can edit, delete and register profile.
- Also Auth user can modify all other profiles: it means that every user is SU (this functionality needed to rewrite: need to add ROLES (admin-user))
- Unauth user can SignUp or see main page with the list of users.


Used:
- laravel8
- PHP8
- Nginx
- Blade
- Bootstrap
- Yandex.Cloud


Below are links used to find info:
# Structure
https://getcomposer.org/download/
https://sourceforge.net/projects/xampp/
# Migrations of extra fields
https://crazytechspirit.wordpress.com/2017/12/02/laravel-adding-custom-field-by-creating-new-migration-with-column-fields/

# DatetimePicker
https://itchief.ru/bootstrap/datetimepicker

# Problems
https://stackoverflow.com/questions/24850136/composer-error-php-extension-fileinfo-is-missing-from-your-system
https://qna.habr.com/q/531707
https://sebhastian.com/npm-err-code-etarget/
# Vite manifest
Vite manifest not found at
https://stackoverflow.com/questions/73045616/vite-manifest-not-found

# Deploy
https://serverspace.ru/support/help/how-to-deploy-laravel-app-at-ubuntu
https://ilavista.by/blog/razvertyvanie-laravel-proekta-na-servere-ubuntu-2004#server-pre-configuration

# remove ip from hosts
ssh-keygen -f "/home/<user>/.ssh/known_hosts" -R "xx.xxx.xxx.xx"

# field types of laravel
https://laravel.ru/docs/v4/schema
