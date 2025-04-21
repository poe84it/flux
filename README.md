# Flux

An open-source web application for streamlining order management in supply chains.

## Overview

**Flux** is an open-source web application designed to streamline order management in a sales department within a supply chain.  
It aims to optimize workflow efficiency by sorting and prioritizing orders based on production time, urgency, and verification pipelines.  
Built with scalability and maintainability in mind, Flux enables small businesses to handle peak order periods effectively while keeping processes intuitive and structured.

## Features

- **Automated Order Sorting** – Orders are ranked based on production timelines and urgency criteria.
- **Manual Prioritization** – Adjustable ranking system to fine-tune processing needs.
- **Role-Based Access Control** – Secure authentication and authorization built-in.
- **Lightweight & Self-Hosted** – Runs on internal infrastructure using Docker and Nix Flakes.
- **Fully Open-Source** – Transparent development, community-driven improvements.

## Tech Stack

- **Backend:** Laravel, MySQL/MariaDB, Eloquent ORM
- **Frontend:** Vue.js with Inertia, TailwindCSS
- **Auth & Middleware:** Laravel authentication scaffolding
- **Deployment:** Docker, Nix Flakes, Self-hosted
- **Future Integrations:** Order scraping, WebSockets for real-time updates

## Why Flux?

This project was born out of a real need for **efficient order management** without relying on proprietary software or third-party services.  
By providing an open-source solution, **Flux empowers businesses** to take full control of their workflow while ensuring sustainability and adaptability for future demands.

## Getting Started

### Prerequisites

- Direnv and Nix package manager (for reproducible builds)
- PHP Composer & NodeJS
- Docker & Docker Compose installed

### Set up Development Environment

- Enable `direnv`:

    ```sh
    direnv allow
    ```

- Install the project dependencies:

    ```sh
    composer install
    npm install
    ```

- Copy the `.env.sail.example` file to `.env` and configure your environment variables:

    ```sh
    cp .env.sail.example .env
    ```

    > **IMPORTANT:**  
    > Don't forget to generate the Application Key. Run the following command:
    >
    > ```sh
    > php artisan key:generate
    > ```

- Enable global write permissions for the `storage`, `public`, and `node_modules` directories:

    ```sh
    chmod o+w .
    chmod o+w -R ./storage ./public ./node_modules
    ```

    > **WARNING:**  
    > This is not secure. It's just a temporary workaround for development purposes to get started.  
    > A permanent solution requires proper **web user configuration**, as detailed [here](http://fideloper.com/user-group-permissions-chmod-apache).  
    > This must be addressed before merging into `main`.

### Running and Operating the Development Server with Sail

- To build and run the Docker containers using `sail`:

    ```sh
    sail up
    ```

    Or use the `-d` flag to run it in the background:

    ```sh
    sail up -d
    ```

- To stop all Sail containers, use `Ctrl-C` if running in the foreground. If launched in the background or from another terminal, use:

    ```sh
    sail down
    ```

- To execute commands inside the running Sail container, prepend them with `sail`. For example:

    ```sh
    # Run database migrations
    sail artisan migrate

    # Start the Vite development server for frontend assets
    sail npm run dev

    # Run Feature and Unit tests
    sail artisan test
    ```

For more information, visit the official [Laravel Sail Documentation](https://laravel.com/docs/12.x/sail).

### Installation

## Contributing

Flux is open for collaboration!  
Contributions are welcome in the form of bug reports, feature requests, and code improvements.  
Simply submit a **Pull Request** or start a discussion in **Issues**.

## License

This project is licensed under the **GNU Affero General Public License (AGPLv3)** — ensuring that all modifications and deployments remain open-source.  
If you deploy or modify Flux as part of a hosted service, you must share your changes under the same license.

For details, refer to the [AGPL License](https://www.gnu.org/licenses/agpl-3.0.html).

---

Flux is the **next step toward smarter order management**.  
Join the journey, refine the process, and optimize your workflow!
