FROM registry.op.tiaozhan.com/tz-base-alpine:latest

MAINTAINER xczh "zhuxingchi@tiaozhan.com"

# Copy APP source code
COPY [".", "/runtime"]

# Building
RUN /usr/sbin/cbuild
