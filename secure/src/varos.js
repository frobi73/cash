
function test(varos_id) 
{
    var varos = (varos_id.value || varos_id.options[varos_id.selectedIndex].value);
    var cities = ["Budapest","Győr","Pécs","Szeged","Debrecen",
            "Berlin","Nünberg","München","Hamburg","Frankfurt","Stuttgart",
            "Innsbruck","Salzburg","Wien","Graz","Linz"];
switch(varos) {
    case "Ungarn":
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

    case "Deutschland":
    var div = document.querySelector("#select_city"),
    frag = document.createDocumentFragment(),
    select = document.createElement("select");
    select.classList.add("form-control");
    select.setAttribute("name","varos");
    select.setAttribute("id","placeholder");
    var element = document.getElementById("placeholder");
    element.parentNode.removeChild(element);
    var i;
        for (i = 5; i < 11; i++) 
        { 
            select.options.add( new Option(cities[i],cities[i]));
        }
        break;

    case "Osterreich":
    var div = document.querySelector("#select_city"),
    frag = document.createDocumentFragment(),
    select = document.createElement("select");
    select.classList.add("form-control");
    select.setAttribute("name","varos");
    select.setAttribute("id","placeholder");

    var element = document.getElementById("placeholder");
    element.parentNode.removeChild(element);

    var i;
        for (i = 11; i < 16; i++) 
        { 
            select.options.add( new Option(cities[i],cities[i]) );
        }
        break;
    }

    frag.appendChild(select);
    div.appendChild(frag);
}