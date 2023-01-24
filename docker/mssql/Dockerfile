FROM mcr.microsoft.com/mssql/server:2019-latest

# Create a config directory
RUN mkdir -p /usr/config
WORKDIR /usr/config

# Bundle config source
COPY ./start /usr/config

#ENV SA_PASSWORD=${SA_PASSWORD}
#ENV MYPASS=dtr
#ENV MYPASS2=${SA_PASSWORD}
#ENV DB_MSSQL_PASSWORD=${DB_MSSQL_PASSWORD}

USER root
# Grant permissions for to our scripts to be executable
RUN chmod +x /usr/config/entrypoint.sh
RUN chmod +x /usr/config/configure-db.sh

ENTRYPOINT ["./entrypoint.sh"]
