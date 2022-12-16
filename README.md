# tepe codes

Stable: v0.1




	
### SET UP
* Requirements (Already covered with Docker deployment)
	1. Apache/2.4.27 or greater.
	2. MySQL 5.7 or greater.
	3. PHP/7.2.24 or greater.
  
* App Configuration
    1. Add host `tepe.localhost`,
        	see [Edit hosts](https://dinahosting.com/ayuda/como-modificar-el-fichero-hosts).        	
    2. Create `.env` file from `example.env` and set it.
	3. Set `db` instead `localhost` in `.env` while using Docker.
	4. Give Folder permissions:	
	    ```
	    sudo chown -R $USER:www-data storage;
        chmod -R 775 storage;
        sudo chown -R $USER:www-data bootstrap/cache;
        chmod -R 775 bootstrap/cache;
	    ```
	5. Import database from `database/updates/*.sql`  DB
        with `root` user, at `localhost` host, `33063` port.	
	6. Run `composer install`.



### CONTRIBUTION: Guidelines & Documentation

* Git :
    [Gitflow](http://nvie.com/posts/a-successful-git-branching-model).
* Deploy: 
    [Docker Compose](https://docs.docker.com/compose/reference/up)
* Back End:
    [Laravel Lumen]

2022 [Lum Labs]

