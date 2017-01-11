#!/bin/bash
# -*- ENCODING: UTF-8 -*-
#proyecto=@@nombre_proyecto@@

if [ $1 ] && [ $1 ]; then

	if [ "generar" = $1 ]; then
		bash ./cli/generator/generator.sh $2 $3 $4
	fi

   if [ "revizar" = $1 ]; then
		bash ./cli/codesniffer/revizar.sh $2 $3
	fi

	if [ "reparar" = $1 ]; then
		bash ./cli/codesniffer/reparar.sh $2 $3
	fi

	if [ "db:migration" = $1 ]; then
		if [ $2 ]; then
			if [ "create" = $2 ]; then
				bash ./cli/phinx/migrations/create.sh $3
			fi

			if [ "migrate" = $2 ]; then
				bash ./cli/phinx/migrations/migrate.sh
			fi

			if [ "rollback" = $2 ]; then
				bash ./cli/phinx/migrations/rollback.sh
			fi
		else
		   echo faltan variables
		   echo Ejemplo box db create MiPrimeraMigracion	
		   echo Ejemplo box db migrate 
		   echo Ejemplo box db rollback 
		fi
	fi

	if [ "db:seed" = $1 ]; then
		if [ $2 ]; then
			if [ "create" = $2 ]; then
				bash ./cli/phinx/seeds/create.sh $3
			fi

			if [ "run" = $2 ]; then
				bash ./cli/phinx/seeds/run.sh $3
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

