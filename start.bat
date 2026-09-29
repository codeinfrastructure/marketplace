@echo off
title Laravel & Vite

:: Navigate to the folder where this batch file lives
cd /d "%~dp0"

echo Starting Backend and Frontend in the background...
echo ------------------------------------------------------------

:: Start PHP Artisan Serve in the background
start /b cmd /c "php artisan serve"

:: Start NPM Run Dev in the background
start /b cmd /c "npm run dev"

:: Wait 2 seconds for server logs to print out first
timeout /t 2 >nul

:: Clear any overlapping lines and open the active prompt cleanly
echo.
echo ------------------------------------------------------------
echo Server logs loaded. You can type your commands below:
cmd /k
