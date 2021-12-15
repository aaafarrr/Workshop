FROM ubuntu:20.04

# Base install & php
RUN apt-get update -y
RUN apt-get install locales -y
RUN locale-gen en_US.UTF-8
ENV LANG en_US.UTF-8
ENV LANGUAGE en_US:en
ENV LC_ALL en_US.UTF-8
ENV DEBIAN_FRONTEND noninteractive
RUN apt install -y software-properties-common
RUN add-apt-repository ppa:ondrej/php -y
RUN apt-get update -y
RUN apt-get install -y wget unzip build-essential cmake gcc libcunit1-dev libudev-dev socat netcat net-tools inetutils-ping

# For entrypoint and sanity check
RUN apt-get install -y cron curl
COPY src/start.sh /start.sh
COPY src/sanity.sh /sanity.sh
RUN chmod 555 /start.sh
RUN chmod 555 /sanity.sh

# For service
RUN apt-get install -y apache2 php7.3 php7.3-mysqli libapache2-mod-php7.3 php7.3-zip php7.3-dom php7.3-xml zlib1g fontconfig libxrender1 libfreetype6 libxext6 libx11-6 mariadb-server
COPY src/app /app
COPY src/ws_error.sql /ws_error.sql
COPY src/ws_login.sql /ws_login.sql
COPY src/ws_union.sql /ws_union.sql
COPY src/etc/apache2/sites-available/bebas.conf /etc/apache2/sites-available/bebas.conf
RUN /etc/init.d/mysql start  && echo "CREATE DATABASE ws_error; use ws_error; source /ws_error.sql;" | mysql -u root
RUN /etc/init.d/mysql start  && echo "GRANT SELECT ON *.* TO erro@'localhost' IDENTIFIED BY 'p-ws-error';" | mysql -u root
RUN /etc/init.d/mysql start  && echo "CREATE DATABASE ws_login; use ws_login; source /ws_login.sql;" | mysql -u root
RUN /etc/init.d/mysql start  && echo "GRANT SELECT ON *.* TO logi@'localhost' IDENTIFIED BY 'p-ws-login';" | mysql -u root
RUN /etc/init.d/mysql start  && echo "CREATE DATABASE ws_union; use ws_union; source /ws_union.sql;" | mysql -u root
RUN /etc/init.d/mysql start  && echo "GRANT SELECT ON *.* TO unio@'localhost' IDENTIFIED BY 'p-ws-union';" | mysql -u root

# Finishing
RUN useradd bebas
EXPOSE 80
ENTRYPOINT [ "/start.sh" ]