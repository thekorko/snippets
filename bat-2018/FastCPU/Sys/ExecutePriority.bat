::[Bat To Exe Converter]
::
::YAwzoRdxOk+EWAnk
::fBw5plQjdG8=
::YAwzuBVtJxjWCl3EqQJgSA==
::ZR4luwNxJguZRRnk
::Yhs/ulQjdF+5
::cxAkpRVqdFKZSTk=
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
::Zh4grVQjdCmDJG6L5kkjOBpXSTikPXiuJYUp1M3j6umStkgtRuswaobPw/qLOOVz
::YB416Ek+ZG8=
::
::
::978f952a14a936cc963da21a135fa983
@echo off
title PriorityLaunch
echo Esperando unos segundos, antes de aplicar prioridades a determinados ejecutables.
TIMEOUT 8
wmic process where name="SteamService.exe" CALL setpriority 16384
wmic process where name="steamwebhelper.exe" CALL setpriority 16384
wmic process where name="Steam.exe" CALL setpriority 16384
wmic process where name="OriginWebHelperService.exe" CALL setpriority "idle"
wmic process where name="UplayWebCore.exe" CALL setpriority 16384
wmic process where name="upc.exe" CALL setpriority 16384
wmic process where name="NVIDIA Web Helper" CALL setpriority 16384
wmic process where name="OriginWebHelperService.exe" CALL setpriority "idle"
wmic process where name="MSASCuiL.exe" CALL setpriority 16384
wmic process where name="jusched.exe" CALL setpriority idle
wmic process where name="juscheck.exe" CALL setpriority idle
wmic process where name="GameScannerService.exe" CALL setpriority idle
wmic process where name="AVGUI.exe" CALL setpriority 16384
wmic process where name="EpicGamesLauncher.exe" CALL setpriority idle
exit