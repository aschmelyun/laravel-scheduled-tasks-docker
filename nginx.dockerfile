FROM nginx:stable-alpine

COPY ./nginx/default.conf /etc/nginx/conf.d/default.conf
COPY ./nginx/laravel-scheduled-docker.test.pem /etc/nginx/conf.d/mkcert/laravel-scheduled-docker.test.pem
COPY ./nginx/laravel-scheduled-docker.test-key.pem /etc/nginx/conf.d/mkcert/laravel-scheduled-docker.test-key.pem
