@extends('layout.main')

@section('content')
 

 <div class="container">
<h4>Select No of option</h4>
<div id="selected_form_code">
<select id="select_btn">
<option value="0">--Select No Of Options--</option>
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
<option value="4">Four</option>
<option value="5">Five</option>
<option value="6">Six</option>
<option value="7">Seven</option>
<option value="8">Eight</option>
<option value="9">Nine</option>
<option value="10">Ten</option>

</select>
</div>
<div id="form1">
<form action="#" id="form_submit" method="post" name="form_submit">
<!-- Dynamic Registration Form Fields Creates Here -->
</form>
</div>
</div>

@endsection