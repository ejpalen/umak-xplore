// Initialize the map
var map = L.map("map").setView([14.563476705678243, 121.05690771252787], 18);

// Add a tile layer (OpenStreetMap)
L.tileLayer(
  "https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}",
  {
    attribution: 'Map data © <a href="https://www.esri.com">Esri</a>',
  }
).addTo(map);

/*function onMapClick(e) {
  alert("You clicked the map at " + e.latlng.toString());
}

map.on("click", onMapClick);*/

// Create markers for each location
const locations = [
  {
    Id: "building-admin",
    name: "Admin Building",
    lat: 14.562967859892698,
    lng: 121.05607836411521,
  },
  {
    Id: "building-ab1",
    name: "Academic Bldg I",
    lat: 14.562787066308347,
    lng: 121.05641541397485,
  },
  {
    Id: "building-ab2",
    name: "Academic Bldg II",
    lat: 14.563917677460271,
    lng: 121.05574051679726,
  },
  {
    Id: "building-ab3",
    name: "Academic Bldg III",
    lat: 14.563263,
    lng: 121.05564,
  },
  {
    Id: "building-stadium",
    name: "UMak Stadium",
    lat: 14.563718994613598,  
    lng: 121.0560823555121,
  },
  {
    Id: "building-hpsb",
    name: "HPSB",
    lat: 14.562425561190956,
    lng: 121.05591866109829,
  },
];


// Create markers for each location
const markers = locations.map((location, index) => {
  const marker = L.marker([location.lat, location.lng], {
    icon: L.icon({
      iconUrl: "media/UmakDiscovery/mark.png",
      iconSize: [38, 38],
      iconAnchor: [16, 32],
      popupAnchor: [0, -32],
    }),
  });

  marker.bindTooltip(location.name, {
    permanent: true,
    direction: "center",
    offset: L.point(15, -50),
    className: "label-container",
  });

  // Add click event listener to marker
  marker.addEventListener("click", () => {
    //Open Directory Option
    const directoryOption = document.getElementById("directory-option");
    const mapOption = document.getElementById("interactive-map-option");
    directoryOption.click();

    dropdownButtonText.textContent = mapOption.textContent;
    const imgSrc = mapOption.querySelector("img").src;
    dropdownButtonIcon.src = imgSrc;

    // Toggle visibility of parent divs with different ids
    const parentDivs = document.querySelectorAll(".parent-div");

    const parentMarker = document.getElementById(`${location.Id}`);

    const parentID = parentMarker.id;

    console.log(parentID);

    parentDivs.forEach((div) => {
      const header = div.querySelector(".parent-div-header");
      const children = div.querySelectorAll(".child-div, .floor-dropdown");
      const allFloorDivs = document.querySelectorAll(`.building-floor-options`);
      const dropdownButton = div.querySelector(".admin-dropdown-button");
      const dropdownMenu = div.querySelectorAll(".admin-dropdown-menu");

      headerClicked(div, header, children, allFloorDivs);
      adminDropdownButtonClicked();
      adminDropdownItemsClicked(allFloorDivs);
      facilityClicked();

      const id = div.getAttribute("id");
      if (id === location.Id) {
        div.classList.toggle("mapOpen");
        header.click();
        dropdownButton.click();
        dropdownMenu.forEach((menu) => {
          if (!menu.classList.contains("admin-show")) {
            menu.classList.toggle("admin-show");
            menu.classList.toggle("admin-show-dropdown");
          }
        });
      } else {
        div.classList.remove("mapOpen");
        div.classList.toggle("mapRemove");
      }
    });

    // Hide all markers except the clicked one
    markers.forEach((m) => {
      if (m !== marker) {
        map.removeLayer(m);
        markerGroup2.removeFrom(map);
        markerGroup3.removeFrom(map);
      }
    });

    // Zoom to the clicked marker
    map.setView([location.lat, location.lng], 20);

    // Show all markers again if the clicked marker is clicked again
    if (marker.active) {
      markers.forEach((m) => {
        map.addLayer(m);
        m.active = false;
        markerGroup2.addTo(map);
        markerGroup3.addTo(map);
      });
      // Unzoom
      map.setView([14.563476705678243, 121.05690771252787], 18);

      //Open Interactive Option
      const interactiveOption = document.getElementById(
        "interactive-map-option"
      );
      interactiveOption.click();

      // Reset active property of marker to false
      marker.active = false;
    } else {
      marker.active = true;
      markerGroup2.removeFrom(map);
      markerGroup3.removeFrom(map);
    }
  });
  return marker;
});

// Add markers to the map
const markerGroup = L.layerGroup(markers);
markerGroup.addTo(map);

// Add click event listener to interactive map option
const interactiveOption = document.getElementById("interactive-map-option");
interactiveOption.addEventListener("click", () => {

  // Simulate a click on the active marker to close its associated parent div header
  markers.forEach((marker) => {
    if (marker.active) {
      marker.fireEvent("click");
    }
  });
});

const locations2 = [
  {
    name: "Fitness Gym",
    lat: 14.562525, 
    lng: 121.055576,
  },
  {
    name: "Food Booths",
    lat: 14.563309, 
    lng: 121.056241, 
  },
  {
    name: "Food Stalls",
    lat: 14.562624,
    lng: 121.055791,
  },
  {
    name: "Library",
    lat: 14.562453, 
    lng: 121.055689,
  },
  {
    name: "Social Space",
    lat: 14.563491,
    lng: 121.056134,
  },
  {
    name: "Canteen",
    lat: 14.56238,
    lng: 121.056107,
  },
];

// Create markers for each location
const markers2 = locations2.map((location, index) => {
  const marker = L.marker([location.lat, location.lng], {
    icon: L.icon({
      iconUrl: "media/UmakDiscovery/markBlue.png",
      iconSize: [28, 28],
      iconAnchor: [16, 32],
      popupAnchor: [0, 0],
    }),
  });

  marker.bindTooltip(location.name, {
  
    direction: "center",
    offset: L.point(0, -50),
    className: "label-container",
  });

  return marker;
});

// Add the markers to the map
const markerGroup2 = L.layerGroup(markers2).addTo(map);

const locations3 = [
  {
    name: "Computer Labs",
    lat: 14.563107, 
    lng: 121.05554,
  },
  {
    name: "Language Center",
    lat: 14.563014,
    lng: 121.055626,
  },
  {
    name: "Case Room",
    lat: 14.562952,  
    lng: 121.055524,
  },
  {
    name: "Grand Theatre",
    lat: 14.562842, 
    lng: 121.055817,
  },
  {
    name: "College of Computing and Information Science (CCIS)",
    lat: 14.562759, 
    lng: 121.055984,
  },
  {
    name: "Laboratories",
    lat: 14.562349,  
    lng: 121.055764,
  },
  {
    name: "Lecture Room",
    lat: 14.562473,
    lng: 121.055496,
  },
  {
    name: "University of Makati Employees Multipurpose Cooperative (UMEMPC)",
    lat: 14.562297,  
    lng: 121.056188,
  },
];

// Create markers for each location
const markers3 = locations3.map((location, index) => {
  const marker = L.marker([location.lat, location.lng], {
    icon: L.icon({
      iconUrl: "media/UmakDiscovery/markGreen.png",
      iconSize: [28, 28],
      iconAnchor: [16, 32],
      popupAnchor: [0, 0],
    }),
  });

  marker.bindTooltip(location.name, {
  
    direction: "center",
    offset: L.point(0, -50),
    className: "label-container",
  });

  return marker;
});

// Add the markers to the map
const markerGroup3 = L.layerGroup(markers3).addTo(map);

///For all

//MAIN MENUUUUUU
// Get the dropdown button, menu and its list items
const dropdownButton = document.querySelector(".dropdown-button");
const dropdownButtonIcon = document.querySelector(
  ".discoveries-dropdown-icon img"
);
const dropdownButtonText = document.querySelector(".dropdown-button p");
const dropdownMenu = document.querySelector(".dropdown-menu");
const dropdownItems = dropdownMenu.querySelectorAll(".dropdown-item");
const mainOption = dropdownMenu.querySelectorAll(".dropdown-item");

// Add a click event listener to each list item
dropdownItems.forEach((item) => {
  item.addEventListener("click", () => {
    // Move the clicked item to the top of the dropdown menu
    dropdownMenu.insertBefore(item, dropdownMenu.firstChild);
    // Update the dropdown button text to show the selected option
    dropdownButtonText.textContent = item.textContent;
    const imgSrc = item.querySelector("img").src;
    dropdownButtonIcon.src = imgSrc;

    const discoveriesOption = document.querySelectorAll(".discoveries-option");

    discoveriesOption.forEach((option) => {
      if (item.id === "interactive-map-option") {
        option.classList.add("discoveriesOptionRemove");
        option.classList.remove("discoveriesOptionOpen");
        document
          .querySelector(".map-wrapper")
          .classList.remove("discoveriesOptionRemove");
        document
          .querySelector(".map-wrapper")
          .classList.add("discoveriesOptionOpen");

        document
          .querySelector(".hangoutsDropdown")
          .classList.remove("hangoutsDropdownOpen");
 
          
        markerGroup.addTo(map);
        markerGroup2.addTo(map);
        markerGroup3.addTo(map);

      }
      if (item.id === "directory-option") {
        //Close any open parent div
        parentDivs.forEach((parentDiv) => {
          const dropdownMenu = parentDiv.querySelectorAll(
            ".admin-dropdown-menu"
          );
          parentDiv.classList.remove("mapOpen");
          parentDiv.classList.remove("mapRemove");

          dropdownMenu.forEach((menu) => {
            if (menu.classList.contains("admin-show")) {
              menu.classList.remove("admin-show");
              menu.classList.remove("admin-show-dropdown");
            }
          });

          const header = parentDiv.querySelector(".parent-div-header");
          const children = parentDiv.querySelectorAll(
            ".child-div, .floor-dropdown"
          );

          header.classList.remove("header-open");
          children.forEach((child) => {
            child.classList.remove("sibling-open");
          });

          if (parentDiv.classList.contains("open")) {
            parentDiv.classList.remove("open");
            parentDiv
              .querySelectorAll(".child-div, .floor-dropdown")
              .forEach((el) => {
                el.classList.remove("sibling-open");
                parentDiv
                  .querySelector(".parent-div-header")
                  .classList.remove("header-open");
              });
          }
        });

        option.classList.add("discoveriesOptionRemove");
        option.classList.remove("discoveriesOptionOpen");
        document
          .querySelector(".parent-container")
          .classList.remove("discoveriesOptionRemove");
        document
          .querySelector(".parent-container")
          .classList.add("discoveriesOptionOpen");

        document
          .querySelector(".hangoutsDropdown")
          .classList.remove("hangoutsDropdownOpen");
       
        markerGroup.addTo(map);
        markerGroup3.addTo(map);
        markerGroup2.removeFrom(map);
      }

      if (item.id === "hangouts-option") {
        parentDivs.forEach((parentDiv) => {
          const dropdownMenu = parentDiv.querySelectorAll(
            ".admin-dropdown-menu"
          );
          parentDiv.classList.remove("mapOpen");
          parentDiv.classList.remove("mapRemove");

          dropdownMenu.forEach((menu) => {
            if (menu.classList.contains("admin-show")) {
              menu.classList.remove("admin-show");
              menu.classList.remove("admin-show-dropdown");
            }
          });
        });

        option.classList.add("discoveriesOptionRemove");
        option.classList.remove("discoveriesOptionOpen");
        document
          .querySelector(".hangouts-wrapper")
          .classList.remove("discoveriesOptionRemove");
        document
          .querySelector(".hangouts-wrapper")
          .classList.add("discoveriesOptionOpen");

        document
          .querySelector(".hangoutsDropdown")
          .classList.add("hangoutsDropdownOpen");

          markerGroup2.addTo(map);
          markerGroup3.removeFrom(map);
      }
    });
  });
});

// Add a click event listener to the dropdown button to toggle the dropdown menu
dropdownButton.addEventListener("click", () => {
  dropdownMenu.classList.toggle("show");
});

// Add a click event listener to the document to close the dropdown menu if it's open and the user clicks outside the dropdown menu
document.addEventListener("click", (event) => {
  if (!event.target.matches(".dropdown-button")) {
    const dropdowns = document.querySelectorAll(".dropdown-menu");
    dropdowns.forEach((dropdown) => {
      if (dropdown.classList.contains("show")) {
        dropdown.classList.remove("show");
      }
    });
  }
});

// Get all parent-div elements
const parentDivs = document.querySelectorAll(".parent-div");

// Attach a click event listener to each parent-div
parentDivs.forEach((parentDiv) => {
  // Get the header and child elements of the parent-div
  const header = parentDiv.querySelector(".parent-div-header");
  const children = parentDiv.querySelectorAll(".child-div, .floor-dropdown");
  const allFloorDivs = document.querySelectorAll(`.building-floor-options`);

  children.forEach((child) => {
    if (!child.classList.contains("parent-div-header")) {
      child.style.transition = "all 0.5s ease - out";
      child.classList.remove("sibling-open");
    }
  });

  headerClicked(parentDiv, header, children, allFloorDivs);

  //START HERE FOR UMAK STADIUMMM

  const umakStadium = document.getElementById("building-stadium");
  const umakStadiumFacility = document.getElementById("stadium-1f-1");

  umakStadium.addEventListener("click", () => {
    document.querySelectorAll(".facility").forEach((d) => {
      d.classList.remove("facility-expanded");
    });
    umakStadiumFacility.classList.add("facility-expanded");

    facilityBackButton.classList.add("back-button-show");

    document.querySelectorAll(".facility-header h1").forEach((d) => {
      d.style.fontSize = "30px";
      d.style.width = "100%";
    });

    hideSiblings.forEach(function (element) {
      if (element.style.display != "none") {
        element.classList.add("removeDiv");
      }
    });

    parentDivs.forEach(function (parent) {
      parent.classList.add("removeDiv");
    });
    umakStadium.classList.remove("removeDiv");

    facilityMarginTop.forEach(function (element) {
      element.classList.add("removeDivMargin");
    });

    facilityBackButton.addEventListener("click", () => {
      facilityBackButton.classList.remove("back-button-show");

      document.querySelectorAll(".facility-header h1").forEach((d) => {
        d.style.fontSize = "20px";
      });

      parentDivs.forEach((div) => {
        if (div.classList.contains("removeDiv")) {
          div.classList.remove("removeDiv");
        }
      });

      document.querySelectorAll(".facility").forEach((d) => {
        if (d.classList.contains("facility-expanded")) {
          d.classList.remove("facility-expanded");
        }
      });

      hideSiblings.forEach(function (element) {
        element.classList.remove("removeDiv");
      });

      facilityMarginTop.forEach(function (element) {
        element.classList.remove("removeDivMargin");
      });

      parentDivs.forEach((parent) => {
        header.classList.remove("header-open");
        allFloorDivs.forEach((floor) => {
          floor.classList.remove("expanded");
        });
      });

      children.forEach((child) => {
        child.classList.remove("sibling-open");
      });
    });
  });
});

//FLOOR-DROPDOWN BUTTON

// Get all dropdown buttons
const dropdownButtons = document.querySelectorAll(".admin-dropdown-button");
const dropdownPEl = document.querySelector(".admin-dropdown-button p");

adminDropdownButtonClicked();

////SHOW FLOORSSSSS
// Get the admin dropdown menu and floor facilities div
const hideSiblings = document.querySelectorAll(
  ".parent-div-header, .child-div, .floor-dropdown"
);
const facilityMarginTop = document.querySelectorAll(
  ".facility-header, .floor-dropdown"
);
const facilityBackButton = document.querySelector(".back-button");

facilityClicked();

////FUNCTION HEADER

function headerClicked(parentDiv, header, children, allFloorDivs) {
  // Attach a click event listener to the header
  header.addEventListener("click", () => {
    if (!parentDiv.classList.contains("open")) {
      document.querySelectorAll(".parent-div-header").forEach((head) => {
        head.classList.remove("header-open");
      });
      header.classList.add("header-open");
    }

    // Close all other open parent-div elements
    parentDivs.forEach((div) => {
      document.querySelectorAll(".admin-floor-options").forEach((d) => {
        parentDivs.forEach((div) => {
          d.classList.remove("expanded");
        });
      });

      if (div !== parentDiv) {
        div.classList.remove("open");
        header.classList.remove("header-open");
        div.querySelectorAll(".child-div, .floor-dropdown").forEach((el) => {
          el.classList.remove("sibling-open");
        });
      }
    });

    // Toggle the visibility of the child elements of the clicked parent-div
    parentDiv.classList.toggle("open");

    children.forEach((child) => {
      if (!child.classList.contains("parent-div-header")) {
        if (
          parentDiv.classList.contains("open") ||
          parentDiv.classList.contains("mapOpen")
        ) {
          child.classList.add("sibling-open");
          header.classList.add("header-open");
        } else {
          child.classList.remove("sibling-open");
          header.classList.remove("header-open");
        }

        parentDivs.forEach((parent) => {
          if (parent.classList.contains("open")) {
            allFloorDivs.forEach((floor) => {
              floor.classList.add("expanded");
            });
          } else {
            allFloorDivs.forEach((floor) => {
              floor.classList.remove("expanded");
            });
          }
        });
      }
    });

    ////HERE
    adminDropdownItemsClicked(allFloorDivs);
  });
}

function adminDropdownItemsClicked(allFloorDivs) {
  const dropdownItems = document.querySelectorAll(".floor-dropdown-item");

  parentDivs.forEach((parent) => {
    dropdownItems.forEach((item) => {
      item.addEventListener("click", () => {
        const index = item.id.split("-").pop();
        const buildingId = item.parentNode.parentNode.parentNode.id;
        const parentDiv = item.closest(".parent-div");
        const floorDiv = parentDiv.querySelector(
          `.building-floor-options:nth-child(${index})`
        );
        const floorDivId = floorDiv.classList;

        const dropdownMenu = parent.querySelectorAll(".admin-dropdown-menu");

        parentDivs.forEach((parent) => {
          dropdownMenu.forEach((menu) => {
            if (!menu.classList.contains("admin-show")) {
              menu.classList.toggle("admin-show-dropdown");
              menu.classList.toggle("admin-show");
            }
          });

          allFloorDivs.forEach((floor) => {
            floor.classList.remove("expanded");
          });
          floorDivId.add("expanded");
        });
      });
    });
  });
}

function adminDropdownButtonClicked() {
  // Add a click event listener to each dropdown button
  dropdownButtons.forEach((button) => {
    const dropdownMenu = button.nextElementSibling;
    const dropdownItems = dropdownMenu.querySelectorAll(".admin-dropdown-item");

    // Add a click event listener to each list item
    dropdownItems.forEach((item) => {
      item.addEventListener("click", () => {
        // Move the clicked item to the top of the dropdown menu
        dropdownMenu.insertBefore(item, dropdownMenu.firstChild);
        // Update the dropdown button text to show the selected option
        dropdownPEl.textContent = item.textContent;
      });
    });

    // Add a click event listener to the dropdown button to toggle the dropdown menu
    button.addEventListener("click", (event) => {
      event.stopPropagation();
      dropdownMenu.classList.toggle("admin-show");
    });
  });

  // Add a click event listener to the document to close the dropdown menu if it's open and the user clicks outside the dropdown menu
  document.addEventListener("click", (event) => {
    const dropdowns = document.querySelectorAll(".admin-dropdown-menu");
    dropdowns.forEach((dropdown) => {
      if (dropdown.classList.contains("admin-show")) {
        dropdown.classList.remove("admin-show");
      }
    });
  });
}

function facilityClicked() {
  // Attach click event listeners to each facility option
  document.querySelectorAll(".facility").forEach((d) => {
    const facilityId = d.getAttribute("id");
    if (facilityId) {
      //INDIVIDUAL FACILITY
      const facilityOption = document.querySelector(`#${facilityId}`);
      //IF FACILITY IS CLICKED
      if (facilityOption) {
        //OTHER FACILITY SIBLING WILL CLOSE
        facilityOption.addEventListener("click", () => {
          document.querySelectorAll(".facility").forEach((d) => {
            d.classList.remove("facility-expanded");
            d.style.display = "none";
          });
          //THIS FACILITY WILL BE THE ONLY TO EXPAND
          facilityOption.classList.add("facility-expanded");
          facilityBackButton.classList.add("back-button-show");

          document.querySelectorAll(".facility-header h1").forEach((d) => {
            d.style.fontSize = "30px";
            d.style.width = "100%";
          });

          //GRANDPARENT OF THE FACILITY
          const ancestor = facilityOption.closest(".parent-div");

          //HIDE OTHER PARENT-DIV
          for (let i = 0; i < parentDivs.length; i++) {
            if (parentDivs[i] !== ancestor) {
              parentDivs[i].classList.add("removeDiv");
            }
          }

          //HIDE PARENT-DIV-HEADER

          hideSiblings.forEach(function (element) {
            if (element.style.display != "none") {
              element.classList.add("removeDiv");
            }
          });

          //STYLEEEEE
          //ADJUST MARGIN-TOP OF THE FACILITY

          facilityMarginTop.forEach(function (element) {
            element.classList.add("removeDivMargin");
          });
        });

        ////SHOW AGAINNNNNN
        facilityBackButton.addEventListener("click", () => {
          facilityBackButton.classList.remove("back-button-show");

          document.querySelectorAll(".facility-header h1").forEach((d) => {
            d.style.fontSize = "20px";
          });

          parentDivs.forEach((div) => {
            if (div.classList.contains("removeDiv")) {
              div.classList.remove("removeDiv");
            }
          });

          document.querySelectorAll(".facility").forEach((d) => {
            if (d.classList.contains("facility-expanded")) {
              d.classList.remove("facility-expanded");
            }
            d.style.display = "block";
          });

          hideSiblings.forEach(function (element) {
            if (element.style.display != "none") {
              element.classList.remove("removeDiv");
            }
          });

          facilityMarginTop.forEach(function (element) {
            element.classList.remove("removeDivMargin");
          });
        });

        //ENDDDD SHOW AGAIN
      }
    }
  });
}

//MAIN MENUUUUUU
// Get the dropdown button, menu and its list items
const hangoutsdropdownButton = document.querySelector(".hangoutsDropdown");

const hangoutsdropdownButtonIcon = hangoutsdropdownButton.querySelector(
  ".discoveries-dropdown-icon img"
);
const hangoutsdropdownButtonText = hangoutsdropdownButton.querySelector(" p");
const hangoutsdropdownMenu = document.querySelector(
  ".hangoutsDropdown .dropdown-menu"
);
const hangoutsdropdownItems = hangoutsdropdownMenu.querySelectorAll(
  ".hangoutsDropdown .dropdown-item"
);
const hangoutsmainOption = hangoutsdropdownMenu.querySelectorAll(
  ".hangoutsDropdown .dropdown-item"
);

// Add a click event listener to each list item
hangoutsdropdownItems.forEach((item) => {
  item.addEventListener("click", () => {
    // Move the clicked item to the top of the dropdown menu
    hangoutsdropdownMenu.insertBefore(item, hangoutsdropdownMenu.firstChild);
    // Update the dropdown button text to show the selected option
    hangoutsdropdownButtonText.textContent = item.textContent;
    const imgSrc = item.querySelector("img").src;
    hangoutsdropdownButtonIcon.src = imgSrc;

    var id = item.getAttribute("id");
    window.location.href = "?filter=" + id;
  });
  const hangoutsOption = document.getElementById("hangouts-option");
  hangoutsOption.click();
});

const urlParams = new URLSearchParams(window.location.search);
const option = urlParams.get("filter");

hangoutsdropdownItems.forEach((item) => {
  if (option === item.id) {
    console.log(option);
    hangoutsdropdownButtonText.textContent = item.textContent;
    const imgSrc = item.querySelector("img").src;
    hangoutsdropdownButtonIcon.src = imgSrc;
  }
});

// Add a click event listener to the dropdown button to toggle the dropdown menu
hangoutsdropdownButton.addEventListener("click", () => {
  hangoutsdropdownMenu.classList.toggle("show");
});

// Add a click event listener to the document to close the dropdown menu if it's open and the user clicks outside the dropdown menu
document.addEventListener("click", (event) => {
  if (!event.target.matches(".dropdown-button")) {
    const dropdowns = document.querySelectorAll(".dropdown-menu");
    dropdowns.forEach((dropdown) => {
      if (dropdown.classList.contains("show")) {
        dropdown.classList.remove("show");
      }
    });
  }
});
