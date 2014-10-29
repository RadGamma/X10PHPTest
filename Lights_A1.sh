#!/bin/bash

#######################################################################
#
#  this is the shell script called by php that runs the x10 system
#
#######################################################################

A1="A1"
A2="A2"
A3="A3"

A1_Lights_On()
{
	heyu on a1
	espeak -v female1 "Your bedroom lights are on, Andrew."
}

A1_Lights_Off()
{
	heyu off a1
	espeak -v female1 "Your bedroom lights are off, Andrew."
}

A2_Lights_On()
{
	heyu on a2
	espeak -v female1 "The downstairs lights are on, Andrew."
}

A2_Lights_Off()
{
	heyu off a2
	espeak -v female1 "The downstairs lights are off, Andrew."
}

A3_Lights_On()
{
	heyu on a3
	espeak -v female6 "The gahraj lights are on, Andrew."
}

A3_Lights_Off()
{
	heyu off a3
	espeak -v female1 "The garage lights are off, Andrew."
}

if [ $1 = $A1 ]; then
	if( $2 ); then
   	A1_Lights_On
	else
   	A1_Lights_Off
	fi
fi

if	[ $1 = $A2 ]; then
	if( $2 ); then
   	A2_Lights_On
	else
   	A2_Lights_Off 
   fi
fi

if	[ $1 = $A3 ]; then
	if( $2 ); then
   	A3_Lights_On
	else
   	A3_Lights_Off
	fi
fi	
