 <center>  <?php


session_start();
$username=$_SESSION['user'];
$password=$_SESSION['password'];


if (!$username)
{
echo "Username needed";
echo "<meta http-equiv=Refresh content=3;url=index.php>";
}
else{

	if (!$password)
	{
	echo "Password needed";
	echo "<meta http-equiv=Refresh content=3;url=index.php>";
	}else{

include './conexion.php';
$conexion=$misn;
$DB=$misN;


	mysql_select_db($DB,$conexion) or die ("Database selection troubles");
	$consulta=mysql_query("select * from users where username='$username' and password='$password' order by id DESC limit 1",$conexion) 
	or die ("Datos suministrados incorrectos <meta http-equiv=Refresh content=3;url=index.php>");
	while ($reg=mysql_fetch_array($consulta))
{
$primary_device_id=$reg['primary_device_id'];
}
	mysql_close($conexion);
// Otro código de tu sistema aquí... 

include './conexion.php';
$conexion=$misn;
$DB=$misN;

	mysql_select_db($DB,$conexion) or die ("Database selection troubles");
	$consulta=mysql_query("select * from devices where id=$primary_device_id order by id DESC limit 1",$conexion) 
	or die ("Datos suministrados incorrectos <meta http-equiv=Refresh content=3;url=index.php>");
	while ($reg=mysql_fetch_array($consulta))
{
$name=$reg['name'];
}
	mysql_close($conexion);
// Otro código de tu sistema aquí... 


?>
</center> 
<html>
	<head>
<LINK REL=StyleSheet HREF="styles1.css" TYPE="text/css">
<LINK REL=StyleSheet HREF="index_style.css" TYPE="text/css">
<title>CLI SELECTION</title>

	<style>
	.centrado{
  
  background: #4FAEC4;
  color: white;
  text-align: center;
  font-size: 38px;

	}

	#cuadro1{
	width: 55%;
	background: #F8F8F8 ;
	padding: 25px;
	margin: 5px auto;
	border: 3px solid #D8D8D8;
	height:;
	border-radius: 14px;
	}	

	#div3 table {
    border-collapse: collapse;
 	width: 50%;
 	height: 38%;
 	border-radius: 8px;
	}
div#margen{
	margin:0px;
	padding:0px;
	padding:65px;
	padding-right: 55px;
	}
	</style>

	</head>
	<body>

			<div id="barra-lateral">

            
            <div id="logo-menu">
            
            <p class="title-menu">Intercom Premium</p>
            
            </div>
            

            <div id="margen"> 
            	  <form action="suoerlog.php" method=post><input type=hidden name=user value="<?php echo $username;?>">
		  <input type=hidden name=password value="<?php echo $password;?>"><input type=submit value="Test Numbers">
							  </form>
							  <form action="lists.php" method=post><input type=hidden name=user value="<?php echo $username;?>">
		  <input type=hidden name=password value="<?php echo $password;?>"><input type=submit value="Calls">
							  </form>
							  <form action="stats.php" method=post><input type=hidden name=user value="<?php echo $username;?>">
		  <input type=hidden name=password value="<?php echo $password;?>"><input type=submit value="Stats">
							  </form>
<form action=index.php method=post><input type=hidden name=paracostos value="<?php echo $paracostos;?>">
<input type=hidden name=password value="<?php echo $password;?>"><input type=submit value="Exit">
</form>
			</div>
     
     		</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center>
<div id="cuadro1">
<div id="div3">
<form action=cligs.php method=post>
<table>
<tr>
<td><center>Device name</center></td><td><center>Number of clis</center></td>
</tr>
<tr>
<td><center><?php echo $name; ?></center></td><td><center><select name=cantidad>

<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
<option>60</option>
<option>61</option>
<option>62</option>
<option>63</option>
<option>65</option>
<option>66</option>
<option>67</option>
<option>68</option>
<option>69</option>
<option>70</option>
<option>71</option>
<option>72</option>
<option>73</option>
<option>74</option>
<option>75</option>
<option>76</option>
<option>77</option>
<option>78</option>
<option>79</option>
<option>80</option>
<option>81</option>
<option>82</option>
<option>83</option>
<option>84</option>
<option>85</option>
<option>86</option>
<option>87</option>
<option>88</option>
<option>89</option>
<option>90</option>
<option>91</option>
<option>92</option>
<option>93</option>
<option>94</option>
<option>95</option>
<option>96</option>
<option>97</option>
<option>98</option>
<option>99</option>
</select>



</center></td>
</tr>
<tr>
<td colspan=2><center><input type=hidden name=id value="<?php echo $primary_device_id; ?>"><input type=submit value=CONTINUE></center></td>
</tr>
</table>
</form>
</div>
</div>



<?php

///////////////////
			
}




}


?>
</center>
</body>
</html>

