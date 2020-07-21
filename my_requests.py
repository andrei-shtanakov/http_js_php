# -*- coding: utf-8 -*-
"""
Created on Tue Jul 21 17:24:37 2020

@author: Admin
"""

import requests


# response = requests.get('work_db.php?max_count=10')
response = requests.get('http://localhost/http_js_php/work_db.php?max_count=10', auth=('user', 'passwd'))


print(response)