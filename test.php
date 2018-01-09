<script type="text/javascript" src="src/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="src/jquery.validate.js"></script>
<script type="text/javascript" src="scr/additional-methods.js"></script>
<script type="text/javascript" src="scr/messages_cs.js"></script>


<style>
.hidden {
    display:none;
}
</style>
<div class="container">
    <input type="checkbox" id="100" value="100" /> Show Form One
    <br />
    <input type="checkbox" id="101" value="101" /> Show Form Two
    <br />
</div>
<div class='area100 hidden'>Form One
    <input></input>
</div>
<div class='area101 hidden'>Form Two
    <input></input>
</div>

<script type="text/javascript">
$(".container :checkbox").click(function () {
    var testVar = ".area" + this.value;
    if (this.checked) $(testVar).show();
    else $(testVar).hide();
});
</script>
<?php

/**
 * @author 
 * @copyright 2017
 */



?>