#!/bin/bash
printf "CNS Login Name: "
read login
scp -r * ${login}@webedit.sfc.keio.ac.jp:/pub/WWW/cclab/

