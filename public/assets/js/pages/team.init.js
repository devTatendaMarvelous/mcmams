for(var list=document.querySelectorAll(".team-list"),buttonGroups=document.querySelectorAll(".filter-button"),i=0;i<buttonGroups.length;i++)buttonGroups[i].addEventListener("click",onButtonGroupClick);function onButtonGroupClick(t){"list-view-button"===t.target.id||"list-view-button"===t.target.parentElement.id?(document.getElementById("list-view-button").classList.add("active"),document.getElementById("grid-view-button").classList.remove("active"),list.forEach(function(t){t.classList.add("list-view-filter"),t.classList.remove("grid-view-filter")})):(document.getElementById("grid-view-button").classList.add("active"),document.getElementById("list-view-button").classList.remove("active"),list.forEach(function(t){t.classList.remove("list-view-filter"),t.classList.add("grid-view-filter")}))}