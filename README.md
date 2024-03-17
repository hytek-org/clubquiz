# ClubQuiz App

ClubQuiz is a web application built using the Laravel framework for organizing and managing quizzes for clubs and organizations. This README file provides an overview of the application, including its features, installation instructions, and usage guidelines.

## Features

-   User authentication: Allows users to sign up, sign in, and manage their profiles.
-   Quiz creation: Enables administrators to create quizzes with customizable questions and answers.
-   Quiz participation: Allows registered users to participate in quizzes and track their scores.
-   Leaderboard: Displays the top scorers of quizzes in a leaderboard.
-   Admin panel: Provides an interface for administrators to manage quizzes, users, and other settings.

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/hytek-org/clubquiz
    ```

2. Navigate to the project directory:

    ```bash
    cd clubquiz
    ```

3. Install dependencies using Composer and npm:
    ```bash
    composer install
    ```
    ```bash
    npm install
    ```
4. Copy the `env.local` file to `.env`:

    ```bash
    cp env.local .env
    ```

5. Generate an application key:
    ```bash
    php artisan key:generate
    ```
    ````bash
   php artisan storage:link
   ```
6. Configure your database connection in the `.env` file:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

10. Visit `http://localhost:8000` in your web browser to access ClubQuiz.

## Usage

1. Register a new account or sign in if you already have one.
2. Explore available quizzes and select one to participate in.
3. Answer the questions of the quiz and submit your responses.
4. View your score and compare it with others on the leaderboard.
5. If you're an administrator, access the admin panel to create, manage, and delete quizzes as well as manage users.

## Contributing

Contributions to ClubQuiz are welcome! To contribute:

1. Fork the repository.
2. Create a new branch for your feature or bug fix.
3. Make your changes and ensure tests pass.
4. Commit your changes with clear commit messages.
5. Push your changes to your fork.
6. Submit a pull request to the main repository.

## License

ClubQuiz is open-source software licensed under the [GNU license](LICENSE).

## Support

For any questions, issues, or inquiries, please contact us at [support@hytek.org.in](mailto:support@hytek.org.in).

---



````
