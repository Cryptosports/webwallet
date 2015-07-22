{include file="header.tpl"}
{include file="nav.tpl"}  
<div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
	<h2>Create New Account</h2>
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">{$data.ip}</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Password</span>
  <input type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
</div>

  <button type="button" class="btn btn-default">Create</button>
      </div>
    </div> <!-- /container -->

{include file="footer.tpl"}
