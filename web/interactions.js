window.onload=function(){

    const name = document.getElementById("name"),
          link = document.getElementById("link"),
	  wlink = document.getElementById("wlink");

    function handler() {
      const url = "https://open.lbry.io/";
      link.href=url+encodeURIComponent(name.value.trim());
      link.textContent=name.value.trim();      
    }

    function presskey()
    {
      wlink.style.display="block";
    }
    
    name.addEventListener("input", handler);
    name.addEventListener("input", presskey);
    
    handler();
}