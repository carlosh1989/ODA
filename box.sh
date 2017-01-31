#!/bin/bash
OPTION=$(whiptail --title "HERRAMIENTAS" --menu "" 15 60 4 \
"1" "DATABASE" \
"2" "DEBUG" \
"3" "GENERATOR" \
"4" "DOCS" 3>&1 1>&2 2>&3)

exitstatus=$?
if [ $exitstatus = 0 ]; then
	if [[ $OPTION = 1 ]]; then
		DATABASE=$(whiptail --title "DATABASE" --menu "" 15 60 4 \
		"1" "MIGRATIONS" \
		"2" "SEEDS" 3>&1 1>&2 2>&3)

		exitstatus=$?
		if [ $exitstatus = 0 ]; then
			if [[ $DATABASE = 1 ]]; then
				MIGRATIONS=$(whiptail --title "MIGRATIONS" --menu "" 15 60 4 \
				"1" "Create" \
				"2" "Migrate" \
				"3" "Rollback" 3>&1 1>&2 2>&3) 

				exitstatus=$?
				if [ $exitstatus = 0 ]; then
				    if [[ $MIGRATIONS = 1 ]]; then
						MIGRATIONSCREATE=$(whiptail --title "MIGRATIONS - CREATE" --inputbox "Ingrese nombre de Migración" 10 60 3>&1 1>&2 2>&3)
						 
						exitstatus=$?
						if [ $exitstatus = 0 ]; then
		    				./cli/cli.sh db:migration create $MIGRATIONSCREATE
						else
						    echo "Cerrado";
						fi
				    fi

				    if [[ $MIGRATIONS = 2 ]]; then
						./cli/cli.sh db:migration migrate
				    fi

				    if [[ $MIGRATIONS = 3 ]]; then
				    	./cli/cli.sh db:migration rollback
				    fi
				else
				    echo "Cerrado";
				fi
			fi
			if [[ $DATABASE = 2 ]]; then
				SEEDS=$(whiptail --title "SEEDS" --menu "" 15 60 4 \
				"1" "Create" \
				"2" "Run" \
				"3" "Run Seed" 3>&1 1>&2 2>&3) 

				exitstatus=$?
				if [ $exitstatus = 0 ]; then
				    if [[ $SEEDS = 1 ]]; then
						SEEDSCREATE=$(whiptail --title "SEEDS - CREATE" --inputbox "Ingrese nombre de Seed" 10 60 3>&1 1>&2 2>&3)
						 
						exitstatus=$?
						if [ $exitstatus = 0 ]; then
		    				./cli/cli.sh db:seed create $SEEDSCREATE
						else
						    echo "Cerrado";
						fi
				    fi

				    if [[ $SEEDS = 2 ]]; then
						./cli/cli.sh db:seed run
				    fi

				    if [[ $SEEDS = 3 ]]; then
						SEEDSRUN=$(whiptail --title "SEEDS - RUN" --inputbox "Ingrese nombre de Seed a ejecutar." 10 60 3>&1 1>&2 2>&3)
						 
						exitstatus=$?
						if [ $exitstatus = 0 ]; then
		    				./cli/cli.sh db:seed run $SEEDSRUN
						else
						    echo "Cerrado";
						fi

				    fi
				else
				    echo "Cerrado";
				fi

			fi
		else
		    echo "Cerrado";
		fi
	fi
	if [[ $OPTION = 2 ]]; then
		DEBUG=$(whiptail --title "DEBUG" --menu "" 15 60 4 \
		"1" "Revizar" \
		"2" "Reparar" 3>&1 1>&2 2>&3) 

		exitstatus=$?
		if [ $exitstatus = 0 ]; then
		    if [[ $DEBUG = 1 ]]; then
				DEBUGREVIZARMODULO=$(whiptail --title "DEBUG - REVIZAR" --inputbox "Ingrese Modulo" 10 60 3>&1 1>&2 2>&3)
				 
				exitstatus=$?
				if [ $exitstatus = 0 ]; then
					DEBUGREVIZARCONTROLADOR=$(whiptail --title "DEBUG - REVIZAR" --inputbox "Ingrese Controlador" 10 60 3>&1 1>&2 2>&3)
					 
					exitstatus=$?
					if [ $exitstatus = 0 ]; then
	    				./cli/cli.sh revizar $DEBUGREVIZARMODULO $DEBUGREVIZARCONTROLADOR
					else
					    echo "Cerrado";
					fi
				else
				    echo "Cerrado";
				fi
		    fi

		    if [[ $DEBUG = 2 ]]; then
				DEBUGREPARARMODULO=$(whiptail --title "DEBUG - REPARAR" --inputbox "Ingrese Modulo" 10 60 3>&1 1>&2 2>&3)
				 
				exitstatus=$?
				if [ $exitstatus = 0 ]; then
					DEBUGREPARARCONTROLADOR=$(whiptail --title "DEBUG - REPARAR" --inputbox "Ingrese Controlador" 10 60 3>&1 1>&2 2>&3)
					 
					exitstatus=$?
					if [ $exitstatus = 0 ]; then
	    				./cli/cli.sh reparar $DEBUGREPARARMODULO $DEBUGREPARARCONTROLADOR
					else
					    echo "Cerrado";
					fi
				else
				    echo "Cerrado";
				fi
		    fi
		else
		    echo "Cerrado";
		fi
	fi

	if [[ $OPTION = 3 ]]; then
		GENERATOR=$(whiptail --title "DEBUG" --menu "" 15 60 4 \
		"1" "Clean" \
		"2" "Restful CRUD" 3>&1 1>&2 2>&3) 

		exitstatus=$?
		if [ $exitstatus = 0 ]; then
		    if [[ $GENERATOR = 1 ]]; then
				GENERATORMODULO=$(whiptail --title "GENERATOR" --inputbox "Ingrese Modulo" 10 60 3>&1 1>&2 2>&3)
				exitstatus=$?
				if [ $exitstatus = 0 ]; then
					GENERATORCONTROLADOR=$(whiptail --title "GENERATOR" --inputbox "Ingrese Controlador" 10 60 3>&1 1>&2 2>&3)
					exitstatus=$?
					if [ $exitstatus = 0 ]; then
						GENERATORVISTA=$(whiptail --title "GENERATOR" --inputbox "Ingrese Vista/Metodo" 10 60 3>&1 1>&2 2>&3)
						exitstatus=$?
						if [ $exitstatus = 0 ]; then
							./cli/cli.sh generar:clean $GENERATORMODULO $GENERATORCONTROLADOR $GENERATORVISTA
						else
						    echo "Cerrado";
						fi
					else
					    echo "Cerrado";
					fi
				else
				    echo "Cerrado";
				fi
		    fi

		    if [[ $GENERATOR = 2 ]]; then
				GENERATORMODULO=$(whiptail --title "GENERATOR" --inputbox "Ingrese Modulo" 10 60 3>&1 1>&2 2>&3)
				exitstatus=$?
				if [ $exitstatus = 0 ]; then
					GENERATORCONTROLADOR=$(whiptail --title "GENERATOR" --inputbox "Ingrese Controlador" 10 60 3>&1 1>&2 2>&3)
					exitstatus=$?
					if [ $exitstatus = 0 ]; then
						./cli/cli.sh generar:crud $GENERATORMODULO $GENERATORCONTROLADOR
					else
					    echo "Cerrado";
					fi
				else
				    echo "Cerrado";
				fi
		    fi
		else
		    echo "Cerrado";
		fi
	fi

	if [[ $OPTION = 4 ]]; then
		./cli/cli.sh documentar
	fi
else
    echo "Cerrado";
fi