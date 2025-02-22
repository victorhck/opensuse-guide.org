<?php include 'header.php'; ?>
<title>14. Graphics Drivers - Install Nvidia or ATI/AMD 3D Driver</title>
<?php include 'header2.php'; ?>
<?php include 'menu.php'; ?> 

<div class="heading1">14. Graphics Drivers</div>
Note that there's no need to install the below non-free video drivers, if the free drivers used by default work for your needs.<br /><br />



<!-- nvidia KMPs start -->



<div class="heading2">14.1 Nvidia</div>
This section describes two different ways of installing the proprietary Nvidia graphics driver, either using 1-click installation or using the terminal.<br /><br />

<div class="heading3">14.1.1 Install the Nvidia Driver with 1-Click Installation</div>
Click on the button corresponding to your Nvidia graphics card to install the driver with 1-click install.<br /><br />


<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>These 1-Click Installers currently only work with the <b>Firefox web browser</b>.</td>
</tr>
</tbody>
</table>
</div><br />


One click for <b>Geforce 600 series and later</b>. <a href="https://www.nvidia.com/Download/driverResults.aspx/145182/en-us" target="_blank">See supported products<a/>.<br /><br />

<a href="https://opensuse-community.org/nvidia_G05.ymp"><img src="images/oneclick/nvidia.png" alt="ymp" class="pic" /></a><br /><br />


One click for <b>Geforce 400 series and later</b>. <a href="https://www.nvidia.com/Download/driverResults.aspx/142567/en-us" target="_blank">See supported products<a/>.<br /><br />

<a href="https://opensuse-community.org/nvidia_G04.ymp"><img src="images/oneclick/nvidia.png" alt="ymp" class="pic" /></a><br /><br />



Afterwards reboot the computer.<br /><br />



<div class="heading3">14.1.2 Install the Nvidia Driver in the Terminal</div>
You can install the Nvidia driver in the terminal. <u>By using this method you don't need to know your graphics card model or series</u>.<br /><br />

First add the repository:
<div class="clroot">zypper addrepo -f https://download.nvidia.com/opensuse/leap/15.3 nvidia</div><br />

The following command should automatically install the correct driver for your card:<br />

<div class="clroot">zypper install-new-recommends --repo https://download.nvidia.com/opensuse/leap/15.3</div><br />

When installation is done reboot the computer.<br /><br />



<!-- nvidia KMP end -->
<!-- ati KMP start -->



<div class="heading2">14.2 ATI/AMD</div>
The free software drivers included by default should work very well for most. For some newer cards you may need a proprietary driver, see:<br />
<a href="https://en.opensuse.org/SDB:AMDGPU-PRO">https://en.opensuse.org/SDB:AMDGPU-PRO</a><br /><br />



<!-- ati KMP end -->



<div class="heading2">14.3 Intel</div>
The 3D drivers for Intel graphics cards are free software, and can therefore be included in openSUSE out of the box. No additional installation or configuration is needed.<br /><br />


<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="codecs.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="wlan.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
	</tr>
</tbody>
</table>

<?php include 'footer.php'; ?>
