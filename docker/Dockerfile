FROM centos:centos7

# INSTALL CENTOS APPS

RUN yum -y update && yum -y install \
    deltarpm epel-release \
    httpd httpd-tools httpd-devel yum-utils \
    unzip unzip ksh  \
    nano which mlocate \
    nodejs zsh redis git \
    && updatedb \
    && yum groupinstall -y 'Development tools' \
    && yum -y install mod_proxy_uwsgi mod_proxy_html libssh2-devel wget

#LINUX APPS NEEDED TO BUILD AND COMPILE OTHER SOFTWARE
RUN yum -y install gcc make gcc-c++ cpp kernel-headers.x86_64 libxml2-devel \
    openssl-devel bzip2-devel libjpeg-devel libpng-devel freetype-devel \
    openldap-devel postgresql-devel aspell-devel net-snmp-devel libxslt-devel \
    libc-client-devel icu libicu libicu-devel gmp-devel curl-devel libmcrypt-devel \
    pcre-devel sqlite-devel db4-devel enchant-devel libXpm-devel mysql-devel \
    readline-devel libedit-devel recode-devel libtidy-devel libtool-ltdl-devel \
    freetds freetds-devel freetds-doc  unixODBC unixODBC-devel \
     glibc glibc-common gd gd-devel php-devel libiodbc

# Installs SupervisorD and some debugging tools \
RUN yum install -y supervisor beanstalkd iproute xclip  net-tools coreutils

#prepare other installs
ARG FOLDERNAME=installtemp
ARG PHP_VERSION=7.0
ARG PHP_INSTALL_VERSION=70
ARG PHP_INSTALL_FOLDER=php-$PHP_VERSION
RUN mkdir -p /$FOLDERNAME
RUN chmod 777 -R /$FOLDERNAME

#MAIN PHP
COPY docker/config/php/php-5.6.15.tar.gz /$FOLDERNAME/php-$PHP_VERSION.tar.gz

WORKDIR "/$FOLDERNAME"

ENV PHP_INI_SCAN_DIR=/etc/php.d/
RUN echo 'export PHP_INI_SCAN_DIR=/etc/php.d/'

RUN ln -s /usr/lib64/libsybdb.so /usr/lib/

#PHP INSTALL ############################
# Download and extract PHP 5.6.14
#RUN wget -O /tmp/php-7.0.tar.gz https://www.php.net/distributions/php-7.0.tar.gz && \
#    tar -xzf /tmp/php-7.0.tar.gz -C /tmp

# Add EPEL Remo &  Webtatic repos
RUN rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm \
 && rpm -Uvh https://mirror.webtatic.com/yum/el7/webtatic-release.rpm
RUN yum install -y https://rpms.remirepo.net/enterprise/remi-release-7.rpm

# PHP AND APACHE install
RUN yum -y update &&  yum -y install \
    httpd \
    mod_ssl \
    php${PHP_VERSION_SHORT}w \
    php${PHP_VERSION_SHORT}w-cli \
    php${PHP_VERSION_SHORT}w-common \
    php${PHP_VERSION_SHORT}w-gd \
    php${PHP_VERSION_SHORT}w-intl \
    php${PHP_VERSION_SHORT}w-ldap \
    php${PHP_VERSION_SHORT}w-mbstring \
    php${PHP_VERSION_SHORT}w-mcrypt \
    php${PHP_VERSION_SHORT}w-mssql \
    php${PHP_VERSION_SHORT}w-mysql \
    php${PHP_VERSION_SHORT}w-mysqli \
    php${PHP_VERSION_SHORT}w-odbc \
    php${PHP_VERSION_SHORT}w-opcache \
    php${PHP_VERSION_SHORT}w-pdo \
    php${PHP_VERSION_SHORT}w-pear \
    php${PHP_VERSION_SHORT}w-pecl-xdebug \
    php${PHP_VERSION_SHORT}w-pecl-redis \
    php${PHP_VERSION_SHORT}w-soap \
    php${PHP_VERSION_SHORT}w-xml \
    php${PHP_VERSION_SHORT}w-xmlrpc \
    php${PHP_VERSION_SHORT}w-ldap \
    patch \
    mysql \
    mysqli \
    curl \
    git

#USE REMI REPO FOR 5.6
RUN yum-config-manager --disable 'remi-php*'
RUN yum-config-manager --enable   remi-php70
RUN yum repolist
RUN yum update -y && yum install -y epel-release

# MORE PHP EXTENSIONS
RUN yum install -y php70w php70w-opcache php70w-cli php70w-common php70w-devel \
    php70w-gd php70w-intl php70w-mbstring php70w-mcrypt

RUN yum install -y php70w-mssql	php70w-mysql php70w-mysqlnd	php70w-odbc	php70w-opcache	\
    php70w-pdo	php70w-pear php70w-pecl-apcu php70w-pecl-geoip php70w-pecl-imagick \
    php70w-pecl-memcache php70w-pecl-xdebug php70w-pgsql php70w-soap php70-php-phpiredis  php70-php-pecl-redis

RUN yum install -y php70w-xml php70-php-phar php70-php-iconv php70-php-mbstring


RUN yum install -y php70-php-odbc

#PHP END INSTALL ############################

# -----------------------------------------------------------------------------
# Install DB2 PDO driver
# -----------------------------------------------------------------------------
ENV DB2EXPRESSC_URL https://s3-ap-southeast-1.amazonaws.com/naqoda/downloads/ibm_data_server_driver_package_linuxx64_v10.5.tar.gz
ENV IBM_DB_HOME /opt/ibm/dsdriver
ENV LD_LIBRARY_PATH /opt/ibm/dsdriver/odbc_cli_driver/linuxamd64/clidriver/lib

RUN mkdir /opt/ibm \
    && curl -fSLo /opt/ibm/expc.tar.gz $DB2EXPRESSC_URL  \
    && cd /opt/ibm && tar xf expc.tar.gz \
    && rm /opt/ibm/expc.tar.gz \
	&& cp $IBM_DB_HOME/php_driver/linuxamd64/php64/ibm_db2_5.3.6_nts.so /usr/lib64/php/modules/ibm_db2.so \
	&& cp $IBM_DB_HOME/php_driver/linuxamd64/php64/pdo_ibm_5.3.6_nts.so /usr/lib64/php/modules/pdo_ibm.so \
	&& cd /opt/ibm/dsdriver/odbc_cli_driver/linuxamd64 \
    && tar xf ibm_data_server_driver_for_odbc_cli.tar.gz
#	&& echo 'extension=ibm_db2.so' > /etc/php.d/pdo_db2.ini \
#	&& echo 'extension=pdo_ibm.so' >> /etc/php.d/pdo_db2.ini

COPY docker/config/db2/* /usr/lib64/php/modules/

#RUN cat  /$FOLDERNAME/odbcinst.ini >> /etc/odbcinst.ini
#RUN cat  /$FOLDERNAME/odbc.ini >> /etc/odbc.ini



#RUN cd /tmp/php-7.0/ext/pdo_odbc \
#&&  phpize \
#&&  ./configure \
#    --with-pdo-odbc=unixODBC,/usr/ \
#&&  make
#RUN #cp /tmp/php-7.0/ext/curl/modules/pdo_odbc.so  /usr/lib64/php/modules/pdo_odbc.so
#RUN echo 'extension=pdo_odbc.so' >> /etc/php.ini

#composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
#RUN mkdir /opt/ibm \
#    && cd /opt/ibm
#
#ADD https://public.dhe.ibm.com/ibmdl/export/pub/software/data/db2/drivers/odbc_cli/linuxx64_odbc_cli.tar.gz /opt/ibm
#ADD https://pecl.php.net/get/ibm_db2-1.9.7.tgz /opt/ibm
#RUN tar xzf opt/ibm/linuxx64_odbc_cli.tar.gz -C /opt/ibm
#RUN tar xzf opt/ibm/ibm_db2-1.9.7.tgz -C /opt/ibm
#ENV IBM_DB_HOME=/opt/ibm/clidriver
#ENV LD_LIBRARY_PATH=/opt/ibm/clidriver/lib
#WORKDIR "/opt/ibm"
#RUN  cd /opt/ibm/ibm_db2-1.9.7 \
#    && phpize \
#    && ./configure --with-IBM_DB2=/opt/ibm/clidriver \
#    && make && make install
##    && ./configure  --with-PDO_IBM=/opt/ibm/clidriver \
# -----------------------------------------------------------------------------


# INSTALL COMPOSER
COPY ./docker/config/php/composer-installer.sh /usr/local/bin/composer-installer

RUN chmod +x /usr/local/bin/composer-installer \
    && /usr/local/bin/composer-installer \
    && mv composer.phar /usr/local/bin/composer \
    && chmod +x /usr/local/bin/composer \
    && composer --version

#INSTALL MSSQL SERVER DRIVERS FOR PHP 5.6
RUN curl https://packages.microsoft.com/config/rhel/7/prod.repo > /etc/yum.repos.d/mssql-release.repo

RUN ACCEPT_EULA=Y yum install -y msodbcsql17
RUN ACCEPT_EULA=Y yum install -y mssql-tools
RUN echo 'export PATH="$PATH:/opt/mssql-tools/bin"' >> ~/.bashrc
RUN source ~/.bashrc
# optional: for unixODBC development headers
RUN yum install -y unixODBC-devel

RUN #echo 'extension=pdo_sqlsrv.so' >> `php --ini | grep "Scan for additional .ini files" | sed -e "s|.*:\s*||"`/30-pdo_sqlsrv.ini
RUN #echo 'extension=sqlsrv.so' >> `php --ini | grep "Scan for additional .ini files" | sed -e "s|.*:\s*||"`/20-sqlsrv.ini

# INSTALLS systemctl  alternative so that docker container can run more like normal linux box
# allows you to retsart apache in running container - httpd - k restart

#added systemctl alternative
RUN wget https://raw.githubusercontent.com/gdraheim/docker-systemctl-replacement/master/files/docker/systemctl.py -O /usr/local/bin/systemctl
RUN chmod 755 /usr/local/bin/systemctl

# Installs phpredis and compiles it
RUN  git clone -b 5.3.7 --single-branch https://github.com/phpredis/phpredis.git
RUN cd phpredis \
    && phpize \
    && ./configure \
    && make && make install

# SET VARIABLES AND ARGS   #################################################################


ENV HTTPD_MAIN_CONF_PATH=/etc/httpd/conf \
	HTTPD_DATA_ORIG_PATH=/var/www \
	HTTPD_MAIN_CONF_D_PATH=/etc/httpd/conf.d \
	APP_DATA=${APP_ROOT}/src \
	HTTPD_VAR_PATH=/var \
	APACHE_LOG_DIR=/var/log/httpd
ENV SLIM_MODE=production
ENV CI_ENV=production \
    SOME_KEY=someValue

ARG DOCKER_IP_ADDRESS_CRUD
ENV DOCKER_IP_ADDRESS_CRUD=$DOCKER_IP_ADDRESS_CRUD

ARG XDEBUG_REMOTE_PORT_CRUD
ENV XDEBUG_REMOTE_PORT_CRUD=$XDEBUG_REMOTE_PORT_CRUD

ARG XDEBUG_CLIENT_PORT_CRUD
ENV XDEBUG_CLIENT_PORT_CRUD=$XDEBUG_CLIENT_PORT_CRUD

ARG X_CRUD_URL7
ENV X_CRUD_URL7=$X_CRUD_URL7

# CONFIG FILE SECTION #################################################################
# Update Apache Configuration
#Overall, this command modifies the Apache HTTP Server configuration file
# by changing the AllowOverride directive within the <Directory "/var/www/html"> block
# from None to All.
# This allows .htaccess files in the /var/www/html directory to
# override the configuration settings specified in the main configuration file.

RUN sed -E -i -e '/<Directory "\/var\/www\/html">/,/<\/Directory>/s/AllowOverride None/AllowOverride All/' /etc/httpd/conf/httpd.conf

# Overall, this command modifies the Apache HTTP Server configuration file by
# changing the DirectoryIndex directive to specify index.php as the default index file.
# If the DirectoryIndex directive previously had a value specified (such as index.html),
# that value is retained and appended to the end of the DirectoryIndex directive (e.g., DirectoryIndex index.php index.html).
RUN sed -E -i -e 's/DirectoryIndex (.*)$/DirectoryIndex index.php \1/g' /etc/httpd/conf/httpd.conf

#ADD PROGRAMS TO PATH SECTION   ###############################################################

RUN  export PATH=$PATH:/usr/bin/odbcinst

#COPY LOCAL CONFIG FILES SECTION   ###############################################################

COPY ./docker/config/mssql/* /$FOLDERNAME/

RUN cat  /$FOLDERNAME/odbcinst.ini >> /etc/odbcinst.ini
RUN cat  /$FOLDERNAME/odbc.ini >> /etc/odbc.ini

RUN mkdir -p /var/log/php \
	&& touch /var/log/php/mono.log \
	&& touch /var/log/php/error.log \
	&& chmod -R +rwX  /var/log/ \
	&& chown -R apache:apache /var/log/ \
	&& chown -R apache:apache /var/www/html

COPY docker/config/php/php.ini-development /etc/php.ini
COPY docker/config/php/php-add.ini /$FOLDERNAME/php-add.ini
COPY docker/config/aliases  /$FOLDERNAME/aliases
RUN cat /$FOLDERNAME/aliases >> /root/.bashrc
RUN cat /$FOLDERNAME/php-add.ini >> /etc/php.ini


RUN #cp /usr/local/lib/php/extensions/no-debug-non-zts-20151012/* /usr/lib64/php/modules

RUN #echo 'extension=/usr/lib64/php/modules/ibm_db2.so '  >> /etc/php.ini
RUN #echo 'extension=/usr/lib64/php/modules/pdo_ibm.so '  >> /etc/php.ini
RUN echo 'extension_dir = "/usr/lib64/php/modules"' >> /etc/php.ini
RUN #echo 'extension=/usr/lib64/php/modules/odbc.so '  >> /etc/php.ini
RUN #echo 'extension=/usr/lib64/php/modules/redis.so '  >> /etc/php.ini
RUN #echo 'extension=/usr/lib64/php/modules/xdebug.so '  >> /etc/php.ini

RUN echo "xdebug.remote_host=${X_CRUD_URL7}" >> /etc/php.ini
RUN echo "xdebug.remote_port=${XDEBUG_REMOTE_PORT_CRUD}" >> /etc/php.ini
RUN echo "xdebug.client_port=${XDEBUG_CLIENT_PORT_CRUD}" >> /etc/php.ini

RUN #cp /usr/local/lib/php/extensions/no-debug-non-zts-20151012/redis.so /usr/lib64/php/modules

# Set TimeZone
RUN ln -sf /usr/share/zoneinfo/America/New_York/etc/localtime


RUN mkdir -p /etc/httpd/sites-enabled \
	&& mkdir -p /etc/httpd/sites-available \
	&& chown -R apache:apache /var/www/html

COPY docker/config/httpd/httpd.conf /etc/httpd/conf/httpd.conf
COPY docker/config/httpd/apache.conf /etc/httpd/sites-enabled/000-default.conf
COPY docker/config/httpd/apache.conf /etc/httpd/sites-available/000-default.conf

COPY docker/config/freetds/freetds.conf  /etc/freetds.conf

COPY docker/config/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY docker/config/start-container /usr/local/bin/start-container
RUN chmod +x /usr/local/bin/start-container



#ssh
RUN yum install -y openssh openssh-server openssh-clients
# Generate keys
RUN ssh-keygen -q -N "" -t rsa -f /etc/ssh/ssh_host_rsa_key
RUN ssh-keygen -q -N "" -t rsa -f /root/.ssh/id_rsa
RUN cp /root/.ssh/id_rsa.pub /root/.ssh/authorized_keys
RUN echo 'root:assay'|chpasswd
RUN useradd dominion
RUN echo 'dominion:assay'|chpasswd
EXPOSE      22


CMD ["/bin/bash","start-container"]
