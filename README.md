# Simpl'Immo
PHP project in OOP

# Description
Apartment and house management application for a real estate agency with a secure backend environment to administer properties.

# Install

How to install ?

1. [Install Docker Compose](https://docs.docker.com/compose/install/)
1. Clone this repository
1. Create a .env in the main folder with
  - MYSQL_USER
  - MYSQL_PASSWORD
  - MYSQL_ROOT_PASSWORD
  - MYSQL_DATABASE
  - USERNAME
  - PASS
1. Create the network width `docker network create simplon_network`
1. Run all containers with `docker-compose up`
1. Verify in Datadog that your container picks up the docker and redis metrics
1. Connect to localhost:3001 for the front
2. Connect to localhost:8080 for phpmyadmin
