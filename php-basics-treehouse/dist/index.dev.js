"use strict";

var yourUsername = "harrynortham";
var xhr = new XMLHttpRequest();

xhr.onreadystatechange = function () {
  if (xhr.readyState === 4 && xhr.status === 200) {
    var myProfile = JSON.parse(xhr.responseText);
    var badges = myProfile.badges; //console.log(badges);

    var container = document.getElementById("treehouse-badges");
    var ul = document.createElement("ul");
    container.appendChild(ul);

    for (i = 0; i < badges.length; i++) {
      var iconUrl = badges[i].icon_url;
      var badgeName = badges[i].name;
      var earnedDate = new Date(badges[i].earned_date);
      var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
      var date = monthNames[earnedDate.getMonth() + 1] + " " + earnedDate.getDate() + ", " + earnedDate.getFullYear();
      var li = document.createElement("li");
      li.innerHTML = "\n        <img src=\"".concat(iconUrl, "\" alt=\"\"/>\n        <p>Achievement</p>\n        <h4>").concat(badgeName, "</h4>\n        <p>").concat(date, "</p>\n        ");
      ul.appendChild(li);
    }
  }
};

xhr.open("GET", "https://teamtreehouse.com/".concat(yourUsername, ".json"));
xhr.send();
//# sourceMappingURL=index.dev.js.map
