# OuiVerte!

OuiVerte is a simple PHP Website.

## Installation

1. **Get the Code**

   - Clone the repository:
     ```bash
     git clone https://github.com/al-kafi-sohag/OuiVerte.git
     ```
   - Or download the ZIP file from the repository and extract it

2. **Server Requirements**

   - PHP 7.4 or higher
   - Apache web server with mod_rewrite enabled

3. **Configuration**
   Open `inc/config.php` and modify the following constants according to your setup:

   ```php
   define("BASE_URL", "your-website-url");
   define("APP_NAME", "your-app-name");
   define("APP_SLOGAN", "your-app-slogan");
   ```

4. **Web Server Configuration**
   - Make sure the `.htaccess` file is present in the root directory
   - Ensure your web server has the required permissions to read and execute the files

## Security Features

- CSRF Protection
- XSS Protection
- Content Security Headers
- Frame Protection

## Project Structure

```
OuiVerte/
├── assets/        # Static assets (CSS, JS, images)
├── inc/           # Core PHP includes
├── logs/          # Application logs
├── pages/         # Application pages
└── vendor/        # Dependencies (not required)
```

## License

This project is licensed under the terms included in the LICENSE file.

## Support

For issues and feature requests, please create an issue in the repository.
