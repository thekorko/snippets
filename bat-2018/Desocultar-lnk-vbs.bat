@echo off
color 2
echo Script para mostrar las carpetas ocultadas por virus en las USB y dispositivos.
echo.
echo CREADO POR:  Arquezvall2004
echo Modificado por Korko
::echo (Perdí la siguiente versión de este script, soportaba más variantes de la infección)
echo.
echo Unidades disponibles en tu PC:
echo.
wmic logicaldisk get caption | findstr /r /v "^Caption"

:unidad
::Obtenemos la unidad a desocultar
set /p unidad=Unidad:
if not defined unidad (goto:unidad)

echo Desocultando...

::obtenemos todas las carpetas y las guardamos en lista.txt
dir /a:d /b %unidad%:\Drive\ > lista.txt

::para cada carpeta en lista.txt le cambiamos los atributos
FOR /F "delims=" %%i in (lista.txt) do ( attrib -s -r -h  "%unidad%:\Drive\%%i" )


::borramos el archivo lista.txt
del /F lista.txt

::fin
echo LISTO!
pause
