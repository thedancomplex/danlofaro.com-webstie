<?php
	include '../../head.php';
?>
<?php
	include '../../top.php';
?>

<div class="mainarea">

<p class="text"><img src="../../images/lofaroHubo.jpg" alt="Daniel M. Lofaro" width="20%" height="20%" class="rightphoto" style="margin-top:20px;"/>


<p>
<h2>Hubo-Ach Core System <br><font size="3">Reliable GNU/Linux Control Software for Hubo</font></h2>
<p>
Hubo-Ach is a low-level multi-process interface for the Hubo 2, Hubo 2+ and DRC-Hubo platforms designed by Daniel M. Lofaro. The system is based on the IPC called ACH by Neil Dantam and Mike Stilman.
This provides a conventional GNU/Linux programming environment, with the variety of tools available therein, for developing applications on the Hubo. 
It also efﬁciently links the embedded electronics and real-time control to popular frameworks for robotics software: ROS, OpenRAVE and MATLAB.
</p><p>
Reliability is a critical issue for software on the Hubo.
As a bipedal robot, Hubo must constantly maintain dynamic
balance; if the software fails, it will fall and break. 
A multiprocess software design improves Hubo’s reliability 
by isolating the critical balance code from other non-critical functions,
such as control of the neck or arms. For the high-speed, low-latency 
communications and priority access to latest sensor feedback, Ach provides the underlying IPC.
</p>

<h3>Overview:</h3>
Hubo-Ach handles CAN bus communication between the
PC and embedded electronics. Because the motor controllers
synchronize to the control period in a phase lock loop (PLL),
	the single <i>hubo-daemon</i> process runs at a ﬁxed control rate
	and communicates on the bus. The embedded controllers lock
	to this rate and linearly interpolate between the commanded
	positions, providing smoother trajectories in the face of limited
	communication bandwidth. This communication process also
	avoids bus saturation; with CAN bandwidth of 1 Mbps and
	200Hz control rate, <i>hubo-daemon</i> currently utilizes 78%
	of the bus. <i>Hubo-daemon</i> receives position targets from
	a <i>feedforward</i> channel and publishes sensor data to the
	feedback channel, providing the direct software interface
	to the embedded electronics.
</p>
<p>
	Each Hubo-Ach controller is an independent processes.
	The controllers handle tasks such as balance, manipulation, 
	and human-robot interaction. Each controller asynchronously 
	reads state from the <i>feedback</i> Ach channel
	and sets reference positions in the <i>feedforward</i> channel.
	<i>Hubo-daemon</i> reads the most recent reference position
	from the <i>feedforward</i> channel on the the rising edge of
	its control cycle. This allows the controller processes to run
	at arbitrary rates without effecting the PLL of the embedded
	motor controllers or the CAN bus bandwidth utilization.
</p>


<h3>Install:</h3>
<h4>Important Notes:</h4>
<b>Develop:</b> This will have the latest fixes and functionality but is not guaranteed to work with all other published software on the Hubo repo.  Fixes and functionality will make it to Stable within a week of being added.
<br>
<b>Stable:</b> This is widely tested and will work with all master branches on the Hubo repo.
<br>
<b>Required:</b> The Ach IPC must be installed before Hubo-Ach is installed.  Follow the directions here: 
<ul><li>Install Ach IPC: <a href="http://www.golems.org/node/1526">http://www.golems.org/node/1526</a></ul>
<br>
<b>Platform:</b> Tested on Ubuntu 12.04 i386 and amd64 Kernel 3.2.
</p>
<br>

Add one of the following to /etc/apt/source.list
<ul>
<li>Develop: <b>deb http://www.repo.danlofaro.com/release precise main</b>
<li>Stable: <b>deb http://www.drc-hubo.com/release precise main</b>
</ul>
To install/upgrade:
<ul>
<li><b>sudo apt-get install hubo-ach hubo-ach-dev</b>
</ul>
Note: make sure to say (yes) when it asks to update joint.table and over write it.
</p>

<h3>Source:</h3>
<b><a href="https://github.com/hubo/hubo-ach.git">https://github.com/hubo/hubo-ach.git</a></b>
<ul>
<li>master branch --> Stable apt-get
<li>develop branch --> Develop apt-get
</ul>

<h3>Latest Debs:</h3>
<ul>
<li><a href="http://danlofaro.com/software/hubo-ach/latest/hubo-ach_i386.deb">hubo-ach_i386.deb</a>
<li><a href="http://danlofaro.com/software/hubo-ach/latest/hubo-ach-dev_i386.deb">hubo-ach-dev_i386.deb</a>
<li><a href="http://danlofaro.com/software/hubo-ach/latest/hubo-ach_amd64.deb">hubo-ach_amd64.deb</a>
<li><a href="http://danlofaro.com/software/hubo-ach/latest/hubo-ach-dev_amd64.deb">hubo-ach-dev_amd64.deb</a>
<li><a href="http://danlofaro.com/software/hubo-ach/latest/hubo-ach_source.tar.gz">hubo-ach_source.tar.gz</a>
</ul>

<h3>All Debs:</h3>
<ul>
<li><a href="http://www.repo.danlofaro.com/release/archive/hubo-ach_0.0.20130224_i386.deb">hubo-ach_0.0.20130224_i386.deb</a>
<li><a href="http://www.repo.danlofaro.com/release/archive/hubo-ach-dev_0.0.20130224_i386.deb">hubo-ach-dev_0.0.20130224_i386.deb</a>
<li><a href="http://www.repo.danlofaro.com/release/archive/hubo-ach_0.0.20130224_amd64.deb">hubo-ach_0.0.20130224_amd64.deb</a>
<li><a href="http://www.repo.danlofaro.com/release/archive/hubo-ach-dev_0.0.20130224_amd64.deb">hubo-ach-dev_0.0.20130224_amd64.deb</a>


<li><a href="http://www.repo.danlofaro.com/release/archive/hubo-ach_0.0.20130210_i386.deb">hubo-ach_0.0.20130210_i386.deb</a>
<li><a href="http://www.repo.danlofaro.com/release/archive/hubo-ach-dev_0.0.20130210_i386.deb">hubo-ach-dev_0.0.20130210_i386.deb</a>
<li><a href="http://www.repo.danlofaro.com/release/archive/hubo-ach_0.0.20130210_amd64.deb">hubo-ach_0.0.20130210_amd64.deb</a>
<li><a href="http://www.repo.danlofaro.com/release/archive/hubo-ach-dev_0.0.20130210_amd64.deb">hubo-ach-dev_0.0.20130210_amd64.deb</a>
</ul>
<?php
	include '../../foot.php';
?>



