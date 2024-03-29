# Copyright (c) 2017, 2021, Oracle and/or its affiliates.
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; version 2 of the License.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301 USA
FROM oraclelinux:7-slim



RUN set -eux; \
	groupadd --system --gid 999 mysql; \
	useradd --system --uid 999 --gid 999 --home-dir /var/lib/mysql --no-create-home mysql

# add gosu for easy step-down from root
# https://github.com/tianon/gosu/releases
ENV GOSU_VERSION 1.14
RUN set -eux; \
# TODO find a better userspace architecture detection method than querying the kernel
	arch="$(uname -m)"; \
	case "$arch" in \
		aarch64) gosuArch='arm64' ;; \
		x86_64) gosuArch='amd64' ;; \
		*) echo >&2 "error: unsupported architecture: '$arch'"; exit 1 ;; \
	esac; \
	curl -fL -o /usr/local/bin/gosu.asc "https://github.com/tianon/gosu/releases/download/$GOSU_VERSION/gosu-$gosuArch.asc"; \
	curl -fL -o /usr/local/bin/gosu "https://github.com/tianon/gosu/releases/download/$GOSU_VERSION/gosu-$gosuArch"; \
	export GNUPGHOME="$(mktemp -d)"; \
	gpg --batch --keyserver hkps://keys.openpgp.org --recv-keys B42F6819007F00F88E364FD4036A9C25BF357DD4; \
	gpg --batch --verify /usr/local/bin/gosu.asc /usr/local/bin/gosu; \
	rm -rf "$GNUPGHOME" /usr/local/bin/gosu.asc; \
	chmod +x /usr/local/bin/gosu; \
	gosu --version; \
	gosu nobody true

RUN set -eux; \
# https://github.com/docker-library/mysql/pull/871#issuecomment-1167954236
	yum install -y --setopt=skip_missing_names_on_install=False oracle-epel-release-el7; \
	yum install -y --setopt=skip_missing_names_on_install=False \
		bzip2 \
		gzip \
		openssl \
		xz \
		zstd \
	; \
	yum clean all

RUN set -eux; \
# https://dev.mysql.com/doc/refman/8.0/en/checking-gpg-signature.html
# gpg: key 3A79BD29: public key "MySQL Release Engineering <mysql-build@oss.oracle.com>" imported
	key='859BE8D7C586F538430B19C2467B942D3A79BD29'; \
	export GNUPGHOME="$(mktemp -d)"; \
	gpg --batch --keyserver keyserver.ubuntu.com --recv-keys "$key"; \
	gpg --batch --export --armor "$key" > /etc/pki/rpm-gpg/RPM-GPG-KEY-mysql; \
	rm -rf "$GNUPGHOME"



ARG MYSQL_SERVER_PACKAGE=mysql-community-server-5.7.40
ARG MYSQL_SHELL_PACKAGE=mysql-shell-8.0.31


## Setup repositories for minimal packages (all versions)
#RUN rpm -U https://repo.mysql.com/mysql-community-release-el7.rpm \
#  && rpm -U https://repo.mysql.com/mysql80-community-release-el7.rpm
#
## Install server and shell 8.0
#RUN yum install -y $MYSQL_SHELL_PACKAGE \
#  && yum install -y $MYSQL_SERVER_PACKAGE \
#  && yum clean all  \
#

ENV MYSQL_MAJOR 5.7
ENV MYSQL_VERSION 5.7.40-1.el7

RUN set -eu; \
	. /etc/os-release; \
	{ \
		echo '[mysql5.7-server-minimal]'; \
		echo 'name=MySQL 5.7 Server Minimal'; \
		echo 'enabled=1'; \
		echo "baseurl=https://repo.mysql.com/yum/mysql-5.7-community/docker/el/${VERSION_ID%%[.-]*}/\$basearch/"; \
		echo 'gpgcheck=1'; \
		echo 'gpgkey=file:///etc/pki/rpm-gpg/RPM-GPG-KEY-mysql'; \
# https://github.com/docker-library/mysql/pull/680#issuecomment-825930524
		echo 'module_hotfixes=true'; \
	} | tee /etc/yum.repos.d/mysql-community-minimal.repo

RUN set -eux; \
	yum install -y --setopt=skip_missing_names_on_install=False "mysql-community-server-minimal-$MYSQL_VERSION"; \
	yum clean all;



    RUN mkdir /docker-entrypoint-initdb.d

# Ensure mysqld logs go to stderr
RUN sed -i 's/^log-error=/#&/' /etc/my.cnf

RUN echo 'sql_mode=STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' >> /etc/my.cnf
RUN yum -y install coreutils

COPY prepare-image.sh /
RUN /prepare-image.sh

ENV MYSQL_UNIX_PORT /var/lib/mysql/mysql.sock

COPY docker-entrypoint.sh /entrypoint.sh
COPY healthcheck.sh /healthcheck.sh
ENTRYPOINT ["/entrypoint.sh"]
HEALTHCHECK CMD /healthcheck.sh
EXPOSE 3306 33060
CMD ["mysqld"]
