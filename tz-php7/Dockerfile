FROM registry.op.tiaozhan.com/tz-nginx:latest

MAINTAINER liuxuncheng "liuxuncheng@tiaozhan.com"

# Copy APP source code
COPY [".", "/runtime"]

# Building
RUN /usr/sbin/cbuild
