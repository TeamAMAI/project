let name = "Moon"
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
                title: "Look Away",
                message: "Touch some grass :)",
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

        sendResponse(() => {
            return false
        });
    }
);

function createAlarm() {
    chrome.alarms.create(
        "alarm",
        {
            delayInMinutes: 1,
            periodInMinutes: 1
        }
    );
}