#!/usr/bin/env bash
set -euo pipefail

IMAGE_NAME=01-app
PROJECT_DIR="$(cd "$(dirname "$0")" && pwd)"

docker build -t "$IMAGE_NAME" "$PROJECT_DIR"

docker run --rm --name "$IMAGE_NAME"-run "$IMAGE_NAME"