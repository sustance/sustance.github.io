@echo off
echo Setting up FreeDOS Networking...
echo.

REM Load packet driver
lh c:\mtcp\pktdrvr

REM Configure network
set MTCPCFG=c:\mtcp\mtcp.cfg

REM Test network
c:\mtcp\ping 8.8.8.8

echo.
echo Network ready. Available tools:
echo - FTP: ftp server.com
echo - TELNET: telnet server.com 22
echo - PING: ping hostname
echo.



echo For SSH, use plink from host machine:
echo plink -P 2222 localhost
