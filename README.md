# Fibonacci API

A REST API for Fibonacci written in PHP8.

| Library | Version 
|---|---|
| PHP | 8.1 |
| Lumen Framework| 10.0 |
| Swagger-lume| 10.1 |

---

## How to run?

Using dockerhub:

``docker run -it -p 8001:8001 --name lumen vinixnan/phplumentest:main``

Building:

``docker build -t phplumentest .``

``docker run -it -p 8001:8001 --name lumen phplumentest``

Docker-compose (good for development):

``docker-compose up --build``

Then take a look at the Swagger documentation:

``http://localhost:8001/api/documentation``

or run the following command, to calculate fibonacci for 50:

``http://localhost:8001/fibofast?count=50``


---

## Some files to pay attention:

| Folder  | Description|
|---|---|
| [Fibonacci.php](https://github.com/vinixnan/phplumentest/tree/main/api/app/Http/Controllers/Fibonacci.php) | Has two Fibonacci implementation, the recursive and the iterative |
| [FibonacciController.php](https://github.com/vinixnan/phplumentest/tree/main/api/app/Http/Controllers/FibonacciController.php) | Provides all structure for a GET method towards Fibonnaci functions |
| [FiboTest.php](https://github.com/vinixnan/phplumentest/tree/main/api/tests/FiboTest.php) | Provides unit tests (PHPUnit) towards the API |
| [Dockerfile](https://github.com/vinixnan/phplumentest/tree/main/Dockerfile) | Dockerfile to contenerize the application |
| [Dockerfile compose](https://github.com/vinixnan/phplumentest/tree/main/docker-compose.yml) | Docker compose to help developers (already mapping dir) |
| [GitHub Actions](https://github.com/vinixnan/phplumentest/tree/main/.github//workflows/docker-image.yml) | CI/CD to build the docker image and send it to Dockerhub |