#!/bin/bash
cd ~
mkdir -p cclab_web
cd cclab_web
echo "installing web theme into webedit..."
curl -sL https://github.com/sfc-computational-creativity-lab/web/archive/develop/theme.zip > file.zip
unzip file.zip
rm file.zip
cd web-develop-theme/static/
echo "Copying..."
cp -r * /pub/WWW/cclab/
ls -l /pub/WWW/cclab/
echo "Done"