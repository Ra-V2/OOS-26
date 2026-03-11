FROM debian:bookworm-slim

RUN apt-get update && apt-get install -y fpc --no-install-recommends \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /app
COPY . /app

RUN fpc main.pas -oapp

CMD ["./app"]