var notifyBoxBtn = document.getElementsByClassName('button-notification-box');
var notificationContentSection = document.getElementById('notification-content-section');
var isNotificatonBoxVisible = false;

function openAndCloseNotificationBox() {
    if (isNotificatonBoxVisible == false) {
        notifyBoxBtn[0].childNodes[0].disabled = true;
        notifyBoxBtn[0].childNodes[0].style.cursor = 'default';
        notifyBoxBtn[0].childNodes[0].style.opacity = '0.5';
        notificationContentSection.style.animationPlayState = 'running';
        window.setTimeout(function() {
            notificationContentSection.style.animationName = 'closeNotifyCenter';
            notificationContentSection.style.animationPlayState = 'paused';
            notifyBoxBtn[1].style.animationPlayState = 'running';
            window.setTimeout(function() {
                notifyBoxBtn[1].style.animationName = 'hideNotifyCloseBtn';
                notifyBoxBtn[1].style.animationPlayState = 'paused';
                isNotificatonBoxVisible = true;
            }, 250);
        }, 1000);
    } else {
        notifyBoxBtn[1].style.animationPlayState = 'running';
        notifyBoxBtn[1].disabled = true;
        window.setTimeout(function() {
            notifyBoxBtn[1].style.animationName = 'visibleNotifyCloseBtn';
            notifyBoxBtn[1].style.animationPlayState = 'paused';
            notificationContentSection.style.animationPlayState = 'running';
            window.setTimeout(function() {
                notificationContentSection.style.animationName = 'openNotifyCenter';
                notificationContentSection.style.animationPlayState = 'paused';
                notifyBoxBtn[0].childNodes[0].disabled = false;
                notifyBoxBtn[0].childNodes[0].style.cursor = 'pointer';
                notifyBoxBtn[0].childNodes[0].style.opacity = '1.0';
                isNotificatonBoxVisible = false;
            }, 1000);
        }, 250);
    }
}