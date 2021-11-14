@echo off
echo Siple convert audio from flac to mp3 using ffmpeg
echo by korko www.quartex.net
::echo Place in the same folder as ffmpeg.exe and modify it.
D:\ffmpeg.exe -i D:\input.flac -ab 320k -map_metadata 0 -id3v2_version 3 D:\output.mp3