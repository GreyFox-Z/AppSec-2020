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

In the CLi,  we could run the following command to start `XAMPP`:

`sudo /opt/lampp/lampp start`

#### Configuration
- Download this application to `/opt/lampp/htdocs` with following command: <br> `https://github.com/GreyFox-Z/AppSec-2020.git`

## How to run this application?
When open a web browser, go to `localhost/Test-Web-App`.  (I saved into a folder as Test-Web-App)
![HomePage](Resource/Home.png)

Please go to `setup` at first to create a sufficient database. After that, please direct to `login` panel to perform test.

## Examples of Found Vulnerabilities
#### 1. XSS 
Testing:
![XSS01](Resource/xss01.png)

Result:
![XSS02](Resource/xss02.png)

#### 2. SQLi 
Testing:
![SQLi01](Resource/sqli01.png)

Result:
![SQLi02](Resource/sqli02.png)

#### 3. Command Execution
Testing:
![Command01](Resource/command01.png)

Result:
![Command02](Resource/command02.png)
