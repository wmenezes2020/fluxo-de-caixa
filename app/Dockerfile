FROM node:19-alpine
RUN mkdir -p /app
WORKDIR /app

COPY . /app

RUN mv .env.example .env && \
    npm install

CMD npm run start