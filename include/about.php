<?php
/*
 *  Copyright (C) 2018 Laksamadi Guko.
 *
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
session_start();
// hide all error
error_reporting(0);
if (!isset($_SESSION["mikhmon"])) {
  header("Location:../admin.php?id=login");
} else {
}
?>
<style>
.iFWrapper {
	position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	padding-top: 25px;
	height: 0;
}
.iFWrapper iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
  height: 100%;
  border :none;
}
</style>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3><i class="fa fa-info-circle"></i> About</h3>
      </div>
      <div class="card-body">
        <h3>S4dulur.Net V<?= $_SESSION['v']; ?></h3>
<p>
  Aplikasi Monitoring Hotspot Mikrotik membantu mempermudah admin untuk mengotrol pembuatan voucher hotspot
</p>
<p>
  <ul>
    <li>
      Author : dkendcode
    </li>
	<li>
	Melayani jasa installasi LAN, Wifi, Hotspot, RT/Rw Net, Mikrotik, PAbx, CCtv, Computer Pc, DLL
	<li>
      Licence : <a href="https://wa.me/6281250997400" target='blank'>GPLv2</a>
    </li>
    <li>
      API Class : <a href="https://github.com/BenMenking/routeros-api" target='blank'>routeros-api</a>
    </li>
	<li>
      Wa : <a href="https://wa.me/6281250997400" target='blank'>+62 812 5099 7400</a>
    </li>
	<li>
      Telegram : <a href="https://t.me/dekapermana" target='blank'>dekapermana</a>
    </li>
    </p>
	 </ul>
<p>
  Terima kasih untuk semua yang telah mendukung pengembangan S4dulur.Net.
</p>
<div>
    <i>Copyright &copy; <i> 2019 S4dulur.Net by dkendcode</i></i>
</div>
</div>
</div>
</div>
</div>
