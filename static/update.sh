#!/bin/bash
printf "CNS Login Name: "
read login
scp -Cr * ${login}@webedit.sfc.keio.ac.jp:/pub/WWW/cclab/
