(function(){var i=sessionStorage.getItem("__TAPLOX_CONFIG__"),e=document.getElementsByTagName("html")[0],a={theme:"light",topbar:{color:"light"},menu:{size:"default",color:"light"}},e=document.getElementsByTagName("html")[0],t=Object.assign(JSON.parse(JSON.stringify(a)),{});t.theme=e.getAttribute("data-bs-theme")||a.theme,t.topbar.color=e.getAttribute("data-topbar-color")||a.topbar.color,t.menu.color=e.getAttribute("data-sidebar-color")||a.menu.color,t.menu.size=e.getAttribute("data-sidebar-size")||a.menu.size,window.defaultConfig=JSON.parse(JSON.stringify(t)),i!==null&&(t=JSON.parse(i)),window.config=t,t&&(e.setAttribute("data-bs-theme",t.theme),e.setAttribute("data-topbar-color",t.topbar.color),e.setAttribute("data-sidebar-color",t.menu.color),window.innerWidth<=1140?e.setAttribute("data-sidebar-size","hidden"):e.setAttribute("data-sidebar-size",t.menu.size))})();
