# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    oddeven.py                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: dgerard <marvin@42.fr>                     +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2018/02/21 11:53:36 by dgerard           #+#    #+#              #
#    Updated: 2018/02/21 11:53:38 by dgerard          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

#!/usr/bin/python3

import sys

def is_number(s):
	try:
		float(s)
		return True
	except ValueError:
		return False

if sys.argv[1]
