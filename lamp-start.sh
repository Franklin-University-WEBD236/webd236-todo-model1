#!/bin/bash

truncate -s 0 .apache2/log/*
#.mysql/run-mysqld.sh &
rm MicroUniversity.db3
sqlite3 MicroUniversity.db3 < MicroUniversity.sql
.apache2/run-apache2.sh &

tail -f -v .apache2/log/*
#wait 
