<h1>Unix-LAMP-WebApp</h1>

<img src="https://phoenixweb.com.au/wp-content/uploads/2016/11/LAMP-Stack-logo.png" width="50%" height="50%">

This project intends to use the LAMP stack model to host a web application. LAMP is a software stack that implements Linux, a web server, a database and a script language. The project will be using Debian as the Linux distribution, an Apache web server, MySQL databases, and PHP scripting language.

The website is intended to be a work/time management application by the likes of Trello. Our project will be using a VPS as a platform.

<h2>Considerations:</h2>

The biggest choice was between Debian and Ubuntu as a distribution for the project.

<table>
  <tr>
    <th>Debian Pros</th>
    <th>Debian Cons</th>
  </tr>
  <tr>
    <td>Stable and Secure</td>
    <td>Smaller community</td>
  </tr>
  <tr>
    <td>Easy to use</td>
    <td>Slightly less user-friendly than Ubuntu</td>
  </tr>
  <tr>
    <td>Lightweight</td>
    <td></td>
  </tr>
</table>

<table>
  <tr>
    <th>Ubuntu Pros</th>
    <th>Ubuntu Cons</th>
  </tr>
  <tr>
    <td>Regular updates</td>
    <td>Less server support</td>
  </tr>
  <tr>
    <td>Better hardware support/td>
    <td>Less stable</td>
  </tr>
  <tr>
    <td>Large community</td>
    <td></td>
  </tr>
</table>

We ultimately chose Debian as our distribution because of its lightweight nature and stability. It is also the distribution our team is the most familiar with.

<h2>Requirements:</h2>
<ul>
<li>User Accounts: The website will use PHP and MySQL to manage and create user accounts.</li>
<li>Process/Service Management: Management will be done uniquely on the host’s side.</li>
<li>Security: Setting up a firewall as well as Fail2ban, Mod_security and Mod_evasive.</li>
<li>Automated Tasks: Mainly involve managing HTTP requests and web scraping. PHP scripting will be used for its ease of use with MySQL.</li>
</ul>
<h2>Timeline:</h2>
<ul>
<li>Week 1: Setting up Linux, Apache, MySQL and PHP, running tests on server, VPS purchase, setting up Git.</li>
<li>Week 2: Basic server setup, setting up security services, writing PHP scripts and the HTML/CSS for the web application.</li>
<li>Week 3: Writing the scripts for automated processes and the account system.</li>
</ul>
<h2>Team composition:</h2>
<a href="https://github.com/triv117" target="_blank">Tommy Rivard</a> & <a href="https://github.com/damianovisa" target="_blank">Damiano Visalli
