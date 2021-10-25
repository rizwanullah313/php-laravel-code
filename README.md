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



-> php artisan make:model Post
-> create model

-> php artisan make:controller postsController
-> create controller


-> Use of php artisan tinker

-> Insert data using terminals
php artisan tinker
Psy Shell v0.10.9 (PHP 7.4.9 — cli) by Justin Hileman
>>> $post = new \App\Models\Post;
=> App\Models\Post {#3514}
>>> $post->title = " vue js title";
=> " vue js title"
>>> $post->body = "vue js Post body";
=> "vue js Post body"
>>> $post->category = "vuejs";
=> "vuejs"
>>> $post->save();
=> true
>>> 


-> Another Insert Method
>>> $post = App\Models\Post::create(['title' => 'angular title', 'body' => 'Angular Body', 'category' => 'Angular']);
=> App\Models\Post {#4453
     title: "angular title",
     body: "Angular Body",
     category: "Angular",
     updated_at: "2021-10-25 19:30:19",
     created_at: "2021-10-25 19:30:19",
     id: 5,
   }
>>> 



-> Display Data
>>> $post = App\Models\Post::all();
=> Illuminate\Database\Eloquent\Collection {#4304
     all: [
       App\Models\Post {#3524
         id: 1,
         title: "New title",
         body: "New Post Body",
         created_at: "2021-10-25 18:52:50",
         updated_at: "2021-10-25 18:52:50",
         category: "Laravel",
       },
       App\Models\Post {#3523
         id: 2,
         title: "Update Title",
         body: "Updated Body",
         created_at: "2021-10-25 18:53:31",
         updated_at: "2021-10-25 19:16:54",
         category: "Laravel",
       },
       App\Models\Post {#3511
         id: 4,
         title: " vue js title",
         body: "vue js Post body",
         created_at: "2021-10-25 19:26:14",
         updated_at: "2021-10-25 19:26:14",
         category: "vuejs",
       },
       App\Models\Post {#4456
         id: 5,
         title: "angular title",
         body: "Angular Body",
         created_at: "2021-10-25 19:30:19",
         updated_at: "2021-10-25 19:30:19",
         category: "Angular",
       },
     ],
   }
>>> 


-> fetch single data or specific data 
>>> $post = App\Models\Post::find(2);
=> App\Models\Post {#4454
     id: 2,
     title: "Update Title",
     body: "Updated Body",
     created_at: "2021-10-25 18:53:31",
     updated_at: "2021-10-25 19:16:54",
     category: "Laravel",
   }
>>> 


->
>>> $post = App\Models\Post::find([2,5]);
=> Illuminate\Database\Eloquent\Collection {#3523
     all: [
       App\Models\Post {#4239
         id: 2,
         title: "Update Title",
         body: "Updated Body",
         created_at: "2021-10-25 18:53:31",
         updated_at: "2021-10-25 19:16:54",
         category: "Laravel",
       },
       App\Models\Post {#3832
         id: 5,
         title: "angular title",
         body: "Angular Body",
         created_at: "2021-10-25 19:30:19",
         updated_at: "2021-10-25 19:30:19",
         category: "Angular",
       },
     ],
   }
>>> 


-> update
>>> $post = App\Models\Post::find(2);
=> App\Models\Post {#3524
     id: 2,
     title: "Update Title",
     body: "Updated Body",
     created_at: "2021-10-25 18:53:31",
     updated_at: "2021-10-25 19:16:54",
     category: "Laravel",
   }
>>> $post->title = "new";
=> "new"
>>> $post->body = "newb";
=> "newb"
>>> $post->category = "newc";
=> "newc"
>>> $post->save();
=> true
>>> 


-> for delete
>>> $post = App\Models\Post::find(6);
=> null
>>> $post = App\Models\Post::find(5);
=> App\Models\Post {#3523
     id: 5,
     title: "angular title",
     body: "Angular Body",
     created_at: "2021-10-25 19:30:19",
     updated_at: "2021-10-25 19:30:19",
     category: "Angular",
   }
>>> $post->delete();
=> true
>>> 

