#!/bin/bash

/usr/sbin/php-fpm -D && /usr/sbin/nginx -g 'daemon off;'