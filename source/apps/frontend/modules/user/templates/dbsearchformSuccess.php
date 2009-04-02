<?php
 include_component('home','leftmenu');
 include_component('home','messages');
?>

<?php use_helper('Object') ?>
<?php echo form_tag('user/dbsearch') ?>
<input type="hidden" value="<?php echo $mdl; ?>" name="mdl" id="mdl">
<input type="hidden" value="<?php echo $fnc; ?>" name="fnc" id="fnc">
<label><b>Search users for <?php echo $hdr; ?></b></label>
<input type="hidden" value="<?php echo $option; ?>" name="o" id="option">

<?php echo 'Alumni Database'; ?>

<body>
<form  style="border: thick " >
<table border="1">
<tbody>

<tr>
<th>
FirstName :
</th>
<td>
<input type="text" name="firstname"  >

</td>
</tr>

<tr>
<th>
LastName :
</th>
<td>
<input type="text" name="lastname" >
</td>
</tr>

<tr>
<th>
Department :
</th>
<td>
<?php echo select_tag('branch', options_for_select($broptions), array(
			'include_blank' => true,
			))?>

</td>
</tr>

<tr>
<th>
Year of Graduation :
</th>
<td>
<?php echo select_tag('year', options_for_select($yroptions), array(
			'include_blank' => true,
			))?>		
</td>
</tr>

<tr>
<th>
Chapter(s) affiliation:
</th>
<td>
<?php echo select_tag('chapter', options_for_select($choptions), array(
			'include_blank' => true,
			))?>
</td>
</tr>

<tr>
<th>
User type: 
</th>
<td>
<?php echo select_tag('usertype', options_for_select($useroptions), array()) ?>
</td>
</tr>

<tr>
<th>
Location (city)
</th>
<td>
<input type="text" name="location" >
</td>
</tr>

<tr>
<th>
Country: 
</th>
<td>
<?php echo select_tag('country', options_for_select($countryoptions), array()) ?>
</td>
</tr>

<tr>
<td align="right" >
<?php echo submit_tag('Submit') ?>
</td>
</tr>

</tbody>




</table>




</form>
</body>


  