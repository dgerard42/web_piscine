# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    epur_str.py                                        :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: dgerard <marvin@42.fr>                     +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2018/02/21 18:50:20 by dgerard           #+#    #+#              #
#    Updated: 2018/02/21 18:50:21 by dgerard          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

#!/usr/bin/python3

import sys
import re

def main():
	if (len(sys.argv) > 1):
		trimmed = re.sub(' +', ' ', sys.argv[1])
		trimmed = trimmed.strip()
		print ("%s" % trimmed)

main()
