window.onload = function () {
  const name = document.getElementById("name");
  const link = document.getElementById("link");
  const wlink = document.getElementById("wlink");

  function handler() {
    const url = "https://open.lbry.io/";

    link.href = url + encodeURIComponent(name.value.trim());
    link.textContent = name.value.trim();

    if (name.value.length > 0) wlink.style.display = "block";
    else wlink.style.display = "none";
  }

  name.addEventListener("input", handler);
  handler();
}
