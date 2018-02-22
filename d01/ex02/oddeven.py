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

def main():
	data = input('Enter a number: ')
	if is_number(data):
		data = int(data)
		if data % 2 == 0:
			print ("The number %d is even" % (data))
		else:
			print ("The number %d is odd" % (data))
	else:
		print ("'%s' is not a number" % (data))

main()
# exception ValueError
# Raised when a built-in operation or function receives an argument that has the
# right type but an inappropriate value, and the situation is not described by a
# more precise exception such as IndexError.
