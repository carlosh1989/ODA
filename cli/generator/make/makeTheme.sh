#!/bin/bash
printf '
s/${modulo}/'$1'/
s/${controller}/'${2^}'/
s/${vista}/'$3'/' > replace.sed

sed -f replace.sed templates/controller.txt > ../../app/$1/controllers/${2^}.php
