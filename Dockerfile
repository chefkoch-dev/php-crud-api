FROM dr.chefkoch.net/pixelhouse-appserver

ADD . /app/html
ADD conf /app/conf

RUN cd /app/html && composer install