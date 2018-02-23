# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    one_more_time.py                                   :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: dgerard <marvin@42.fr>                     +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2018/02/22 12:41:00 by dgerard           #+#    #+#              #
#    Updated: 2018/02/22 12:41:01 by dgerard          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

#!/usr/bin/python3

import sys
from datetime import datetime

def main():
	locale.setlocale(locale.LC_ALL, French)
	datetime_object = datetime.strptime(sys.argv[1], '%b %d %Y %I:%M%p')

# fuck this day
