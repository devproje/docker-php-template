# docker-php-template
PHP + Nginx + MariaDB + PHPMyAdmin docker compose template

## 1. How to use
1. First, clone code or click use template button. 
   - If you clone this code, follow this command.
```bash
git clone https://github.com/devproje/docker-php-template.git
```
2. Cloned code or make template after, you can edit files in `/src` directory.

## 2. How to run
- If you not installed docker, please install [docker](https://docker.com) first.
- After install docker, you are open IDE and follow this command.
```bash
docker compose up -d
```

## 3. Port and URLs
- This service binding at 80 port.
- If you edit nginx configs, edit `/config/default.conf` file.
- Your PHP web application URL: http://localhost
- PHPMyAdmin URL: http://localhost/pma

## 4. LICENSE
- This project followed [MIT License](https://github.com/devproje/docker-php-template/blob/master/LICENSE).
