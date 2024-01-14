// Initialize the map
var map = L.map("map").setView([14.563476705678243, 121.05690771252787], 18);

// Add a tile layer (OpenStreetMap)
L.tileLayer(
  "https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}",
  {
    attribution: 'Map data © <a href="https://www.esri.com">Esri</a>',
  }
).addTo(map);

// Create markers for each location
const locations = [
  {
    Id: "building-admin",
    name: "ADMIN",
    lat: 14.562967859892698,
    lng: 121.05607836411521,
  },
  {
    Id: "building-ab1",
    name: "B1",
    lat: 14.562787066308347,
    lng: 121.05641541397485,
  },
  {
    Id: "building-ab2",
    name: "B2",
    lat: 14.563917677460271,
    lng: 121.05574051679726,
  },
  {
    Id: "building-ab3",
    name: "B3",
    lat: 14.563165235291997,
    lng: 121.05563321614908,
  },
  {
    Id: "building-stadium",
    name: "STADIUM",
    lat: 14.56391578023674,
    lng: 121.05610309240225,
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
      iconSize: [32, 32],
      iconAnchor: [16, 32],
      popupAnchor: [0, -32],
    }),
  });

  marker.bindTooltip(location.name, {
    permanent: true,
    direction: "center",
    offset: L.point(0, -50),
    className: "label-container",
  });

  // Add click event listener to marker
  marker.addEventListener("click", () => {
    //Open Directory Option
    const directoryOption = document.getElementById("directory-option");
    directoryOption.click();

    // Toggle visibility of parent divs with different ids
    const parentDivs = document.querySelectorAll(".parent-div");

    const parentMarker = document.getElementById(`${location.Id}`);

    const parentID = parentMarker.id;

    console.log(parentID);

    parentDivs.forEach((div) => {
      const id = div.getAttribute("id");
      if (id === location.Id) {
        div.classList.toggle("mapOpen");
      } else {
        div.classList.remove("mapOpen");
        div.classList.toggle("mapRemove");
      }
    });

    // Hide all markers except the clicked one
    markers.forEach((m) => {
      if (m !== marker) {
        map.removeLayer(m);
      }
    });

    // Zoom to the clicked marker
    map.setView([location.lat, location.lng], 20);

    // Show all markers again if the clicked marker is clicked again
    if (marker.active) {
      markers.forEach((m) => {
        map.addLayer(m);
        m.active = false;
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

        markerGroup.addTo(map);
      }
      if (item.id === "directory-option") {
        //Close any open parent div
        parentDivs.forEach((parentDiv) => {
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

        markerGroup.addTo(map);
      }
      if (item.id === "hangouts-option") {
        option.classList.add("discoveriesOptionRemove");
        option.classList.remove("discoveriesOptionOpen");
        document
          .querySelector(".hangouts-wrapper")
          .classList.remove("discoveriesOptionRemove");
        document
          .querySelector(".hangouts-wrapper")
          .classList.add("discoveriesOptionOpen");

        map.removeLayer(markerGroup);
        map.setView([14.563476705678243, 121.05690771252787], 18);
      }
    });

    console.log(dropdownButtonText.textContent);
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
          if (
            parent.classList.contains("open") ||
            parentDiv.classList.contains("mapOpen")
          ) {
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
          parentDivs.forEach((parent) => {
            allFloorDivs.forEach((floor) => {
              floor.classList.remove("expanded");
            });
            floorDivId.add("expanded");
          });
        });
      });
    });
  });

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

////SHOW FLOORSSSSS
// Get the admin dropdown menu and floor facilities div
const hideSiblings = document.querySelectorAll(
  ".parent-div-header, .child-div, .floor-dropdown"
);
const facilityMarginTop = document.querySelectorAll(
  ".facility-header, .floor-dropdown"
);
const facilityBackButton = document.querySelector(".back-button");

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
