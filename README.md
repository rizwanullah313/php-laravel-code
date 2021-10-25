-> php artisan make:controller userController

-> http://localhost:8000/welcome/?name=abc&address=abcd

-> http://localhost:8000/

-> http://localhost:8000/pofile/3/rizwan

-> sudo /opt/lampp/lampp start

-> php artisan make:migration reate_posts_table
-> posts table name hy is me kuch be liksakty hy

->php artisan migrate
->ye khud ba khud per mysql me tables banadengy database me
->mysql k database k name yaha per env file me change kerna zarory h


->sudo apt-get install php-mysql


->
php artisan migration list

                                       
  Command "migration" is not defined.  
                                       
  Did you mean one of these?           
      make:migration                   
      migrate                          
      migrate:fresh                    
      migrate:install                  
      migrate:refresh                  
      migrate:reset                    
      migrate:rollback                 
      migrate:status   // migration k status batayega                
                                     
-> php artisan migrate:status

-> create another migration
-> php artisan make:migration create_customers_table

-> php artisan migrate:rollback
-> ye last wala execute wapas delete kerdegy


-> php artisan migrate:fresh
-> ye sab refresh kerdega tables and jo changing howey ho like if table modify


-> php artisan make:migration add_abc_to_posts_table
-> ab agar me add_abc_to_posts_table yaha per kuch add kertha ho thu wo posts wali real class me add hojyngy with table in mysql database