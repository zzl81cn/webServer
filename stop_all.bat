/stop
@echo off 
echo stopping nginx... 
taskkill /F /IM nginx.exe > nul 
echo stopping php-cgi... 
taskkill /F /IM php-cgi.exe > nul 
::echo stopping mysql... 
::taskkill /F /IM mysqld.exe > nul 