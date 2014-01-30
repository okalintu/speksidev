function setStory(data)
{
    $('#story').html(data);
}

function activate(element)
{
	$("#navbar td a").removeClass("active");
	$(element).addClass("active");
}

function navClick(event)
{
    event.preventDefault();
    var name=$(this).attr("id");
    activate(this);
    $.ajax({url: ("content/"+name+'.php')}).done(setStory);
    window.history.pushState({'id':name},'Dance Macabre',name);
}

function popfunc(event)
{
    if (!event.state){return;}
    var name=event.state.id;
    //console.log(name); 
    activate('#'+name);
    $.ajax({url: ("content/"+name+'.php')}).done(setStory);
}

function init(page)
{
	$("#navbar td a").click(navClick);
    window.onpopstate = popfunc;       
    var active= $('#'+page);
    if (!active.toArray().length)
    {
        active= $('#macabre');
    }
    //console.log(active);
    active.trigger('click');
}
function bannerClick()
{
    $("#macabre").trigger('click');
}
