//make table
php artisan make:migration create_users_table

//Schema in table
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamp('date');
            $table->boolean('active')->default(true);
            $table->rememberToken();
            $table->timestamps();
        });

// migrate
php artisan migrate

//crud
php artisan admin:generate events


//re-compile
npm run dev
or 
npm run craftable-dev

//change permission
php artisan permission:cache-reset
