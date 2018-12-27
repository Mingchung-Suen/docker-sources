FROM registry.op.tiaozhan.com/tz-base-alpine:latest

MAINTAINER Mingchung Suen "mingchung.suen@gmail.com"

# Copy APP source code
COPY [".", "/runtime"]

# Building
RUN /usr/sbin/cbuild
