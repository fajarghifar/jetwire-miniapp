## ✨ Project Overview

Welcome to **Jetwire MiniApp**, a powerful Laravel application built using Jetstream to provide a seamless user experience with full-featured authentication, profile management, and listings functionalities. This app goes beyond the basics, offering a multi-step registration process with user profile pictures, phone numbers, and location.

![Screenshot](https://github.com/user-attachments/assets/0ac7c4dc-e4a9-4ca0-8a49-fee6715e2671)

## 🌟 Key Features

- **User Authentication**: Registration, login, email verification, password recovery, and profile editing.
- **Multi-step Registration**: Capture profile picture, phone number, and location during sign-up.
- **Listings Management**: Create, edit, view, and delete listings with powerful filtering options.
- **Saved Listings**: Users can like and save listings for later.
- **Messaging System**: Users can send messages directly to listing owners with email notifications and spam prevention through throttling.

## 🚀 Getting Started

1. **Clone or Download the Repository**
    ```bash
    git clone https://github.com/fajarghifar/jetwire-miniapp.git
    ```

2. **Setup Project**
    ```bash
    # Navigate to the project directory
    cd jetwire-miniapp

    # Install dependencies
    composer install
    npm install

    # Open the project in your preferred text editor
    code .
    ```

3. **Configure Environment**
    Rename or copy the `.env.example` file to `.env`, then generate the application key:
    ```bash
    php artisan key:generate
    ```

4. **Database Setup**
    Set up your database credentials in the `.env` file.

5. **Run Migrations and Seeders**
    ```bash
    php artisan migrate --seed
    ```

6. **Compile Frontend Assets**
    ```bash
    npm run dev
    ```

7. **Start the Application**
    ```bash
    php artisan serve
    ```

## 🛠 Contributing

Got ideas to improve the project? Feel free to submit a PR or create a feature request issue. Contributions are welcome!

## 📝 License

This project is licensed under the [MIT License](LICENSE).

---

> Find me on [GitHub](https://github.com/fajarghifar) &nbsp;&middot;&nbsp; [YouTube](https://www.youtube.com/@fajarghifar) &nbsp;&middot;&nbsp; [Instagram](https://instagram.com/fajarghifar) &nbsp;&middot;&nbsp; [LinkedIn](https://www.linkedin.com/in/fajarghifar/)

---
