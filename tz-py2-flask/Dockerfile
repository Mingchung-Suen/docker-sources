FROM registry.op.tiaozhan.com/tz-py2-uwsgi:latest

MAINTAINER Luffbee "liuyifan@tiaozhan.com"

# Copy APP source code
COPY [".", "/runtime"]

# Building
RUN /usr/sbin/cbuild
