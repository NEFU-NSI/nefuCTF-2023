FROM alpine:latest
LABEL authors="sfc9982"

COPY ./doh_server /app/doh_server
COPY ./doh-server.conf /app/doh-server.conf

EXPOSE 8053

WORKDIR "/app"

CMD "/app/doh_server"