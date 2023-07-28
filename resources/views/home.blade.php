<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style-home-page.css') }}">
    <title>Booking</title>
</head>

<body>
    <!-- Khung modal -->
    <div class="modal-overlay" id="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeModal()"><i class="ri-close-fill"></i></span>
            @auth
                <h2>{{ Auth::user()->name }}</h2>
                <button data-action="logout">Đăng xuất</button>
                <button data-action="editProfile">Chỉnh sửa profile</button>
            @else
                <a href="/login">Login</a>
                <a href="/register">Register</a>
            @endauth
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const openModalBtn = document.querySelector(".user-icon a");
            const modalOverlay = document.querySelector(".modal-overlay");

            function openModal() {
                modalOverlay.style.display = "flex"; // Hiển thị khung modal
            }

            function closeModal() {
                modalOverlay.style.display = "none"; // Ẩn khung modal
            }

            function logout() {
                fetch('/logout', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                })
                    .then(response => {
                        if (response.ok) {
                            closeModal(); // Đóng khung modal sau khi đăng xuất thành công
                            window.location.href = '/'; // Điều hướng về trang chủ sau khi đăng xuất
                        } else {
                            console.error('Có lỗi xảy ra khi đăng xuất');
                        }
                    })
                    .catch(error => {
                        console.error('Có lỗi xảy ra khi gửi yêu cầu đăng xuất', error);
                    });
            }

            function editProfile() {
                // Add your edit profile logic here
                console.log('Edit profile clicked!');
            }

            openModalBtn.addEventListener("click", openModal);

            // Hide the modal when the page loads if the user is not authenticated
            if (!@json(Auth::check())) {
                closeModal();
            }

            modalOverlay.addEventListener("click", function (event) {
                if (event.target === modalOverlay) {
                    closeModal();
                }
            });

            const logoutBtn = document.querySelector("#modal button[data-action='logout']");
            if (logoutBtn) {
                logoutBtn.addEventListener("click", logout);
            }

            const editProfileBtn = document.querySelector("#modal button[data-action='editProfile']");
            if (editProfileBtn) {
                editProfileBtn.addEventListener("click", editProfile);
            }

            // Listen for logout event and close the modal after successful logout
            window.addEventListener('logout', closeModal);
        });
    </script>

<nav>
    <div class="nav__logo"><a href="/">Booking.Com</a></div>
    <ul class="nav__links">
        <li class="link"><a href="/">Home</a></li>
        <li class="link"><a href="#">Book</a></li>
        @auth
            <li class="user-icon">
                <!-- Hiển thị biểu tượng người dùng chỉ khi đã đăng nhập -->
                <a href="javascript:void(0);"><i class="ri-account-pin-circle-fill"></i></a>
            </li>
        @else
            <li class="link"><a href="/login">Login</a></li>
            <li class="link"><a href="/register">Register</a></li>
        @endauth
    </ul>
</nav>
    <header class="section__container header__container">
        <div class="header__image__container">
            <div class="header__content">
                <h1>Enjoy Your Dream Vacation</h1>
                <p>Book Hotels, Flights and stay packages at the lowest price.</p>
            </div>
            <div class="booking__container">
                <form>
                    <div class="form__group">
                        <div class="input__group">
                            <input type="text" />
                            <label>Location</label>
                        </div>
                        <p>Where are you going?</p>
                    </div>
                    <div class="form__group">
                        <div class="input__group">
                            <input type="text" />
                            <label>Check In</label>
                        </div>
                        <p>Add date</p>
                    </div>
                    <div class="form__group">
                        <div class="input__group">
                            <input type="text" />
                            <label>Check Out</label>
                        </div>
                        <p>Add date</p>
                    </div>
                    <div class="form__group">
                        <div class="input__group">
                            <input type="text" />
                            <label>Room</label>
                        </div>
                        <p>Room Type</p>
                    </div>
                </form>
                <button class="btn"><i class="ri-search-line"></i></button>
            </div>
        </div>
    </header>

    <section class="section__container products__container">
    <h2 class="section__header">Featured Products</h2>
    <div class="products__grid">
        @foreach($products as $product)
            <div class="product__card">
            <img src="{{ Storage::url($product->image) }}" alt="Product Image" />
                <div class="product__content">
                    <div class="product__card__header">
                        <h4>{{ $product->name }}</h4>
                        <h4>${{ $product->price }}</h4>
                    </div>
                    <p>{{ $product->description }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const productCards = document.querySelectorAll(".product__card");
    const popup = document.createElement("div");
    popup.classList.add("popup");

    function openPopup(imageSrc) {
      popup.innerHTML = `
        <div class="popup-content">
          <span class="popup-close" onclick="closePopup()">&times;</span>
          <img src="${imageSrc}" alt="Product Image" />
        </div>
      `;
      document.body.appendChild(popup);
    }

    function closePopup() {
      popup.remove();
    }

    productCards.forEach((card) => {
      const img = card.querySelector("img");
      img.addEventListener("click", () => {
        openPopup(img.src);
      });
    });
  });
</script>

    <section class="client">
        <div class="section__container client__container">
            <h2 class="section__header">What our client say</h2>
            <div class="client__grid">
                <div class="client__card">
                    <img src="assets/client-1.jpg" alt="client" />
                    <p>
                        The booking process was seamless, and the confirmation was
                        instant. I highly recommend WDM&amp;Co for hassle-free hotel bookings.
                    </p>
                </div>
                <!-- ... Các phần tử client cards khác ... -->
            </div>
        </div>
    </section>

    <section class="section__container">
        <div class="reward__container">
            <p>100+ discount codes</p>
            <h4>Join rewards and discover amazing discounts on your booking</h4>
            <button class="reward__btn">Join Rewards</button>
        </div>
    </section>

    <footer class="footer">
        <div class="section__container footer__container">
            <div class="footer__col">
                <h3>WDM&amp;Co</h3>
                <p>
                    WDM&amp;Co is a premier hotel booking website that offers a seamless and
                    convenient way to find and book accommodations worldwide.
                </p>
                <p>
                    With a user-friendly interface and a vast selection of hotels,
                    WDM&amp;Co aims to provide a stress-free experience for travelers
                    seeking the perfect stay.
                </p>
            </div>
            <div class="footer__col">
                <h4>Company</h4>
                <p>About Us</p>
                <p>Our Team</p>
                <p>Blog</p>
                <p>Book</p>
                <p>Contact Us</p>
            </div>
            <!-- ...foote ... -->
        </div>
        <div class="footer__bar">
            Copyright © 2023 Web Design Mastery. All rights reserved.
        </div>
    </footer>
</body>

</html>
