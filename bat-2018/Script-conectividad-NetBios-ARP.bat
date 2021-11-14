@echo off
echo Pensado principalmente para windows XP.
echo Script pensado para levantar la conectividad entre PC clientes de una red LAN con un "servidor" de archivos SMB(Windows7/XP)
echo Escrito por thekorko 
echo www.quartex.net
echo Utilizar en la PC con problemas de conectividad
::echo support@quartex.net
::echo Disclaimer: hace uso de robocopy /joke
pause
echo -------------------------------------------------------------------------------
echo.
echo -------------------------------------------------------------------------------
echo.
::echo El script originalmente tenia los valores del router y el server codeados en el script(simplemente ctrl+f a las variables y borrar los bloques de codigo que tengan este comment)
cls
color F
ipconfig
:router
::Obtenemos la ip del router
color F
set /p routeripaddress=Indique la direccion ip del router:
if not defined routeripaddress (goto:router)
::echo Hasta aca
cls
color F
echo -------------------------------------------------------------------------------
echo.
echo -------------------------------------------------------------------------------
echo.
echo tl;dr robocopy
color F
echo -------------------------------------------------------------------------------
echo.
ping %routeripaddress%
echo -------------------------------------------------------------------------------
echo.
echo -------------------------------------------------------------------------------
echo.
echo Si el router [%routeripaddress%] no esta respondiendo
echo NO es un problema de tablas ARP y NetBios
echo Es mas probable que sea un problema gral en la red[Wireshark]
echo Una sobrecarga en el hardware del router[reinicio]
echo Un bucle en los switches[Buscar cables repetidos]
echo Un conflicto de ip, cable defectuoso, etc.
echo -------------------------------------------------------------------------------
echo.
echo -------------------------------------------------------------------------------
echo.
pause
cls
color F
echo Disclaimer: hace uso de robocopy
ipconfig
echo -------------------------------------------------------------------------------
echo.
echo -------------------------------------------------------------------------------
echo.
cls
color F
echo Disclaimer: hace uso de robocopy
ipconfig
echo -------------------------------------------------------------------------------
echo.
echo -------------------------------------------------------------------------------
echo.
:direccion
::Obtenemos la ip local
color F
set /p direccionipcliente=Indique su direccion IP Local:
if not defined direccionipcliente (goto:direccion)
echo -------------------------------------------------------------------------------
echo.
echo -------------------------------------------------------------------------------
echo.
cls
echo -------------------------------------------------------------------------------
echo.
echo -------------------------------------------------------------------------------
echo.
::echo El script originalmente tenia los valores del router y el server codeados en el script(simplemente ctrl+f a las variables y borrar los bloques de codigo que tengan este comentario)
:servidorip
::Obtenemos la ip del servidor
color F
set /p servidoripadress=Indique la direccion ip de la PC/Servidor:
if not defined servidoripadress (goto:servidorip)
echo -------------------------------------------------------------------------------
echo.
echo -------------------------------------------------------------------------------
echo.
:servidormac
::Obtenemos la direccion MAC del Servidor
color F
set /p servidormacadress=Indique la direccion mac de la PC/Servidor:
if not defined servidormacadress (goto:servidormac)
echo -------------------------------------------------------------------------------
echo.
echo -------------------------------------------------------------------------------
echo.
:servidornombre
::Obtenemos el nombre NetBios del Servidor
color F
set /p servidornombre=Indique el nombre de equipo NetBios(SERVER-EJEMPLO):
if not defined servidornombre (goto:servidonombre)
::echo Hasta aca
echo -------------------------------------------------------------------------------
echo.
echo -------------------------------------------------------------------------------
echo.
:sistema
cls
::Obtenemos el S.O
set /P sistema=Seleccionar Sistema Operativo WindowsXP[1] - Windows7/Vista[2]?
if /I "%sistema%" EQU "1" goto :winxp
if /I "%sistema%" EQU "2" goto :win7
goto:sistema

:winxp
cls
color F
echo -------------------------------------------------------------------------------
echo.
echo -------------------------------------------------------------------------------
echo.
ipconfig /flushdns
echo -------------------------------------------------------------------------------
echo.
echo Estos valores son previos al borrado consiguiente
echo -------------------------------------------------------------------------------
echo.
arp -a %servidoripadress%
echo -------------------------------------------------------------------------------
echo.
echo -------------------------------------------------------------------------------
echo.
arp -d %servidoripadress%
arp -d %servidoripadress%
arp -s %servidoripadress% %servidormacadress% %direccionipcliente%
arp -s %servidoripadress% %servidormacadress%
echo -------------------------------------------------------------------------------
echo.
echo -------------------------------------------------------------------------------
echo.
echo Estos valores son posteriores al borrado de [%servidoripadress%] de la tabla ARP local
arp -a %servidoripadress%
echo -------------------------------------------------------------------------------
echo.
echo -------------------------------------------------------------------------------
echo.
echo Verifique que %servidornombre%(%servidoripadress%) esta listado en la IP %direccionipcliente%(su ip actual) y que tiene una direccion MAC valida, Idealmente deberia decir "Estatico"
echo.
pause
cls
color F
echo -------------------------------------------------------------------------------
echo.
echo -------------------------------------------------------------------------------
echo.
nbtstat -A %servidoripadress% -RR
nbtstat -a %servidoripadress%
echo -------------------------------------------------------------------------------
echo.
echo -------------------------------------------------------------------------------
echo.
echo Verifique que %servidornombre%(%direccionipcliente%) esta registrado en su direccion: [%direccionipcliente%]
echo.
pause
cls
Color F
goto:testear

:win7
cls
color F
echo -------------------------------------------------------------------------------
echo.
echo -------------------------------------------------------------------------------
echo.
ipconfig /flushdns
arp -a %servidoripadress%
echo -------------------------------------------------------------------------------
echo.
echo -------------------------------------------------------------------------------
echo.
arp -d %servidoripadress%
arp -d %servidoripadress%
ping %servidoripadress%
echo -------------------------------------------------------------------------------
echo.
echo -------------------------------------------------------------------------------
echo.
arp -a %servidoripadress%
echo -------------------------------------------------------------------------------
echo.
echo -------------------------------------------------------------------------------
echo.
echo Verifique que %servidornombre%(%direccionipcliente%) esta listado en la IP %direccionipcliente%(su ip actual) y que tiene una direccion MAC valida.
echo.
pause
cls
color F
echo -------------------------------------------------------------------------------
echo.
echo -------------------------------------------------------------------------------
echo.
nbtstat -A %servidoripadress% -RR
nbtstat -a %servidoripadress%
echo -------------------------------------------------------------------------------
echo.
echo -------------------------------------------------------------------------------
echo.
echo Verifique que %servidornombre%(%direccionipcliente%) esta registrado en su direccion: [%direccionipcliente%]
echo.
pause
cls
Color F
goto:testear

:testear
echo -------------------------------------------------------------------------------
echo.
echo Realizando pruebas correspondientes de conectividad y acceso a archivos
echo -------------------------------------------------------------------------------
echo.
echo -------------------------------------------------------------------------------
echo.
ping %servidornombre%
echo -------------------------------------------------------------------------------
echo.
ping %servidoripadress%
echo -------------------------------------------------------------------------------
echo.
tracert %servidornombre%
echo -------------------------------------------------------------------------------
echo.
echo Puede verificar los testeos de conectividad
echo.
pause
cls
if /I "%sistema%" EQU "1" goto :xcopy
if /I "%sistema%" EQU "2" goto :robocopy

:robocopy
echo -------------------------------------------------------------------------------
echo.
echo -------------------------------------------------------------------------------
echo.
robocopy "\\%servidornombre%\Ejemplo\test" "C:\test" /E /XJ /SL /MT:8 /R:10 /W:5 /V /NS /NC /TEE
echo -------------------------------------------------------------------------------
echo.
cd C:\test
dir
echo -------------------------------------------------------------------------------
echo.
echo -------------------------------------------------------------------------------
echo.
echo Verifique que los archivos[3] fueron copiados correctamente a C:\test
echo.
pause
cls
echo -------------------------------------------------------------------------------
echo.
echo -------------------------------------------------------------------------------
echo.
cls
echo Deberia estar funcionando
DEL "c:\test" /F /Q
color F
goto:exitnode

:xcopy
echo -------------------------------------------------------------------------------
echo.
echo -------------------------------------------------------------------------------
echo.
xcopy "\\%servidornombre%\Ejemplo\test" "C:\test\" /f /c
echo -------------------------------------------------------------------------------
echo.
cd C:\test
dir
echo -------------------------------------------------------------------------------
echo.
echo -------------------------------------------------------------------------------
echo.
echo Verifique que los archivos[3] fueron copiados correctamente a C:\test
echo.
pause
cls
echo -------------------------------------------------------------------------------
echo.
echo -------------------------------------------------------------------------------
echo.
cls
echo Deberia estar funcionando
DEL "c:\test" /F /Q
color F
goto:exitnode


:exitnode
cls
::cache and exitnode
set /P exitn=Desea vaciar el cache_WinXP[1] - cache_Win7[2] - salir[3]?
if /I "%exitn%" EQU "1" goto :cachewinxp
if /I "%exitn%" EQU "2" goto :cachewin7
if /I "%exitn%" EQU "3" goto :salir
goto:exitnode

:cachewinxp
arp -d
arp -s %servidoripadress% %servidormacadress% %direccionipcliente%
arp -s %servidoripadress% %servidormacadress%
goto:salir

:cachewin7
arp -d
netsh interface ip delete arpcache
ping %servidoripadress%
ping %servidornombre%
goto:salir

:salir
echo -------------------------------------------------------------------------------
echo.
echo Si no funciono hasta ahora, puede intentar, reiniciar el router
echo revisar cables y switches cercanos
echo revisar si no hay un problema gral en otras oficinas
echo -------------------------------------------------------------------------------
echo.
pause
