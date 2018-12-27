FROM registry.op.tiaozhan.com/tz-php5:latest

MAINTAINER zhongfeiyu "zhongfeiyu@tiaozhan.com"

# Copy APP source code
COPY [".", "/runtime"]

# Building
RUN /usr/sbin/cbuild
