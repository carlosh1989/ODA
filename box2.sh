#!/bin/bash
OPTION=$(whiptail --title "Test Menu Dialog" --menu "Choose your option" 15 60 4 \
"1" "DATABASE" \
"2" "DEBUG" 3>&1 1>&2 2>&3)

exitstatus=$?
if [ $exitstatus = 0 ]; then
	if [[ $OPTION = 1 ]]; then
		DATABASE=$(whiptail --title "Test Menu Dialog" --menu "Choose your option" 15 60 4 \
		"1" "MIGRATIONS" \
		"2" "SEEDS" 3>&1 1>&2 2>&3)

		exitstatus=$?
		if [ $exitstatus = 0 ]; then
			if [[ $DATABASE = 1 ]]; then
				MIGRATIONS=$(whiptail --title "Test Menu Dialog" --menu "Choose your option" 15 60 4 \
				"1" "Create" \
				"2" "Migrate" \
				"3" "Rollback" 3>&1 1>&2 2>&3) 

				exitstatus=$?
				if [ $exitstatus = 0 ]; then
				    if [[ $MIGRATIONS = 1 ]]; then
						MIGRATIONSCREATE=$(whiptail --title "Test Free-form Input Box" --inputbox "What is your pet's name?" 10 60 Wigglebutt 3>&1 1>&2 2>&3)
						 
						exitstatus=$?
						if [ $exitstatus = 0 ]; then
		    				./box.sh db:migration create $MIGRATIONSCREATE
						else
						    echo "You chose Cancel."
						fi
				    fi

				    if [[ $MIGRATIONS = 2 ]]; then
						./box.sh db:migration migrate
				    fi

				    if [[ $MIGRATIONS = 3 ]]; then
				    	echo "Rollback";
				    fi
				else
				    echo "You chose Cancel."
				fi
			fi
			if [[ $DATABASE = 2 ]]; then
				SEEDS=$(whiptail --title "Test Menu Dialog" --menu "Choose your option" 15 60 4 \
				"1" "Create" \
				"2" "Run" \
				"3" "Run Seed" 3>&1 1>&2 2>&3) 

				exitstatus=$?
				if [ $exitstatus = 0 ]; then
				    if [[ $SEEDS = 1 ]]; then
						SEEDSCREATE=$(whiptail --title "Test Free-form Input Box" --inputbox "What is your pet's name?" 10 60 Wigglebutt 3>&1 1>&2 2>&3)
						 
						exitstatus=$?
						if [ $exitstatus = 0 ]; then
		    				./box.sh db:seed create $SEEDSCREATE
						else
						    echo "You chose Cancel."
						fi
				    fi

				    if [[ $SEEDS = 2 ]]; then
						./box.sh db:seed run
				    fi

				    if [[ $SEEDS = 3 ]]; then
						SEEDSRUN=$(whiptail --title "Test Free-form Input Box" --inputbox "What is your pet's name?" 10 60 Wigglebutt 3>&1 1>&2 2>&3)
						 
						exitstatus=$?
						if [ $exitstatus = 0 ]; then
		    				./box.sh db:seed run $SEEDSRUN
						else
						    echo "You chose Cancel."
						fi

				    fi
				else
				    echo "You chose Cancel."
				fi

			fi
		else
		    echo "You chose Cancel."
		fi
	fi
	if [[ $OPTION = 2 ]]; then
		DEBUG=$(whiptail --title "Test Menu Dialog" --menu "Choose your option" 15 60 4 \
		"1" "Revizar" \
		"2" "Reparar" 3>&1 1>&2 2>&3) 

		exitstatus=$?
		if [ $exitstatus = 0 ]; then
		    if [[ $DEBUG = 1 ]]; then
				DEBUGREVIZARMODULO=$(whiptail --title "Test Free-form Input Box" --inputbox "What is your pet's name?" 10 60 Wigglebutt 3>&1 1>&2 2>&3)
				 
				exitstatus=$?
				if [ $exitstatus = 0 ]; then
					DEBUGREVIZARCONTROLADOR=$(whiptail --title "Test Free-form Input Box" --inputbox "What is your pet's name?" 10 60 Wigglebutt 3>&1 1>&2 2>&3)
					 
					exitstatus=$?
					if [ $exitstatus = 0 ]; then
	    				./box.sh revizar $DEBUGREVIZARMODULO $DEBUGREVIZARCONTROLADOR
					else
					    echo "You chose Cancel."
					fi
				else
				    echo "You chose Cancel."
				fi
		    fi

		    if [[ $DEBUG = 2 ]]; then
				DEBUGREPARARMODULO=$(whiptail --title "Test Free-form Input Box" --inputbox "What is your pet's name?" 10 60 Wigglebutt 3>&1 1>&2 2>&3)
				 
				exitstatus=$?
				if [ $exitstatus = 0 ]; then
					DEBUGREPARARCONTROLADOR=$(whiptail --title "Test Free-form Input Box" --inputbox "What is your pet's name?" 10 60 Wigglebutt 3>&1 1>&2 2>&3)
					 
					exitstatus=$?
					if [ $exitstatus = 0 ]; then
	    				./box.sh reparar $DEBUGREPARARMODULO $DEBUGREPARARCONTROLADOR
					else
					    echo "You chose Cancel."
					fi
				else
				    echo "You chose Cancel."
				fi
		    fi
		else
		    echo "You chose Cancel."
		fi
	fi
else
    echo "You chose Cancel."
fi