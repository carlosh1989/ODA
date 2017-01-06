#!/bin/bash
printf '
s/${i}/'$1'/
s/${name}/'$2'/' > replace.sed

sed -f replace.sed template.txt > out.txt