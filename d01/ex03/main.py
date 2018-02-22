# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    main.py                                            :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: dgerard <marvin@42.fr>                     +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2018/02/21 18:34:07 by dgerard           #+#    #+#              #
#    Updated: 2018/02/21 18:34:10 by dgerard          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

#!/usr/bin/python3

from ft_split import ft_split

def main():
	words = ft_split("Hello     World AAA")
	for word in words:
		print ("%s" % (word))

main()
