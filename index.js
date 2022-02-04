document.querySelector("#nav_search").addEventListener("click", (e) => {
  e.preventDefault();
  const navSearchInput = document
    .querySelector("#nav_search_input")
    .value.trim()
    .toLowerCase();
  const row = document.querySelectorAll(".row p");

  if (!navSearchInput) return;

  //getting the value of the search input for products or orders
  row.forEach((p) => {
    if (p.innerText.toLowerCase().indexOf(navSearchInput) > -1) {
      p.parentElement.classList.add("d-flex");

      p.parentElement.classList.remove("d-none");

      // p.parentElement.style.backgroundColor = "blue";
      console.log(true);
    } else {
      // p.parentElement.style.backgroundColor = "red";
      p.parentElement.classList.add("d-none");
      p.parentElement.classList.remove("d-flex");

      console.log(false);
    }
  });

  console.log(navSearchInput);
});

//this is for the tooltip function INDEX.PHP
tippy("#login", {
  // default
  placement: "bottom",
  content: "Logout",
});
tippy("#cart", {
  // default
  placement: "bottom",
  content: "Cart",
});

tippy("#notification", {
  // default
  placement: "bottom",
  content: "Notification",
});
tippy("#account", {
  // default
  placement: "bottom",
  content: "Account",
});
