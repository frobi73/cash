
function test(varos_id) 
{
    var varos = (varos_id.value || varos_id.options[varos_id.selectedIndex].value);
    var cities = ["Budapest","Győr","Pécs","Szeged","Debrecen",
            "Berlin","München","Hamburg","Frankfurt","Stuttgart",
            "Innsbruck","Salzburg","Wien","Graz","Linz"];
switch(varos) {
    case "hu":
    var div = document.querySelector("#select_city"),
    frag = document.createDocumentFragment(),
    select = document.createElement("select");
    select.classList.add("form-control");
    select.setAttribute("name","varos");
    select.setAttribute("id","placeholder");
    var element = document.getElementById("placeholder");
    element.parentNode.removeChild(element);
        var i;
        for (i = 0; i < 5; i++) 
        {
            select.options.add( new Option(cities[i],cities[i]) );
        }
        break;

    case "de":
    var div = document.querySelector("#select_city"),
    frag = document.createDocumentFragment(),
    select = document.createElement("select");
    select.classList.add("form-control");
    select.setAttribute("name","varos");
    select.setAttribute("id","placeholder");
    var element = document.getElementById("placeholder");
    element.parentNode.removeChild(element);
    var i;
        for (i = 5; i < 10; i++) 
        { 
            select.options.add( new Option(cities[i],cities[i]));
        }
        break;

    case "au":
    var div = document.querySelector("#select_city"),
    frag = document.createDocumentFragment(),
    select = document.createElement("select");
    select.classList.add("form-control");
    select.setAttribute("name","varos");
    select.setAttribute("id","placeholder");

    var element = document.getElementById("placeholder");
    element.parentNode.removeChild(element);

    var i;
        for (i = 10; i < 15; i++) 
        { 
            select.options.add( new Option(cities[i],cities[i]) );
        }
        break;
    }

    frag.appendChild(select);
    div.appendChild(frag);
}