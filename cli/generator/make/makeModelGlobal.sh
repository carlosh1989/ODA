#!/bin/bash
printf '
s/${nombre}/'${1^}'/
s/${tabla}/'$3'/' > ./cli/generator/replaceModelGlobal.sed

sed -f ./cli/generator/replaceModelGlobal.sed ./cli/generator/templates/model.php > ./app/$1/models/${2^}Model.php
