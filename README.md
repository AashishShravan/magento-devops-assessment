# Magento 2 DevOps Assessment

## Project Overview

This repository contains a production-oriented Dockerized deployment of **Adobe Commerce (Magento 2)** running on an AWS EC2 instance using Docker Compose.

The objective of this implementation was to deploy Magento as a containerized application while following DevOps best practices for service isolation, reproducibility, security, and maintainability.

The deployment consists of dedicated containers for the web server, PHP-FPM, database, cache, search engine, scheduled jobs, and database administration.

The environment was implemented and tested on an **AWS EC2 Debian** instance using **Docker Compose**.

---

# Architecture

```
                        Internet
                            │
                     test.dyna.com
                            │
                  HTTP (80) / HTTPS (443)
                            │
                    ┌──────────────────┐
                    │      NGINX       │
                    └────────┬─────────┘
                             │
                             ▼
                    ┌──────────────────┐
                    │     PHP-FPM      │
                    └────────┬─────────┘
                             │
                        Magento 2
                             │
        ┌──────────────┬──────────────┬──────────────┐
        │              │              │              │
        ▼              ▼              ▼              ▼
     MySQL          Redis        OpenSearch       Cron

                             │
                             ▼
                      phpMyAdmin (Port 8080)
```

---

# Infrastructure

| Component               | Details                    |
| ----------------------- | -------------------------- |
| Cloud Provider          | AWS                        |
| Compute                 | EC2                        |
| Operating System        | Debian Linux               |
| Instance Type           | t3.micro                   |
| Container Runtime       | Docker                     |
| Orchestration           | Docker Compose             |
| Web Server              | NGINX                      |
| Application             | Adobe Commerce (Magento 2) |
| PHP Runtime             | PHP-FPM 8.3                |
| Database                | MySQL 8.0                  |
| Cache                   | Redis                      |
| Search Engine           | OpenSearch                 |
| Database Administration | phpMyAdmin                 |
| Scheduled Tasks         | Dedicated Cron Container   |

---

# Design Goals

The implementation was designed with the following objectives:

* Deploy Magento using isolated Docker containers.
* Separate infrastructure services for easier management and scalability.
* Enable HTTPS access using SSL.
* Configure a custom hostname (`test.dyna.com`) for application access.
* Provide persistent storage for database and search engine data.
* Simplify deployment using Docker Compose.
* Maintain a lightweight deployment suitable for a t3.micro EC2 instance while preserving application functionality.

---

# High-Level Features

* Docker Compose based deployment
* Dedicated PHP-FPM container
* Dedicated NGINX container
* Dedicated MySQL container
* Dedicated Redis container
* Dedicated OpenSearch container
* Dedicated Magento Cron container
* Dedicated phpMyAdmin container
* HTTPS enabled using a self-signed SSL certificate
* Custom hostname configuration (`test.dyna.com`)
* Persistent Docker volumes for stateful services
* Magento sample data installed
* Automated dependency management using Composer
