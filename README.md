# docker-sql

Feel free to fork this repository to get mysql, prostgres and mongodb available in local without a headache

## How to launch all containers along with adminer 
Note Adminer is a simple GUI allowing you to manage your databases 

### Setup

- `cd main-postres-pgadmin` and run `docker compose up -d --build`
- repeat the step above for each folders
  - `main-mysql-phpmyadmin`
  - `main-mongo-db`
  - `adminer`
 
You're all setup!

Option 1 => adminer help you to manage your databases and tables

![adminer-gui](https://github.com/user-attachments/assets/56f371af-c398-4b79-9fdd-8a6dce26e526)

![adminer-gui-1](https://github.com/user-attachments/assets/ad303df1-d86d-44cc-a0ce-688de31e5e15)

![adminer-gui-2](https://github.com/user-attachments/assets/9e94916a-d06a-477a-beb1-88bee2acff3f)

Option 2 => You don't like adminer? Use phpMyAdmin with mysql or pgAdmin with postgres

phpmyadmin use theses credentials 
- user => root
- password => root
- url => http://localhost:8081/

![phpmyadmin](https://github.com/user-attachments/assets/847ddb11-e512-4f91-a7ad-fda73740c7a6)

pgadmin use these credentials
- login => admin@admin.com
- password => admin
- url => http://localhost:5050/

![pgadmin](https://github.com/user-attachments/assets/e8169e21-2dd6-4ce4-947d-f94f3678b936)
![pgadmin-1](https://github.com/user-attachments/assets/527a42d3-ec86-429f-a3e9-7671a955a319)

Note: when you create a new server of databases, you will be asked to enter a username and password. use `root` for both

mongodb GUI uses these credentials 
- user => root
- password => root
- url => http://localhost:8081/

![mongo-gui](https://github.com/user-attachments/assets/18278a60-93b9-4aaf-b639-3f3120da4375)

![mongo-gui-1](https://github.com/user-attachments/assets/48a684b1-f928-4602-882c-2b690eeeb33c)






