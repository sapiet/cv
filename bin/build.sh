#!/bin/sh

bin/console cache:clear -e prod && \
# npm run build

rm -rf build && mkdir build && \

echo "Copying assets ..."
cp -r public/assets build && \
cp -r public/libraries build && \
cp -r public/f build && \
cp -r public/build build && \

bin/console app:build index index.html -e prod && \
bin/console app:build curriculumVitaeContent curriculum-vitae.pdf -e prod
