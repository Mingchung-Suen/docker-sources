FROM alpine:3.7

MAINTAINER Mingchung.Suen "mingchung.suen@gmail.com"

# Copy APP source code
COPY [".", "/runtime"]

# Building
RUN mv -f /runtime/script/log /usr/lib/ && \
    mv -f /runtime/script/entrypoint /usr/sbin/entrypoint && \
    mv -f /runtime/script/cbuild /usr/sbin/cbuild && \
    chmod 755 /usr/lib/log /usr/sbin/entrypoint /usr/sbin/cbuild && \
    /usr/sbin/cbuild

# Default
ENTRYPOINT ["/usr/sbin/entrypoint"]
CMD ["/runtime/script/run"]
