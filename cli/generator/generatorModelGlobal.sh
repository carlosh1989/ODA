#!/bin/bash      
APP="./app"
MODULO=$1
CONTROLADOR_FOLDER="controllers"
CONTROLLER=$2
CONTROLADOR=${2^}'.php'

VIEWS_FOLDER="views"
THEME_FOLDER="views/theme"
VISTA=$3
METODO=$3

MODELS_FOLDER="models"
MODELO=${2^}'Model.php'

x=1
while [ $x -le 4 ]
do
	if [ -f $APP/$MODEL ];
	then
		echo "Sí, sí existe app/"$MODEL
	else
	echo "Creado app/"$MODEL
	touch $APP/$MODEL'.php'
	./cli/generator/make/makeModelGlobal.sh $NOMBRE $TABLA
	fi
  x=$(( $x + 1 ))
done

#volvemos a crear el road map para autocargar los nuevos controladores
composer dump-autoload -o


