#!/bin/bash
# -*- ENCODING: UTF-8 -*-
#proyecto=@@nombre_proyecto@@

if [ $1 ] && [ $1 ]; then
   if [ "revizar" = $1 ]; then
		bash ./consola/revizar.sh $2
	fi

	if [ "reparar" = $1 ]; then
		bash ./consola/reparar.sh $2
	fi

	if [ "db" = $1 ]; then
		if [ $2 ]; then
			if [ "create" = $2 ]; then
				bash ./consola/phinx/create.sh $3
			fi

			if [ "migrate" = $2 ]; then
				bash ./consola/phinx/migrate.sh
			fi

			if [ "rollback" = $2 ]; then
				bash ./consola/phinx/rollback.sh
			fi
		else
		   echo faltan variables
		   echo Ejemplo box db create MiPrimeraMigracion	
		   echo Ejemplo box db migrate 
		   echo Ejemplo box db rollback 
		fi
	fi
else
   echo faltan variables
   echo Ejemplo box revizar traslado	
fi

