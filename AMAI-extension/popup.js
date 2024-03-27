const ele = document.getElementById("btn", "timer")
ele.addEventListener("click", () => {
    chrome.runtime.sendMessage({ time: "timer" }, function (response) {
        console.log(response);
    });
});


