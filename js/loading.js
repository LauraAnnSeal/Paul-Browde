
let hasLoaded = false;
setTimeout(() => {
    hasLoaded = true;
    if(document.readyState === "complete") {
        document.querySelector("#loading-screen").style.display = "none";
        document.querySelector("body").style.visibility = "visible";
    }
}, 500);
    
    
    
    document.onreadystatechange = function() {
        if (document.readyState !== "complete") {
            if(sessionStorage.getItem('visited') && !page === 'Home'){
                document.querySelector("body").style.visibility = "hidden";
                document.querySelector("#loading-screen").style.visibility = "visible";
            }
        } else if(document.readyState === "complete"  && hasLoaded) {
            document.querySelector("#loading-screen").style.display = "none";
            document.querySelector("body").style.visibility = "visible";
        }
    };

