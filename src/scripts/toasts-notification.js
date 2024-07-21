const toasts = [
  {
    name: "Satria Walin",
    city: "Papua",
    message: "Telah membeli",
    product: "Nutriflakes Paket 2 Box 190.000",
    time: "1 jam yang lalu",
  },
  {
    name: "Nur Flakes",
    city: "Surabaya",
    message: "Telah membeli",
    product: "Nutriflakes Paket 3 Box 276.000",
    time: "30 menit yang lalu",
  },
  {
    name: "Ananda",
    city: "Bandung",
    message: "Telah membeli",
    product: "Nutriflakes Paket 1 Box 95.000",
    time: "10 menit yang lalu",
  },
  {
    name: "Muhammad",
    city: "Purworejo",
    message: "Telah membeli",
    product: "Nutriflakes Paket 2 Box 190.000",
    time: "2 jam yang lalu",
  },
  {
    name: "Mandira",
    city: "Gorontalo",
    message: "Telah membeli",
    product: "Nutriflakes Paket 2 Box 190.000",
    time: "45 menit yang lalu",
  },
  {
    name: "Tomy",
    city: "Batam",
    message: "Telah membeli",
    product: "Nutriflakes Paket 3 Box 275.000",
    time: "1 jam 27 menit yang lalu",
  },
];

function showToast() {
  const toastContainer = document.getElementById("toast-container");

  const randomToast = toasts[Math.floor(Math.random() * toasts.length)];

  const toastElement = document.createElement("div");
  toastElement.className = "toast";
  toastElement.setAttribute("role", "alert");
  toastElement.setAttribute("aria-live", "assertive");
  toastElement.setAttribute("aria-atomic", "true");

  toastElement.innerHTML = `
            <div class="toast-body">
            <div class="row">
                <div class="col-4">
                    <img src="src/assets/toast-notification.webp">
                </div>
                <div class="col">
                    <button type="button" class="btn-close position-absolute top-0 end-0 p-2" data-bs-dismiss="toast" aria-label="Close"></button>
                    <p class="m-0 fw-medium">${randomToast.name}</p>
                    <p class="m-0 fw-medium">${randomToast.city}</p>
                    <p class="m-0 fw-medium">${randomToast.message} <span class="text-danger fw-bold">${randomToast.product}</span></p>
                    <p class="m-0 fw-medium">${randomToast.time}</p>
                </div>
            </div>
            </div>`;

  toastContainer.appendChild(toastElement);

  const toast = new bootstrap.Toast(toastElement, {
    delay: 5000, // toast akan otomatic hide/close setekah 4 detik
  });

  toast.show();

  toastElement.addEventListener("hidden.bs.toast", () => {
    toastElement.remove();
  });
}

setInterval(showToast, 7000); // tampilkan toast setiap 6 detik
