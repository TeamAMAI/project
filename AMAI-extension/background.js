let namee = "Champion!"
let numHours = 2
let song = false
let songLink = ""

chrome.alarms.onAlarm.addListener(
    () => {
        chrome.notifications.create(
        "alarm",
            {
                type: "basic",
                iconUrl: "logo.PNG",
                title: "Look Away " + namee,
                message: "Stretch a little",
                silent: false
            },
            () => { }
        )
    },
)
chrome.runtime.onMessage.addListener(
    function (request, sender, sendResponse) {
        console.log(request);
        if (request.time)
            createAlarm();
    }
);


function createAlarm() {
    chrome.alarms.create(
        "alarm",
        {
            delayInMinutes: "timer",
            periodInMinutes: 1
        }
    );
}