<h1>Unix: VPS with GitHub Actions</h1>

<img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Faperogeek.fr%2Fwp-content%2Fuploads%2F2020%2F01%2Fgithub-1024x925.png&f=1&nofb=1" width="25%" height="25%">

This project intends to use GitHub Actions in order to automatically redploy pushed repository changess. The project will be using Debian as the Linux distribution, and will implement GitHub Actions, GitHub Secrets, and with use a self-hosted runner service. 

The files are intended to be used as a template from which you can host manage your own website using redeploy. 

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
    <td>Better hardware support</td>
    <td>Less stable</td>
  </tr>
  <tr>
    <td>Large community</td>
    <td></td>
  </tr>
</table>


We ultimately chose Debian as our distribution because of its lightweight nature and stability. It is also the distribution our team is the most familiar with.
<h2>Details:</h2>
The project should be relatively easy for experienced linux users or people who are familiar with servers. All of the files needed for the project are included in the repository. There are website files inculded in the repository as a sample, but feel free to use your own website files.

<h2>About / Team composition:</h2>
<a href="https://github.com/triv117" target="_blank">Tommy Rivard</a> & <a href="https://github.com/damianovisa" target="_blank">Damiano Visalli</a>

This project was completed as part of a Unix course. While the original idea of this project was greater, (originally implementing a LAMP stack), we are still very satisfied with the experience and have learned a lot making it.
  
 Thank you to everyone involved in the project and thank you to our teacher Tassia Camoes-Araujo.
