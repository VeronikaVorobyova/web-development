FROM nginx:stable

COPY ./docker/nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf
COPY ./ /var/www/

WORKDIR /var/www