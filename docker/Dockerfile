FROM amazonlinux:2018.03

RUN yum -y update && yum -y install \
    nginx \
    php70-fpm \
    php70-dom \
    php70-curl \
    php70-intl \
    php70-pdo \
    php70-mysqlnd \
    php70-pdo_mysql \
    php70-phar \
    php70-json \
    php70-posix \
    php70-iconv \
    php70-opcache \
	php70-apcu \
	php70-memcached \
    php70-mbstring

ADD config /tmp/
RUN /tmp/configservices.sh

EXPOSE 8080 443

ENTRYPOINT /tmp/runservices.sh

RUN curl -sS https://getcomposer.org/installer | php -- --filename=composer --install-dir=/bin/ && composer self-update

WORKDIR /app