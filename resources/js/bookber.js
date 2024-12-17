setTimeout(() => {
    const notification = document.getElementById("notification");
    if (notification) {
        notification.style.transition = "opacity 0.5s ease";
        notification.style.opacity = "0";
        setTimeout(() => notification.remove(), 500);
    }
}, 3000);
