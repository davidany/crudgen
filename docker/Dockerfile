FROM centos:centos7

RUN yum -y install deltarpm
RUN yum -y update && \
    yum -y install \
    epel-release \
    httpd \
    httpd-tools \
    unzip ksh zip unzip \
    yum-utils nano which wget epel-release  httpd-devel  \
    && yum groupinstall -y 'Development tools'

RUN yum -y install mod_proxy_uwsgi mod_proxy_html libssh2-devel


RUN yum install -y https://rpms.remirepo.net/enterprise/remi-release-7.rpm

RUN yum install -y --enablerepo=remi-php74 php php-mcrypt php-cli php-gd php-curl php-mysql \
    php-ldap php-zip php-fileinfo  php-xdebug  php-pear php-devel php-sockets php-mbstring \
    php74-php-oci8 php74-php-devel php74-php-pecl-ssh2 php-pecl-ssh2

#composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#sql server
RUN yum install -y --enablerepo=remi-php74  unixODBC-devel
RUN pecl install sqlsrv pdo_sqlsrv

RUN curl https://packages.microsoft.com/config/rhel/7/prod.repo > /etc/yum.repos.d/mssql-release.repo
RUN ACCEPT_EULA=Y yum install -y msodbcsql17
RUN ACCEPT_EULA=Y yum install -y mssql-tools
RUN echo 'export PATH="$PATH:/opt/mssql-tools/bin"' >> ~/.bashrc
RUN source ~/.bashrc

RUN echo extension=pdo_sqlsrv.so >> `php --ini | grep "Scan for additional .ini files" | sed -e "s|.*:\s*||"`/30-pdo_sqlsrv.ini
RUN echo extension=sqlsrv.so >> `php --ini | grep "Scan for additional .ini files" | sed -e "s|.*:\s*||"`/20-sqlsrv.ini


RUN touch /var/log/xdebug.log
RUN /bin/bash -c "mkdir -p /var/log/php"
RUN touch /var/log/php/mono.log
RUN touch /var/log/php/error.log
RUN chmod -R +rwX  /var/log/
RUN chown -R apache:apache /var/log/
RUN chown -R apache:apache /var/www/html

RUN echo ' log_errors = on '  >> /etc/php.ini
RUN echo ' error_log = /var/log/php/error.log '  >> /etc/php.ini
RUN echo ' xdebug.mode=develop,coverage,debug,profile '  >> /etc/php.ini
RUN echo ' xdebug.idekey=docker '  >> /etc/php.ini
RUN echo ' xdebug.discover_client_host=true '  >> /etc/php.ini
RUN echo ' xdebug.log=/var/log/xdebug.log '  >> /etc/php.ini
RUN echo ' xdebug.log_level=10 '  >> /etc/php.ini
RUN echo ' xdebug.client_host=host.docker.internal '  >> /etc/php.ini
RUN echo ' xdebug.client_port=9003 '  >> /etc/php.ini
RUN echo ' xdebug.start_with_request=yes '  >> /etc/php.ini
RUN echo ' xdebug.var_display_max_data=512 '  >> /etc/php.ini
RUN echo ' xdebug.var_display_max_depth=3 '  >> /etc/php.ini
RUN echo ' xdebug.var_display_max_children=128 '  >> /etc/php.ini
RUN echo ' xdebug.cli_color=1 '  >> /etc/php.ini
RUN echo ' xdebug.show_local_vars=0 '  >> /etc/php.ini
RUN echo ' xdebug.dump_globals=true '  >> /etc/php.ini
RUN echo ' xdebug.dump_once=true '  >> /etc/php.ini
RUN echo ' xdebug.dump_undefined=false; '  >> /etc/php.ini
RUN echo ' xdebug.dump.SERVER=REMOTE_ADDR,REQUEST_METHOD '  >> /etc/php.ini
RUN echo ' xdebug.dump.GET=*  '  >> /etc/php.ini
RUN echo ' xdebug.dump.POST=*  '  >> /etc/php.ini
RUN echo ' xdebug.max_stack_frames=-1  '  >> /etc/php.ini
RUN echo ' xdebug.show_exception_trace=0 '  >> /etc/php.ini
RUN echo ' xdebug.show_exception_trace=0 '  >> /etc/php.ini
RUN echo ' mysql.default_socket = /var/run/mysqld/mysqld.sock '  >> /etc/php.ini
RUN echo ' mysqli.default_socket = /var/run/mysqld/mysqld.sock '  >> /etc/php.ini


RUN echo 'alias vi="vim"' >> /root/.bashrc
RUN echo 'alias ll="ls -la"' >> /root/.bashrc
RUN echo 'alias cdp="cd /var/www/html"' >> /root/.bashrc
RUN echo 'alias cdl="cd /var/log"' >> /root/.bashrc
RUN echo 'alias pbcopy="xclip -selection clipboard"' >> /root/.bashrc
RUN echo 'alias pbpaste="xclip -selection clipboard -o"' >> /root/.bashrc
RUN echo 'alias phpinfo="echo  \"<?php phpinfo(); \" | php "' >> /root/.bashrc
RUN echo 'alias reload="source ~/.bashrc"' >> /root/.bashrc
RUN echo 'alias dump="composer dumpautoload"' >> /root/.bashrc
RUN echo 'alias gs="git status"' >> /root/.bashrc
RUN echo 'alias gst="git status"' >> /root/.bashrc
RUN echo 'alias las="ls -latr"' >> /root/.bashrc

RUN yum install -y supervisor beanstalkd iproute xclip zsh net-tools

#added systemctl alternative
RUN wget https://raw.githubusercontent.com/gdraheim/docker-systemctl-replacement/master/files/docker/systemctl.py -O /usr/local/bin/systemctl
RUN chmod 755 /usr/local/bin/systemctl

# Update Apache Configuration
ENV HTTPD_MAIN_CONF_PATH=/etc/httpd/conf \
	HTTPD_DATA_ORIG_PATH=/var/www \
	HTTPD_MAIN_CONF_D_PATH=/etc/httpd/conf.d \
	APP_DATA=${APP_ROOT}/src  \
	HTTPD_VAR_PATH=/var \
	APACHE_LOG_DIR=/var/log/httpd \
	SLIM_MODE=testing \
    CI_ENV=testing \
    SOME_KEY=someValue

# RUN sed -E -i -e '/<Directory "\/var\/www\/html">/,/<\/Directory>/s/AllowOverride None/AllowOverride All/' ${HTTPD_MAIN_CONF_PATH}/httpd.conf
# RUN sed -E -i -e 's/DocumentRoot "\/var\/www\/html"/DocumentRoot "\/var\/www\/html\/public"/' ${HTTPD_MAIN_CONF_PATH}/httpd.conf
# RUN sed -E -i -e 's/DirectoryIndex (.*)$/DirectoryIndex index.php \1/g' ${HTTPD_MAIN_CONF_PATH}/httpd.conf

# RUN echo 'IncludeOptional sites-enabled/*.conf' >> ${HTTPD_MAIN_CONF_PATH}/httpd.conf


RUN mkdir -p /etc/httpd/sites-enabled
RUN mkdir -p /etc/httpd/sites-available

RUN chown -R apache:apache /var/www/html

COPY docker/httpd.conf /etc/httpd/conf/httpd.conf
COPY docker/apache.conf /etc/httpd/sites-enabled/000-default.conf
COPY docker/apache.conf /etc/httpd/sites-available/000-default.conf

COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY docker/start-container /usr/local/bin/start-container
COPY docker/php.ini /etc/php/8.0/cli/conf.d/99-sail.ini
RUN chmod +x /usr/local/bin/start-container

#ENV PHP_INI_SCAN_DIR=/usr/local/etc/php/conf.d
EXPOSE 80
EXPOSE 92
EXPOSE 443


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


# #SHELL ["/bin/bash", "--login", "-c"]
# CMD ["/bin/bash","start-container"]
