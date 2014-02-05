function setStory(data)
{
    fade_speed = 150;

    $('#story').animate({opacity: 0}, fade_speed, function() {
        $(this).html(data);
        $(this).animate({opacity: 1}, fade_speed);
    });
}

function activate(element)
{
	$("#navbar td a").removeClass("active");
	$(element).addClass("active");
}

function navClick(event)
{
    if ((event.which === 1 || event.isTrigger) && !event.ctrlKey && !event.metaKey) {
        event.preventDefault();
        var name=$(this).attr("href");
        activate(this);
        $.ajax({url: ("content/"+name+'.php')}).done(setStory);
        window.history.pushState({'id':name},'Dance Macabre',name);
        _gaq.push(['_trackEvent', 'Speksi2014', name]);
    }
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
	$(".inside-link").click(navClick);
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
