## Installation
1. composer install
2. Create .env from .env.example and update database credential in .env
3. php artisan migrate
4. php artisan jwt:secret
5. Make storage directory writable

## Import Content
##### Import Category
`php artisan import:category url{local file path or web url}`
##### Import Customer
`php artisan import:customer url{local file path or web url}`
##### Import Author
`php artisan import:author url{local file path or web url}`
