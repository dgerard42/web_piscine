# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    ssap.py                                            :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: dgerard <marvin@42.fr>                     +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2018/02/21 19:04:13 by dgerard           #+#    #+#              #
#    Updated: 2018/02/21 19:04:33 by dgerard          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

#!/usr.bin/python3

import sys
import re

def main():
	words = []
	for param in sys.argv[1:]:
		if ' ' in param:
			wurds = param.split()
			words = wurds + words
		else:
			words.append(param)
	words = sorted(words)
	for word in words:
		print ("%s" % word)

main()
