    const name = document.getElementById("name"),
          link = document.getElementById("link");

    function handler() {
      const url = "https://open.lbry.io/" + encodeURIComponent(name.value.trim());
      link.href=url;
      link.textContent=url;
    }

    name.addEventListener("input", handler);
    handler();