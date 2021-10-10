@echo off
title WorkFlow
echo Just Firefox for now
wmic process where name="firefox.exe" CALL setpriority 128
exit
