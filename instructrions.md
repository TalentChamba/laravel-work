
I created a Laravel  a web application based on the supplied instructions for my assesmet and the below is how you can get the project to run

- Go ahead and clone the project ```git clone https://github.com/TalentChamba/laravel-work-assesment.git```
- After the project is cloned open the  .env file i have created a mysql connection string that you will need to create on your end - no password neccessary but just the name of the database.
- After the connection is set go ahead and run ```php artisan serve```
- I have created everything required to run database faker/ so go ahead and type the following command ```php artisan migrate``` when run that command inside the project directory all the require tables will be created based on the created models.
- Now run the following command ```php artisan migrate:refresh --seed``` once that command is run check the created tables with the data specified.
- To run the created api that performs some of the functions on section 2 point c of the assesment document in your postman you can type the following ```http://127.0.0.1:8000/api/messages/2/2019-09-11```.
- To view the api call type the following in your browser ```http://127.0.0.1:8000/chart-js/10/2019-09-11```


Please note that due to time i could not complete end to end what was required of me - i tried to just get the base working.
