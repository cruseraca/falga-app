(()=>{var o=["others","automation","civil","electrical","instrumentation","mechanical"];$((function(){var c;c=[],o.forEach((function(o){var n=$("#popover-".concat(o)),t=$("#".concat(o)),e=!1,i=new Popover(n[0],t[0],{placement:"bottom",triggerType:"hover"});c.push(i),i.hide(),t.on("click",(function(){e?(e=!1,i.hide()):(e=!0,i.show()),c.forEach((function(o){o!=i&&o.hide()}))}))}))}))})();