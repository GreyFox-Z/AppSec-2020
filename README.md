# A Vulnerable Web Application

## Learning Objective

Based on what you know about the various typed of vulnerabilities that an application can be subject to, I'd like you to write a small app that is vulnerable to at least two security issues. 

## Detailed Requirements

You can write a brand new app or build on your assignment from Lab 1. 

Examples:

- XSS
- CSRF
- SQLi
- Buffer Overflow
- Weak authentication 
- Vulnerable dependency

## Deliverables

Your deliverable can either be a virtual machine running your app or instructions on how to install and run it. Please also provide a short write up of the vulnerabilities you’ve included. 

## Installation 
#### Pre-requested

- `XAMPP` is required to run this application. (I only tested on Kali Linux) <br> Please download the `XAMPP` with this [Link](https://www.apachefriends.org/download.html)

#### Installation Process
Change the permissions to the installer 

`chmod 755 xampp-linux-*-installer.run`

Run Installer 

`sudo ./xampp-linux-*-installer.run`

That's all. XAMPP is now installed below the `/opt/lampp` directory.

#### Start `XAMPP`
In the CLi,  we could run the following command to start `XAMPP`:

`sudo /opt/lampp/lampp start`

#### Configuration
- Download this application to `/opt/lampp/htdocs` with following command: <br> `https://github.com/GreyFox-Z/AppSec-2020.git`

## How to run this application?
When open a web browser, go to `localhost/Test-Web-App`.  (I saved into a folder as Test-Web-App)
![HomePage](https://github.com/GreyFox-Z/AppSec-2020/blob/Project-2-Write-a-Vulnerable-Web-App/Resource/Home.PNG)

Please go to `setup` at first to create a sufficient database. After that, please direct to `login` panel to perform test.

## Examples of Found Vulnerabilities
#### 1. XSS 
Testing:
![XSS01](https://github.com/GreyFox-Z/AppSec-2020/blob/Project-2-Write-a-Vulnerable-Web-App/Resource/xss01.PNG)

Result:
![XSS02](https://github.com/GreyFox-Z/AppSec-2020/blob/Project-2-Write-a-Vulnerable-Web-App/Resource/xss02.PNG)

#### 2. SQLi 
Testing:
![SQLi01](https://github.com/GreyFox-Z/AppSec-2020/blob/Project-2-Write-a-Vulnerable-Web-App/Resource/sqli01.PNG)

Result:
![SQLi02](https://github.com/GreyFox-Z/AppSec-2020/blob/Project-2-Write-a-Vulnerable-Web-App/Resource/sqli02.PNG)

#### 3. Command Execution
Testing:
![Command01](https://github.com/GreyFox-Z/AppSec-2020/blob/Project-2-Write-a-Vulnerable-Web-App/Resource/command01.PNG)

Result:
![Command02](https://github.com/GreyFox-Z/AppSec-2020/blob/Project-2-Write-a-Vulnerable-Web-App/Resource/command02.PNG)
