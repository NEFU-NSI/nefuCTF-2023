FROM ctftraining/base_image_nginx_mysql_php_73

LABEL Author="qyzy"

RUN rm -r /var/www/html/index.php

COPY ./src/ /var/www/html/

COPY ./flag.sh /flag.sh

COPY ./flag /flag

RUN  chmod +x /flag.sh


