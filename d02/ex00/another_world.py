# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    another_world.py                                   :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: dgerard <marvin@42.fr>                     +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2018/02/22 12:09:43 by dgerard           #+#    #+#              #
#    Updated: 2018/02/22 12:09:44 by dgerard          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

#!/usr/bin/python3

import sys
import re

def main():
	if (len(sys.argv) > 1):
		trimmed = re.sub('\t+', ' ', sys.argv[1])
		trimmed = trimmed.strip()
		trimmed = re.sub(' +', ' ', trimmed)
		trimmed = trimmed.strip()
		print ("%s" % trimmed)

main()
