# Symfony Messenger + RabbitMQ + Domain Events

This project demonstrates how to use Symfony Messenger with RabbitMQ to handle domain events asynchronously.

## 🧩 Features

- Symfony Messenger integration
- RabbitMQ as message transport
- Domain event (`UserRegistered`) dispatched when a user is created
- Async event handling via background worker

## ⚙️ Setup

1. Install dependencies:

   ```bash
   composer install
   brew install rabbitmq
   brew services start rabbitmq
