@echo off
setlocal DisableDelayedExpansion
echo Featured download and convert audio(flac) and video to mp3 using ffmpeg
echo by thekorko quartex.net
::I want my mp3!
::Needs ffmpeg.exe, youtube-dl.exe placed into program folder
::Constants
set downloadsDir=%CD%/downloads/
set remainingDir=%CD%/remaining/
set "outputDir=%CD%/output/"
set programDir=%CD%
set convertir=n
delete=n
:options
::Obtenemos opciones [c]->Convert [d]->Download and convert
ECHO "[c]->Convert [d]->Download and Convert"
set /p command=Opciones[c]or[d]:
::Batch doesn't have AND, OR operators, so we do some shady stuff here
SET resultTrue=0
if %command%==c SET resultTrue=1
if %command%==d SET resultTrue=1
if not defined command (
  ::Undefined
  goto:options
) else if %resultTrue%==0 (
  ::Invalid command
  goto:options
)
set /p delete=Borrar videos[y]or[n]:
:operations
if %command%==d (
  ::Download files using yt passing convert parameter (-x --audio-format mp3)
  ::for files in txt do download directly in mp3
  ECHO doens't work
  pause
  if %delete%==y ( SET params=-x )
  if %delete%==n ( SET params=-x -k )
  ::No lee este archivo, a veces si, aveces no, la mayoria de las veces tira error en el controlador especificado
    FOR /F "delims=" %%i in (list.txt) do (
      %programDir%/youtube-dl.exe %keep% --audio-format mp3 %%i
      ::Workaraund because --output in yt-dl isn't working as i need to.
      MOVE %programDir%/*.mp3 %outputDir%
      ::Todo, move mp4/mkv/m4a files..
    )
) else if %command%==c (
  ::Convert files in downloads folder
  FOR /r %downloadsDir% %%F in (*.*) DO (
    ECHO Current File %%~nxF %%F
    ECHO Converting File with ffmpeg
    %programDir%/ffmpeg.exe -i "%%F" -ab 320k -map_metadata 0 -id3v2_version 3 ""%outputDir%"%%~nF".mp3""
    if %delete%==y (DEL "%%F")
    )
)
pause
