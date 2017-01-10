#!/bin/bash          
MODULO=$1
CONTROLADOR_FOLDER="controllers"
CONTROLLER=$2
CONTROLADOR=${2^}'.php'

VIEWS_FOLDER="views"
VISTA=$3'.php'

MODELS_FOLDER="models"

x=1
while [ $x -le 3 ]
do
	#MODULO
	if [ -d ../../app/$MODULO ];
	then
		#CARPETA CONTROLLERS
		if [ -d ../../app/$MODULO/$CONTROLADOR_FOLDER ];
		then
			#CONTROLLADOR
			if [ -f ../../app/$MODULO/$CONTROLADOR_FOLDER/$CONTROLADOR ];
			then
				echo "Sí, sí existe app/"$MODULO/'controllers/'$CONTROLADOR
			else
			echo "Creado app/"$MODULO/'controllers/'$CONTROLADOR
			touch ../../app/$MODULO/$CONTROLADOR_FOLDER/$CONTROLADOR
			./generator.sh $MODULO $CONTROLLER $VISTA
			fi
		else
		echo "Creado existe app/"$MODULO/'controllers/'
		mkdir -m 777 ../../app/$MODULO/'controllers'
		fi

		#CARPETA VIEWS
		if [ -d ../../app/$MODULO/$VIEWS_FOLDER ];
		then
			if [ -f ../../app/$MODULO/$VIEWS_FOLDER/$VISTA ];
			then
				echo "Sí, sí existe app/"$MODULO/$VIEWS_FOLDER/$VISTA
			else
			echo "Creado app/"$MODULO/$VIEWS_FOLDER/$VISTA
			touch ../../app/$MODULO/$VIEWS_FOLDER/$VISTA
			./generator.sh $MODULO $CONTROLADOR $VISTA
			fi
		else
		echo "Creado app/"$MODULO/'views/'
		mkdir -m 777 ../../app/$MODULO/'views'
		fi

		#CARPETA MODELS
		if [ -d ../../app/$MODULO/$MODELS_FOLDER ];
		then
			#CONTROLLADOR
			# if [ -f app/$MODULO/$CONTROLADOR_FOLDER/$CONTROLADOR ];
			# then
			# 	echo "Sí, sí existe app/"$MODULO/'controllers/'$CONTROLADOR
			# else
			# echo "N app/"$MODULO/'controllers/'$CONTROLADOR
			# touch app/$MODULO/$CONTROLADOR_FOLDER/$CONTROLADOR
			# fi
			echo "SI, si existe app/"$MODULO/'models/'
		else
		echo "Creado app/"$MODULO/'models/'
		mkdir -m 777 ../../app/$MODULO/'models'
		fi
	else
	echo "Creado app/"$MODULO/"models/"
	mkdir -m 777 ../../app/$MODULO
	fi
  x=$(( $x + 1 ))
done

