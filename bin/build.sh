#!/bin/sh

cd $(dirname "${BASH_SOURCE[0]}")

./console cache:clear -e prod && \

rm -rf ../build && mkdir ../build && \

echo "Copying assets ..."
cp -r ../public/assets ../build && \
cp -r ../public/libraries ../build && \

./console build index index.html && \
./console build curriculumVitaeContent curriculum-vitae.pdf
