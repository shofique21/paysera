
# paysera
<h3>Please run mysql and appache and Follow the command</h3>
<br/>git clone https://github.com/shofique21/paysera.git
<br/>create .env file in root folder
<br/>copy .env.example and paste in .env
<br/>create MySQL database:paysera
<br/>composer update
<br/> if not composer update for any problem php.ini then command: composer update --ignore-platform-req=ext-gd
<br/>php artisan key:generate
<br/>npm install
<br/>php artisan serve
<br/>another new terminal command: npm run dev
<br/>URL:: http://127.0.0.1:8000/
<br/>another new terminal
<br/>php artisan migrate
<br/>php artisan db:seed

<h3>if any cache in project please run below command</h3>
<br/>composer dump-autoload
<br/>php artisan optimize
<br/>php artisan cache:clear
<br/>php artisan route:cache
<br/>php artisan route:clear
<br/>php artisan config:clear

<br/><h2>login credential</h2>
<br/>email:admin@paysera.com
<br/>password:Admin123
<br/>or 
<br/>email:shofique@paysera.com
<br/>password:Shofique123
<p>Make csv file according to exit account indentity_Number or create new Account to get new identity_number and follow the top menubar</p>
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

