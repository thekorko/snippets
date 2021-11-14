@ECHO OFF
echo by thekorko
echo www.quartex.net
pause
:dirip
ipconfig
echo Ingresa tu IP
set /p IPADDRESS=Indica tu direccion ip:
if not defined IPADDRESS (goto:dirip)
set INTERVAL=0
:PINGINTERVAL
ping %IPADDRESS% -n 1 >> filename.txt
timeout %INTERVAL%
GOTO PINGINTERVAL