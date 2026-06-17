FROM wordpress:latest

RUN apt-get update && \
    apt-get install -y \
    curl \
    telnet \
    iputils-ping \
    net-tools && \
    rm -rf /var/lib/apt/lists/*

COPY wordpress/ /var/www/html/

EXPOSE 80
