# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    ft_split.py                                        :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: dgerard <marvin@42.fr>                     +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2018/02/21 13:37:27 by dgerard           #+#    #+#              #
#    Updated: 2018/02/21 13:37:31 by dgerard          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

#!/usr/bin/python3

def ft_split(string):
	words = string.split()
	words = sorted(words)
	return (words)
