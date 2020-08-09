$(document).ready(function () {
  // globally accessible array and table objects
  var enquiryArray = [];
  var table;

  // fetch json result from the api and push values to the global enquiryArray
  fetch("https://jsonplaceholder.typicode.com/users", { cache: "force-cache" })
    .then((response) => response.json())
    .then((json) => {
      json.forEach((item) => {
        enquiryArray.push({
          id: item["id"],
          name: item["name"],
          username: item["username"],
          email: item["email"],
          city: item["address"]["city"],
          zip: item["address"]["zipcode"],
          company: item["company"]["name"],
        });
      });
    })
    .then(() => {
      table = $("#mainView").DataTable({
        data: enquiryArray,
        // Showing only 4 columns in the main table
        // enquiryArray has more fields which will be displayed
        // in table format outside the main table
        columns: [
          { data: "id" },
          { data: "name" },
          { data: "username" },
          { data: "city" },
        ],
        order: ["0", "asc"],
        select: { style: "single" },
        pageLength: 5,
      });
      // display first row of the table in detail table
      // directly using a id number does not work as that
      // id may or may not exist
      var initialid = table.rows(0).data().pluck("id");
      displayUserDetails(initialid[0]);

      // On Table click Event get the id and display row details
      table.on("select", function (e, dt, type, indexes) {
        if (type === "row") {
          // get the "id"
          var data = table.rows(indexes).data().pluck("id");
          displayUserDetails(data[0]);
        }
      });

      function displayUserDetails(id) {
        fetch("https://jsonplaceholder.typicode.com/users/" + id, {
          cache: "force-cache",
        })
          .then((response) => response.json())
          .then((json) => {
            $("#id").html(json.id);
            $("#name").html(json.name);
            $("#username").html(json.username);
            $("#email").html(json.email);
            $("#city").html(json.address.city);
            $("#zipcode").html(json.address.zipcode);
            $("#company").html(json.company.name);
          });
      }
    })
    .catch((error) => console.log(error));
}); // end document.ready function
