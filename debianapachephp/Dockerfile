FROM debian:wheezy

MAINTAINER Nick Belhomme, contact@nickbelhomme.com

RUN apt-get update

RUN apt-get install -y apache2 wget vim curl
RUN a2enmod rewrite

RUN apt-get install -y php5-common libapache2-mod-php5 php5-cli php5-intl php5-curl php5-pgsql

# expose the ports
EXPOSE 80
