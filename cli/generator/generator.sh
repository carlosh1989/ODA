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
while [ $x -le 3 ]
do
	#MODULO
	if [ -d $APP/$MODULO ];
	then
		#CARPETA CONTROLLERS
		if [ -d $APP/$MODULO/$CONTROLADOR_FOLDER ];
		then
			#CONTROLLADOR
			if [ -f $APP/$MODULO/$CONTROLADOR_FOLDER/$CONTROLADOR ];
			then
				echo "Sí, sí existe app/"$MODULO/'controllers/'$CONTROLADOR
			else
			echo "Creado app/"$MODULO/'controllers/'$CONTROLADOR
			touch $APP/$MODULO/$CONTROLADOR_FOLDER/$CONTROLADOR
			./cli/generator/make/makeController.sh $MODULO $CONTROLLER $VISTA
			fi
		else
		echo "Creado existe app/"$MODULO/'controllers/'
		mkdir -m 777 $APP/$MODULO/'controllers'
		fi

		#CARPETA MODELS
		if [ -d $APP/$MODULO/$MODELS_FOLDER ];
		then
			#CONTROLLADOR
			if [ -f $APP/$MODULO/$MODELS_FOLDER/$MODELO ];
			then
				echo "Sí, sí existe app/"$MODULO/'controllers/'$MODELO
			else
			echo "Creado app/"$MODULO/'models/'$MODELO
			touch $APP/$MODULO/$MODELS_FOLDER/$MODELO
			./cli/generator/make/makeModel.sh $MODULO $CONTROLLER $VISTA
			fi
		else
		echo "Creado app/"$MODULO/'models/'
		mkdir -m 777 $APP/$MODULO/'models'
		fi

		#CARPETA VIEWS
		if [ -d $APP/$MODULO/$VIEWS_FOLDER ];
		then
			mkdir -m 777 $APP/$MODULO/'views/theme'
			touch $APP/$MODULO/'views/theme/'$MODULO'.php'
			./cli/generator/make/makeTheme.sh $MODULO $CONTROLLER $VISTA
			if [ -f $APP/$MODULO/$VIEWS_FOLDER/$VISTA ];
			then
				echo "Sí, sí existe app/"$MODULO/$VIEWS_FOLDER/$VISTA
			else
			echo "Creado app/"$MODULO/$VIEWS_FOLDER/$VISTA
			touch $APP/$MODULO/$VIEWS_FOLDER/$VISTA'.php'
			./cli/generator/make/makeVista.sh $MODULO $CONTROLLER $VISTA
			#./generator.sh $MODULO $CONTROLADOR $VISTA
			fi
		else
		echo "Creado app/"$MODULO/'views/'
		mkdir -m 777 $APP/$MODULO/'views'
		fi
	else
	#echo "Creado app/"$MODULO/"models/"
	mkdir -m 777 $APP/$MODULO
	fi
  x=$(( $x + 1 ))
done

composer dump-autoload -o

