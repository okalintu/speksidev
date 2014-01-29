function navclick()
{
	$("#navbar td").attr("class","");
	$(this).attr("class","active")
}

function init()
{
	$("#navbar td").click(navclick);
}