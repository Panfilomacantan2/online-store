//fetching and count the rows of notification in mysql

const loadNotification = () => {
  setInterval(() => {
    let xhr = new XMLHttpRequest();

    xhr.open("GET", "notification.php", true);

    xhr.onload = () => {
      if (xhr.status === 200 && xhr.readyState === 4) {
        const notifications = document.querySelector("#notification_count");
        notifications.innerText = xhr.responseText;
      }
    };

    xhr.send();
  }, 100);
};

loadNotification();
