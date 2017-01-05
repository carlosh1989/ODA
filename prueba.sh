#!/bin/bash
DB=$(whiptail --title "Base de Datos" --radiolist \
"Opciones de Phinx" 15 60 4 \
"Create" "" ON \
"Migrate" "" OFF \
"Rollback" "" OFF 3>&1 1>&2 2>&3)
 
exitstatus=$?
if [ $exitstatus = 0 ]; then
    #echo "The chosen distro is:" $DISTROS
    if [ $DB = "Create" ]; then
		#!/bin/bash
		CREATE=$(whiptail --title "Base de Datos" --inputbox "Ingrese nombre de nueva migración" 10 60 3>&1 1>&2 2>&3)
		 
		exitstatus=$?
		if [ $exitstatus = 0 ]; then
		    ./box.sh db:migration create $CREATE
		fi
    fi
else
    echo "You chose Cancel."
fi