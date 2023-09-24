FROM alpine

WORKDIR /app

COPY . .

RUN apk update && apk upgrade

RUN apk add php

CMD ["php" , "main.php"]
