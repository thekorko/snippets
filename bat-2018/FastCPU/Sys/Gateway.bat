::[Bat To Exe Converter]
::
::YAwzoRdxOk+EWAnk
::fBw5plQjdG8=
::YAwzuBVtJxjWCl3EqQJgSA==
::ZR4luwNxJguZRRnk
::Yhs/ulQjdF+5
::cxAkpRVqdFKZSDk=
::cBs/ulQjdF+5
::ZR41oxFsdFKZSDk=
::eBoioBt6dFKZSDk=
::cRo6pxp7LAbNWATEpCI=
::egkzugNsPRvcWATEpCI=
::dAsiuh18IRvcCxnZtBJQ
::cRYluBh/LU+EWAnk
::YxY4rhs+aU+JeA==
::cxY6rQJ7JhzQF1fEqQJQ
::ZQ05rAF9IBncCkqN+0xwdVs0
::ZQ05rAF9IAHYFVzEqQJQ
::eg0/rx1wNQPfEVWB+kM9LVsJDGQ=
::fBEirQZwNQPfEVWB+kM9LVsJDGQ=
::cRolqwZ3JBvQF1fEqQJQ
::dhA7uBVwLU+EWDk=
::YQ03rBFzNR3SWATElA==
::dhAmsQZ3MwfNWATElA==
::ZQ0/vhVqMQ3MEVWAtB9wSA==
::Zg8zqx1/OA3MEVWAtB9wSA==
::dhA7pRFwIByZRRnk
::Zh4grVQjdCmDJG6L5kkjOBpXSTikPXiuJYUp1Nvi/Nago1kYQ+MmNorD39Q=
::YB416Ek+ZW8=
::
::
::978f952a14a936cc963da21a135fa983
@setlocal enableextensions enabledelayedexpansion
@echo off
set gtwcambia=192.168.3.10
set gtwguarda=192.168.3.1
set machines=100
set gtw=192.168.3.1
set ipaddr=8.8.8.8
set oldstate=ambos
set waitMins=1
set /a waitMins=waitMins*60
  route delete 0.0.0.0 MASK 0.0.0.0 192.168.3.10
  route delete 0.0.0.0 MASK 0.0.0.0 192.168.3.1
  route delete 0.0.0.0 MASK 0.0.0.0 192.168.3.0
  route add 0.0.0.0 MASK 0.0.0.0 %gtw%
  route change 0.0.0.0 MASK 0.0.0.0 %gtw%
if defined gtw for %%A in (%machines%) do (
  netsh interface ipv4 set address name="Ethernet" source=static addr=192.168.3.%%A mask=255.255.255.0 gateway=%gtw%
  echo Se modifico la gateway por %gtw%
)
ping -n 2 !ipaddr!
:loop
set state=up
ping -n 4 -w 50 !ipaddr! >nul: 2>nul:
if not !errorlevel!==0 (
    set state=down
    echo.Link is !state!
    goto :isdown
    
)
if not !state!==!oldstate! (
    echo.Link is !state!
    set oldstate=!state!
)
ping -n 2 127.0.0.1 >nul: 2>nul:
goto :isup
goto :loop

:isdown
  route delete 0.0.0.0 MASK 0.0.0.0 192.168.3.1
  route delete 0.0.0.0 MASK 0.0.0.0 192.168.3.1
  route delete 0.0.0.0 MASK 0.0.0.0 192.168.3.0
  route add 0.0.0.0 MASK 0.0.0.0 %gtw%
  route change 0.0.0.0 MASK 0.0.0.0 %gtw%
if defined gtw for %%A in (%machines%) do (
  set gtwguarda=%gtw%
  set gtw=%gtwcambia%
netsh interface ipv4 set address name="Ethernet" source=static addr=192.168.3.%%A mask=255.255.255.0 gateway=%gtw%
echo Se modifico la gateway por %gtw%
  set gtwcambia=%gtwguarda%
)
ping -n 8 !ipaddr!
goto :loop
:isup

echo.Link is !state!
echo A la espera %waitMins% segundos: [N]ormal loop - [F]orce gate swap - [I]pconfig - [CLS] - [P]ause

:: 
choice /c nficp /d n /t %waitMins%

:: [N]ormal = 1; [F]orce = 2
goto Label%errorlevel%

:Label1
goto :loop

:Label2 
goto :isdown

:Label3
ping -n 4 1.1.1.1
ipconfig /all
goto :loop

:Label4
cls
goto :loop

:Label5
pause
goto :loop

endlocal