# Payment Processing System

This project implements a payment processing system that handles amortizations and payments for projects. It ensures that payments are processed correctly and handles scenarios such as insufficient funds and delayed payments.

## Assumptions

- The project assumes the usage of the Laravel PHP framework.
- The database schema includes tables for projects, amortizations, payments, profiles and promoters.
- The project assumes the existence of models: `Project`, `Amortization`, `Payment`, `Profile` and `Promoter`.
- The payment processing is triggered by calling the `processPaymentsBeforeDate()` method in the `PaymentService` class.
- The payment processing logic assumes that payments need to be processed before a specified date.
- An amortization is considered "paid" when a corresponding payment is successfully processed and the amortization's state is updated accordingly.

## Implementation

### PaymentService

- The `PaymentService` class provides methods for processing payments and handling various scenarios.
- The `processPaymentsBeforeDate($date)` method is the entry point for processing payments before a specified date.
- Payments are processed in batches of 100 amortizations using the `chunk()` method to optimize memory usage.
- The method uses a database transaction to ensure atomicity of the payment processing.
- If an amortization is already paid, it is skipped.
- If an amortization is delayed, an email notification is sent to the project's promoter and profiles.
- If a project has insufficient funds, an email notification is sent to the project's promoter and profiles.
- For successful payments, a payment record is created, the project's wallet balance is updated, and the amortization state is marked as paid.

### Logging

- The `Log` facade from Laravel is used for logging payment processing events.
- Informational log messages are generated for successful payment processing, insufficient funds, and delayed payments.
- Error log messages are generated if any exception occurs during payment processing.

### Queue System (TODO)

- To handle large volumes of payments efficiently, a queue system can be implemented.
- The code snippet in the README demonstrates the usage of Laravel's queue system for processing payments.
- By dispatching the `PaymentProcessingJob` to a queue, payments can be processed asynchronously, improving scalability.

## Setup and Configuration

1. Clone the project repository.
2. Install the required dependencies using Composer.
3. Configure the database connection in the `.env` file.
4. Run the database migrations to create the necessary tables.
5. Customize the email notifications and logging configurations as per your needs.
6. You can now use the payment processing system by calling the `processPaymentsBeforeDate()` method.


