
#!/bin/bash    
#creado base de datos
#echo "create database $2" | mysql -u $1 -p

#corriendo las migraciones para crear la tabla usuarios
#./cli/cli.sh db:migration migrate

#correr los seed para crear datos falsos
#./cli/cli.sh db:seed run

#generamos el modulo auth
#./cli/cli.sh generar:auth

INSTALL=$(whiptail --title "INSTALAR AUTH/LOGIN?" --menu "" 15 60 4 \
"1" "SI" \
"2" "NO" 3>&1 1>&2 2>&3) 

exitstatus=$?
if [ $exitstatus = 0 ]; then
    if [[ $INSTALL = 1 ]]; then
		ROOT=$(whiptail --title "INSTALL" --inputbox "Ingrese ROOT de base de datos mysql" 10 60 3>&1 1>&2 2>&3)
		exitstatus=$?
		if [ $exitstatus = 0 ]; then
			if [[ $ROOT ]]; then
				NOMBREDATABASE=$(whiptail --title "INSTALL" --inputbox "Ingrese nombre de base de datos a crear" 10 60 3>&1 1>&2 2>&3)
				exitstatus=$?
				if [ $exitstatus = 0 ]; then
					if [[ $NOMBREDATABASE ]]; then
						./mysql-create-db-user.sh --host=localhost --database=$NOMBREDATABASE --user=$ROOT 
						./cli/cli.sh db:migration migrate
						./cli/cli.sh db:seed run
						./cli/cli.sh generar:auth
					else
						echo "Error, debe ingresar nombre de paquete";
					fi
				else
				    echo "Cerrado";
				fi
			else
				echo "Error, debe ingresar nombre de paquete";
			fi
		else
		    echo "Cerrado";
		fi
    fi

    if [[ $INSTALL = 2 ]]; then
		./cli/cli.sh generar:home
    fi
else
    echo "Cerrado";
fi