FROM nickbelhomme/apache

RUN a2enmod rewrite

RUN apt-get update
RUN apt-get install -y php5-common libapache2-mod-php5 php5-cli php5-intl php5-curl php5-pgsql

ADD dev/apache/application.conf /etc/apache2/sites-available/application.conf
RUN a2ensite application.conf